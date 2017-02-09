<?php

namespace App\Http\Controllers;

use Laracasts\Flash\Flash;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\BuyTicketRequest;
use App\Morelos;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Sale;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;

class PaypalIndexController extends Controller
{
	private $_api_context;

	public function __construct()
	{
		$paypal_conf = config('paypal');
		$this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_conf['client_id'], $paypal_conf['secret']));
		$this->_api_context->setConfig($paypal_conf['settings']);
	}

	public function postPayment(BuyTicketRequest $request)
	{

		$price = 0;
		$cantidad = count($request->asiento);
		switch ($request->zona) {
			case 'Diamante':
				$price = 450;
				break;
			case 'Oro':
				$price = 350;
				break;
			case 'Plata':
				$price = 250;
				break;
		}
		$description = "Zona: ".$request->zona." Fila: ".$request->fila." Asientos:";
		$id = array();
		$sit = array();
		$list = $request->asiento;

		$i = 0;

		foreach ($list as $value) {
			$field = explode('|', $value);
			$id[$i] = $field[0];
			$sit[$i] = $field[1];
			$i++;
		}


		foreach ($sit as $asiento) {
			$description .= ' *'.$asiento;
		}

		//Objeto del pagador
		$payer = new Payer();
		$payer->setPaymentMethod('paypal'); //Método de pago, ver en la documentación mas tipos de pago

		//Se hace un objeto para guardar los items en este caso sólo se hace uno en este caso
		$item = new Item();
		$subtotal = 0;
		$subtotal = $price * $cantidad;		//Subtotal de los items
		$total = $subtotal * 1.10;

		$item->setName('Boleto Mike Salazar')	//Nombre del item
		->setCurrency('MXN')		//Moneda
		->setDescription('Boleto(s) Mike Salazar. '.$description)
		->setQuantity(1)			//Cantidad de items
		->setPrice($subtotal);			//Precio de cada item

		$item_list = new ItemList();	//Objeto de para englobar todos los items
		$item_list->setItems(array($item));

		$details = new Details(); //Detalles agregados por si se quieren cobrar extra por servicios
		$details->setSubtotal($subtotal)
		->setHandlingFee($subtotal * 0.10);

		$amount = new Amount();			//Objeto para guardar el monto
		$amount->setCurrency('MXN')
		->setTotal($total)
		->setDetails($details);

		$transaction = new Transaction();	//Objeto para generar la transacción y pasar los items
		$transaction->setAmount($amount)
		->setItemList($item_list)
		->setDescription('Boleto(s) Mike Salazar. '.$description);

		$redirect_urls = new RedirectUrls();	//Redirección para ver si se completa la compra
		$redirect_urls->setReturnUrl(route('payment.status'))
		->setCancelUrl(route('payment.status'));

		$payment = new Payment();		//Se le pasan los objetos que se crearon anteriormente parade una manera encapsularlos
		$payment->setIntent('Sale')
		->setPayer($payer)
		->setRedirectUrls($redirect_urls)
		->setTransactions(array($transaction));

		//Redirección a la página de paypal para que haga las operaciones necesarias
		try {		
			$payment->create($this->_api_context);
		} catch (\PayPal\Exception\PPConnectionException $ex) {
			if (\config('app.debug')) {
				echo "Exception: " . $ex->getMessage() . PHP_EOL;
				$err_data = json_decode($ex->getData(), true);
				exit;
			} else {
				// Flash::error('Something went wrong, Sorry for inconvenience');
				return redirect()->route('bolematico.detalles')->withErrors('Algo salio mal perdon por el inconveniente');
			}
		}

		//Paypal devolverá cierta información para que se logueé con paypal y generará un enlace
		foreach($payment->getLinks() as $link) {
			if($link->getRel() == 'approval_url') {
				$redirect_url = $link->getHref();
				break;
			}
		}


		//Se añade una variable de sesión para hacer seguimiento de la compra
		$payment_id = $payment->getId();
		Session::put('paypal_payment_id', $payment_id);
		Session::put('asientos_id', $id);

		if(isset($redirect_url)) {
			
			DB::beginTransaction();

			try{

				//Bloqueamos los boletos
				Morelos::whereIn('id', $id)->update(['status' => 1]);

				//Se ejecuta la transaccion y se bloquean los boletos
				DB::commit();

			}catch(\Exception $e) {
				DB::rollBack();
				return redirect()->route('bolematico.detalles')->withErrors('A ocurrido un error db');
			}

			//Redirecciona a ventana de login de paypal para iniciar porceso de compra
			return redirect($redirect_url);
		}
		// Flash::error('Unknown error occurred');
		return redirect()->route('bolematico.detalles')->withErrors('A ocurrido un error');
	}

	public function getPaymentStatus(Request $request)
	{
		//Se obtiene el id del pago antes de la session clear
		$payment_id = Session::get('paypal_payment_id');
		$asientos_id = Session::get('asientos_id');

		//Se hace un session clear
		Session::forget('paypal_payment_id');
		Session::forget('asientos_id');

		//Si no hay alguno de los datos anteriores se redirecciona con un mensaje de error
		//Se detecta el cancel hay que desbloquear los boletos
		if(empty($request->input('PayerID')) || empty($request->input('token'))){

			DB::beginTransaction();

			try{
				
				Morelos::whereIn('id', $asientos_id)->update(['status' => 0]);
				//Se ejecuta la transaccion y se bloquean los boletos
				DB::commit();

			}catch(\Exception $e) {
				DB::rollBack();
				return redirect()->route('bolematico.detalles')->withErrors('A ocurrido un error');
			}

			// Flash::error('Payment Failed');
			return redirect()->route('bolematico.detalles')->withErrors('Proceso de compra cancelado');
		}

		//Se obtiene el id del pago
		$payment = Payment::get($payment_id, $this->_api_context);

		//Se ejecuta el pago con la ID del pagador
		$execution = new PaymentExecution();
		$execution->setPayerId(Input::get('PayerID'));
		$result = $payment->execute($execution, $this->_api_context);

		//Muestra el resultado dependiendo de la respuesta de la ejecución anterior
		if($result->getState() == 'approved'){
			//Se updetea la confirmacion del pago

			$transaction_id = $payment->transactions[0]->related_resources[0]->sale->id;
			$client_id = Auth::user()->id;

			DB::beginTransaction();

			try{
				
				Morelos::whereIn('id', $asientos_id)->update(['confirmacion' => 1, 'user' => $client_id, 'forma_pago' => 'Paypal', 'transaction_id' => $transaction_id]);
				
				$folio = Morelos::max('folio');
				$i = 1;
				
				foreach ($asientos_id as $asiento) {

					Morelos::where('id', $asiento)->update(['folio' => ($folio + $i)]);
					$i++;
				}
				
				//Se ejecuta la transaccion y se bloquean los boletos
				DB::commit();

			}catch(\Exception $e) {
				DB::rollBack();
				return redirect()->route('bolematico.detalles')->withErrors('A ocurrido un error');
			}

			Flash::success('Gracias por su compra');
			return redirect()->route('bolematico.compra');
		}
		// Flash::error('Payment Failed');
		return redirect()->route('bolematico.detalles')->withErrors('Pago fallo');

	}

}

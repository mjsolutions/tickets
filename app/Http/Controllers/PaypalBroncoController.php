<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;
use Session;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\BuyTicketRequest;
use App\Bronco;
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
use Illuminate\Support\Facades\Mail;
use App\Mail\Compra as Compra;

class PaypalBroncoController extends Controller
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
		$zona = $request->zona;
		$cantidad = $request->asiento;
		$description = "Zona: ".$zona." Num. Asientos: ".$cantidad;

		$price = 0;
		$name_desc = ""; //Texto a concatenar en la descripcion del producto
		switch ($zona) {
			case 'General':
				$price = 380;
				$name_desc = "Zona General";
				break;
			case 'Tendido Alto':
				$price = 250;
				$name_desc = "Tendido Alto";
				break;
		}
		
		//Objeto del pagador
		$payer = new Payer();
		$payer->setPaymentMethod('paypal'); //Método de pago, ver en la documentación mas tipos de pago

		//Se hace un objeto para guardar los items en este caso sólo se hace uno en este caso
		$item = new Item();
		// $subtotal = 0;
		$subtotal = $price * $cantidad;		//Subtotal de los items
		$total = $subtotal * 1.10;

		$item->setName('Bronco en Morelia, '.$name_desc)	//Nombre del item
		->setCurrency('MXN')		//Moneda
		->setDescription('Boleto(s) Bronco en Morelia. '.$description)
		->setQuantity($cantidad)			//Cantidad de items
		->setPrice($price);			//Precio de cada item

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
		->setDescription('Boleto(s) Bronco en Morelia. '.$description);

		$redirect_urls = new RedirectUrls();	//Redirección para ver si se completa la compra
		$redirect_urls->setReturnUrl(route('payment.bronco.status'))
		->setCancelUrl(route('payment.bronco.status'));

		$payment = new Payment();		//Se le pasan los objetos que se crearon anteriormente parade una manera encapsularlos
		$payment->setIntent('Sale')
		->setPayer($payer)
		->setRedirectUrls($redirect_urls)
		->setTransactions(array($transaction));

		//Redirección a la página de paypal para que haga las operaciones necesarias
		try {		
			$payment->create($this->_api_context);
		} catch (\PayPal\Exception\PayPalConnectionException $ex) {
			if (\config('app.debug')) {
				echo "Exception: " . $ex->getMessage() . $ex->getData() . PHP_EOL;
                $err_data = json_decode($ex->getData(), true);                
                return redirect('eventos/bronco-morelia')->withErrors('Error: '.$err_data['message']);
			} else {
				// Flash::error('Something went wrong, Sorry for inconvenience');
				return redirect('eventos/bronco-morelia')->withErrors('Algo salio mal perdon por el inconveniente');
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
		Session::put('descripcion', $description);

		Session::put('zona', $zona);
		Session::put('asientos', $cantidad);

		if(isset($redirect_url)) {

			//Interaccion para bloqueo de lugares en la BD no necesaria en este evento

			//Redirecciona a ventana de login de paypal para iniciar porceso de compra
			return redirect($redirect_url);
		}
		// Flash::error('Unknown error occurred');
		return redirect('eventos/bronco-morelia')->withErrors('A ocurrido un error');
	}

	public function getPaymentStatus(Request $request)
	{
		//Se obtiene el id del pago antes de la session clear
		$payment_id = Session::get('paypal_payment_id');
		$descripcion = Session::get('descripcion');
		$seccion = Session::get('zona');
		$asientos = Session::get('asientos');

		//Se hace un session clear
		Session::forget('zona');
		Session::forget('asientos');
		Session::forget('paypal_payment_id');
		Session::forget('descripcion');

		//Si no hay alguno de los datos anteriores se redirecciona con un mensaje de error
		//Se detecta el cancel hay que desbloquear los boletos
		if(empty($request->input('PayerID')) || empty($request->input('token'))){

			// Flash::error('Payment Failed');
			return redirect('eventos/bronco-morelia')->withErrors('Proceso de compra cancelado');
		}

		//Se obtiene el id del pago
		$payment = Payment::get($payment_id, $this->_api_context);

		//Se ejecuta el pago con la ID del pagador
		$execution = new PaymentExecution();
		$execution->setPayerId(Input::get('PayerID'));
		$result = $payment->execute($execution, $this->_api_context);

		//Muestra el resultado dependiendo de la respuesta de la ejecución anterior
		$transaction_state = $result->getState();

		if($transaction_state == 'approved'){
			//Se updetea la confirmacion del pago

			$transaction_id = $payment->transactions[0]->related_resources[0]->sale->id;
			$client_id = Auth::user()->id;
			$buydata = Array();

			DB::beginTransaction();

			try{

				$folio = Bronco::max('folio');

				$buydata['folios'] = "";
				
				$fecha = \Carbon\Carbon::now();

				for ($i = 1; $i <= $asientos; $i++) {

					$new_folio = $folio + $i;

					Bronco::insert(
						['seccion' => $seccion,
						'fila' => 'Sin fila',
						'asiento' => $i,
						'status' => 2,
						'impreso' => 0,
						'forma_pago' => 'Paypal',
						'folio' => $new_folio,
						'transaction_id' => $transaction_id,
						'user' => $client_id,
						'fecha_venta' => $fecha,
						'updated_at' => $fecha
						]);
					
					$buydata['folios'] .= " *".$new_folio;

				}

								
				//Se ejecuta la transaccion y se bloquean los boletos
				DB::commit();

			}catch(\Exception $e) {
				DB::rollBack();
				return redirect('eventos/bronco-morelia')->withErrors('A ocurrido un error insert '.$e->getMessage());
			}

			
			$buydata['evento'] = "Bronco en Morelia";
			// $buydata['img'] = "img/franco-morelia.jpg";
			$buydata['lugar'] = "Plaza Monumental de Morelia";
			$buydata['fecha'] = "15 de Diciembre";
			$buydata['hr'] = "21:00 hrs.";
			$buydata['descripcion'] = $descripcion;
			$buydata['transaccion'] = $transaction_id;
			$buydata['user'] = Auth::user()->name.' '.Auth::user()->last_name.' '.Auth::user()->second_lname;
			$buydata['email'] = Auth::user()->email;

			Mail::to(Auth::user()->email, Auth::user()->name)
			->send(new Compra($buydata));

			// Flash::success('Gracias por su compra');
			return redirect()->route('eventos.compra');
		}else{

			DB::beginTransaction();

			try{

				$fecha = \Carbon\Carbon::now();

				Bronco::insert(
					['seccion' => $seccion,
					'fila' => 'Sin fila',
					'asiento' => $asientos,
					'status' => 2,
					'impreso' => null,
					'forma_pago' => 'Paypal',
					'folio' => null,
					'transaction_id' => $transaction_state,
					'user' => $client_id,
					'fecha_venta' => $fecha]);
				
				//Se ejecuta la transaccion y se bloquean los boletos
				DB::commit();

			}catch(\Exception $e) {
				DB::rollBack();
				return redirect('eventos/bronco-morelia')->withErrors('A ocurrido un error');
			}

			// Flash::error('Payment Failed');
			return redirect('eventos/bronco-morelia')->withErrors('Pago fallo');
		}

	}
}

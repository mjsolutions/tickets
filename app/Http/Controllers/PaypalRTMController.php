<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;
use Session;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\BuyTicketRequest;
use App\RTM;
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

class PaypalRTMController extends Controller
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
		$cantidad = 0;
		$description = "";

		$price = 0;
		switch ($zona) {
			case 'Diamante':
				$price = 1680;
				break;
			case 'Oro':
				$price = 1260;
				break;
			case 'Plata':
				$price = 895;
				break;
			case 'VIP':
				$price = 3150;
				break;
			case 'General':
				$price = 420;
				break;
		}

		if($zona == 'VIP'){

			$cantidad = 1;
			$periquera = $request->fila;
			$description = "Zona: ".$zona." Periquera: ".$periquera;

		}elseif($zona == 'General'){

			$cantidad = $request->asiento;
			$description = "Zona: ".$zona." Asientos: ".$cantidad;

		}else{

			$cantidad = count($request->asiento);
			$description = "Zona: ".$zona." Fila: ".$request->fila." Asientos:";

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

		}
		
		//Objeto del pagador
		$payer = new Payer();
		$payer->setPaymentMethod('paypal'); //Método de pago, ver en la documentación mas tipos de pago

		//Se hace un objeto para guardar los items en este caso sólo se hace uno en este caso
		$item = new Item();
		$subtotal = 0;
		$subtotal = $price * $cantidad;		//Subtotal de los items
		$total = $subtotal * 1.10;

		$item->setName('Roberto Tapia y Marisela, 26 de agosto ')	//Nombre del item
		->setCurrency('MXN')		//Moneda
		->setDescription('Boleto(s) Roberto Tapia y Marisela. '.$description)
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
		->setDescription('Boleto(s) Roberto Tapia y Marisela. '.$description);

		$redirect_urls = new RedirectUrls();	//Redirección para ver si se completa la compra
		$redirect_urls->setReturnUrl(route('payment.rtm.status'))
		->setCancelUrl(route('payment.rtm.status'));

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
                return redirect('eventos/marisela-roberto-tapia-morelia')->withErrors('Error: '.$err_data['message']);
			} else {
				// Flash::error('Something went wrong, Sorry for inconvenience');
				return redirect('eventos/marisela-roberto-tapia-morelia')->withErrors('Algo salio mal perdon por el inconveniente');
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

		if($zona == 'VIP'){

			Session::put('type', 'VIP');
			Session::put('periquera', $periquera);
			

		}elseif($zona == 'General'){

			Session::put('type', 'General');
			Session::put('asientos', $cantidad);
			

		}else{

			Session::put('type', 'normal');
			Session::put('asientos_id', $id);
			
		}


		if(isset($redirect_url)) {
			
			DB::beginTransaction();

			try{

				if($zona == 'VIP'){

					//Corroborar que siguen disponibles los boletos
					$asientos = RTM::where([
						['fila', '=', $periquera],
						['status', '<>', 0]
						])->get();


					if($asientos->count() > 0){
						return redirect('eventos/marisela-roberto-tapia-morelia')->withErrors('Lo sentimos los boletos ya no estan disponibles');
					}

					//Bloqueamos los boletos
					RTM::where('fila', $periquera)->update(['status' => 1, 'user' => Auth::user()->id]);
					

				}elseif($zona != 'General'){

					//Corroborar que siguen disponibles los boletos
					$asientos = RTM::whereIn('id', $id)->where('status', '<>', 0)->get();
					if($asientos->count() > 0){
						return redirect('eventos/marisela-roberto-tapia-morelia')->withErrors('Lo sentimos los boletos ya no estan disponibles');
					}

					//Bloqueamos los boletos
					RTM::whereIn('id', $id)->update(['status' => 1, 'user' => Auth::user()->id]);
					
				}

				
				//Se ejecuta la transaccion y se bloquean los boletos
				DB::commit();

			}catch(\Exception $e) {
				DB::rollBack();
				return redirect('eventos/marisela-roberto-tapia-morelia')->withErrors('A ocurrido un error db');
			}

			//Redirecciona a ventana de login de paypal para iniciar porceso de compra
			return redirect($redirect_url);
		}
		// Flash::error('Unknown error occurred');
		return redirect('eventos/marisela-roberto-tapia-morelia')->withErrors('A ocurrido un error');
	}

	public function getPaymentStatus(Request $request)
	{
		//Se obtiene el id del pago antes de la session clear
		$payment_id = Session::get('paypal_payment_id');
		$descripcion = Session::get('descripcion');
		$zona = Session::get('type');

		if($zona == 'VIP'){

			$periquera = Session::get('periquera');
			Session::forget('periquera');

		}elseif($zona == 'General'){

			$asientos = Session::get('asientos');
			Session::forget('asientos');			

		}else{

			$asientos_id = Session::get('asientos_id');
			Session::forget('asientos_id');		
			
		}

		//Se hace un session clear
		Session::forget('paypal_payment_id');
		Session::forget('descripcion');

		//Si no hay alguno de los datos anteriores se redirecciona con un mensaje de error
		//Se detecta el cancel hay que desbloquear los boletos
		if(empty($request->input('PayerID')) || empty($request->input('token'))){

			DB::beginTransaction();

			try{

				if($zona == 'VIP'){

					RTM::where('fila', $periquera)->update(['status' => 0, 'user' => NULL]);			

				}elseif($zona != 'General'){

					RTM::whereIn('id', $asientos_id)->update(['status' => 0, 'user' => NULL]);			
					
				}
				
				//Se ejecuta la transaccion y se desbloquean los boletos
				DB::commit();

			}catch(\Exception $e) {
				DB::rollBack();
				return redirect('eventos/marisela-roberto-tapia-morelia')->withErrors('A ocurrido un error');
			}

			// Flash::error('Payment Failed');
			return redirect('eventos/marisela-roberto-tapia-morelia')->withErrors('Proceso de compra cancelado');
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

				$folio = RTM::max('folio');

				if($zona == 'VIP'){

					RTM::where('fila', $periquera)->update(['status' => 2, 'user' => $client_id, 'forma_pago' => 'Paypal', 'transaction_id' => $transaction_id]);

					$ids = RTM::where('fila', $periquera)->get();

					$i = 1;
					$buydata['folios'] = "";
					
					foreach ($ids as $asiento) {

						RTM::where('id', $asiento->id)->update(['folio' => ($folio + $i)]);
						$buydata['folios'] .= " *".($folio + $i);
						$i++;
					}

				}elseif($zona == 'General'){

						RTM::insert(
							['seccion' => 'General',
							'fila' => 'Sin fila',
							'asiento' => $asientos,
							'status' => 2,
							'impreso' => null,
							'forma_pago' => 'Paypal',
							'folio' => null,
							'transaction_id' => $transaction_id,
							'user' => $client_id,
							'created_at' => \Carbon\Carbon::now(),
							'updated_at' => \Carbon\Carbon::now()
							]);

				}else{

					RTM::whereIn('id', $asientos_id)->update(['status' => 2, 'user' => $client_id, 'forma_pago' => 'Paypal', 'transaction_id' => $transaction_id]);			
					
					$i = 1;
					$buydata['folios'] = "";
					
					foreach ($asientos_id as $asiento) {

						RTM::where('id', $asiento)->update(['folio' => ($folio + $i)]);
						$buydata['folios'] .= " *".($folio + $i);
						$i++;
					}

				}
								
				//Se ejecuta la transaccion y se bloquean los boletos
				DB::commit();

			}catch(\Exception $e) {
				DB::rollBack();
				return redirect('eventos/marisela-roberto-tapia-morelia')->withErrors('A ocurrido un error');
			}

			
			$buydata['evento'] = "Roberto Tapia y Marisela";
			// $buydata['img'] = "img/franco-morelia.jpg";
			$buydata['lugar'] = "Palacio del Arte";
			$buydata['fecha'] = "26 de Agosto";
			$buydata['hr'] = "9:00 pm";
			$buydata['descripcion'] = $descripcion;
			$buydata['transaccion'] = $transaction_id;
			$buydata['user'] = Auth::user()->name;
			$buydata['email'] = Auth::user()->email;

			// Mail::to(Auth::user()->email, Auth::user()->name)
			// ->send(new Compra($buydata));

			// Flash::success('Gracias por su compra');
			return redirect()->route('eventos.compra');
		}else{

			DB::beginTransaction();

			try{

				if($zona == 'VIP'){

					RTM::where('fila', $periquera)->update(['status' => 2, 'user' => $client_id, 'forma_pago' => 'Paypal', 'transaction_id' => $transaction_state]);


				}elseif($zona == 'General'){

						RTM::insert(
							['seccion' => 'General', 'fila' => 'Sin fila', 'asiento' => $asientos, 'status' => 2, 'impreso' => null, 'forma_pago' => 'Paypal', 'folio' => null, 'transaction_id' => $transaction_state, 'user' => $client_id]
							);		

				}else{

					RTM::whereIn('id', $asientos_id)->update(['status' => 1, 'user' => $client_id, 'forma_pago' => 'Paypal', 'transaction_id' => $transaction_state]);			

				}
				
				//Se ejecuta la transaccion y se bloquean los boletos
				DB::commit();

			}catch(\Exception $e) {
				DB::rollBack();
				return redirect('eventos/marisela-roberto-tapia-morelia')->withErrors('A ocurrido un error');
			}

			// Flash::error('Payment Failed');
			return redirect('eventos/marisela-roberto-tapia-morelia')->withErrors('Pago fallo');
		}

	}
}

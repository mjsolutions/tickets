<?php

namespace App\Http\Controllers;

// use Illuminate\Foundation\Bus\DispatchesCommands;
// use Illuminate\Routing\Controller as BaseController;
// use Illuminate\Foundation\Validation\ValidatesRequests;
use Laracasts\Flash\Flash;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
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

	public function postPayment()
	{
		//Objeto del pagador
		$payer = new Payer();
		$payer->setPaymentMethod('paypal'); //Método de pago, ver en la documentación mas tipos de pago

		//Se hace un objeto para guardar los items en este caso sólo se hace uno en este caso
		$item = new Item();
		$subtotal = 0;

		$item->setName('Item 1')	//Nombre del item
		->setCurrency('MXN')		//Moneda
		->setDescription('Un perrito')
		->setQuantity(2)			//Cantidad de items
		->setPrice('15');			//Precio de cada item
		$subtotal = 30;				//Subtotal de los items, ingresado manualmente


		$item_list = new ItemList();	//Objeto de para englobar todos los items
		$item_list->setItems(array($item));

		$details = new Details(); //Detalles agregados por si se quieren cobrar extra por servicios
		$details->setSubtotal($subtotal)
		->setShipping(100);

		$total = $subtotal + 100;

		$amount = new Amount();			//Objeto para guardar el monto
		$amount->setCurrency('MXN')
		->setTotal($total)
		->setDetails($details);

		$transaction = new Transaction();	//Objeto para generar la transacción y pasar los items
		$transaction->setAmount($amount)
		->setItemList($item_list)
		->setDescription('Boleto comprado alv los morrillos');

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
				Flash::error('Something went wrong, Sorry for inconvenience');
				return redirect()->route('home');
			}
		}
		// try {
		// 	$payment->create($this->_api_context);
		// } catch (PayPal\Exception\PayPalConnectionException $ex) {
		//     echo $ex->getCode(); // Prints the Error Code
		//     echo $ex->getData(); // Prints the detailed error message 
		//     die($ex);
		// } catch (Exception $ex) {
		// 	die($ex);
		// }
		//Paypal devolverá cierta información para que se logueé con paypal y generará un enlace
		foreach($payment->getLinks() as $link) {
			if($link->getRel() == 'approval_url') {
				$redirect_url = $link->getHref();
				break;
			}
		}


		//Se añade una variable de sesión para hacer seguimiento de la compra
		Session::put('paypal_payment_id', $payment->getId());

		if(isset($redirect_url)) {
			//Redirecciona a paypal
			return redirect($redirect_url);
		}
		Flash::error('Unknown error occurred');
		return redirect()->route('home');

	}

	public function getPaymentStatus()
	{
		//Se obtiene el id del pago antes de la session clear
		$payment_id = Session::get('paypal_payment_id');

		//Se hace un session clear
		Session::forget('paypal_payment_id');

		//Si no hay alguno de los datos anteriores se redirecciona con un mensaje de error
		// if(empty($request->input('PayerID')) || empty($request->input('token'))){
		// 	Flash::error('Payment Failed');
		// 	return redirect()->route('home');
		// }

		//Se obtiene el id del pago
		$payment = Payment::get($payment_id, $this->_api_context);

		//Se ejecuta el pago con la ID del pagador
		$execution = new PaymentExecution();
		$execution->setPayerId(Input::get('PayerID'));
		$result = $payment->execute($execution, $this->_api_context);

		//Muestra el resultado dependiendo de la respuesta de la ejecución anterior
		if($result->getState() == 'approved'){
			//Se puede usar esta parte para guardar en la BD
			Flash::success('Payment Successful');
			return redirect()->route('paypal.index');
		}
		Flash::error('Payment Failed');
		return redirect()->route('home');

	}

}

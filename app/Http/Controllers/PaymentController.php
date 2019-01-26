<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BuyTicketRequest;
use Session;
use Illuminate\Support\Facades\Input;
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
use Carbon\Carbon;
use App\Rosana;
use App\Mail\Compra as Compra;
use App\Mail\OrderCreated as OrderCreated;

class PaymentController extends Controller
{

	private $_api_context;
	private $_conekta_conf;

	public function __construct()
	{
		$this->_conekta_conf = config('conekta');
		$paypal_conf = config('paypal');

		$this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_conf['client_id'], $paypal_conf['secret']));
		$this->_api_context->setConfig($paypal_conf['settings']);
	}

	/**
	* See details before accepting purchase
	*/

    public function paymentDetails(Request $req) {
    	return view('detalles-compra', compact('req', 'user'));
    }

    /**
    * Confirm purchase, calls function depending on payment form selected by customer
    */

    public function confirmPayment(BuyTicketRequest $req) {

    	// dd($req);

    	switch($req->payment_form){

			case 'credit_card': 
				return $this->creditCardPayment($req);
				break;
			case 'spei':
			case 'oxxo_cash':
				// dd($req->all());
				return $this->chargePayment($req);
				break;
			case 'paypal':
				// $this->paypalPayment($req);
				break;
		}

    }

    /**
    * For oxxo and SPEI charges
    */

    public function chargePayment($req) {

    	\Conekta\Conekta::setApiKey($this->_conekta_conf['sandbox_privateKey']);
		\Conekta\Conekta::setApiVersion("2.0.0");

		//Variables
		$customer_phone = "+5255555555";
		$total = $req->precio * $req->asientos_cantidad;
		$expires_at = Carbon::parse(Carbon::now()->addDays(1));

		if($req->customer_phone != null){
			$customer_phone = $req->customer_phone;
		}

		$metadata = "";
		$id = [];
		$asientos = $req->asientos_cantidad;

		if( $req->event_type == "numerado" ) {

			$id = explode( "-" ,$req->asientos_id);
			$asientos = $req->asientos;

		}

		$metadata = array(
			'event_type' => $req->event_type,
			'db_table' => $req->db_table,
			'info' => $req->info,
			'impresion_boleto' => $req->impresion_boleto,
			'event' => $req->evento,
			'event_photo' => $req->event_photo,
			'ids' => $req->asientos_id,
			'asientos' => $asientos,
			'seccion' => $req->seccion,
			'fila' => $req->fila,
			'date' => $req->fecha,
			'place' => $req->lugar,
			'ciudad' => $req->ciudad,
			'hr' => $req->hora
		);


		if( $req->event_type == "numerado" ) {
			//Verificar disponibilidad de lugares
			DB::beginTransaction();

			try{
				//Corroborar que siguen disponibles los boletos
				
				if( DB::table($req->db_table)->whereIn('id', $id)->where('status', '<>', 0)->exists() ){
					return redirect($req->url)->withErrors('Lo sentimos los boletos ya no estan disponibles');
				}

				//Bloqueamos los boletos
				DB::table($req->db_table)->whereIn('id', $id)->update(['status' => 3, 'user' => Auth::user()->id]);

				//Se ejecuta la transaccion y se bloquean los boletos
				DB::commit();

			}catch(\Exception $e) {
				DB::rollBack();
				return redirect($req->url)->withErrors('A ocurrido un error db');
			}
		}	


		try {
			$order = \Conekta\Order::create(array(
				  'currency' => 'MXN',
				  'customer_info' => array(
				    'name' => $req->customer_name,
				    'email' => $req->customer_email,
				    'phone' => $customer_phone
				  ),
				  'line_items' => array(
				    array(
				      'name' => 'Boletos '.$req->evento,
				      'unit_price' => $req->precio * 100,
				      'quantity' => $req->asientos_cantidad
				    )
				  ),
				  'charges' => array(
				    array(
				      'payment_method' => array(
				        'type' => $req->payment_form,
				        'expires_at' => $expires_at->timestamp
				      ),
				    )
				  ),
				  'tax_lines' => array(
				  	array(
				  		'description' => 'Servicio',
				  		'amount' => $total * 0.10 * 100
				  	)
				  ),
				  'metadata' => $metadata
				));
		} catch (\Conekta\ParameterValidationError $error){
			$res = $error->getMessage();
			$success = false;
			return view('eventos.compra', compact('res', 'success'));
		} catch (\Conekta\Handler $error){
			$res = $error->getMessage();
			$success = false;
			return view('eventos.compra', compact('res', 'success'));
		}

		dd($order);

		// $success = true;
		// $payment = 'pending';
		// Mail::to(Auth::user()->email, Auth::user()->name)
		// 	->send(new OrderCreated($order, $expires_at));
		// return view('eventos.compra', compact('payment', 'success', 'order', 'expires_at'));
    }

    /**
    * Pay by Credit Card
    */

    public function creditCardPayment($req) {
    	dd($req->all());
    }

    /**
    * Pay by Paypal
    */

    public function paypalPayment($req) {

    }

    /**
    * Paypal status after making a charge
    */

    public function getPaymentStatus(Request $request) {

    }
}

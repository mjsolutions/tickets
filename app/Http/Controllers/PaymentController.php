<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BuyTicketRequest;
use Session;
use Log;
use PDF;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use App\Event;
use App\Mail\Compra as Compra;
use App\Mail\OrderCreated as OrderCreated;

class PaymentController extends Controller
{

	private $_conekta_conf;

	public function __construct()
	{
		$this->_conekta_conf = config('conekta');
	}

	/**
	* See details before accepting purchase
	*/

    public function paymentDetails(Request $req) {
    	return view('detalles-compra', compact('req'));
    }

    /**
    * Confirm purchase, calls function depending on payment form selected by customer
    */

    public function confirmPayment(BuyTicketRequest $req) {

    	if(Auth::user()->isPuntoDeVenta()) {
    		
    		return $this->onSitePayment($req);

    	} else {
	    	switch($req->payment_form){

				case 'credit_card': 
					return $this->creditCardPayment($req);
					break;
				case 'spei':
				case 'oxxo_cash':
					return $this->chargePayment($req);
					break;
				case 'paypal':
					// $this->paypalPayment($req);
					break;
			}
    	}


    }

    public function onSitePayment($req){

    	$total = $req->precio * $req->asientos_cantidad;
    	$response = '';
    	$email_sent = true;
    	$buydata = Array();
        $buydata['folios'] = "";
        $buydata["nombre"] = ucwords($req->customer_name);
        $buydata["email"] = strtolower($req->customer_email);
        $user_id = Auth::id();
        $date = Carbon::now();
        $folio = DB::table($req->db_table)->max('folio');
        $comentarios = $buydata["email"].' | '.$buydata["nombre"].' | '.$req->customer_phone;

        // dd($date);

		if( $req->event_type == "numerado" ) {

			DB::beginTransaction();

    		$ids = [];
			$ids = explode( "-" ,$req->asientos_id);
			$i = 1;

			try{
				//Corroborar que siguen disponibles los boletos
				
				if( DB::table($req->db_table)->whereIn('id', $ids)->where(function($query){
					return $query->where('status', '<>', 0)
							->orWhereNotNull('forma_pago');
				})->exists() ){
					return redirect($req->url)->withErrors('Lo sentimos los boletos ya no estan disponibles');
				}

				//Guardar en la bd
				foreach ($ids as $asiento) {

                    DB::table($req->db_table)->where('id', $asiento)->update([
                        'folio' => ($folio + $i),
                        'status' => 2,
                        'user' => $user_id,
                        'forma_pago' => $req->payment_form,
                        'token_vlinea' => '5dxxxxxxxxxx',
                        'comentarios' => $comentarios,
                        'fecha_venta' => $date]);

                    $buydata['folios'] .= " *".($folio + $i);
                    $i++;
                }

				//Se ejecuta la transaccion
				DB::commit();

			}catch(\Exception $e) {
				DB::rollBack();
				Log::error($e->getMessage());
				return redirect($req->url)->withErrors('A ocurrido un error db: '.$e->getMessage());
			}

			//Send tickets
			$evento = Event::where('tabla', $req->db_table)->first();
			// dd($evento->tabla);
			$boletos = DB::table($req->db_table)->whereIn('id', $ids)->get();
			$buydata['imagen'] = $evento->url_imagen;
			$buydata['lugar'] = $req->lugar;
			$buydata['ciudad'] = $req->ciudad;
			$buydata['hora'] = $req->hora;
			$buydata['fecha'] = $req->fecha;
			$buydata['evento'] = $req->evento;
			$precio = [];

			foreach ($evento->prices as $p) {
	            $precio[$p->nombre] = $p->precio + $p->cxs;
	        }

			$pdf = PDF::loadView('user.boleto-onsite', compact('buydata', 'boletos', 'precio'));

			try{
	            Mail::send('emails.send-ticket', $buydata, function($message)use($buydata,$pdf, $req) {
	            $message->from('ventas@bolematico.com', 'Ventas Bolematico')
		            ->to($buydata["email"], $buydata["nombre"])
		            ->subject('Boletos::'.$req->evento)
		            ->attachData($pdf->output(), $req->db_table.".pdf");
	            });
	        }catch(JWTException $exception){
	        	Log::error($exception->getMessage());
	        }

	        if (Mail::failures()) {
	        	Log::error('Email no enviado: '.$buydata["email"]);
	        	$email_sent = false;
	        }

		}

		$success = true;
		$payment = 'paid';
		$email = $buydata["email"];
		$url = $req->url;
		return view('eventos.compra', compact('payment', 'success', 'email', 'url', 'email_sent'));

    }

    /**
    * For oxxo and SPEI charges
    */

    public function chargePayment($req) {

    	// \Conekta\Conekta::setApiKey($this->_conekta_conf['sandbox_privateKey']);
    	\Conekta\Conekta::setApiKey($this->_conekta_conf['production_privateKey']);
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

		$line_item_name = $req->evento.' | '.$req->ciudad.' | '.$req->seccion.': '.$asientos;

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
				      'name' => $line_item_name,
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
			if( $req->event_type == "numerado" ){
				DB::table($req->db_table)->whereIn('id', $id)->update(['status' => 0, 'user' => NULL]);
			}
			Log::error('Conekta error: '.$res);
			return view('eventos.compra', compact('res', 'success'));
		} catch (\Conekta\Handler $error){
			$res = $error->getMessage();
			$success = false;
			if( $req->event_type == "numerado" ){
				DB::table($req->db_table)->whereIn('id', $id)->update(['status' => 0, 'user' => NULL]);
			}
			Log::error('Conekta error: '.$res);
			return view('eventos.compra', compact('res', 'success'));
		}

		//dd($order);

		$success = true;
		$payment = 'pending';
		Mail::to(Auth::user()->email, Auth::user()->name)
		 	->send(new OrderCreated($order, $expires_at));
		return view('eventos.compra', compact('payment', 'success', 'order', 'expires_at'));
    }

}

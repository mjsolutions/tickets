<?php

namespace App\Http\Controllers;

use App\Franco_guanajuato;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Session;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\BuyTicketRequest;
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

class PaypalFranco_guanajuatoController extends Controller
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
                $price = 640;
                break;
            case 'Oro':
                $price = 540;
                break;
            case 'Plata':
                $price = 440;
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
        $subtotal = $price * $cantidad;     //Subtotal de los items
        $total = $subtotal * 1.10;

        $item->setName('Franco Escamilla Guanajuato 22 Junio')  //Nombre del item
        ->setCurrency('MXN')        //Moneda
        ->setDescription('Boleto(s) Franco Escamilla. '.$description)
        ->setQuantity(1)            //Cantidad de items
        ->setPrice($subtotal);          //Precio de cada item

        $item_list = new ItemList();    //Objeto de para englobar todos los items
        $item_list->setItems(array($item));

        $details = new Details(); //Detalles agregados por si se quieren cobrar extra por servicios
        $details->setSubtotal($subtotal)
        ->setHandlingFee($subtotal * 0.10);

        $amount = new Amount();         //Objeto para guardar el monto
        $amount->setCurrency('MXN')
        ->setTotal($total)
        ->setDetails($details);

        $transaction = new Transaction();   //Objeto para generar la transacción y pasar los items
        $transaction->setAmount($amount)
        ->setItemList($item_list)
        ->setDescription('Boleto(s) Franco Escamilla Guanajuato 22 Junio. '.$description);

        $redirect_urls = new RedirectUrls();    //Redirección para ver si se completa la compra
        $redirect_urls->setReturnUrl(route('payment.franco_guanajuato.status'))
        ->setCancelUrl(route('payment.franco_guanajuato.status'));

        $payment = new Payment();       //Se le pasan los objetos que se crearon anteriormente parade una manera encapsularlos
        $payment->setIntent('Sale')
        ->setPayer($payer)
        ->setRedirectUrls($redirect_urls)
        ->setTransactions(array($transaction));

        //Redirección a la página de paypal para que haga las operaciones necesarias
        try {       
            $payment->create($this->_api_context);
        } catch (\PayPal\Exception\PayPalConnectionException $ex) {
            if (\config('app.debug')) {
                echo "Exception: " . $ex->getMessage() . PHP_EOL;
                $err_data = json_decode($ex->getData(), true);
                exit;
            } else {
                // Flash::error('Something went wrong, Sorry for inconvenience');
                return redirect('eventos/franco-escamilla-guanajuato')->withErrors('Algo salio mal perdon por el inconveniente');
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
        Session::put('descripcion', $description);

        if(isset($redirect_url)) {
            
            DB::beginTransaction();

            try{
                //Corroborar que siguen disponibles los boletos
                $asientos = Franco_guanajuato::WhereIn('id', $id)->where('status', 1)->get();
                if($asientos->count() > 0){
                    return redirect('eventos/franco-escamilla-guanajuato')->withErrors('Lo sentimos los boletos ya no estan disponibles');
                }

                //Bloqueamos los boletos
                Franco_guanajuato::whereIn('id', $id)->update(['status' => 1, 'user' => Auth::user()->id]);

                //Se ejecuta la transaccion y se bloquean los boletos
                DB::commit();

            }catch(\Exception $e) {
                DB::rollBack();
                return redirect('eventos/franco-escamilla-guanajuato')->withErrors('A ocurrido un error db');
            }

            //Redirecciona a ventana de login de paypal para iniciar porceso de compra
            return redirect($redirect_url);
        }
        // Flash::error('Unknown error occurred');
        return redirect('eventos/franco-escamilla-guanajuato')->withErrors('A ocurrido un error');
    }

    public function getPaymentStatus(Request $request)
    {
        //Se obtiene el id del pago antes de la session clear
        $payment_id = Session::get('paypal_payment_id');
        $asientos_id = Session::get('asientos_id');
        $descripcion = Session::get('descripcion');

        //Se hace un session clear
        Session::forget('paypal_payment_id');
        Session::forget('asientos_id');
        Session::forget('descripcion');

        //Si no hay alguno de los datos anteriores se redirecciona con un mensaje de error
        //Se detecta el cancel hay que desbloquear los boletos
        if(empty($request->input('PayerID')) || empty($request->input('token'))){

            DB::beginTransaction();

            try{
                
                Franco_guanajuato::whereIn('id', $asientos_id)->update(['status' => 0, 'user' => NULL]);
                //Se ejecuta la transaccion y se desbloquean los boletos
                DB::commit();

            }catch(\Exception $e) {
                DB::rollBack();
                return redirect('eventos/franco-escamilla-guanajuato')->withErrors('A ocurrido un error');
            }

            // Flash::error('Payment Failed');
            return redirect('eventos/franco-escamilla-guanajuato')->withErrors('Proceso de compra cancelado');
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
                
                Franco_guanajuato::whereIn('id', $asientos_id)->update(['status' => 2, 'user' => $client_id, 'forma_pago' => 'Paypal', 'transaction_id' => $transaction_id]);
                
                $folio = Franco_guanajuato::max('folio');
                $i = 1;
                $buydata['folios'] = "";
                
                foreach ($asientos_id as $asiento) {

                    Franco_guanajuato::where('id', $asiento)->update(['folio' => ($folio + $i)]);
                    $buydata['folios'] .= " *".($folio + $i);
                    $i++;
                }
                
                //Se ejecuta la transaccion y se bloquean los boletos
                DB::commit();

            }catch(\Exception $e) {
                DB::rollBack();
                return redirect('eventos/franco-escamilla-guanajuato')->withErrors('A ocurrido un error');
            }

            $buydata['evento'] = "Franco Escamilla en Guanajuato";
            $buydata['img'] = "img/franco-guanajuato.jpg";
            $buydata['lugar'] = "Centro de Convenciones";
            $buydata['fecha'] = "22 de Junio";
            $buydata['hr'] = "9:30 pm";
            $buydata['descripcion'] = $descripcion;
            $buydata['transaccion'] = $transaction_id;
            $buydata['user'] = Auth::user()->name;
            $buydata['email'] = Auth::user()->email;

            // Mail::to(Auth::user()->email, Auth::user()->name)
            // ->send(new Compra($buydata));

            Flash::success('Gracias por su compra');
            return redirect()->route('eventos.compra');
        }else{

            DB::beginTransaction();

            try{
                
                Franco_guanajuato::whereIn('id', $asientos_id)->update(['status' => 1, 'user' => $client_id, 'forma_pago' => 'Paypal', 'transaction_id' => $transaction_state]);
                
                //Se ejecuta la transaccion y se bloquean los boletos
                DB::commit();

            }catch(\Exception $e) {
                DB::rollBack();
                return redirect('eventos/franco-escamilla-guanajuato')->withErrors('A ocurrido un error');
            }

            // Flash::error('Payment Failed');
            return redirect('eventos/franco-escamilla-guanajuato')->withErrors('Pago fallo');
        }

    }
}
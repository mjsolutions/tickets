<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\Compra as Compra;
use Log;

class ApiController extends Controller
{
    public function getFilas($table, $zona) {

        if($table == 'marwan_morelia_15feb'){
            return DB::table($table)
                    ->select('fila')
                    ->where([
                        ['seccion', $zona],
                        ['status', 0]
                    ])
                    ->whereNotIn('fila', ['A', 'B'])
                    ->groupBy('fila')->get();
        }elseif($table == 'oceransky_morelia_01mar'){
             return DB::table($table)
                    ->select('fila')
                    ->where([
                        ['seccion', $zona],
                        ['status', 0]
                    ])
                    ->whereNotIn('fila', ['A', 'B', 'C'])
                    ->groupBy('fila')->get();
        }elseif($table == 'ornelas_morelia_05abr'){
             return DB::table($table)
                    ->select('fila')
                    ->where([
                        ['seccion', $zona],
                        ['status', 0]
                    ])
                    ->whereNotIn('fila', ['A', 'B', 'C'])
                    ->groupBy('fila')->get();
        }

        return DB::table($table)
                ->select('fila')
                ->where([
                    ['seccion', $zona],
                    ['status', 0]
                ])
                ->groupBy('fila')->get();
        
    }

    public function getAsientos($table, $fila) {

            return DB::table($table)
                    ->select('id','asiento')
                    ->where([
                        ['fila', $fila],
                        ['status', 0]
                    ])->get();
    }

    public function getMapAsientos($table, $bloque, $order_fila, $order_asiento) {

        if($table == 'marwan_morelia_15feb'){
            return DB::table($table)
                ->where('bloque', $bloque)
                ->orderBy('fila', $order_fila)
                ->whereNotIn('fila', ['A', 'B'])
                ->orderBy('asiento', $order_asiento)->get();
        }elseif($table == 'oceransky_morelia_01mar'){
            return DB::table($table)
                ->where('bloque', $bloque)
                ->orderBy('fila', $order_fila)
                ->whereNotIn('fila', ['A', 'B', 'C'])
                ->orderBy('asiento', $order_asiento)->get();
        }elseif($table == 'ornelas_morelia_05abr'){
            return DB::table($table)
                ->where('bloque', $bloque)
                ->orderBy('fila', $order_fila)
                ->whereNotIn('fila', ['A', 'B', 'C'])
                ->orderBy('asiento', $order_asiento)->get();
        }
        
        return DB::table($table)
                ->where('bloque', $bloque)
                ->orderBy('fila', $order_fila)
                ->orderBy('asiento', $order_asiento)->get();

    }

    /**
    * Recive information for Conkecta webhook once the previous charge has been paid
    * receives a json object
    * return code 200 if success
    */

    public function chargePaid(Request $req) {

        // echo $req->data['object']['payment_method']['object'];
        $conekta_conf = config('conekta');
        //Buscara en las ordenes creadas bajo producccion, si se hacen pruebas y se crea orden en sandbox
        //el webhook en el server fallara ya que el metodo find buscara en las ordenes de produccion y no en las de sandbox
        //modificar la Apikey del server si se desea que las pruebas hechas en local se vean reflejadas en el server
        //mediante los webhooks
        \Conekta\Conekta::setApiKey($conekta_conf['sandbox_privateKey']);
        \Conekta\Conekta::setApiVersion("2.0.0");

        $no_action = array("order.created", "order.pending_payment", "order.paid", "order.expired", "charge.created", "charge.pending_confirmation");

        if ($req->type == 'charge.paid') {

            $order_id = $req->data['object']['order_id'];

            try{
                $conekta_obj = \Conekta\Order::find($order_id);
            }catch(\Exception $e) {
                return response()->json(['message'=>'Conekta find order error: '.$e->getMessage()], 500);
            }

            $order = json_decode( $conekta_obj, true );

            $table = $order['metadata']['db_table'];
            $event_type = $order['metadata']['event_type'];
            $event = $order['metadata']['event'];
            $event_photo = $order['metadata']['event_photo'];
            $event_date = $order['metadata']['date'];
            $place = $order['metadata']['place'];
            $ciudad = $order['metadata']['ciudad'];
            $hr = $order['metadata']['hr'];
            $info = $order['metadata']['info'];
            $impresion_boleto = $order['metadata']['impresion_boleto'];
            $asientos = $order['metadata']['asientos'];
            $seccion = $order['metadata']['seccion'];
            $fila = $order['metadata']['fila'];
            $ids = [];

            if($event_type == 'numerado'){

            $ids = explode( "-" ,$order['metadata']['ids']);
            
            }

            $payment_type =  $order['charges'][0]['payment_method']['type'];
            $reference =  $order['charges'][0]['id'];

            $user = User::where('email', $order['customer_info']['email'])->first();
            $date = Carbon::createFromTimestamp($order['created_at']);
            $descripcion = "";
            $buydata = Array();
            $buydata['folios'] = "";

            $folio = DB::table($table)->max('folio');
            $i = 1;

            if($event_type == 'general'){

                $rows = [];

                DB::beginTransaction();

                try{

                    for($i = 1; $i <= $asientos; $i++){

                        $new_folio = $folio + $i;

                        $row = ['seccion' => $seccion,
                                'bloque' => '',
                                'fila' => 'Sin fila',
                                'asiento' => $i,
                                'status' => 2,
                                'impreso' => 0,
                                'forma_pago' => $payment_type,
                                'folio' => $new_folio,
                                'codigo_barras' => substr(md5($new_folio), 0, 10),
                                'token_vlinea' => $reference,
                                'user' => $user->id,
                                'fecha_venta' => $date];

                        array_push($rows, $row);

                        $buydata['folios'] .= " *".$new_folio;

                    }

                    DB::table($table)->insert($rows);

                    DB::commit();

                }catch(\Exception $e) {
                    DB::rollBack();
                    return response()->json(['message'=>'Error inserting in DB: '.$e->getMessage()], 500);
                }

                $descripcion = $asientos." lugares | Tipo: ".ucwords($seccion);

            } else {

                //Update a los boletos
                DB::beginTransaction();

                try{
                    
                    DB::table($table)->whereIn('id', $ids)->update(['status' => 2, 'user' => $user->id, 'forma_pago' => $payment_type, 'token_vlinea' => $reference, 'fecha_venta' => $date]);
                    
                    
                    foreach ($ids as $asiento) {

                        DB::table($table)->where('id', $asiento)->update(['folio' => ($folio + $i)]);
                        $buydata['folios'] .= " *".($folio + $i);
                        $i++;
                    }
                    
                    //Se ejecuta la transaccion y se bloquean los boletos
                    DB::commit();

                }catch(\Exception $e) {
                    DB::rollBack();
                    return response()->json(['message'=>'Errror updating DB'.$e->getMessage()], 500);
                }

                if(!empty($fila)){
                    $descripcion = "Seccion: ".$seccion." | Fila: ".$fila." | Asientos: ".$asientos;
                }else{
                    $descripcion = "Seccion: ".$seccion." | Fila/Asientos: ".$asientos;                    
                }

            }

            $buydata['type'] = $event_type;
            $buydata['evento'] = $event;
            $buydata['img'] = $event_photo;
            $buydata['ciudad'] = $ciudad;
            $buydata['lugar'] = $place;
            $buydata['fecha'] = $event_date;
            $buydata['hr'] = $hr;
            $buydata['info'] = $info;
            $buydata['impresion_boleto'] = $impresion_boleto;
            $buydata['descripcion'] = $descripcion;
            $buydata['transaccion'] = $reference;
            $buydata['user'] = $user->name.' '.$user->last_name.' '.$user->second_lname;
            $buydata['email'] = $user->email;

            Mail::to($user->email, $user->name)
            // ->cc('arquimides@bolematico.com.mx')
            ->send(new Compra($buydata));

            return response()->json(['message'=>'Success update on DB'], 200);


        } elseif ($req->type == 'charge.expired') {

            $order_id = $req->data['object']['order_id'];
            $order = json_decode( \Conekta\Order::find($order_id), true );

            $event_type = $order['metadata']['event_type'];

            if( $event_type == "numerado" ){

                $table = $order['metadata']['db_table'];
                $ids = explode( "-" , $order['metadata']['ids']);

                //Update a los boletos
                DB::beginTransaction();

                try{
                    
                    DB::table($table)->whereIn('id', $ids)->update(['status' => 0, 'user' => null]);
                    
                    //Se ejecuta la transaccion y se bloquean los boletos
                    DB::commit();

                }catch(\Exception $e) {
                    DB::rollBack();
                    return response()->json(['message'=>'fail updating DB on charge.expired: '.$e->getMessage()], 500);
                }

            }

            return response()->json(['message'=>'Success update on DB on charge.expired'], 200);

        } elseif ( in_array($req->type, $no_action) ) {            
            return response()->json(['message'=>'Webhook received'], 200);
        }else{
            return response()->json(['message'=>'No action for this webhook'], 200);             
        }

    }


}

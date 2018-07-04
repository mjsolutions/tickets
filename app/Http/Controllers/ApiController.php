<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\User;
use App\Franco31;
use App\Bronco;
use App\Franco01;
use Illuminate\Support\Facades\Mail;
use App\Mail\Compra as Compra;

class ApiController extends Controller
{
    public function getFilas($table, $zona) {
        if($table == "franco01"){
            return Franco01::select('fila')->where([['seccion', $zona], ['status', 0]])->groupBy('fila')->get();
        }elseif($table == "franco31"){
            return Franco31::select('fila')->where([['seccion', $zona], ['status', 0]])->groupBy('fila')->get();
        }elseif($table == "Bronco"){
            if($zona == 'General'){
                $disponibles = 1167 - (Bronco::where('seccion', 'General')->count());
                return $disponibles;
            }

            $disponibles = 1216 - (Bronco::where('seccion', 'Tendido Alto')->count());
            return $disponibles;
        }
        return Franco7::select('fila')->where([['seccion', $zona], ['status', 0]])->groupBy('fila')->get();
    }

    public function getAsientos($table, $fila) {
        if($table == "franco01"){
            return Franco01::select('id','asiento')->where([['fila', $fila], ['status', 0]])->get();   
        }elseif($table == "franco31"){
            return Franco31::select('id','asiento')->where([['fila', $fila], ['status', 0]])->get();
        }
        return Franco7::select('id','asiento')->where([['fila', $fila], ['status', 0]])->get();
    }

    public function getAsientos2($table, $zona, $fila) {
        
        return RTM::select('id','asiento')->where([['seccion', $zona], ['fila', $fila], ['status', 0]])->get();

    }

    /**
    * Recive information for Conkecta webhook once the previous charge has been paid
    * receives a json object
    * return code 200 if success
    */

    public function chargePaid(Request $req) {


        // echo $req->data['object']['payment_method']['object'];

        if($req->type == 'order.paid') {

            $table = $req->data['object']['line_items']['data'][0]['metadata']['db_table'];
            $event_type = $req->data['object']['line_items']['data'][0]['metadata']['event_type'];
            $event = $req->data['object']['line_items']['data'][0]['metadata']['event'];
            $event_photo = $req->data['object']['line_items']['data'][0]['metadata']['event_photo'];
            $event_date = $req->data['object']['line_items']['data'][0]['metadata']['date'];
            $place = $req->data['object']['line_items']['data'][0]['metadata']['place'];
            $hr = $req->data['object']['line_items']['data'][0]['metadata']['hr'];
            $info = $req->data['object']['line_items']['data'][0]['metadata']['info'];
            $asientos = $req->data['object']['line_items']['data'][0]['metadata']['asientos'];
            $seccion = $req->data['object']['line_items']['data'][0]['metadata']['seccion'];
            $fila = $req->data['object']['line_items']['data'][0]['metadata']['fila'];
            $ids = [];
            if($event_type == 'numerado'){

            $ids = explode( "-" ,$req->data['object']['line_items']['data'][0]['metadata']['ids']);
            
            }
            $payment_type =  $req->data['object']['charges']['data'][0]['payment_method']['type'];
            $reference =  $req->data['object']['charges']['data'][0]['id'];

            $user = User::where('email', $req->data['object']['customer_info']['email'])->first();
            $date = Carbon::createFromTimestamp($req->data['object']['created_at']);
            $descripcion = "";
            $buydata = Array();
            $buydata['folios'] = "";


            $folio = DB::table($table)->max('folio');
            $i = 1;

            if($event_type == 'general'){

                for($i = 1; $i <= $asientos; $i++){

                    $new_folio = $folio + $i;

                    DB::table($table)->insert(
                        ['seccion' => 'General',
                        'fila' => 'Sin fila',
                        'asiento' => $i,
                        'status' => 2,
                        'impreso' => 0,
                        'forma_pago' => $payment_type,
                        'folio' => $new_folio,
                        'transaction_id' => $reference,
                        'user' => $user->id,
                        'fecha_venta' => $date
                        ]);

                    $buydata['folios'] .= " *".$new_folio;

                }

                $descripcion = $asientos." lugares | Tipo: ".ucwords($event_type);

            } else {

                //Update a los boletos
                DB::beginTransaction();

                try{
                    
                    DB::table($table)->whereIn('id', $ids)->update(['status' => 2, 'user' => $user->id, 'forma_pago' => $payment_type, 'transaction_id' => $reference, 'fecha_venta' => $date]);
                    
                    
                    foreach ($ids as $asiento) {

                        DB::table($table)->where('id', $asiento)->update(['folio' => ($folio + $i)]);
                        $buydata['folios'] .= " *".($folio + $i);
                        $i++;
                    }
                    
                    //Se ejecuta la transaccion y se bloquean los boletos
                    DB::commit();

                }catch(\Exception $e) {
                    DB::rollBack();
                    return response()->json('fail', 500);
                }

                $descripcion = "Seccion: ".$seccion." | Fila: ".$fila." | Asientos: ".$asientos;
            }
            

            $buydata['type'] = $event_type;
            $buydata['evento'] = $event;
            $buydata['img'] = $event_photo;
            $buydata['lugar'] = $place;
            $buydata['fecha'] = $event_date;
            $buydata['hr'] = $hr;
            $buydata['info'] = $info;
            $buydata['descripcion'] = $descripcion;
            $buydata['transaccion'] = $reference;
            $buydata['user'] = $user->name.' '.$user->last_name.' '.$user->second_lname;
            $buydata['email'] = $user->email;

            Mail::to($user->email, $user->name)
            ->cc('arquimides@bolematico.com.mx')
            ->send(new Compra($buydata));

            return response()->json('success', 200); 
                     
        } elseif ($req->type == 'order.expired') {

            $event_type = $req->data['object']['line_items']['data'][0]['metadata']['event_type'];

            if( $event_type == "numerado" ){

                $table = $req->data['object']['line_items']['data'][0]['metadata']['db_table'];
                $ids = explode( "-" ,$req->data['object']['line_items']['data'][0]['metadata']['ids']);

                //Update a los boletos
                DB::beginTransaction();

                try{
                    
                    DB::table($table)->whereIn('id', $ids)->update(['status' => 0, 'user' => null]);
                    
                    //Se ejecuta la transaccion y se bloquean los boletos
                    DB::commit();

                }catch(\Exception $e) {
                    DB::rollBack();
                    return response()->json('fail', 500);
                }

            }

            return response()->json('success', 200);

        } elseif ($req->type == 'order.created' || $req->type == 'order.pending_payment' || $req->type == 'charge.created' || $req->type == 'charge.paid' || $req->type == 'charge.expired') {            
            return response()->json('Webhook received', 200);
        }

        return response()->json('fail', 500);  

    }



    // public function chargeCreated(Request $req) {


    //     // echo $req->data['object']['payment_method']['object'];
    //     $date = Carbon::createFromTimestamp($req->data['object']['created_at']);

    //     $user = User::where('email', $req->data['object']['customer_info']['email'])->first();

    //     $buydata = Array();
    //     $buydata['folios'] = "";

    //     if($req->type == 'order.created') {

    //         $table = $req->data['object']['line_items']['data'][0]['metadata']['db_table'];

    //             DB::table($table)->insert(
    //                 ['seccion' => 'General',
    //                 'fila' => 'Sin fila',
    //                 'asiento' => 1,
    //                 'status' => 2,
    //                 'impreso' => 0,
    //                 'forma_pago' => "OxxoPAY",
    //                 'folio' => 2,
    //                 'transaction_id' => "referencia",
    //                 'user' => "1",
    //                 'fecha_venta' => $date,
    //                 'detalles' => '',

    //                 ]);

    //         $buydata['folios'] .= " *Los Folios";


    //         $buydata['evento'] = "Felices GTO";
    //         $buydata['lugar'] = "varias ciudades";
    //         $buydata['fecha'] = "Abril";
    //         $buydata['hr'] = "10pm";
    //         $buydata['info'] = "---";
    //         $buydata['descripcion'] = "Se ha creado el cargo correspondiente,";
    //         $buydata['transaccion'] = "reference";
    //         $buydata['user'] = "Nombre del cliente";
    //         $buydata['email'] = "Email cliente";

    //         Mail::to($user->email, $user->name)
    //         ->send(new Compra($buydata));

    //         return response()->json('success', 200); 
        
            
             
    //     } elseif($req->type == 'charge.created' || $req->type == 'order.pending_payment' || $req->type == 'order.paid' || $req->type == 'charge.paid') {
    //         return response()->json('Webhook received', 200);
    //     }

    //     return response()->json('fail', 500);  

    // }


}

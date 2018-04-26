<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\User;
use App\Franco6;
use App\Franco7;
use App\Deloce;
use App\Bronco;
use App\Alan_16;
use Illuminate\Support\Facades\Mail;
use App\Mail\Compra as Compra;

class ApiController extends Controller
{
    public function getFilas($table, $zona) {
        if($table == "Franco6"){
            return Franco6::select('fila')->where([['seccion', $zona], ['status', 0]])->groupBy('fila')->get();
        }elseif($table == "Deloce"){
            return Deloce::select('fila')->where([['seccion', $zona], ['status', 0]])->groupBy('fila')->get();
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
        if($table == "Franco6"){
            return Franco6::select('id','asiento')->where([['fila', $fila], ['status', 0]])->get();   
        }elseif($table == "Deloce"){
            return Deloce::select('id','asiento')->where([['fila', $fila], ['status', 0]])->get();
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
            $event_date = $req->data['object']['line_items']['data'][0]['metadata']['date'];
            $place = $req->data['object']['line_items']['data'][0]['metadata']['place'];
            $hr = $req->data['object']['line_items']['data'][0]['metadata']['hr'];
            $info = $req->data['object']['line_items']['data'][0]['metadata']['info'];
            $asientos = $req->data['object']['line_items']['data'][0]['quantity'];
            $payment_type =  $req->data['object']['charges']['data'][0]['payment_method']['type'];
            $reference =  $req->data['object']['charges']['data'][0]['id'];

            $user = User::where('email', $req->data['object']['customer_info']['email'])->first();
            $date = Carbon::createFromTimestamp($req->data['object']['created_at']);
            $descripcion = "";
            $buydata = Array();
            $buydata['folios'] = "";


            $folio = DB::table($table)->max('folio');

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
                        'fecha_venta' => $date,
                        'detalles' => '',

                        ]);

                    $buydata['folios'] .= " *".$new_folio;

                }

                $descripcion = $asientos." lugares | Tipo: ".ucwords($event_type);

            }

            $buydata['evento'] = $event;
            $buydata['lugar'] = $place;
            $buydata['fecha'] = $event_date;
            $buydata['hr'] = $hr;
            $buydata['info'] = $info;
            $buydata['descripcion'] = $descripcion;
            $buydata['transaccion'] = $reference;
            $buydata['user'] = $user->name.' '.$user->last_name.' '.$user->second_lname;
            $buydata['email'] = $user->email;

            Mail::to($user->email, $user->name)
            ->bcc('arquisbautista@hotmail.com')
            ->send(new Compra($buydata));

            return response()->json('success', 200); 
        
            
             
        } elseif($req->type == 'order.created' || $req->type == 'order.pending_payment' || $req->type == 'charge.created' || $req->type == 'charge.paid' || $req->type == 'order.expired' || $req->type == 'charge.expired') {
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

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Event;
use App\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\Compra as Compra;
use DateTime;
use Session;
// use Barryvdh\DomPDF\PDF;

class PaneldeUsuarioController extends Controller
{
    public function perfil() {
    	return view('user.perfil');
    }

    public function eventos() {

        $eventos_activos = Event::where([['status', 1],['online', 1], ['fecha', '>', Carbon::now()->addMinutes(30)]])->orderBy('fecha', 'ASC')->get();

        $eventos = [];

        foreach ($eventos_activos as $evento) {
            $res = DB::table($evento->tabla)->where('user', Auth::id())->whereIn('status', [2, 3])->get();
            if($res->isNotEmpty()){

                $data = [
                        'info'      =>  $evento,
                        'boletos'   =>  $res
                    ];

                array_push($eventos, $data);             
            }
        }

        // dd($eventos);

    	return view('user.eventos', compact('eventos'));
    }

    public function printTicket( Event $evento, $seccion ){

        $boletos = DB::table($evento->tabla)->where([['user', Auth::id()],['seccion', $seccion],['status', 2]])->get();
        $fecha = new DateTime($evento->fecha);
        $meses = ["","Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];

        $d['cliente'] = Auth::user()->name.' '.Auth::user()->last_name.' '.Auth::user()->second_lname;
        $d['hr'] = $fecha->format('H:i')." hrs";
        $d['fecha'] = $fecha->format('d').' de '.$meses[intval($fecha->format('m'))].' '.$fecha->format('Y');

        $precio = [];

        foreach ($evento->prices as $p) {
            $precio[$p->nombre] = $p->precio + $p->cxs;
        }

        $d['asientos'] = $boletos->first()->fila == 'Sin fila'? $boletos->count():null;
    
    	$data = (object) $d;

        // DB::table($evento->tabla)->where([['user', Auth::id()], ['status', 2]])->increment('impreso');

        if($evento->id == 123){
            $pdf = \PDF::loadView('user.boleto-info-extra', compact('data', 'boletos', 'precio', 'evento'));
        }else{
            $pdf = \PDF::loadView('user.boleto', compact('data', 'boletos', 'precio', 'evento'));
        }
      

    	return $pdf->download('ticket_'.$evento->tabla.'.pdf');
        // return $pdf->stream('ticket_'.$evento->tabla.'.pdf');
    }

    public function showFormForComprobante(){
        return view('user.comprobante-manual');
    }

    public function showComprobante($order_id){
        $conekta_conf = config('conekta');

        \Conekta\Conekta::setApiKey($conekta_conf['production_privateKey']);
        \Conekta\Conekta::setApiVersion("2.0.0");

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
        $paid_at =  Carbon::createFromTimestamp($order['charges'][0]['paid_at']);

        $user = User::where('email', $order['customer_info']['email'])->first();
        $date = Carbon::createFromTimestamp($order['created_at']);
        $descripcion = "";
        $buydata = Array();
        $buydata['folios'] = "`---";

        // $folio = DB::table($table)->max('folio');
        // $i = 1;

        if($event_type == 'general'){

            $descripcion = $asientos." lugares | Tipo: ".ucwords($seccion);

        } else {

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
        $buydata['paid_at'] = $paid_at->format('d-m-Y');
        $buydata['impresion_boleto'] = $impresion_boleto;
        $buydata['descripcion'] = $descripcion;
        $buydata['transaccion'] = $reference;
        $buydata['user'] = $user->name.' '.$user->last_name.' '.$user->second_lname;
        $buydata['email'] = $user->email;

        // $expires_at = Carbon::parse(Carbon::now()->subHours(1));

        // $order = \Conekta\Order::find($order_id);
        // $order->update(array(
        //   'charges' => array(
        //             array(
        //               'payment_method' => array(
        //                 'expires_at' => $expires_at->timestamp
        //               ),
        //             )
        //           ),
        // ));

        // dd($order);

        return view('user.verificar-comprobante', ['data' => $buydata]);

        
    }

    public function sendComprobante(Request $request){

        $conekta_conf = config('conekta');

        \Conekta\Conekta::setApiKey($conekta_conf['production_privateKey']);
        \Conekta\Conekta::setApiVersion("2.0.0");

        try{
            $conekta_obj = \Conekta\Order::find($request->input('order_id'));
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
        $paid_at =  Carbon::createFromTimestamp($order['charges'][0]['paid_at']);

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
        $buydata['paid_at'] = $paid_at->format('d-m-Y');
        $buydata['impresion_boleto'] = $impresion_boleto;
        $buydata['descripcion'] = $descripcion;
        $buydata['transaccion'] = $reference;
        $buydata['user'] = $user->name.' '.$user->last_name.' '.$user->second_lname;
        $buydata['email'] = $user->email;

        Mail::to($user->email, $user->name)
        ->cc('arquimides@bolematico.com.mx')
        ->bcc('martinalanis.dev@gmail.com')
        ->send(new Compra($buydata));

        // return response()->json(['message'=>'Success update on DB'], 200);

        Session::put('mensaje', 'Enviado: '.$user->email);

        return redirect()->route('cliente.comprobante');
    }

    // public function printTicketForUser($id, $seccion) {

    //     // dd($seccion);

    //     $event = Event::find(104);
    //     $user = User::find($id);

    //     Auth::login($user);

    //     return $this->printTicket($event, $seccion);
    // }

    // public function updateDb() {

        // $table = 'franco_gto_05jun';
        // $j = 1;

        // $rows = DB::table($table)->get();

        // foreach( $rows as $row ){

        //     $id = $row->id;
        //     $seccion = $row->seccion;
        //     $bloque = $row->bloque;

        //     DB::table($table)->where([
        //         ['id', $id],
        //         ['seccion', $seccion],
        //         ['bloque', $bloque],
        //         ])->update(['id' => $j]);
        //     $j++;
        // }

    	// for( $i = 1; $i < 1746; $i++){
    	// 	DB::table($table)->where('id', $i)->update(['codigo_barras' => substr(md5($table.$i),0,10)]);
    	// }

        // $cb = 919;
        // $rows = [];

        // for($i = 1; $i <= 2060; $i++){

        //     $row = ['seccion' => 'Numerado',
        //             'bloque' => '',
        //             'fila' => 'J',
        //             'asiento' => $i,
        //             'status' => 0,
        //             'impreso' => 0,
        //             'forma_pago' => null,
        //             'folio' => null,
        //             'codigo_barras' => substr(md5($table.$cb),0,10),
        //             'token_vlinea' => null,
        //             'user' => null,
        //             'fecha_venta' => null];

        //     array_push($rows, $row);
        //     $cb++;

        // }

        // DB::table($table)->insert($rows);

    	// dd('barcodes updated');
    // }

    // public function initTable(){
    //     $table = 'daniel_sosa_acapulco_28sep';

    //     // $asiento = 22;
    //     $rows = [];
    //     $filas = [4,4,4,4,4,4,4,4,4,4,4,4 ,10,10,10,10,10,10,10,10];
    //     $filas_pos = 0;
    //     $cb = 201;
    //     // $fila = 'A';

    //     foreach(range(59, 78) as $fila){
            
    //         for($i = 1; $i <= $filas[$filas_pos]; $i++){
    //             $row = ['seccion' => 'Plata',
    //                 'bloque' => '',
    //                 'fila' => 'Mesa '.$fila,
    //                 'asiento' => 1,
    //                 'status' => 0,
    //                 'impreso' => 0,
    //                 'forma_pago' => null,
    //                 'folio' => null,
    //                 'codigo_barras' => substr(md5($table.$cb),0,10),
    //                 'token_vlinea' => null,
    //                 'user' => null,
    //                 'fecha_venta' => null];

    //             array_push($rows, $row);
    //             $cb++;
    //         }

    //         $filas_pos++;
    //     }

    //      DB::table($table)->insert($rows);

    //      echo 'Insert Plata done';
    // }

}

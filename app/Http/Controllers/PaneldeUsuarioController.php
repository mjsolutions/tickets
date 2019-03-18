<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Event;
use DateTime;
// use Barryvdh\DomPDF\PDF;

class PaneldeUsuarioController extends Controller
{
    public function perfil() {
    	return view('user.perfil');
    }

    public function eventos() {

        $eventos_activos = Event::where([['status', 1],['online', 1], ['fecha', '>', Carbon::now()]])->orderBy('fecha', 'ASC')->get();

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

        DB::table($evento->tabla)->where([['user', Auth::id()], ['status', 2]])->increment('impreso');
      
        $pdf = \PDF::loadView('user.boleto', compact('data', 'boletos', 'precio', 'evento'));

    	return $pdf->download('ticket_'.$evento->tabla.'.pdf');
    }

    // public function updateDb() {

        // $table = 'roberto_tapia_mexicali_23mar';

    	// for( $i = 1; $i < 487; $i++){
    	// 	DB::table('roberto_tapia_mexicali_23mar')->where('id', $i)->update(['codigo_barras' => substr(md5('roberto_tapia_mexicali_23mar'.$i),0,10)]);
    	// }

    //     $cb = 919;
    //     $rows = [];

    //     for($i = 1; $i <= 2060; $i++){

    //         $row = ['seccion' => 'Numerado',
    //                 'bloque' => '',
    //                 'fila' => 'J',
    //                 'asiento' => $i,
    //                 'status' => 0,
    //                 'impreso' => 0,
    //                 'forma_pago' => null,
    //                 'folio' => null,
    //                 'codigo_barras' => substr(md5($table.$cb),0,10),
    //                 'token_vlinea' => null,
    //                 'user' => null,
    //                 'fecha_venta' => null];

    //         array_push($rows, $row);
    //         $cb++;

    //     }

    //     DB::table($table)->insert($rows);

    // 	dd('done');
    // }

    // public function initTable(){
    //     $table = 'ornelas_celaya_04abr';

    //     $asiento = 42;
    //     $rows = [];
    //     $cb = 683;

    //     foreach(range('L', 'Q') as $fila){
            
    //         for($i = 2; $i <= $asiento; $i++){
    //             $row = ['seccion' => 'Oro',
    //                 'bloque' => '',
    //                 'fila' => $fila,
    //                 'asiento' => $i,
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
    //     }

    //      DB::table($table)->insert($rows);

    //      echo 'Inserts R done';
    // }

}

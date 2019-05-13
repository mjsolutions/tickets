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

        DB::table($evento->tabla)->where([['user', Auth::id()], ['status', 2]])->increment('impreso');
      
        $pdf = \PDF::loadView('user.boleto', compact('data', 'boletos', 'precio', 'evento'));

    	return $pdf->download('ticket_'.$evento->tabla.'.pdf');
    }

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
    //     $table = 'andres_suarez_celaya_31may';

    //     $asiento = 10;
    //     $rows = [];
    //     $cb = 100;

    //     foreach(range('K', 'O') as $fila){
            
    //         for($i = 1; $i <= $asiento; $i++){
    //             $row = ['seccion' => 'Oro',
    //                 'bloque' => 'oro-1',
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

    //      echo 'Insert oro done';
    // }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Barryvdh\DomPDF\PDF;

class PaneldeUsuarioController extends Controller
{
    public function perfil() {
    	return view('user.perfil');
    }

    public function eventos() {

        /** Numerados **/
        $oceransky = DB::table('oceransky_morelia_01mar')->where('user', Auth::id())->whereIn('status', [2, 3])->get();
        $mj = DB::table('homenaje_mj_morelia_06mar')->where('user', Auth::id())->whereIn('status', [2, 3])->get();
        $roberto = DB::table('roberto_tapia_mexicali_23mar')->where('user', Auth::id())->whereIn('status', [2, 3])->get();

        /** General **/
        // $gon21 = DB::table('gon_curiel_torreon_21feb')->where([['user', Auth::id()],['status', 2]])->get();
        $gon15 = DB::table('gon_curiel_slp_15feb')->where([['user', Auth::id()],['status', 2]])->get();
        // $pate['ags'] = DB::table('pate_de_fua_ags_16nov')->where([['user', Auth::id()],['status', 2]])->get();  	

    	return view('user.eventos', compact('gon15', 'oceransky', 'mj', 'roberto'));
    }

    public function printTicket( $id ){

        $event_type = 'general';
        list( $artista, $ciudad ) = explode( "-", $id );
        $d['cliente'] = Auth::user()->name.' '.Auth::user()->last_name.' '.Auth::user()->second_lname;

        // $d['evento'] = "PATÉ DE FUA";
        // $d['hr'] = "21:00 hrs";
        // $d['precio'] = "450.00";
        // $d['img'] = "img/pate-de-fua-$ciudad.jpg";

        // switch( $ciudad ) {
        //     case 'ags';
        //         $d['fecha'] = '16 de noviembre 2018';
        //         $d['ciudad'] = 'Aguascalientes';
        //         $d['lugar'] = 'Patio Outdoor Disco';
        //         $table = 'pate_de_fua_'.$ciudad.'_16nov';break;
        // }

        switch($artista){
            case 'carlos_macias':
                $d['evento'] = "CARLOS MACIAS";
                $d['hr'] = "21:00 hrs";
                $d['precio'] = "530.00";
                $d['img'] = "img/macias-morelia.jpg";
                $d['fecha'] = '08 de febrero 2019';
                $d['ciudad'] = 'Morelia, Mich.';
                $d['lugar'] = 'Café del Olmo';
                $table = 'carlos_macias_morelia_08feb';
                break;
            case 'carlos_macias22':
                $d['evento'] = "CARLOS MACIAS";
                $d['hr'] = "21:00 hrs";
                $d['precio'] = "530.00";
                $d['img'] = "img/macias-morelia-2019.jpg";
                $d['fecha'] = '22 de febrero 2019';
                $d['ciudad'] = 'Morelia, Mich.';
                $d['lugar'] = 'Café del Olmo';
                $table = 'carlos_macias_morelia_22feb';
                break;
            case 'carlos_macias23':
                $d['evento'] = "CARLOS MACIAS";
                $d['hr'] = "21:00 hrs";
                $d['precio'] = "530.00";
                $d['img'] = "img/macias-morelia-2019.jpg";
                $d['fecha'] = '23 de febrero 2019';
                $d['ciudad'] = 'Morelia, Mich.';
                $d['lugar'] = 'Café del Olmo';
                $table = 'carlos_macias_morelia_23feb';
                break;
            case 'gon21':
                $d['evento'] = "GON CURIEL";
                $d['hr'] = "21:00 hrs";
                $d['precio'] = "250.00";
                $d['img'] = "img/gon-torreon.jpg";
                $d['fecha'] = '21 de febrero 2019';
                $d['ciudad'] = 'Torreón';
                $d['lugar'] = 'El Foro';
                $table = 'gon_curiel_torreon_21feb';
                break;
            case 'gon15':
                $d['evento'] = "GON CURIEL";
                $d['hr'] = "21:00 hrs";
                $d['precio'] = "250.00";
                $d['img'] = "img/gon-slp.png";
                $d['fecha'] = '15 de febrero 2019';
                $d['ciudad'] = 'San Luis Potosí';
                $d['lugar'] = 'Roadhouse';
                $table = 'gon_curiel_slp_15feb';
                break;
            case 'marwan':
                $event_type = 'numerado';
                $d['evento'] = "MARWAN";
                $d['hr'] = "20:30 hrs";
                $d['img'] = "img/marwan-morelia.jpg";
                $precio['Diamante'] = "420.00";
                $precio['Oro'] = "320.00";
                $d['fecha'] = '15 de febrero 2019';
                $d['ciudad'] = 'Morelia, Mich.';
                $d['lugar'] = 'Teatro Stella Inda';
                $table = 'marwan_morelia_15feb';
                break;
            case 'oceransky':
                $event_type = 'numerado';
                $d['evento'] = "EDGAR OCERANSKY";
                $d['hr'] = "20:30 hrs";
                $d['img'] = "img/oceransky-morelia.jpg";
                $precio['Diamante'] = "600.00";
                $precio['Oro'] = "450.00";
                $precio['Plata'] = "350.00";
                $d['fecha'] = '01 de marzo 2019';
                $d['ciudad'] = 'Morelia, Mich.';
                $d['lugar'] = 'Teatro Stella Inda';
                $table = 'oceransky_morelia_01mar';
                break;
            case 'mj':
                $event_type = 'numerado';
                $d['evento'] = "HOMENAJE MICHAEL JACKSON REY DEL POP";
                $d['hr'] = "21:00 hrs";
                $d['img'] = "img/homenaje-michael-jackson.jpg";
                $precio['Diamante'] = "450.00";
                $precio['Oro'] = "350.00";
                $precio['Plata'] = "250.00";
                $d['fecha'] = '06 de marzo 2019';
                $d['ciudad'] = 'Morelia, Mich.';
                $d['lugar'] = 'Teatro Morelos';
                $table = 'homenaje_mj_morelia_06mar';
                break;
            case 'roberto':
                $event_type = 'numerado';
                $d['evento'] = "ROBERTO TAPIA";
                $d['hr'] = "21:00 hrs";
                $d['img'] = "img/roberto-mexicali.jpg";
                $precio['VIP'] = "970.00";
                $precio['Numerado'] = "650.00";
                $precio['General'] = "270.00";
                $d['fecha'] = '23 de marzo 2019';
                $d['ciudad'] = 'Mexicali, B.C.';
                $d['lugar'] = 'Palenque del FEX';
                $table = 'roberto_tapia_mexicali_23mar';
                break;
        }
        // $ciudad = substr($id, strpos($id, '-') + 1 );        

    
    	$data = (object) $d;

        $db = DB::table($table)->where([['user', Auth::id()], ['status', 2]])->get();
        DB::table($table)->where([['user', Auth::id()], ['status', 2]])->increment('impreso');

        if( $event_type == 'numerado' ) {

            $pdf = \PDF::loadView('user.boleto', compact('data', 'db', 'precio'));
            
        }else{
            
            $pdf = \PDF::loadView('user.boleto-general', compact('data', 'db'));
        }       


    	return $pdf->download('Ticket_'.$table.'.pdf');
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

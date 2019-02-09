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
        $marwan = DB::table('marwan_morelia_15feb')->where('user', Auth::id())->whereIn('status', [2, 3])->get();

        /** General **/
        $carlos = DB::table('carlos_macias_morelia_08feb')->where([['user', Auth::id()],['status', 2]])->get();
        // $pate['ags'] = DB::table('pate_de_fua_ags_16nov')->where([['user', Auth::id()],['status', 2]])->get();    	

    	return view('user.eventos', compact('marwan', 'carlos'));
    }

    public function printTicket( $id ){

        $event_type = 'general';
        list( $artista, $ciudad ) = explode( "-", $id );
        $d['cliente'] = Auth::user()->name.' '.Auth::user()->last_name.' '.Auth::user()->second_lname;

        if( $artista == 'marwan' ){
            
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

        }elseif( $artista == 'pate' ){

            $d['evento'] = "PATÉ DE FUA";
            $d['hr'] = "21:00 hrs";
            $d['precio'] = "450.00";
            $d['img'] = "img/pate-de-fua-$ciudad.jpg";

            switch( $ciudad ) {
                case 'ags';
                    $d['fecha'] = '16 de noviembre 2018';
                    $d['ciudad'] = 'Aguascalientes';
                    $d['lugar'] = 'Patio Outdoor Disco';
                    $table = 'pate_de_fua_'.$ciudad.'_16nov';break;
            }

            
        }elseif( $artista == 'carlos_macias' ){

            $d['evento'] = "CARLOS MACIAS";
            $d['hr'] = "21:00 hrs";
            $d['precio'] = "530.00";
            $d['img'] = "img/macias-morelia.jpg";
            $d['fecha'] = '08 de febrero 2019';
            $d['ciudad'] = 'Morelia, Mich.';
            $d['lugar'] = 'Café del Olmo';
            $table = 'carlos_macias_morelia_08feb';
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

    // 	for( $i = 1; $i < 487; $i++){
    // 		DB::table('homenaje_mj_morelia_06mar')->where('id', $i)->update(['codigo_barras' => substr(md5('homenaje_mj_morelia_06mar'.$i),0,10)]);
    // 	}

    // 	dd('done');
    // }

}

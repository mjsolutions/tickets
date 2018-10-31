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

        $mike = DB::table('mike_salazar_19oct')->where('user', Auth::id())->whereIn('status', [2, 3])->get();
        $ismael = DB::table('ismael_serrano_26oct')->where('user', Auth::id())->whereIn('status', [2, 3])->get();
        $raquel['ags'] = DB::table('raquel_ags_23nov')->where([['user', Auth::id()],['status', 2]])->get();
        $raquel['cordoba'] = DB::table('raquel_cordoba_03nov')->where([['user', Auth::id()],['status', 2]])->get();
        $raquel['morelia'] = DB::table('raquel_morelia_24nov')->where([['user', Auth::id()],['status', 2]])->get();
        $raquel['orizaba'] = DB::table('raquel_orizaba_01nov')->where([['user', Auth::id()],['status', 2]])->get();
        $raquel['pachuca'] = DB::table('raquel_pachuca_09nov')->where([['user', Auth::id()],['status', 2]])->get();
        $raquel['queretaro'] = DB::table('raquel_queretaro_07dic')->where([['user', Auth::id()],['status', 2]])->get();
        $raquel['slp'] = DB::table('raquel_slp_22nov')->where([['user', Auth::id()],['status', 2]])->get();
        $raquel['torreon'] = DB::table('raquel_torreon_30nov')->where([['user', Auth::id()],['status', 2]])->get();
    	$raquel['veracruz'] = DB::table('raquel_veracruz_02nov')->where([['user', Auth::id()],['status', 2]])->get();
    	

    	return view('user.eventos', compact('mike', 'ismael', 'raquel' ));
    }

    public function printTicket( $id ){

        // $event_type = 'numerado';

        $event_type = 'general';

        $d['evento'] = "RAQUEL SOFIA GIRA 2:00 am";
        $d['hr'] = "21:00 hrs";
        $d['precio'] = "110.00";
        $d['img'] = "img/$id.jpg";
    	$d['cliente'] = Auth::user()->name.' '.Auth::user()->last_name.' '.Auth::user()->second_lname;

        $ciudad = substr($id, strpos($id, '-') + 1 );


        switch( $ciudad ) {
            case 'orizaba';
                $d['fecha'] = '01 de noviembre 2018';
                $d['ciudad'] = 'Orizaba Veracruz';
                $d['lugar'] = 'Mercadito Orizaba';
                $table = 'raquel_'.$ciudad.'_01nov';break;
            case 'veracruz';
                $d['fecha'] = '02 de noviembre 2018';
                $d['ciudad'] = 'Veracruz veracruz';
                $d['lugar'] = 'Aguamala Bar';
                $table = 'raquel_'.$ciudad.'_02nov';break;
            case 'cordoba';
                $d['fecha'] = '03 de noviembre 2018';
                $d['ciudad'] = 'Córdoba veracruz';
                $d['lugar'] = 'Sabina Live';
                $table = 'raquel_'.$ciudad.'_03nov';break;
            case 'pachuca';
                $d['fecha'] = '09 de noviembre 2018';
                $d['ciudad'] = 'Pachuca Hidalgo';
                $d['lugar'] = 'Alliroos Cantabar';
                $table = 'raquel_'.$ciudad.'_09nov';break;
            case 'slp';
                $d['fecha'] = '22 de noviembre 2018';
                $d['ciudad'] = 'San Luis Potosí';
                $d['lugar'] = 'Restaurante y Bar Casa Vieja';
                $table = 'raquel_'.$ciudad.'_22nov';break;
            case 'ags';
                $d['fecha'] = '23 de noviembre 2018';
                $d['ciudad'] = 'Aguascalientes';
                $d['lugar'] = 'La Tercera';
                $table = 'raquel_'.$ciudad.'_23nov';break;
            case 'morelia';
                $d['fecha'] = '24 de noviembre 2018';
                $d['ciudad'] = 'Morelia Michoacan';
                $d['lugar'] = 'Café del Olmo';
                $table = 'raquel_'.$ciudad.'_24nov';break;
            case 'torreon';
                $d['fecha'] = '30 de noviembre 2018';
                $d['ciudad'] = 'Torreon Coahuila';
                $d['lugar'] = 'La Bicicleta';
                $d['precio'] = '165';
                $table = 'raquel_'.$ciudad.'_30nov';break;
            case 'queretaro';
                $d['fecha'] = '07 de diciembre 2018';
                $d['ciudad'] = 'Querétaro';
                $d['lugar'] = 'Portón de Santiago';
                $table = 'raquel_'.$ciudad.'_07dic';break;
        }

    
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

    // 	for( $i = 1; $i < 1339; $i++){
    // 		DB::table('mike_salazar_19oct')->where('id', $i)->update(['codigo_barras' => substr(md5('mike_salazar_19oct'.$i),0,10)]);
    // 	}

    // 	dd('done');
    // }

}

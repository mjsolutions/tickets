<?php

namespace App\Http\Controllers;

use App\Franco31;
use App\Franco317;
use App\Franco01;
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

        $franco31 = Franco31::where([['user', Auth::id()], ['status', 2]])->get();
    	$franco317 = Franco317::where([['user', Auth::id()], ['status', 2]])->get();
    	$franco01 = Franco01::where([['user', Auth::id()], ['status', 2]])->get();

    	return view('user.eventos', compact('franco31', 'franco01', 'franco317'));
    }

    public function printTicket( $id ){

    	if( $id == 1 ){
    		$db = Franco01::where([['user', Auth::id()], ['status', 2]])->get();
            $d['fecha'] = "01 / Agosto / 2018";
            $d['hr'] = "21:30 hrs";
    		$d['img'] = "img/franco-morelia.jpg";

    		$impreso = $db->first()->impreso + 1;

    		Franco01::where([['user', Auth::id()], ['status', 2]])->update(['impreso' => $impreso]);

    	}else if( $id == 31 ){
    		$db = Franco31::where([['user', Auth::id()], ['status', 2]])->get();
    		$d['fecha'] = "31 / Agosto / 2018";
            $d['hr'] = "21:30 hrs";
            $d['img'] = "img/franco-morelia.jpg";

    		$impreso = $db->first()->impreso + 1;

    		Franco31::where([['user', Auth::id()], ['status', 2]])->update(['impreso' => $impreso]);
    	}else{
            $db = Franco317::where([['user', Auth::id()], ['status', 2]])->get();
            $d['fecha'] = "31 / Agosto / 2018";
            $d['hr'] = "19:00 hrs";
            $d['img'] = "img/franco-morelia-317.jpg";

            $impreso = $db->first()->impreso + 1;

            Franco317::where([['user', Auth::id()], ['status', 2]])->update(['impreso' => $impreso]);
        }

    	$d['evento'] = "FRANCO ESCAMILLA";
    	$d['lugar'] = "TEATRO MORELOS";
    	$d['ciudad'] = "MORELIA";
    	$d['cliente'] = Auth::user()->name.' '.Auth::user()->last_name.' '.Auth::user()->second_lname;
    	$precio['Plata'] = "500.00";
    	$precio['Oro'] = "600.00";
    	$precio['Diamante'] = "750.00";

    	$data = (object) $d;

    	$pdf = \PDF::loadView('user.boleto', compact('data', 'db', 'precio'));
    	return $pdf->download('Ticket_bolematico_Franco_Morelia.pdf');
    }

    // public function updateDb() {

    // 	for( $i = 1; $i < 1339; $i++){
    // 		DB::table('mike_salazar_19oct')->where('id', $i)->update(['codigo_barras' => substr(md5('mike_salazar_19oct'.$i),0,10)]);
    // 	}

    // 	dd('done');
    // }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Franco6;
use App\Franco7;
use App\Deloce;
use App\RTM;

class ApiController extends Controller
{
    public function getFilas($table, $zona) {
        if($table == "Franco6"){
            return Franco6::select('fila')->where([['seccion', $zona], ['status', 0]])->groupBy('fila')->get();
        }elseif($table == "Deloce"){
            return Deloce::select('fila')->where([['seccion', $zona], ['status', 0]])->groupBy('fila')->get();
        }elseif($table == "RTM"){
            if($zona == 'General'){
                $disponibles = 2406 - (RTM::where('seccion', 'General')->sum('asiento'));
                return $disponibles;
            }
            return RTM::select('fila')->where([['seccion', $zona], ['status', 0]])->groupBy('fila')->get();
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

}

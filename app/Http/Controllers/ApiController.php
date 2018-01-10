<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Franco6;
use App\Franco7;
use App\Deloce;
use App\Bronco;

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

}

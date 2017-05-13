<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Franco6;
use App\Franco7;
use App\Franco_sma;

class ApiController extends Controller
{
    public function getFilas($table, $zona) {
        if($table == "Franco6"){
            return Franco6::select('fila')->where([['seccion', $zona], ['status', 0]])->groupBy('fila')->get();
        }elseif($table == "Franco_sma"){
            return Franco_sma::select('fila')->where([['seccion', $zona], ['status', 0]])->groupBy('fila')->get();
        }elseif($table == "Franco_celaya"){
            return Franco_celaya::select('fila')->where([['seccion', $zona], ['status', 0]])->groupBy('fila')->get();
        }elseif($table == "Franco_guanajuato"){
            return Franco_guanajuato::select('fila')->where([['seccion', $zona], ['status', 0]])->groupBy('fila')->get();
        }
        return Franco7::select('fila')->where([['seccion', $zona], ['status', 0]])->groupBy('fila')->get();
    }

    public function getAsientos($table, $fila) {
        if($table == "Franco6"){
            return Franco6::select('id','asiento')->where([['fila', $fila], ['status', 0]])->get();   
        }elseif($table == "Franco_sma"){
            return Franco_sma::select('id','asiento')->where([['fila', $fila], ['status', 0]])->get();
        }elseif($table == "Franco_celaya"){
            return Franco_celaya::select('id','asiento')->where([['fila', $fila], ['status', 0]])->get();
        }elseif($table == "Franco_guanajuato"){
            return Franco_guanajuato::select('id','asiento')->where([['fila', $fila], ['status', 0]])->get();
        }
        return Franco7::select('id','asiento')->where([['fila', $fila], ['status', 0]])->get();
    }

}

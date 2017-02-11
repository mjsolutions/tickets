<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Morelos;
use App\Sofia;

class ApiController extends Controller
{
    public function getFilas($zona) {
    	return Morelos::select('fila')->where([['seccion', $zona], ['status', 0]])->groupBy('fila')->get();
    }

    public function getAsientos($fila) {
    	return Morelos::select('id','asiento')->where([['fila', $fila], ['status', 0]])->get();
    }

    public function getFilasSofia($zona) {
    	return Sofia::select('fila')->where([['seccion', $zona], ['status', 0]])->groupBy('fila')->get();
    }

    public function getAsientosSofia($fila) {
    	return Sofia::select('id','asiento')->where([['fila', $fila], ['status', 0]])->get();
    }
}

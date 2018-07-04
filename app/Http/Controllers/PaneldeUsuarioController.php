<?php

namespace App\Http\Controllers;

use App\Franco31;
use App\Franco01;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PaneldeUsuarioController extends Controller
{
    public function perfil() {
    	return view('user.perfil');
    }

    public function eventos() {

    	$franco31 = Franco31::where([['user', Auth::id()], ['status', 2]])->get();
    	$franco01 = Franco01::where([['user', Auth::id()], ['status', 2]])->get();

    	return view('user.eventos', compact('franco31', 'franco01'));
    }
}

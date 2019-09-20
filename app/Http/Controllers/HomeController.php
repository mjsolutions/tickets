<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Carbon\Carbon;

class HomeController extends Controller
{

    public function index()
    {
        $eventos = Event::where([['status', 1],['online', 1], ['fecha', '>', Carbon::now()->subHours(2)]])->orderBy('fecha', 'ASC')->get();

        $mes = ['', 'ENE', 'FEB', 'MAR', 'ABR', 'MAY', 'JUN', 'JUL', 'AGO', 'SEP', 'OCT', 'NOV', 'DIC'];
        return view('index', compact('eventos', 'mes'));
    }
}

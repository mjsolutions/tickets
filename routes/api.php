<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::get('/getFilas/{table}/{zona}', 'ApiController@getFilas');

Route::get('/getAsientos/{table}/{fila}', 'ApiController@getAsientos');

Route::get('/getAsientos2/{table}/{zona}/{fila}', 'ApiController@getAsientos2');

Route::get('/getFilasSofia/{zona}', 'ApiController@getFilasSofia');

Route::get('/getAsientosSofia/{fila}', 'ApiController@getAsientosSofia');

Route::post('/charge_paid', 'ApiController@chargePaid');
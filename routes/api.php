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
Route::get('/getAsientos/{table}/{zona}/{fila}', 'ApiController@getAsientos');
Route::get('/getMapAsientos/{table}/{bloque}/{order_fila}/{order_asiento}', 'ApiController@getMapAsientos');

Route::post('/charge_paid', 'ApiController@chargePaid');
// Route::post('/charge_created', 'ApiController@chargeCreated');
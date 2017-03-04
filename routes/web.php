<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
	return view('bolematico.index');
})->name('home');

Route::group(['prefix' => 'admin'], function() {
	Route::resource('users', 'UsersController');
	Route::get('users/{id}/destroy', [
		'uses'	=>	'UsersController@destroy',
		'as'	=>	'users.destroy'
		]);

	Route::get('paypal', function() {
		return view('admin.paypal.index');
	})->name('paypal.index');
});

/*
| Rutas para usuarios
*/
Route::group(['prefix'=>'bolematico'],function(){

	Route::get('inicio', function(){
		return view('bolematico.index');
	})->name('bolematico.inicio');

	Route::get('sofia', function(){
		return view('bolematico.sofia');
	})->name('bolematico.sofia');

});

/*
| Rutas para eventos
*/

Route::group(['prefix'=>'eventos'],function(){

	Route::get('norteno-morelia', function(){
		return view('eventos.norteno-morelia');
	})->name('eventos.norteno-morelia');

	Route::get('norteno-zamora', function(){
		return view('eventos.norteno-zamora');
	})->name('eventos.norteno-zamora');


	Route::get('compra', function(){
		return view('eventos.compra');
	})->name('eventos.compra');
});

// Se envia el pedido a Paypal
Route::post('payment', array(
	'as'	=>	'payment',
	'uses'	=>	'PaypalIndexController@postPayment',
	));

//Paypal redirecciona a esta ruta
Route::get('payment/status', array(
	'as'	=>	'payment.status',
	'uses'	=>	'PaypalIndexController@getPaymentStatus',
	));

// Rutas para evento de sofia
Route::post('paymentsofia', array(
	'as'	=>	'paymentsofia',
	'uses'	=>	'PaypalSofiaController@postPayment',
	));

//Paypal redirecciona a esta ruta
Route::get('paymentsofia/status', array(
	'as'	=>	'paymentsofia.status',
	'uses'	=>	'PaypalSofiaController@getPaymentStatus',
	));

Auth::routes();

Route::get('/home', 'HomeController@index');

// Route::get('api/getFilas', function() {
// 	return json_encode('value');
// });
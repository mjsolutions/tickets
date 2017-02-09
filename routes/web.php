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

	Route::get('/', function(){
		return view('bolematico.index');
	});

	Route::get('inicio', function(){
		return view('bolematico.index');
	})->name('bolematico.inicio');

	Route::get('detalles', function(){
		return view('bolematico.detalles');
	})->name('bolematico.detalles');

	Route::resource('payment','PaypalIndexController');
});

// Route::get('payment', array(
// 	'as' => 'payment',
// 	'uses' => 'PaypalIndexController@postPayment',
// 	));

// Route::get('payment/status', array(
// 	'as' => 'payment.status',
// 	'uses' => 'PaypalIndexController@getPaymentStatus',
// 	));

// Se envia el pedido a Paypal
Route::get('payment', array(
	'as'	=>	'payment',
	'uses'	=>	'PaypalIndexController@postPayment',
	));

//Paypal redirecciona a esta ruta
Route::get('payment/status', array(
	'as'	=>	'payment.status',
	'uses'	=>	'PaypalIndexController@getPaymentStatus',
	));
Auth::routes();

Route::get('/home', 'HomeController@index');

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

/**
 * Generales
 */

Route::get('/', function () { return view('index'); })->name('index');

Route::get('/contacto', function () { return view('contacto'); })->name('contacto');

Route::get('/quienes-somos', function () { return view('quienes-somos'); })->name('quienes-somos');

/**
 * Email
 */

Route::post('contactForm', array(
	'as'	=>	'contactForm',
	'uses'	=>	'MailController@contactForm',
));

/**
 * Control Panel
 */

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


/**
 * Eventos
 */
Route::group(['prefix'=>'eventos'],function(){

	$v = "";
	Route::get('{view}', function($view){
		$v = 'eventos.'.$view;
		return view($v);
	});

	Route::get('compra', function(){
		return view('eventos.compra');
	})->name('eventos.compra');

});

/**
 * Paypal
 */
Route::post('payment', array(
	'as'	=>	'payment',
	'uses'	=>	'PaypalIndexController@postPayment',
	));

//Paypal redirecciona a esta ruta
Route::get('payment/status', array(
	'as'	=>	'payment.status',
	'uses'	=>	'PaypalIndexController@getPaymentStatus',
	));

/**
 * Autenticacion
 */
Auth::routes();

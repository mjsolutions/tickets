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

// Route::get('/mail', function () { 
// 		$data['img'] = "img/franco-morelia.jpg";
// 		$data['evento'] = "Franco Escamilla en Morelia";
// 			$data['img'] = "img/franco-morelia.jpg";
// 			$data['lugar'] = "Teatro Morelos";
// 			$data['fecha'] = "6 de Julio";
// 			$data['hr'] = "9:30 pm";
// 			$data['folios'] = "065465,0364684,063548";
// 			$data['descripcion'] = "fila...";
// 			$data['transaccion'] = "fddñflkgd";
// 			$data['user'] = "Auth::user()->name";
// 			$data['email'] = "Auth::user()->email";
// 	return view('emails.compra', ['data' => $data]); 
// });


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
	})->name($v);

	Route::get('compra', function(){
		return view('eventos.compra');
	})->name('eventos.compra');

});

/**
 * Paypal
 */
Route::group(['prefix'=>'payment'],function(){
	Route::post('franco6', array(
	'as'	=>	'payment.franco6',
	'uses'	=>	'PaypalFranco6Controller@postPayment',
	));

	//Paypal redirecciona a esta ruta
	Route::get('franco6/status', array(
	'as'	=>	'payment.franco6.status',
	'uses'	=>	'PaypalFranco6Controller@getPaymentStatus',
	));


	Route::post('franco7', array(
	'as'	=>	'payment.franco7',
	'uses'	=>	'PaypalFranco7Controller@postPayment',
	));

	//Paypal redirecciona a esta ruta
	Route::get('franco7/status', array(
	'as'	=>	'payment.franco7.status',
	'uses'	=>	'PaypalFranco7Controller@getPaymentStatus',
	));

	Route::post('franco_sma', array(
	'as'	=>	'payment.franco_sma',
	'uses'	=>	'PaypalFranco_smaController@postPayment',
	));

	//Paypal redirecciona a esta ruta
	Route::get('franco_sma/status', array(
	'as'	=>	'payment.franco_sma.status',
	'uses'	=>	'PaypalFranco_smaController@getPaymentStatus',
	));

	Route::post('franco_celaya', array(
	'as'	=>	'payment.franco_celaya',
	'uses'	=>	'PaypalFranco_celayaController@postPayment',
	));

	//Paypal redirecciona a esta ruta
	Route::get('franco_celaya/status', array(
	'as'	=>	'payment.franco_celaya.status',
	'uses'	=>	'PaypalFranco_celayaController@getPaymentStatus',
	));

		Route::post('franco_guanajuato', array(
	'as'	=>	'payment.franco_guanajuato',
	'uses'	=>	'PaypalFranco_guanajuatoController@postPayment',
	));

	//Paypal redirecciona a esta ruta
	Route::get('franco_guanajuato/status', array(
	'as'	=>	'payment.franco_guanajuato.status',
	'uses'	=>	'PaypalFranco_guanajuatoController@getPaymentStatus',
	));
});


/**
 * Autenticacion
 */
Auth::routes();

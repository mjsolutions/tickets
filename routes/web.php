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


Route::get('/', [
	'as'	=>	'index',
	'uses'	=>	'HomeController@index'
]);

Route::get('/home', function () { return redirect()->route('index'); });

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

	Route::get('compra', function(){
		return view('eventos.compra');
	})->name('eventos.compra');

	Route::get('selecciona-lugares/{ciudad}', function($ciudad){
		return view('eventos.selecciona-lugares')->with(['ciudad' => $ciudad]);
	})->name('eventos.selecciona-lugares');

	Route::get('{view}', function($view){

		if(view()->exists('eventos.'.$view)){
			return view('eventos.'.$view);			
		}else{
			return view('errors.404');
		}
	});

});

/**
 * Paypal y pagos
 */
Route::group(['prefix'=>'payment'],function(){

	Route::post('bronco', array(
	'as'	=>	'payment.bronco',
	'uses'	=>	'PaypalBroncoController@postPayment',
	));

	//Paypal redirecciona a esta ruta
	Route::get('bronco/status', array(
	'as'	=>	'payment.bronco.status',
	'uses'	=>	'PaypalBroncoController@getPaymentStatus',
	));

	Route::post('details', array(
	'as'	=>	'payment.details',
	'uses'	=>	'PaymentController@paymentDetails',
	));

	Route::get('confirm/status', array(
	'as'	=>	'payment.confirm.status',
	'uses'	=>	'PaymentController@getPaymentStatus',
	));

	Route::post('confirm', array(
	'as'	=>	'payment.confirm',
	'uses'	=>	'PaymentController@confirmPayment',
	));

});

/**
 * Autenticacion
 */

Auth::routes();

/**
 * Panel de usuarios
 */
Route::group(['prefix' => 'micuenta','middleware' => 'auth'], function() {
    
    Route::get('perfil', [
    	'as'	=> 'cliente.perfil',
    	'uses'	=> 'PaneldeUsuarioController@perfil'

    ]);

    Route::get('eventos', [
    	'as'	=> 'cliente.eventos',
    	'uses'	=> 'PaneldeUsuarioController@eventos'

    ]);

     Route::get('ticket/{id}', [
    	'as'	=> 'cliente.ticket',
    	'uses'	=> 'PaneldeUsuarioController@printTicket'

    ]);

    // Route::get('codigo-barras', [
    // 	'as'	=> 'cliente.codigob',
    // 	'uses'	=> 'PaneldeUsuarioController@updateDb'

    // ]); 

});
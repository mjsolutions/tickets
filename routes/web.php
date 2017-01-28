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
	return view('welcome');
})->name('home');

Route::group(['prefix' => 'admin'], function() {
	Route::resource('users', 'UsersController');
	Route::get('users/{id}/destroy', [
		'uses'	=>	'UsersController@destroy',
		'as'	=>	'users.destroy'
		]);

	Route::get('paypal/index', function() {
		return view('admin.paypal.index');
	})->name('paypal.index');
});

// Route::get('payment', array(
// 	'as' => 'payment',
// 	'uses' => 'PaypalIndexController@postPayment',
// 	));

// Route::get('payment/status', array(
// 	'as' => 'payment.status',
// 	'uses' => 'PaypalIndexController@getPaymentStatus',
// 	));

// You can use "get" or "post" method below for payment..
Route::get('payment', 'PaypalIndexController@postPayment')->name('payment');
// This must be get method.
Route::get('payment/status', 'PaypalIndexController@getPaymentStatus');
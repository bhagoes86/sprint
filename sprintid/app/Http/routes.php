<?php

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::group(['middleware' => 'auth'], function () {
	Route::get('dashboard', ['as' => 'print.dashboard', 'uses' => 'HomeController@index']);
	// step 1
	Route::get('print', 'PrintController@index');
	Route::get('print/{code}', 'PrintController@searchPrint');
	Route::post('print', ['as' => 'print.step1', 'uses' => 'PrintController@create']);
	// step 2
	Route::get('konfirm/{code}', ['as' => 'print.step2', 'uses' => 'PrintController@confirm']);
	// step 3
	Route::get('ambil/{code}', ['as' => 'print.step3', 'uses' => 'PrintController@ambil']);
	// step 4
	Route::get('bayar/{code}', ['as' => 'print.step4', 'uses' => 'PrintController@bayar']);
});

Route::get('kritik-saran', function () {
	return "kritik-saran";
});


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

// Registration and login routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');



// Route::get('/login2', function(){
//  return view('contents.login');
// });



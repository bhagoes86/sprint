<?php

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

// print routing
Route::get('print', 'PrintController@index');
Route::post('print', ['as' => 'print.step1', 'uses' => 'PrintController@create']);


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



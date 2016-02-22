<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/login2', function(){
 return view('contents.login');
});

// untuk login system
Route::get('/login', ['as' => 'user.login', 'uses' => 'UserController@getLogin']);
Route::post('/login', ['as' => 'user.postLogin', 'uses' => 'UserController@postLogin']);



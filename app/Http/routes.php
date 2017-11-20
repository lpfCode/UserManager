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
Route::get('/', 'UserController@index');
Route::get('edit', 'UserController@edit');
Route::get('add', 'UserController@add');
Route::get('delete', 'UserController@delete');
Route::post('save', 'UserController@save');
Route::get('query', 'UserController@query');
Route::get('home', 'HomeController@index');
Route::get('about', 'AboutController@index');
Route::get('help', 'HelpController@index');
route::get('signup', 'UserController@signup');
//Route::controllers([
//	'auth' => 'Auth\AuthController',
//	'password' => 'Auth\PasswordController',
//]);

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

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/', function () {
    return view('index');
});

get('post/index', ['as' => 'posts', 'uses'=>'PostController@index']);
//get('auth/index', ['as' => 'posts', 'uses'=>'PostController@index']);

get('status/index', ['as' => 'statuses', 'uses'=>'StatusController@index']);
get('status/create', ['as' => 'statuses', 'uses'=>'StatusController@create']);
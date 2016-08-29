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
Route::get('frist','WelcomeController@showinfo');
Route::get('lap-trinh/{monhoc}',function($monhoc){
	return "Khóa học lập trình : $monhoc"; //return "khoa học lập trình".$monhoc;
});
Route::get('call-view', function(){
	$monhoc = "lập trình Laravel cơ bản";
	return view('view', compact('monhoc'));
});


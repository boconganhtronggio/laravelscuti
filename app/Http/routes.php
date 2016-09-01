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
/*Route::get('test',function (){
	return view('admin.cate.add');
});*/
Route::group(['prefix'=>'admin'], function(){
	Route::group(['prefix'=>'cate'], function(){
		Route::get('list',['as'=>'admin.cate.list','uses'=>'CateController@getList']);
		Route::get('add',['as'=>'admin.cate.getAdd','uses'=>'CateController@getAdd']);
		Route::post('add',['as'=>'admin.cate.getAdd','uses'=>'CateController@postAdd']);
		Route::delete('delete/{id}',['as'=>'admin.cate.getdelete','uses'=>'CateController@getdelete']);
		Route::get('edit',['as'=>'admin.cate.getedit','uses'=>'CateController@getedit']);
		Route::post('edit/{id}',['as'=>'admin.cate.postedit','uses'=>'CateController@postedit']);
		
	});
});
Route::group(['prefix'=>'admin'], function(){
	Route::group(['prefix'=>'user'], function(){
		/*Route::get('list',['as'=>'admin.user.list','uses'=>'UserController@getList']);*/
		Route::get('register',['as'=>'admin.user.register','uses'=>'UserController@getAdd']);
		Route::get('login',['as'=>'admin.user.login','uses'=>'UserController@getLogin']);
		Route::post('login',['as'=>'postLogin','uses'=>'UserController@postLogin']);
		Route::post('register',['as'=>'getregister','uses'=>'UserController@postregister']);
		/*Route::get('list',['as'=>'getList','uses'=>'CateController@getList']);*/
		Route::get('logout', array('uses' => 'UserController@doLogout'));
	});
});
Route::post('login', function () {
        if (Auth::attempt($user)) {
            return Redirect::route('home')
                ->with('flash_notice', 'You are successfully logged in.');
        }
});



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

// Route::get('/', function () {
//     // return view('welcome');

//     $orang = ['adam','fathira','satria'];
   	
//    	//basic routes//
//    	return view('welcome', compact('orang')); //php function compcat
//     // return view('welcome')->with('orang',$orang); //laravel function
//     // return view('welcome')->withOrang($orang); //laravel ver.b function
//     // return view('welcome')->with(['orang'=> $orang]); //laravel ber.c function
//     // return view('welcome', ['orang'=> $orang]); //array function
// });

// Route::get('/', 'MasterController@index');
// Route::get('/about', 'MasterController@about');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::auth();
    Route::get('/visitor','VisitorController@visitorForm');
    Route::post('/visitor','VisitorController@register');
	Route::get('/home', 'HomeController@index');
	Route::get('/', 'HomeController@index');
});



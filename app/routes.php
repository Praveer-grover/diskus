<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});


Route::post('/','HomeController@searchTopic');


Route::get('/signup',function(){
	if(Session::get('user')){
		Redirect::to('/');
	}
	else
		return View::make('signup');

});


Route::post('/signup','UserController@Signup');


Route::get('/login',function(){
	if(Session::get('user')){
		Redirect::to('/');
	}
	else
		return View::make('login');
});


Route::post('/login','UserController@Login');
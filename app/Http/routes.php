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

Route::get('/', function () {
    return view('welcome');
});
	//before @ is name of class and after @  is function in that class to be called

	//First parameter needs to be written in url after project directory to call
Route::get('signup', 'AdminController@signup');
Route::post('signup', 'AdminController@signup');		//Routes for signup page

Route::get('login', 'AdminController@login');
Route::post('login', 'AdminController@login');			//Routes for login page

Route::get('home', 'AdminController@home');				//Routes for Homepage
Route::post('home', 'AdminController@home');

Route::get('/delete/{id}', 'AdminController@delete');	//Routes for delete passed using query string
														//check home.blade.php line 28
														// front slash is mandatory in laravel before delete
														//no need to write post if not receiving value through form


Route::get('/edit/{id}', 'AdminController@edit');		//Routes for edit

Route::get('update', 'AdminController@update');
Route::post('update', 'AdminController@update');		// This Route is the action of form of update page

Route::get('logout', 'AdminController@logout');
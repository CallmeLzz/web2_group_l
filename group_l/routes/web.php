<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [
	'as' => 'home',
	'uses' => 'HomeController@index'
	]);
/*Route::get('/detail', [
	'as' => 'detail',
	'uses' => 'DetailController@index'
	]);
Route::get('/category', [
	'as' => 'category',
	'uses' => 'CategoryController@index'
	]);
Route::get('/administrator', [
	'as' => 'administrator',
	'uses' => 'AuthenticationController@index'
	]);*/
Route::get('/admin', 'AdminController@index');
Route::get('/edit', 'AdminController@edit');
Route::get('/update', 'AdminController@update');
Route::get('/delete', 'AdminController@delete');
Route::get('/addView', 'AdminController@addView');
Route::get('/add', 'AdminController@add');
Route::get('/search', 'AdminController@searchMenu');
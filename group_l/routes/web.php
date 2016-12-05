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
//================================== Admin Page ==================================//
Route::get('/admin/page', [
	'as' => 'admin',
	'uses' => 'AdminController@index'
	]);
Route::get('/admin/page/menu', [
	'as' => 'admin.menu',
	'uses' => 'AdminController@menuView'
	]);
//================================== Function ==================================//
Route::get('/admin/edit', [
	'as' => 'edit',
	'uses' => 'AdminController@edit'
	]);
Route::get('/admin/delete', [
	'as' => 'delete',
	'uses' => 'AdminController@delete'
	]);
Route::get('/admin/add', [
	'as' => 'add',
	'uses' => 'AdminController@add'
	]);
Route::get('/admin/search', [
	'as' => 'search',
	'uses' => 'AdminController@searchMenu'
	]);
Route::get('/admin/uploadFileView', 'AdminController@uploadFileView');
Route::post('/admin/uploadFile', 'AdminController@uploadFile');
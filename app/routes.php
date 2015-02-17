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


Route::group(['prefix' => 'admin'], function(){
	Route::group(['prefix' => 'crud'], function(){
		Route::get('{table}', ['as' => 'admin.crud.index', 'uses' => 'CrudController@index']);

		Route::get('{table}/create', ['as' => 'admin.crud.create.form', 'uses' => 'CrudController@create']);
		Route::post('{table}/create', ['as' => 'admin.crud.create', 'uses' => 'CrudController@store']);

		Route::get('{table}/{id}/edit', ['as' => 'admin.crud.edit.form', 'uses' => 'CrudController@edit']);
		Route::post('{table}/{id}', ['as' => 'admin.crud.edit', 'uses' => 'CrudController@update']);

		Route::get('{table}/{id}', ['as' => 'admin.crud.delete', 'uses' => 'CrudController@destroy']);
	});
});
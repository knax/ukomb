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

Route::group(['before' => 'auth'], function () {

    Route::get('', ['as' => 'homepage', 'uses' => 'HomeController@homepage']);

    Route::group(['prefix' => 'admin'], function () {
        Route::group(['prefix' => 'crud'], function () {
            Route::get('{table}', ['as' => 'admin.crud.index', 'uses' => 'CrudController@index']);

            Route::get('{table}/create', ['as' => 'admin.crud.create.form', 'uses' => 'CrudController@create']);
            Route::post('{table}/create', ['as' => 'admin.crud.create', 'uses' => 'CrudController@store']);

            Route::get('{table}/{id}/edit', ['as' => 'admin.crud.edit.form', 'uses' => 'CrudController@edit']);
            Route::post('{table}/{id}', ['as' => 'admin.crud.edit', 'uses' => 'CrudController@update']);

            Route::get('{table}/{id}/delete', ['as' => 'admin.crud.delete', 'uses' => 'CrudController@destroy']);
        });

        Route::group(['prefix' => 'user'], function() {
            Route::get('', ['as' => 'admin.user.list', 'uses' => 'AdminController@listUser']);
            Route::get('{id}/activate', ['as' => 'admin.user.activate', 'uses' => 'AdminController@activateUser']);
            Route::get('{id}/deactivate', ['as' => 'admin.user.deactivate', 'uses' => 'AdminController@deactivateUser']);
            Route::get('{id}/delete', ['as' => 'admin.user.delete', 'uses' => 'AdminController@deleteUser']);
        });
    });

    Route::get('logout', ['as' => 'auth.logout', 'uses' => 'AuthController@logout']);
});

Route::get('login', ['as' => 'auth.login.form', 'uses' => 'AuthController@loginForm']);
Route::post('login', ['as' => 'auth.login', 'uses' => 'AuthController@login']);
Route::get('register', ['as' => 'auth.register.form', 'uses' => 'AuthController@registerForm']);
Route::post('register/next', ['as' => 'auth.register.next', 'uses' => 'AuthController@registerNext']);
Route::post('register', ['as' => 'auth.register', 'uses' => 'AuthController@register']);
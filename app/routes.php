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
            Route::get('', ['as' => 'admin.crud.list', 'uses' => 'CrudController@listTable']);
            Route::get('{table}', ['as' => 'admin.crud.index', 'uses' => 'CrudController@index']);

            Route::get('{table}/create', ['as' => 'admin.crud.create.form', 'uses' => 'CrudController@create']);
            Route::post('{table}/create', ['as' => 'admin.crud.create', 'uses' => 'CrudController@store']);

            Route::get('{table}/{id}/edit', ['as' => 'admin.crud.edit.form', 'uses' => 'CrudController@edit']);
            Route::post('{table}/{id}', ['as' => 'admin.crud.edit', 'uses' => 'CrudController@update']);

            Route::get('{table}/{id}/delete', ['as' => 'admin.crud.delete', 'uses' => 'CrudController@destroy']);

            Route::get('{table}/report', ['as' => 'admin.crud.report', 'uses' => 'CrudController@report']);
        });

        Route::group(['prefix' => 'user'], function () {
            Route::get('', ['as' => 'admin.user.list', 'uses' => 'AdminController@listUser']);
            Route::get('{id}/activate', ['as' => 'admin.user.activate', 'uses' => 'AdminController@activateUser']);
            Route::get('{id}/deactivate',
                ['as' => 'admin.user.deactivate', 'uses' => 'AdminController@deactivateUser']);
            Route::get('{id}/delete', ['as' => 'admin.user.delete', 'uses' => 'AdminController@deleteUser']);
        });
    });

    Route::group(['prefix' => 'siswa'], function () {

        Route::group(['prefix' => 'nilai'], function () {
            Route::get('', ['as' => 'siswa.nilai.index', 'uses' => 'SiswaController@listNilai']);
        });

        Route::group(['prefix' => 'data_diri'], function () {
            Route::get('', ['as' => 'siswa.data_diri', 'uses' => 'SiswaController@dataDiri']);
            Route::get('edit', ['as' => 'siswa.data_diri.edit.form', 'uses' => 'SiswaController@editDataDiriForm']);
            Route::post('', ['as' => 'siswa.data_diri.edit', 'uses' => 'SiswaController@editDataDiri']);
        });

    });

    Route::group(['prefix' => 'guru'], function () {
        Route::group(['prefix' => 'beri_nilai'], function () {
            Route::get('', ['as' => 'guru.beri_nilai.list_siswa', 'uses' => 'GuruController@listSiswa']);
            Route::get('{siswaId}',
                ['as' => 'guru.beri_nilai.standar_kompetensi', 'uses' => 'GuruController@listStandarKompetensi']);
            Route::get('{siswaId}/{standarKompetensiId}',
                ['as' => 'guru.beri_nilai.form', 'uses' => 'GuruController@beriNilaiForm']);
            Route::post('{siswaId}/{standarKompetensiId}',
                ['as' => 'guru.beri_nilai', 'uses' => 'GuruController@beriNilai']);
        });

        Route::group(['prefix' => 'data_diri'], function () {
            Route::get('', ['as' => 'guru.data_diri', 'uses' => 'GuruController@dataDiri']);
            Route::get('edit', ['as' => 'guru.data_diri.edit.form', 'uses' => 'GuruController@editDataDiriForm']);
            Route::post('', ['as' => 'guru.data_diri.edit', 'uses' => 'GuruController@editDataDiri']);
        });

    });

    Route::get('logout', ['as' => 'auth.logout', 'uses' => 'AuthController@logout']);

    Route::get('change_password', ['as' => 'auth.change_password.form', 'uses' => 'AuthController@changePasswordForm']);
    Route::post('change_password', ['as' => 'auth.change_password', 'uses' => 'AuthController@changePassword']);
});

Route::get('login', ['as' => 'auth.login.form', 'uses' => 'AuthController@loginForm']);
Route::post('login', ['as' => 'auth.login', 'uses' => 'AuthController@login']);
Route::get('register', ['as' => 'auth.register.form', 'uses' => 'AuthController@registerForm']);
Route::post('register/next', ['as' => 'auth.register.next', 'uses' => 'AuthController@registerNext']);
Route::post('register', ['as' => 'auth.register', 'uses' => 'AuthController@register']);
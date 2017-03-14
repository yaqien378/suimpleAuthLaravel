<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/user/tambah', 'UserController@tambah');
    Route::post('/user/tambah', 'UserController@simpan');
    Route::get('/user', 'UserController@index');
    Route::get('/data', 'DataController@index');
    Route::get('/penjualan', 'PenjualanController@index');
    Route::get('/laporan', 'LaporanController@index');
});

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

Route::get('/', 'HomeController@index');

Route::get('pagos', 'PagosController@index');

Route::get('lista_pagos', 'PagosController@payList');

Route::get('balance', 'BalanceController@index');

Route::get('inversiones', 'InversionesController@index');
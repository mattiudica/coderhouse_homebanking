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

Route::get('/invest/create', 'investController@create');

Route::get('/services/create', 'PayController@create');
Route::post('/services/store', 'PayController@store');
Route::get('/services/last', 'PayController@index')->name('last_pay');

Route::post('/balance/store', 'BalanceController@store');
Route::get('/balance/index', 'BalanceController@index')->name('index');

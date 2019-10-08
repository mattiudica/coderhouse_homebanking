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
Route::post('/invest/create/coin', 'investController@getCoin');


Route::get('/services/create', 'PayController@create');
Route::post('/services/store', 'PayController@store');
Route::get('/services/services_list', 'BalanceController@create')->name('service_list');

Route::post('/balance/store', 'BalanceController@store');
Route::get('/balance/last', 'BalanceController@show')->name('last');
Route::get('/balance/index', 'BalanceController@index')->name('index');

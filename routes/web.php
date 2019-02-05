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
    return view('main');
});

Route::get('/cabinet/newAuction', 'LotController@newLot')->name('newAuction');


Route::get('/cabinet', 'CabinetController@show')->name('cabinet');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

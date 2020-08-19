<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/customeradd','CustomerController@create');
Route::post('/customeradd','CustomerController@store');
Route::get('/customer','CustomerController@index');
Route::get('/customer/{id}','CustomerController@detail');
Route::get('/customer/edit/{id}','CustomerController@edit');
Route::post('/customer/edit','CustomerController@update');

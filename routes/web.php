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

//pelanggan
Route::get('/pelanggan', 'pelanggancontroller@index');
Route::post('/pelanggan/create', 'pelanggancontroller@create');
Route::get('/pelanggan/{id}/edit', 'pelanggancontroller@edit');
Route::post('/pelanggan/{id}/update', 'pelanggancontroller@update');
Route::get('/pelanggan/{id}/delete', 'pelanggancontroller@delete');

//guru
Route::get('/guru', 'gurucontroller@index');
Route::post('/guru/create', 'gurucontroller@create');
Route::get('/guru/{id}/edit', 'gurucontroller@edit');
Route::post('/guru/{id}/update', 'gurucontroller@update');
Route::get('/guru/{id}/delete', 'gurucontroller@delete');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

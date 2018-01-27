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
    return view('auth.login');
});

Route::get('/wajibpajak', 'WajibPajakController@index')->name('wajibpajak.index');
Route::get('/inputdata', 'WajibPajakController@create')->name('wajibpajak.create');
Route::post('/inputdata', 'WajibPajakController@store')->name('wajibpajak.store');
Route::get('/wajibpajak/{wajib_pajak}/edit', 'WajibPajakController@edit')->name('wajibpajak.edit');
Route::patch('wajibpajak/{wajib_pajak}/edit','WajibPajakController@update')->name('wajibpajak.update');
Route::delete('wajibpajak/{wajib_pajak}/delete','WajibPajakController@destroy')->name('wajibpajak.destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




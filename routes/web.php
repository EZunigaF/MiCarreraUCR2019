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

Route::get('/', 'GuestController@indexMain')->name('index');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Route::post('/tests/create', 'TestController@create')->name('tests.create');
Route::resource('/tests', 'TestController')->middleware('auth');
Route::get('/list', 'GuestController@indexMain')->name('list');
Route::get('/listadoGuest', 'GuestController@show')->name('listGuest');


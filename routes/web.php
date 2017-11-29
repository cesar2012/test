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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});




Route::get('productos',	'ProductoController@index')->middleware('auth');
Route::get('productos/index',	'ProductoController@index')->name('productos.index');
Route::get('productos/create',	'ProductoController@create')->name('productos.create')->middleware('role:-standar');
Route::post('productos/store', 'ProductoController@store')->name('productos.store');
Route::get('productos/show/{id}', 'ProductoController@show')->name('productos.show');
Route::get('productos/edit/{id}', 'ProductoController@edit')->name('productos.edit');
Route::put('productos/update/{id}', 'ProductoController@update')->name('productos.update');
Route::delete('productos/destroy/{id}', 'ProductoController@destroy')->name('productos.destroy');



Route::get('/home', 'HomeController@index')->name('home');

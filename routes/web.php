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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/meus-links',['as'=>'admin.index', 'uses'=>'SmartController@index']);
Route::get('/editar-link/{id}/', 'SmartController@edit')->name('edit');
Route::get('/excluir/{id}/', 'SmartController@destroy')->name('destroy');
Route::get('/criar-links', 'SmartController@create')->name('create');
Route::post('/atualizar/{id}/', 'SmartController@update')->name('update');
Route::post('/store', 'SmartController@store')->name('store');

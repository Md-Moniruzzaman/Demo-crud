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

//crude

Route::get('/Contacts', 'ContactController@index');
Route::get('/Contacts/create', 'ContactController@create');
Route::post('/Contacts/store', 'ContactController@store')->name('Contacts.store');
Route::get('/Contacts/{id}/edit', 'ContactController@edit')->name('Contacts.edit');
Route::post('/Contacts/{id}/update', 'ContactController@update')->name('Contacts.update');
Route::get('/Contacts/{id}/destroy', 'ContactController@destroy')->name('Contacts.destroy');

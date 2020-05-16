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

Route::get('/', 'FrontendController@index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home/store', 'HomeController@store')->name('home.store');
Route::get('/home/{languageId}/edit', 'HomeController@edit')->name('home.edit');
Route::post('/home/{languageId}/update', 'HomeController@update')->name('home.update');
Route::delete('/home/{languageId}/delete', 'HomeController@delete')->name('home.delete');


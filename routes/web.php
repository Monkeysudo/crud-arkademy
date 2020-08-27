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

Route::get('/', 'ProductController@index');

Route::get('/create', 'ProductController@create')->name('create');

Route::post('/upload', 'ProductController@store')->name('upload');

Route::get('/edit/{id}', 'ProductController@edit')->name('edit');

Route::patch('/update/{id}', 'ProductController@update')->name('update');

Route::delete('/delete/{id}', 'ProductController@destroy')->name('delete');
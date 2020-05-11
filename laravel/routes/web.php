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

Route::get('login', 'LoginController@index')->name('login.index');
Route::post('login', 'LoginController@post')->name('login.post');
Route::get('register', 'RegisterController@index')->name('register.index');
Route::post('register', 'RegisterController@post')->name('register.post');
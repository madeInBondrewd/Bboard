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

Route::get('/bboard', 'HomeController@bboard')->name('bboard');

Route::get('/room', 'HomeController@room')->name('room');

Route::get('/private', 'HomeController@private')->name('private');

Route::get('/text', 'HomeController@text')->name('text');

Route::post('/store', 'HomeController@store')->name('store');

Route::post('/upload', 'HomeController@upload')->name('upload');


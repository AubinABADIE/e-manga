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
    return view('home');
});

Route::get('/mangas', 'MangaController@index');
Route::get('/manga/{id}', 'MangaController@show')->where('id', '[0-9]+');

Route::get('/volumes', 'VolumeController@index');
Route::get('/volume/{id}', 'VolumeController@show')->where('id', '[0-9]+');

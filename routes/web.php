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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users/logout', 'Auth\LoginController@logout');

Route::get('/mangas', 'MangaController@index');
Route::get('/manga/{id}', 'MangaController@show')->where('id', '[0-9]+');

Route::get('/volumes', 'VolumeController@index');
Route::get('/manga/{id}/volume/{id2}', 'VolumeController@show')->where('id', '[0-9]+', 'id2', '[0-9]*[-| ][0-9]*[-| ][0-9]*[-| ][0-9]*[-| ][0-9]*');

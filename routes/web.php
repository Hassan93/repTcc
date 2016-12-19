<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/', 'LoginController@login');// mostra o formulário
Route::post('/login', 'LoginController@postLogin');
Route::get('/logout', 'LoginController@logout');

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
Route::put('/login', 'LoginController@postLogin');//faz o login
Route::get('/logout', 'LoginController@logout');


Route::get('/register', 'RegistrationController@register');
Route::post('/register', 'RegistrationController@postRegister');

//Rotas para testes

Route::get('/faculdade','HomeController@faculdade');
Route::get('/visitante','HomeController@visitante');
Route::get('/admin','HomeController@admin');
Route::get('/estatisticas','HomeController@estatisticas');
Route::get('/usuarios','HomeController@usuarios');

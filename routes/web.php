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


Route::get('/', function ()
{
	return redirect(url('/login'));
});

Route::group(['middleware'=>['web']], function(){
	Route::get('/login', 'LoginController@login');// mostra o formulário
	Route::post('/login', 'LoginController@postLogin');//faz o login
	Route::get('/logout', 'LoginController@logout');


	Route::get('/register', 'RegistrationController@register');
	Route::post('/register', 'RegistrationController@postRegister');

	//Rotas para testes

	Route::get('/faculdade/{id}','HomeController@faculdade');
	Route::get('/faculdade/{area}/monografia/{monografia}','HomeController@editar');
	Route::post('/faculdade/{area}/monografia/{monografia}','HomeController@edit');
	Route::post('/faculdade/{id}','HomeController@setMonografia');
	Route::get('/visitante','VisitantesController@index');
	Route::Post('/pesquisa','VisitantesController@getMonografias');
	Route::get('/baixar/{id}','FicheirosController@show')->name('download');

	
	Route::get('/admin','MonografiasController@index');
	Route::get('/estatisticas','HomeController@estatisticas');
	Route::get('/usuarios','UsuariosController@index');

	Route::resource('monografias', 'MonografiasController');
	Route::get('/monografia/{id}/publicar', 'MonografiasController@getMonografia');
	Route::post('/monografia/{id}/edit', 'MonografiasController@setMonografia');
	//Route::delete('/monografia/{id}', 'MonografiasController@apagar');
	Route::post('/monografia/{id}/publicar', 'MonografiasController@update');
	Route::resource('estatisticas', 'EstatisticasController');


});

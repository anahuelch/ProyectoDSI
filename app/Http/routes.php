<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function(){

	Route::resource('instituciones','InstitucionesController');


	Route::resource('objetivos','ObjetivosController');


	
	Route::get('instituciones/{id}/destroy', [
		'uses' => 'InstitucionesController@destroy',
		'as' => 'admin.instituciones.destroy'
	]);



		Route::get('objetivos/{id}/destroy', [
		'uses' => 'ObjetivosController@destroy',
		'as' => 'admin.objetivos.destroy'
	]);




});

Route::group(['prefix' => 'admin'], function(){

	Route::resource('coordinadores','CoordinadoresController');
	
	Route::get('coordinadores/{id}/destroy', [
		'uses' => 'CoordinadoresController@destroy',
		'as' => 'admin.coordinadores.destroy'
	]);
});

	Route::resource('areas','AreasController');
	
	Route::get('areas/{id}/destroy', [
		'uses' => 'AreasController@destroy',
		'as' => 'admin.areas.destroy'
	]);
});

Route::group(['prefix' => 'admin'], function(){


	Route::resource('estados','EstadosController');
	
	Route::get('estados/{id}/destroy', [
		'uses' => 'EstadosController@destroy',
		'as' => 'admin.estados.destroy'
	]);
});

Route::group(['prefix' => 'admin'], function(){

	Route::resource('actividades','ActividadesController'); // Relaciona la ruta con todos los métodos del controlador
	
	Route::get('actividades/{id}/destroy', [
		'uses' => 'ActividadesController@destroy',
		'as' => 'admin.actividades.destroy'
	]);
});
});

Route::group(['prefix' => 'admin'], function(){

	Route::resource('tipos','TiposController');
	
	Route::get('tipos/{id}/destroy', [
		'uses' => 'TiposController@destroy',
		'as' => 'admin.tipos.destroy'
	]);
});

Route::group(['prefix' => 'admin'], function(){

	Route::resource('convenios','ConveniosController');
	
	Route::get('convenios/{id}/destroy', [
		'uses' => 'ConveniosController@destroy',
		'as' => 'admin.convenios.destroy'
	]);
});




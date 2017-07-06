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


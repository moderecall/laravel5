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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::group(['prefix' => 'admin'], function(){
	Route::resource('base','Admin\BaseController');
	Route::resource('estadoflete','Admin\EstadoFleteController');
	Route::resource('genero','Admin\GeneroController');
	Route::resource('marca','Admin\MarcaController');
	Route::resource('modelovehiculo','Admin\ModeloVehiculoController');
	Route::resource('tipocarga','Admin\TipoCargaController');
	Route::resource('tipounidadmedida','Admin\TipoUnidadMedidaController');
	Route::resource('tipovehiculo','Admin\TipoVehiculoController');
    Route::resource('unidadmedida','Admin\UnidadMedidaController');
});

/**
 * rutas de admin base
 */
Route::post('admin/eliminar', [
		'as' => 'base_eliminar', 'uses' => 'Admin\BaseController@eliminar'
]);

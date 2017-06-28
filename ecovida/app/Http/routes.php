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

Route::get('/', 'ContenidoController@principal');
Route::get('principal', 'ContenidoController@principal');

Route::get('constructora', 'ContenidoController@constructora');
Route::get('paneles', 'ContenidoController@paneles');
Route::get('ahorradores', 'ContenidoController@ahorradores');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::resource('contenidos', 'ContenidoController');



Route::get('contenidos/{id}/delete', [
    'as' => 'contenidos.delete',
    'uses' => 'ContenidoController@destroy',
]);


Route::resource('contactos', 'ContactoController');

Route::get('contactos/{id}/delete', [
    'as' => 'contactos.delete',
    'uses' => 'ContactoController@destroy',
]);


Route::resource('alianzas', 'AlianzaController');

Route::get('alianzas/{id}/delete', [
    'as' => 'alianzas.delete',
    'uses' => 'AlianzaController@destroy',
]);


Route::resource('mensajes', 'MensajeController');

Route::get('mensajes/{id}/delete', [
    'as' => 'mensajes.delete',
    'uses' => 'MensajeController@destroy',
]);

Route::resource('productos', 'ProductoController');

Route::get('productos/{id}/delete', [
    'as' => 'productos.delete',
    'uses' => 'ProductoController@destroy',
]);




Route::get('producto/upload', 'UploadController@uploadForm');
Route::post('producto/upload', 'UploadController@uploadSubmit');

Route::resource('usuarios', 'UsuarioController');

Route::get('usuarios/{id}/delete', [
    'as' => 'usuarios.delete',
    'uses' => 'UsuarioController@destroy',
]);

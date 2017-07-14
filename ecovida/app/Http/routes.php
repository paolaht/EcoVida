<?php
use App\Http\Controllers\Controller\Auth;
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

Route::resource('ahorradores', 'AhorradorController');

Route::get('ahorradores/{id}/delete', [
    'as' => 'ahorradores.delete',
    'uses' => 'AhorradorController@destroy',
]);

Route::resource('paneles', 'PanelController');

Route::get('paneles/{id}/delete', [
    'as' => 'paneles.delete',
    'uses' => 'PanelController@destroy',
]);







Route::get('producto/upload', 'UploadController@uploadForm');
Route::post('producto/upload', 'UploadController@uploadSubmit');

Route::resource('usuarios', 'UsuarioController');

Route::get('usuarios/{id}/delete', [
    'as' => 'usuarios.delete',
    'uses' => 'UsuarioController@destroy',
]);


Route::resource('materials', 'MaterialController');

Route::get('materials/{id}/delete', [
    'as' => 'materials.delete',
    'uses' => 'MaterialController@destroy',
]);


Route::resource('compras', 'CompraController');

Route::get('compras/{id}/delete', [
    'as' => 'compras.delete',
    'uses' => 'CompraController@destroy',
]);


Route::resource('modelos', 'ModelosController');

Route::get('modelos/{id}/delete', [
    'as' => 'modelos.delete',
    'uses' => 'ModelosController@destroy',
]);


Route::resource('fotosModelos', 'FotosModeloController');

Route::get('fotosModelos/{id}/delete', [
    'as' => 'fotosModelos.delete',
    'uses' => 'FotosModeloController@destroy',
]);


Route::resource('materialesModelos', 'MaterialesModeloController');

Route::get('materialesModelos/{id}/delete', [
    'as' => 'materialesModelos.delete',
    'uses' => 'MaterialesModeloController@destroy',
]);


Route::resource('mantenimientos', 'MantenimientoController');

Route::get('mantenimientos/{id}/delete', [
    'as' => 'mantenimientos.delete',
    'uses' => 'MantenimientoController@destroy',
]);

//Route::get('/login', 'App\Http\Controllers\AuthController@showLogin'); // Mostrar login
//Route::post('/login', 'App\Http\Controllers\Auth\AuthController@postLogin'); // Verificar datos
//Route::get('salir', 'Auth\AuthController@logout'); // Finalizar sesión

//Route::get('salir', ['as' => 'users.updatePassword', 'uses' => 'UsersController@updatePassword']);
//Route::get('salir' , ['as' => 'logout' , 'uses'=> 'Auth\AuthController@logOut']);
//Route::get('salir', ['uses' => 'Auth\AuthController@logOut', 'before' => 'auth']);
Route::get('salir', ['as' => 'salir', 'uses' => 'Auth\AuthController@logOut']);





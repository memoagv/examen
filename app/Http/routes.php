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
    return view('principal');
});

Route::get('registrar_usuario', function () {
    return view('registrar_usuario');
});

Route::get('registrar_mascota', function () {
    return view('administrador.registrar_mascota');
});
Route::post('/usuarios', 'usuariosController@store'); 
Route::post('/mascotas', 'MascotasController@store'); 
Route::get('/ver_detalles/{id}', 'MascotasController@show'); 

Route::post('/log', 'LoginController@store');
Route::get('/acceder', 'LoginController@index'); 

Route::post('/logout', 'AdministradorController@logout');

Route::group(['middleware'=>'admin'], function(){
Route::get('/administrador', 'AdministradorController@index');
Route::get('/logout', 'AdministradorController@logout');

});

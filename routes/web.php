<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
//Listado de Criptomonedas
Route::get('/', 'MonedaController@List');
//Formulario de Monedas
Route::get('/criptomoneda/form', 'MonedaController@formMoneda');
//Guardar Monedas
Route::post('/criptomoneda/save','MonedaController@save')->name('save');
//Eliminar Usuarios
Route::delete('/criptomoneda/delete/{id}','MonedaController@delete')->name('delete');
//Formulario para editar usuarios
Route::get('/criptomoneda/editMoneda/{id}','MonedaController@editMoneda')->name('editMoneda');
//Edicion de usuarios
Route::patch('/criptomoneda/edit/{id}','MonedaController@edit')->name('edit');

//listado de rutas para el apartado de lenguajes
Route::get('/lenguaje/read', 'LenguajesController@read');
//formulario
Route::get('/lenguaje/update/{id}','LenguajesController@updateForm');

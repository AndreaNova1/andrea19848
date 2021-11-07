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
Route::get('/form', 'MonedaController@formMoneda');
//Guardar Monedas
Route::post('/save','MonedaController@save')->name('save');
//Eliminar Usuarios
Route::delete('/delete/{id}','MonedaController@delete')->name('delete');
//Formulario para editar usuarios
Route::get('/editMoneda/{id}','MonedaController@editMoneda')->name('editMoneda');
//Edicion de usuarios
Route::patch('/edit/{id}','MonedaController@edit')->name('edit');
//istado de rutas para el apartado de lenguajes
Route::get('/lenguaje/read', 'LenguajesController@read');

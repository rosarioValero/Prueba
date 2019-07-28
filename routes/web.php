<?php

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

Auth::routes();
// ruta que nos llevara a las ofertas que tenemos disponibles y hemos añadido
Route::resource('/usuarioOferta', 'UsuarioController');

// ruta que nos mostrara las ofertas que hemos añadido.
Route::resource('/misOfertas', 'MisOfertasController');

Route::get('/home', 'HomeController@index')->name('home');

Route::delete('usuarioOferta/eliminar/{id}', 'UsuarioController@eliminar')->name('ofertas.eliminar');

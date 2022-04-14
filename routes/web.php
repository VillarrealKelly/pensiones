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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/usuarios','UsuariosController@index')->name('usuarios');
Route::get('/usuarios/create','UsuariosController@create')->name('usuarios.create');
Route::post('/usuarios/store','UsuariosController@store')->name('usuarios.store');

Route::get('/representantes','RepresentantesController@index')->name('representantes');
Route::get('/representantes/create','RepresentantesController@create')->name('representantes.create');
Route::post('/representantes/store','RepresentantesController@store')->name('representantes.store');
Route::get('/representantes/edit/{rep_id}','RepresentantesController@edit')->name('representantes.edit');
Route::post('/representantes/update/{rep_id}','RepresentantesController@update')->name('representantes.update');
Route::post('/representantes/destroy/{rep_id}','RepresentantesController@destroy')->name('representantes.destroy');
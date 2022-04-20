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
Route::get('/usuarios/edit/{usu_id}','UsuariosController@edit')->name('usuarios.edit');
Route::post('/usuarios/update/{usu_id}','UsuariosController@update')->name('usuarios.update');
Route::post('/usuarios/destroy/{usu_id}','UsuariosController@destroy')->name('usuarios.destroy');

Route::get('/representantes','RepresentantesController@index')->name('representantes');
Route::get('/representantes/create','RepresentantesController@create')->name('representantes.create');
Route::post('/representantes/store','RepresentantesController@store')->name('representantes.store');
Route::get('/representantes/edit/{rep_id}','RepresentantesController@edit')->name('representantes.edit');
Route::post('/representantes/update/{rep_id}','RepresentantesController@update')->name('representantes.update');
Route::post('/representantes/destroy/{rep_id}','RepresentantesController@destroy')->name('representantes.destroy');

Route::get('/estudiantes','EstudiantesController@index')->name('estudiantes');
Route::get('/estudiantes/create','EstudiantesController@create')->name('estudiantes.create');
Route::post('/estudiantes/store','EstudiantesController@store')->name('estudiantes.store');
Route::get('/estudiantes/edit/{rep_id}','EstudiantesController@edit')->name('estudiantes.edit');
Route::post('/estudiantes/update/{rep_id}','EstudiantesController@update')->name('estudiantes.update');
Route::post('/estudiantes/destroy/{rep_id}','EstudiantesController@destroy')->name('estudiantes.destroy');

Route::get('/pensiones','PensionesController@index')->name('pensiones');
Route::get('/pensiones/create','PensionesController@create')->name('pensiones.create');
Route::post('/pensiones/store','PensionesController@store')->name('pensiones.store');
Route::post('/pensiones/destroy/{pen_id}','PensionesController@destroy')->name('pensiones.destroy');
Route::post('/pensiones/update/{pen_id}','PensionesController@update')->name('pensiones.update');
Route::get('/pensiones/edit/{pen_id}','PensionesController@edit')->name('pensiones.edit');
Route::post('/pensiones/search','PensionesController@index')->name('pensiones.search');
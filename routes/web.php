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

Route::get('/estudiantes/{rep_id}','EstudiantesController@index')->name('estudiantes');
Route::get('/estudiantes/create/{rep_id}','EstudiantesController@create')->name('estudiantes.create');
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

Route::get('/cursos','CursosController@index')->name('cursos');
Route::get('/cursos/create','CursosController@create')->name('cursos.create');
Route::post('/cursos/store','CursosController@store')->name('cursos.store');
Route::get('/cursos/edit/{cur_id}','CursosController@edit')->name('cursos.edit');
Route::post('/cursos/update/{cur_id}','CursosController@update')->name('cursos.update');
Route::post('/cursos/destroy/{cur_id}','CursosController@destroy')->name('cursos.destroy');


Route::get('/especialidad','EspecilidadController@index')->name('especialidad');
Route::get('/especialidad/create','EspecilidadController@create')->name('especialidad.create');
Route::post('/especialidad/store','EspecilidadController@store')->name('especialidad.store');
Route::get('/especialidad/edit/{esp_id}','EspecilidadController@edit')->name('especialidad.edit');
Route::post('/especialidad/update/{esp_id}','EspecilidadController@update')->name('especialidad.update');
Route::post('/especialidad/destroy/{esp_id}','EspecilidadController@destroy')->name('especialidad.destroy');


Route::get('/paralelo','ParaleloController@index')->name('paralelo');
Route::get('/paralelo/create','ParaleloController@create')->name('paralelo.create');
Route::post('/paralelo/store','ParaleloController@store')->name('paralelo.store');
Route::get('/paralelo/edit/{par_id}','ParaleloController@edit')->name('paralelo.edit');
Route::post('/paralelo/update/{par_id}','ParaleloController@update')->name('paralelo.update');
Route::post('/paralelo/destroy/{par_id}','ParaleloController@destroy')->name('paralelo.destroy');

Route::get('/reportes','ReporteController@index')->name('reportes');
Route::post('/reportes/search','ReporteController@index')->name('reportes.search');









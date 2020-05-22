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

Route::get('/home', 'IncidentesController@index')->name('home')->middleware('auth');
Route::get('/reportes','ReportesController@index')->name('reporte');
Route::post('/genera_reporte','ReportesController@caca')->name('enviar_correo');
Route::get('/problemas','IncidentesController@problemas')->name('problemas')->middleware('auth');
Route::get('/rfc/{folio}','IncidentesController@rfc' )->name('rfc')->middleware('auth');
Route::post('/guardar_rfc','IncidentesController@guardar_rfc' )->name('guardar_rfc')->middleware('auth');
Route::get('/pdf/{id}','IncidentesController@generar_pdf')->name('pdf')->middleware('auth');
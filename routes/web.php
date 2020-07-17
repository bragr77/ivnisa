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
    return view('frontend.index');
})->name('index');

Route::get('/msjenviado', function () {
    return view('frontend.menviado');
})->name('msjenviado');

Route::get('/solicitud', function () {
    return view('frontend.formsolicitud');
})->name('solicitud');

Auth::routes();

Route::get('/panel', 'HomeController@index')->name('panel');

Route::resource('mensaje', 'MensajeController');
Route::resource('formulario', 'FormularioController');

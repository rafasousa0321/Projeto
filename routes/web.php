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

Route::get('/index', 'App\Http\Controllers\PortalController@index')->name('index');

Route::get('/noticias', 'App\Http\Controllers\PortalController@noticias')->name('noticias');

Route::get('/empresa', 'App\Http\Controllers\PortalController@empresa')->name('empresa');

Route::get('/onde-estamos', 'App\Http\Controllers\PortalController@ondeEstamos')->name('onde.estamos');

Route::get('/contactos', 'App\Http\Controllers\PortalController@contactos')->name('contactos');

Route::get('/form', 'App\Http\Controllers\PortalController@form')->name('form');

Route::post('/enviado', 'App\Http\Controllers\PortalController@enviado')->name('enviado');
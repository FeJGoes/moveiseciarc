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

Route::redirect('/', '/inicio');
Route::view('/inicio', 'home')->name('home');
Route::view('/contato', 'contact')->name('contato');
Route::view('/empresa', 'company')->name('empresa');
Route::get('/catalogos', 'CatalogoController@page')->name('catalogo');

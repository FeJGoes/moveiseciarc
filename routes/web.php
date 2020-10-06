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
Route::view('/inicio', 'website.pages.home')->name('home');
Route::view('/contato', 'website.pages.contact')->name('contato');
Route::view('/empresa', 'website.pages.company')->name('empresa');
Route::view('/catalogos', 'website.pages.catalog')->name('catalogo');


Route::prefix('admin')->group(function () {
    Route::view('login ', 'admin.pages.login');
});

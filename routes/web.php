<?php

use App\Http\Controllers\Auth\WebAuthController;
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
Route::view('inicio', 'pages.home')->name('home');
Route::view('contato', 'pages.contact')->name('contato');
Route::view('empresa', 'pages.company')->name('empresa');
Route::view('catalogos', 'pages.catalog')->name('catalogo');

Route::prefix('admin')->group(function () {
    Route::view('login ', 'pages.admin.login')->name('login');

    Route::post('authenticate',
        [ WebAuthController::class, 'authenticate' ]
    )->name('authenticate');

    Route::middleware('web')->group(function(){
        Route::get('logout',
            [ WebAuthController::class, 'logout' ]
        )->name('logout');

    });
});

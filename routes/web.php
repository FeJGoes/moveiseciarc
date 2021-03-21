<?php

use App\Http\Controllers\Auth\WebAuthController;
use App\Http\Controllers\UserController;
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
$parameters = [
    'usuarios' => 'user'
];

Route::redirect('/', '/inicio');
Route::view('inicio', 'pages.home')->name('home');
Route::view('contato', 'pages.contact')->name('contato');
Route::view('empresa', 'pages.company')->name('empresa');
Route::view('catalogos', 'pages.catalog')->name('catalogo');

Route::prefix('admin')->group(function () use ($parameters) {
    Route::get('login',
        [WebAuthController::class,'login']
    )->name('login');

    Route::post('authenticate',
        [WebAuthController::class,'authenticate']
    )->name('authenticate');

    Route::match(['get','post'], 'esqueci-a-senha',
        [WebAuthController::class,'forgotPassword']
    )->middleware('guest')->name('password.forgot');

    Route::match(['get','post'], 'redefinicao-senha/{token?}',
        [WebAuthController::class,'resetPassword']
    )->middleware('guest')->name('password.reset');

    Route::middleware('auth')->group(function() use($parameters){
        Route::get('logout',
            [WebAuthController::class,'logout']
        )->name('logout');

        Route::view('dashboard', 'pages.admin.dashboard')->name('dashboard');

        Route::resources([
            'usuarios' => UserController::class,
        ],['parameters' => $parameters]);
    });
});

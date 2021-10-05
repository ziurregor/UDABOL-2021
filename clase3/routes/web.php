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
    return view('/auth/login');
});

Route::resource('registros/asistente','App\Http\Controllers\asistenteController');

Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout' );

// Route::resource('user', 'App\Http\Controllers\UserController');

Route::resource('user', 'App\Http\Controllers\UserController',
                ['only' => ['index', 'store', 'update', 'destroy', 'show']]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
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
    return view('auth.login');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('paciente', 'App\Http\Controllers\pacienteController');
<<<<<<< HEAD

//Route::get('/pdf', 'PDFController@PDF')->name('descargarPDF');
Route::get('/pdf', 'App\Http\Controllers\PDFController@PDF')->name('descargarPDF');

Route::get('/pdfpacientes', 'App\Http\Controllers\PDFController@PDFPacientes')->name('descargarPDFPacientes');


=======
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
>>>>>>> c56ac2f49ea04793ec5199507226597fc6a94a3d

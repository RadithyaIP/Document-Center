<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\CategoriesController;


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

Route::middleware(['auth'])->group(function () {
    Route::resource('Dokumen', DokumenController::class);
    Route::resource('Categories', CategoriesController::class);
    Route::get('/Sop', [App\Http\Controllers\CategoriesController::class, 'Sop'])->name('Sop');
    Route::get('/StandartOrganisasi', [App\Http\Controllers\CategoriesController::class, 'StandartOrganisasi'])->name('StandartOrganisasi');
});


Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
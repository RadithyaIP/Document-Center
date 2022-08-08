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
    Route::get('/Kategori/{id}', [App\Http\Controllers\CategoriesController::class, 'kategori'])->name('viewKategori');
    Route::get('/download/{file_name}', [App\Http\Controllers\CategoriesController::class, 'download'])->name('downloadFile');
  
    Route::post('/Dokumen/update/{id}', [App\Http\Controllers\DokumenController::class, 'update'])->name('dokumen.update');
    Route::get('/Dokumen/edit/{id}', [App\Http\Controllers\DokumenController::class, 'edit'])->name('dokumen.edit');
    Route::get('/Dokumen/show/{id}', [App\Http\Controllers\DokumenController::class, 'show'])->name('dokumen.show');
    Route::get('/view/{filename}', [App\Http\Controllers\CategoriesController::class, 'view'])->name('viewFile');
    Route::get('/delete/{id}', [App\Http\Controllers\DokumenController::class, 'destroy'])->name('Dokumen.destroy');
    
});


Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
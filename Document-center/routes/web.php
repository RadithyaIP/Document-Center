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
    // Route::get('/PetunjukOrganisasi', [App\Http\Controllers\CategoriesController::class, 'PetunjukOrganisasi'])->name('petunjukOrganisasi');
    // Route::get('/Sop', [App\Http\Controllers\CategoriesController::class, 'Sop'])->name('Sop');
    // Route::get('/StandartOrganisasi', [App\Http\Controllers\CategoriesController::class, 'StandartOrganisasi'])->name('StandartOrganisasi');
    // Route::get('/ManagementRisk', [App\Http\Controllers\CategoriesController::class, 'ManagementRisk'])->name('ManagementRisk');
    // Route::get('/IAOL', [App\Http\Controllers\CategoriesController::class, 'IAOL'])->name('IAOL');
    // Route::get('/IBPR', [App\Http\Controllers\CategoriesController::class, 'IBPR'])->name('IBPR');
    Route::get('/Kategori/{id}', [App\Http\Controllers\CategoriesController::class, 'kategori'])->name('viewKategori');
    Route::get('/download/{file_name}', [App\Http\Controllers\CategoriesController::class, 'download'])->name('downloadFile');
    
    Route::get('/view/{filename}', [App\Http\Controllers\CategoriesController::class, 'view'])->name('viewFile');
    Route::get('/delete/{id}', [App\Http\Controllers\DokumenController::class, 'destroy'])->name('Dokumen.destroy');
    
});


Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PetaController;
use App\Http\Controllers\DataController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route Login
Route::resource('/login', LoginController::class)
->except('edit', 'create', 'show', 'destroy', 'update', );
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Route Home
Route::resource('/', HomeController::class)
    ->except('edit', 'create', 'show', 'destroy', 'update', 'store');

// Route Auth
Route::group(['prefix' => 'laman', 'middleware' => ['auth'], 'as' => ''], function () {
    // Route Laman Admin
    Route::resource('/admin', PostController::class)
    ->except('edit', 'create', 'show', 'destroy', 'update', 'store');
    // Route Laman Tabel
    Route::resource('/tabel', DataController::class)
    ->except('create',);
    // Route Laman Peta
    Route::resource('/peta', PetaController::class)
    ->except('edit', 'create', 'show', 'destroy', 'update', 'store');
    Route::delete('delete-all', [PostController::class, 'destroy']);
});

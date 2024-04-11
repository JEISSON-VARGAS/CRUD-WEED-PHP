<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PipasController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Utiliza Route::resource() para definir las rutas CRUD para PipasController
Route::resource('home', PipasController::class);

// Define la ruta para cerrar sesión
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

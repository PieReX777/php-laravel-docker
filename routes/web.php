<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// Página de inicio
Route::get('/', function () {
    return view('welcome');
});

// Dashboard (solo accesible por usuarios autenticados)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rutas de perfil, solo accesibles para usuarios autenticados
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rutas para el CRUD de contactos, solo accesibles para usuarios autenticados
Route::middleware(['auth'])->group(function () {
    Route::resource('contacts', ContactController::class);
});

// Rutas de autenticación (login, registro, etc.)
require __DIR__.'/auth.php';

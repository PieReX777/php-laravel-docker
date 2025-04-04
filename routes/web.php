<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// Redirige al dashboard (o contactos) en lugar de la página de bienvenida
Route::get('/', function () {
    return redirect()->route('dashboard'); // Redirige al dashboard después de login
});

// Dashboard (solo accesible por usuarios autenticados)
Route::get('/dashboard', function () {
    return view('dashboard'); // Aquí puedes modificar la vista según lo necesites
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

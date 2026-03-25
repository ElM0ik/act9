<?php

use Illuminate\Support\Facades\Route;

// Ruta raíz: redirige según estado de autenticación
Route::get('/', function () {
    if (auth()->check()) {
        return redirect()->route('dashboard');
    }
    return view('landingpage');
});

// Dashboard protegido — solo usuarios autenticados
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
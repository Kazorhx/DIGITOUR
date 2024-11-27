<?php
use App\Http\Controllers\ImageController;

// Subir imágenes
Route::get('/upload', [ImageController::class, 'create'])->name('upload.create');
Route::post('/upload', [ImageController::class, 'store'])->name('upload.store');

// Mostrar imágenes del usuario
Route::get('/user-images/{iduser}', [ImageController::class, 'showUserImages'])->name('user.images');

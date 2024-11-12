<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Ruta para redirigir a la página de inicio (login)
Route::get('/', function () {
    return view('profilesTemplate.login');
});

Route::get('/dashboard-home', function () {
    return view('dashboard.home');
})->name('dashboard.home');

// Ruta para mostrar el formulario de inicio de sesión
//Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');

// Ruta para procesar el login
Route::post('/login', [AuthController::class, 'login'])->name('user.login');

// Ruta para ver el perfil
Route::get('/perfile', function () {
    return view('profilesTemplate.perfile');
})->name('perfile');

// Ruta para cerrar sesión
Route::post('/logout', [AuthController::class, 'logout'])->name('user.logout');

// Ruta para mostrar el dashboard del administrador
Route::get('/dashboard/admin', [UserController::class, 'showAdminDashboard'])->name('dashboard.admin');

<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Ruta para redirigir a la página de inicio (login)
Route::get('/', function () {
    return view('viewsPrincipal.home');
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
Route::get('/dashboard/admin', [AuthController::class, 'showAdminDashboard'])->name('dashboard.admin');

// Ruta para mostrar el dashboard del administrador
Route::get('/dashboard/sus', [AuthController::class, 'showSuscriptorDashboard'])->name('dashboard.suscriptor');

// Ruta para mostrar el dashboard del administrador
Route::get('/dashboard/super', [AuthController::class, 'showSuperUsuarioDashboard'])->name('dashboard.superusuario');

// Ruta para registrar al usuario desde el modal
Route::post('/registro/usuario', [UserController::class, 'registro'])->name('registro.usuario');

// Ruta para registrar al administrador desde el modal
Route::post('/registro/administrador', [UserController::class, 'registroadm'])->name('registro.administrador');

//mostrar vista de login en navbar
Route::get('/login', function () {
    return view('profilesTemplate.login');
})->name('login');

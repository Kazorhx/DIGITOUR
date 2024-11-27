<?php

use App\Http\Controllers\OfferController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VoucherController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;

// Ruta para redirigir a la página de inicio (login)
Route::get('/', function () {
    return view('viewsPrincipal.home');
});

// Ruta para la vista principal
Route::get('/home', function () {
    return view('viewsPrincipal.home');
})->name('home');

Route::get('/dashboard-home', function () {
    return view('dashboard.home');
})->name('dashboard.home');

// Ruta para mostrar el formulario de inicio de sesión
//Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');

// Ruta para procesar el login
Route::post('/login', [AuthController::class, 'login'])->name('user.login');

//Ruta para recuperar contraseña
Route::get('/password/recover', function () {
    return view('profilesTemplate.recoverPassword');
})->name('password.recover');

// Ruta para procesar el envío del formulario
Route::post('/password/recover', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');


// Ruta para ver el perfil
Route::get('/perfile', function () {
    return view('profilesTemplate.perfile');
})->name('perfile');

// Ruta para cerrar sesión
Route::post('/logout', [AuthController::class, 'logout'])->name('user.logout');

// Ruta para mostrar el dashboard del administrador
Route::get('/dashboard/admin', [AuthController::class, 'showAdminDashboard'])->name('dashboard.admin');

// Ruta para mostrar el dashboard del suscriptor
Route::get('/dashboard/sus', [AuthController::class, 'showSuscriptorDashboard'])->name('dashboard.suscriptor');

// Ruta para mostrar el dashboard del superusuario
Route::get('/dashboard/super', [AuthController::class, 'showSuperUsuarioDashboard'])->name('dashboard.superusuario');

// Ruta para registrar al usuario desde el modal
Route::post('/registro/usuario', [UserController::class, 'registro'])->name('registro.usuario');

// Ruta para registrar al administrador desde el modal
Route::post('/registro/administrador', [UserController::class, 'registroadm'])->name('registro.administrador');

//mostrar vista de login en navbar
Route::get('/login', function () {
    return view('profilesTemplate.login');
})->name('login');

// rutas para mostrar las vistas de las categorias segun los id de la categoria_perfil
Route::get('/perfiles/hoteleria', [ProfileController::class, 'hoteleria'])->name('viewsPrincipal.hoteleria');
Route::get('/perfiles/gastronomia', [ProfileController::class, 'gastronomia'])->name('viewsPrincipal.gastronomia');
Route::get('/perfiles/actividades', [ProfileController::class, 'actividades'])->name('viewsPrincipal.actividades');
Route::get('/perfiles/artesanias', [ProfileController::class, 'artesanias'])->name('viewsPrincipal.artesanias');


Route::get('/dashboard/admin', [UserController::class, 'index'])->name('usuarios.index'); // Mostrar usuarios
Route::patch('/dashboard/admin/{id}/toggleEstado', [UserController::class, 'toggleEstado'])->name('usuarios.toggleEstado');
Route::get('/usuarios/{id}/editar', [UserController::class, 'edit'])->name('usuarios.edit'); // Formulario de edición
Route::delete('/usuarios/{id}', [UserController::class, 'destroy'])->name('usuarios.destroy'); // Eliminar usuario
Route::put('/usuarios/{id}', [UserController::class, 'update'])->name('usuarios.update'); // Actualizar usuario


//Route::put('/profiles/{user}', [ProfileController::class, 'update'])->name('profiles.update');

Route::put('/profiles/update', [ProfileController::class, 'update'])->name('profiles.update');

Route::post('/vouchers/store', [VoucherController::class, 'store'])->name('vouchers.store');

Route::post('/offers/store', [OfferController::class, 'store'])->name('offers.store');

// Ruta para mostrar las ofertas de un perfil
Route::get('/perfil/{id}', [OfferController::class, 'showByProfile'])->name('perfil.ofertas');

// Rutas para generar y mostrar vouchers
Route::post('/voucher/store', [VoucherController::class, 'store'])->name('voucher.store');
Route::get('/voucher/{id}/qr', [VoucherController::class, 'showQr'])->name('voucher.qr');
Route::get('/voucher/{id}/download', [VoucherController::class, 'downloadPdf'])->name('voucher.download');

Route::get('/profile/{id}', [ProfileController::class, 'show'])->name('profile.show');

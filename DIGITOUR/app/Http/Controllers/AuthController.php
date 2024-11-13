<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('profilesTemplate.login');
    }

public function login(Request $request)
{
    $user = User::where('email', $request->email)->first();

    if ($user && $request->password == $user->password) {
        // Se puede crear una variable de sesión con los datos del usuario logueado, en este caso se usa el método put() de la clase Session
         //Las variables de sesión son útiles para almacenar información del usuario logueado, como su nombre, correo, etc.
         //Las variables de sesión se pueden acceder desde cualquier parte de la aplicación, y se mantienen activas hasta que el usuario cierra sesión,
         // incluso si cierra el navegador o la pestaña.
         session('user', $user);
         session('nombreusuario', $user->nombre);

            // Redirigir según el rol del usuario utilizando match
            return match ($user->rol_id) {
                1 => redirect()->route('dashboard.admin'),      // Rol de Administrador
                2 => redirect()->route('dashboard.suscriptor'), // Rol de Suscriptor
                3 => redirect()->route('dashboard.superusuario'), // Rol de Super Usuario
                default => redirect()->route('login')->with('error', 'Rol no válido.'),
            };

            //return redirect()->route('dashboard.home');
    } else {
        // Si falla el logim, usa el método redirect() concatenado con el método back() para redirigir al usuario a la página anterior.
         // además, concatena el método with() que recibe dos parámetros: el primero es el nombre de la variable que almacena el error,
         // y el segundo es el mensaje de error, la idea es que se muestre en el front
         return redirect()->back()->with('error', 'Nombre de usuario o contraseña incorrectos');
        }


}

public function showAdminDashboard()
    {
        return view('dashboardAdministrador.dashboardAdmin');
    }

public function showSuscriptorDashboard()
    {
        return view('dashboardSuscriptor.dashboardSus');
    }
public function showSuperUsuarioDashboard()
    {
        return view('dashboardAdministrador.dashboardAdmin');
    }

}




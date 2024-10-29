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
         return redirect()->route('dashboard.home');
     } else {
         // Si falla el logim, usa el método redirect() concatenado con el método back() para redirigir al usuario a la página anterior.
         // además, concatena el método with() que recibe dos parámetros: el primero es el nombre de la variable que almacena el error,
         // y el segundo es el mensaje de error, la idea es que se muestre en el front
         return redirect()->back()->with('error', 'Nombre de usuario o contraseña incorrectos');
     }
 }
}

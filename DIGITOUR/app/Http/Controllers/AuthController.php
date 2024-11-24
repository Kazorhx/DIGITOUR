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

    // Verificar si el usuario existe y si está inhabilitado (estado_id == 2)
        if ($user) {
            // Verificar si el usuario está inhabilitado
            if ($user->estado_id == 2) {
                return redirect()->back()->with('error', 'Tu cuenta ha sido inhabilitada.');
            }


    if ($user && $request->password == $user->password) {

         session()->put('user', $user);
    

         // Depuración: Verificar el valor de rol_id
    \Log::info("Usuario autenticado: " . $user->nombre . ", Rol: " . $user->rol_id);

    // Redirigir según el rol del usuario usando if
    if ($user->rol_id == 1) {
        return redirect('/dashboard/admin'); // URL absoluta
        //return redirect()->route('dashboard.admin'); // Rol de Administrador
    } elseif ($user->rol_id == 2) {
        return redirect()->route('dashboard.suscriptor'); // Rol de Suscriptor
    } elseif ($user->rol_id == 3) {
        return redirect()->route('dashboard.superusuario'); // Rol de Super Usuario
    } else {
        return redirect()->route('login')->with('error', 'Rol no válido.');
    }

    }

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
        return view('dashboardSuperUsuario.dashboardSuper');
    }

}




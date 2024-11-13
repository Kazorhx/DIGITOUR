<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function showAdminDashboard()
    {
        return view('dashboardAdministrador.dashboardAdmin');
    }

public function registro(Request $request)
    {
        // Validación de los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'correo_electronico' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
            'telefono' => 'nullable|string|max:20',
            'direccion' => 'nullable|string|max:255',
            'fecha_nacimiento' => 'nullable|date',
            'genero' => 'nullable|string',
            'rol_id' => 'required|string',
            'estado' => 'required|string'
        ]);

        // Guardar el nuevo usuario
        $user = new User();
        $user->nombre = $request->nombre;
        $user->apellido = $request->apellido;
        $user->email = $request->correo_electronico;
        $user->password = $request->password;
        $user->telefono = $request->telefono;
        $user->direccion = $request->direccion;
        $user->fecha_nacimiento = $request->fecha_nacimiento;
        $user->genero = $request->sexo;
        $user->rol_id = $request->rol;
        $user->estado = $request->estado;
        $user->save();

        // Redirigir con un mensaje de éxito
        return redirect()->back()->with('success', 'Usuario registrado exitosamente.');
    }


}

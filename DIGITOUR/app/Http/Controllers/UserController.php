<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

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
        $user->rol_id = 2;
        $user->estado_id = 1;
        $user->save();

        // Redirigir con un mensaje de éxito
        return redirect()->back()->with('success', 'Usuario registrado exitosamente.');
    }

public function registroadm(Request $request)

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
        $user->genero = $request->genero;
        $user->rol_id = 1;
        $user->estado_id = 1;
        $user->save();

        // Redirigir con un mensaje de éxito
        return redirect()->back()->with('success', 'Usuario registrado exitosamente.');
    }

}

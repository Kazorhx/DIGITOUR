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
            'categoria_id' => 'required|integer|between:1,4',
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

        // Crear el perfil asociado al usuario
        $user->profile()->create([
           'fecha_creacion' => now(), 
           'tema' => $request->tema ?? null,
           'nombre' => $request->nombre ?? '',
           'descripcion' => $request->descripcion ?? '',
           'redes_sociales' => $request->redes_sociales ?? '',
           'datos_contacto' => $request->datos_contacto ?? '',
           'url_geolocalizacion' => $request->url_geolocalizacion ?? '',
           'categoria_id' => $request->categoria_id,
]);

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

        public function index()
        {
            $usuarios = User::where('rol_id', 2)->get(); // Filtra solo suscriptores
            return view('dashboardAdministrador.dashboardAdmin', compact('usuarios'));
        }
       public function toggleEstado($id)
        {
            $usuario = User::findOrFail($id);

            // Cambiar el estado: si es 2 (inhabilitado), cambiar a 1 (habilitado), y viceversa
            $usuario->estado_id = ($usuario->estado_id == 2) ? 1 : 2;

            $usuario->save();

            return redirect()->back()->with('success', 'Estado del usuario actualizado.');
        }

        public function edit($id)
        {
            $usuario = User::findOrFail($id);
            return view('usuarios.edit', compact('usuario'));
        }
        public function update(Request $request, $id)
        {
            $usuario = User::findOrFail($id);
            $usuario->update($request->all());

            return redirect()->route('usuarios.index')->with('success', 'Usuario actualizado.');
        }
        public function destroy($id)
        {
            User::findOrFail($id)->delete();

            return redirect()->back()->with('success', 'Usuario eliminado.');
        }


}

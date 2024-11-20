<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function hoteleria()
    {
        $perfiles = Profile::where('categoria_id', 1)->get(); // Hotelería
        return view('viewsPrincipal.hoteleria', compact('perfiles'));
    }

public function gastronomia()
{
    $perfiles = Profile::where('categoria_id', 2)->get(); // Gastronomía
        return view('viewsPrincipal.gastronomia', compact('perfiles'));
}

public function actividades()
{
    $perfiles = Profile::where('categoria_id', 3)->get(); // Actividades
        return view('viewsPrincipal.actividades', compact('perfiles'));
}

public function artesanias()
{
    $perfiles = Profile::where('categoria_id', 4)->get(); // Artesanías
        return view('viewsPrincipal.artesanias', compact('perfiles'));
}

public function update(Request $request)
{
    dd(session('user'));
    // Validar los datos del formulario
    $validated = $request->validate([
        'nombre' => 'required|string|max:255',
        'descripcion' => 'nullable|string',
        'redes_sociales' => 'nullable|string|max:255',
        'datos_contacto' => 'nullable|string|max:255',
        'url_geolocalizacion' => 'nullable|string|max:255',
    ]);

    // Buscar el perfil del usuario autenticado
    $profile = Profile::firstOrCreate(
        ['usuario_id' => auth()->id()],
        [] // Si no existe, lo crea con los valores por defecto (puedes añadir más campos si lo deseas)
    );

    // Actualizar los campos del perfil
    $profile->update($validated);

    // Redirigir con mensaje de éxito
    return redirect()->back()->with('success', 'Perfil actualizado correctamente.');
}
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Profile $profile)
    {
        //agarra el id y consulta a la bd por la info de ese perfil
        //hacer consultas a tablas relacionadas para más info
          
        //retorna la vista de perfil pasándole un objeto con la info (compact)


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    //public function update(Request $request, Profile $profile)
    //{
        //
   // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        //
    }
}

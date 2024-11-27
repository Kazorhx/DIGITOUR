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
        // Validar los datos del formulario
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'redes_sociales' => 'nullable|string|max:255',
            'datos_contacto' => 'nullable|string|max:255',
            'url_geolocalizacion' => 'nullable|string|max:255',
        ]);

        // Obtener el ID del usuario desde la sesión
        $user = session()->get('user');
        if (!$user) {
            return redirect()->back()->withErrors(['error' => 'Usuario no autenticado.']);
        }

        // Buscar o crear el perfil asociado al usuario
        $profile = Profile::firstOrCreate(
            ['usuario_id' => $user['id']],
            ['nombre' => '']
        );

        // Actualizar los datos del perfil
        $profile->update($validated);

        // Redirigir con un mensaje de éxito
        return redirect()->back()->with('success', 'Perfil actualizado correctamente.');
    }

    public function index()
    {
        $profiles = Profile::all(); // Obtiene todos los perfiles
        return view('profiles.index', compact('profiles')); 
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
    $validated = $request->validate([
        'nombre' => 'required|string|max:255',
        'descripcion' => 'nullable|string',
        'redes_sociales' => 'nullable|string|max:255',
        'datos_contacto' => 'nullable|string|max:255',
        'url_geolocalizacion' => 'nullable|string|max:255',
        'usuario_id' => 'required|integer',
    ]);

    Profile::create($validated);

    return redirect()->route('profiles.index')->with('success', 'Perfil creado exitosamente.');
}

        //


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
      // Consulta el perfil del usuario por su ID
        $profile = Profile::findOrFail($id);

        // Consulta las ofertas relacionadas al perfil
        $offers = Offer::where('profile_id', $id)->get();

        // Retorna la vista y envía los datos del perfil y sus ofertas
        return view('profile.show', compact('profile', 'offers'));
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

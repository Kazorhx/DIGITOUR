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
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        //
    }
}

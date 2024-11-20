<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
        // Validar los datos del formulario
        $validated = $request->validate([
            'descripcion' => 'required|string|max:255',
            'fecha_inicio' => 'required|date',
            'fecha_vencimiento' => 'required|date|after_or_equal:fecha_inicio',
            'cantidad_voucher' => 'required|integer|min:1',
            'tiempo_enfriamiento' => 'nullable|integer|min:0',
            'tipo_oferta_id' => 'required|exists:offer_types,id',
        ]);

        // Obtener el ID del usuario desde la sesión
        $userId = session()->get('user')->id;

        // Obtener el perfil asociado al usuario
        $profile = Profile::where('user_id', $userId)->first();

        if (!$profile) {
            return redirect()->back()->withErrors(['error' => 'No se encontró un perfil asociado al usuario.']);
        }

        // Crear la oferta asociada al perfil
        Offer::create(array_merge($validated, ['id_perfil' => $profile->id]));

        return redirect()->back()->with('success', 'Oferta creada exitosamente.');
    }
    /**
     * Display the specified resource.
     */
    public function show(Offer $offer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Offer $offer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Offer $offer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Offer $offer)
    {
        //
    }
}

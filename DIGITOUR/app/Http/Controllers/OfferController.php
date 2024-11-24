<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Profile;
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
public function showByProfile($id)
{
    $profile = Profile::with('offers')->findOrFail($id);
    return view('perfil.ofertas', compact('profile'));
}


public function create()
{

}
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validated = $request->validate([
            'descripcion' => 'required|string|max:255',
            'fecha_inicio' => 'required|date',
            'fecha_vencimiento' => 'required|date|after_or_equal:fecha_inicio',
            'cantidad_voucher' => 'required|integer|min:1',
        ]);

        // Obtener el perfil asociado al usuario
        $user = session()->get('user');
        if (!$user) {
            return redirect()->back()->withErrors(['error' => 'Usuario no autenticado.']);
        }

        $profile = Profile::where('usuario_id', $user['id'])->first();
        if (!$profile) {
            return redirect()->back()->withErrors(['error' => 'Perfil no encontrado para el usuario.']);
        }

        // Crear la oferta
        Offer::create([
            'descripcion' => $validated['descripcion'],
            'fecha_inicio' => $validated['fecha_inicio'],
            'fecha_vencimiento' => $validated['fecha_vencimiento'],
            'cantidad_voucher' => $validated['cantidad_voucher'],
            'id_perfil' => $profile->id,
        ]);

       return redirect()->to(url()->previous() . '#vouchers-section')->with('success', 'Oferta creada exitosamente.');
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

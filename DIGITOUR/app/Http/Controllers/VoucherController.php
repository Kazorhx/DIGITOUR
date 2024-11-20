<?php

namespace App\Http\Controllers;

use App\Models\Voucher;
use Illuminate\Http\Request;

class VoucherController extends Controller
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
        ]);

        // Generar los datos para crear el voucher
        for ($i = 0; $i < $validated['cantidad_voucher']; $i++) {
            Voucher::create([
                'id' => uniqid(), // Generar un ID único para cada voucher
                'fecha_emision' => now(),
                'fecha_validacion' => null,
                'url' => route('vouchers.show', ['id' => uniqid()]), // Ruta de ejemplo
                'rut' => 'DEFAULT_RUT', // Suplente o datos reales según el flujo
                'nombre_cliente' => 'DEFAULT_CLIENTE', // Puede venir de otro formulario
                'oferta_id' => 1, // ID de oferta, ajusta según tu lógica
                'estado_voucher_id' => 1, // Estado inicial del voucher
            ]);
        }

        return redirect()->back()->with('success', 'Vouchers generados correctamente.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Voucher $voucher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Voucher $voucher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Voucher $voucher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Voucher $voucher)
    {
        //
    }
}

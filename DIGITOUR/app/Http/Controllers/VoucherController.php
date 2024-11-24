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
    $validated = $request->validate([
        'rut' => 'required|string|max:50',
        'nombre' => 'required|string|max:255',
        'oferta_id' => 'required|exists:offers,id',
    ]);

    $voucher = Voucher::create([
        'rut' => $validated['rut'],
        'nombre_cliente' => $validated['nombre'],
        'oferta_id' => $validated['oferta_id'],
        'fecha_emision' => now(),
        'url' => '',
    ]);

    // Generar la URL del QR
    $qrUrl = route('voucher.qr', ['id' => $voucher->id]);
    $voucher->update(['url' => $qrUrl]);

    return redirect()->route('voucher.qr', ['id' => $voucher->id])
        ->with('success', 'Voucher generado exitosamente.');
}

// Método para mostrar el QR
public function showQr($id)
{
    $voucher = Voucher::findOrFail($id);
    return view('voucher.qr', compact('voucher')); 
}

// Método para descargar el QR como PDF
public function downloadPdf($id)
{
    $voucher = Voucher::findOrFail($id);
    $pdf = \PDF::loadView('voucher.pdf', compact('voucher'));
    return $pdf->download("voucher-{$voucher->id}.pdf");
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

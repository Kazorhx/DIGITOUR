<?php

namespace App\Http\Controllers;

use App\Models\Voucher;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


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
             'rut' => 'required|string|max:255',
             'nombre_cliente' => 'required|string|max:255',
             'oferta_id' => 'required|exists:offers,id',
         ]);

         // Generar un ID único para usar como identificador
         $id = Str::uuid()->toString();

         // Crear el nuevo voucher
         $voucher = new Voucher();
         $voucher->id = $id; // ID único generado
         $voucher->fecha_emision = now();
         $voucher->fecha_validacion = now()->addDays(30); // Ejemplo: válido por 30 días
         $voucher->rut = $validated['rut'];
         $voucher->nombre_cliente = $validated['nombre_cliente'];
         $voucher->oferta_id = $validated['oferta_id'];
         $voucher->estado_voucher_id = 1; // Estado inicial del voucher
         $voucher->url = route('voucher.show', ['id' => $id]); // Generar el URL del voucher

         // Guardar en la base de datos
         $voucher->save();

         return response()->json([
             'success' => true,
             'message' => 'Voucher creado exitosamente.',
             'qrUrl' => $voucher->url,
         ]);
     }
   public function show($id)
{
    $voucher = Voucher::findOrFail($id);

    return view('vouchers.show', [
        'voucher' => $voucher,
        'qrCode' => QrCode::size(200)->generate($voucher->url),
    ]);
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Voucher $voucher)
    {
        //
    }

public function download($id)
{
    $voucher = Voucher::findOrFail($id);
    $qrCode = QrCode::format('png')->size(200)->generate($voucher->url);

    return response($qrCode)
        ->header('Content-Type', 'image/png')
        ->header('Content-Disposition', 'attachment; filename="voucher_'.$voucher->id.'.png"');
}

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

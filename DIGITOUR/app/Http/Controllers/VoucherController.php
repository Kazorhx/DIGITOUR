<?php

namespace App\Http\Controllers;

use App\Models\Voucher;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Barryvdh\DomPDF\Facade\Pdf;
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


         //generar qr en imagen y guardarlo

         return response()->json([
             'success' => true,
             'message' => 'Voucher creado exitosamente.',
             'qrUrl' => $voucher->url,
         ]);
}

public function show($id)
{

    // Obtener el voucher y los datos necesarios de la oferta
    $voucher = Voucher::with('offer')
        ->where('id', $id)
        ->firstOrFail(['id', 'nombre_cliente', 'rut', 'oferta_id']);

    // Si se solicita validación (por ejemplo, a través de un query string ?validate=true)
  //  if ($request->has('validate') && $request->get('validate') === 'true')
        // Cambiar el estado del voucher a "2" (validado)
    //    $voucher->estado_voucher_id = 2;
      //  $voucher->save();

        // Mostrar un mensaje de éxito directamente en la vista
      //  session()->flash('success', '¡El voucher ha sido validado correctamente!');

    // Acceder a la oferta relacionada
    $descripcionOferta = $voucher->offer->descripcion;

    // Crear un arreglo con los datos necesarios
    $data = [
        'descripcion_oferta' => $descripcionOferta,
        'nombre_cliente' => $voucher->nombre_cliente,
        'rut' => $voucher->rut,
    ];

    // Pasar los datos a la vista
    return view('voucher.show', compact('data', 'voucher'));
}

public function edit(Voucher $voucher)
{
    //
}

public function download($id)
{

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
/*public function downloadPdf($id)
{
    $voucher = Voucher::findOrFail($id);

    // Generar el código QR en formato PNG Base64
    $qrCode = base64_encode(QrCode::format('png')->size(200)->generate($voucher->url));

    // Crear la vista del PDF
    $pdf = Pdf::loadView('vouchers.pdf', [
        'voucher' => $voucher,
        'qrCode' => $qrCode,
    ]);

    // Descargar el PDF
    return $pdf->download('voucher_' . $voucher->id . '.pdf');
} */

public function validateVoucher($id)
{
    $voucher = Voucher::findOrFail($id);

    // Cambiar el estado del voucher a "validado"
    $voucher->estado_voucher_id = 2; // Estado "Validado"
    $voucher->save();

    // Redirigir con un mensaje de éxito
    return redirect()->route('voucher.show', $voucher->id)->with('success', '¡Voucher validado exitosamente!');
}   

}

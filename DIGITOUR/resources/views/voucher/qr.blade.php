@extends('templateViews')
@section('contenido')
<div class="container text-center mt-5">
    <h1>QR Generado</h1>
    <p>Oferta: {{ $voucher->offer->descripcion }}</p>
    <p>Beneficiario: {{ $voucher->nombre_cliente }}</p>
    <div class="mt-4">
        <img src="data:image/png;base64,{{ base64_encode(QrCode::format('png')->size(200)->generate($voucher->url)) }}" alt="QR Code">
    </div>
    <div class="mt-4">
        <a href="{{ route('voucher.download', $voucher->id) }}" class="btn btn-success">Descargar PDF</a>
        <a href="{{ route('perfil.ofertas', $voucher->offer->profile->id) }}" class="btn btn-secondary">Volver</a>
    </div>
</div>
@endsection

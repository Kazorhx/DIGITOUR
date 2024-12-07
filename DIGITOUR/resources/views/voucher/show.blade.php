@extends('templateViews')
@section('contenido')
<div class="container text-center">
    <h1>Voucher generado</h1>
    <p><strong>ID:</strong> {{ $voucher->id }}</p>
    <p><strong>Nombre del cliente:</strong> {{ $voucher->nombre_cliente }}</p>
    <p><strong>RUT:</strong> {{ $voucher->rut }}</p>
    <p><strong>Oferta:</strong> {{ $voucher->oferta_id }}</p>
    <p><strong>Fecha de emisión:</strong> {{ $voucher->fecha_emision }}</p>
    <p><strong>Fecha de validación:</strong> {{ $voucher->fecha_validacion }}</p>

    <div>
        {!! $qrCode !!}
    </div>

    <a href="{{ route('voucher.download', $voucher->id) }}" class="btn btn-success mt-3">Descargar QR</a>
</div>
@endsection

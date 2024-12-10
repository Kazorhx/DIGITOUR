@extends('templateViews')
@section('contenido')
<div class="container mt-4">
    <h1>Voucher a validar</h1>
    <p><strong>Descripción de la oferta:</strong> {{ $data['descripcion_oferta'] }}</p>
    <p><strong>Nombre del beneficiario:</strong> {{ $data['nombre_cliente'] }}</p>
    <p><strong>RUT:</strong> {{ $data['rut'] }}</p>

    <a href="{{ route('voucher.download', $voucher->id) }}" class="btn btn-success mt-3">Descargar QR</a>
</div>
@endsection

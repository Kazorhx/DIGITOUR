@extends('templateViews')

@section('contenido')
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h2 class="text-center">Voucher a Validar</h2>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <p class="fw-bold mb-1">Descripción de la oferta:</p>
                <p class="text-muted">{{ $data['descripcion_oferta'] }}</p>
            </div>
            <div class="mb-3">
                <p class="fw-bold mb-1">Nombre del beneficiario:</p>
                <p class="text-muted">{{ $data['nombre_cliente'] }}</p>
            </div>
            <div class="mb-3">
                <p class="fw-bold mb-1">RUT:</p>
                <p class="text-muted">{{ $data['rut'] }}</p>
            </div>
        </div>
        <div class="card-footer text-center">
            <a href="{{ route('voucher.download', $voucher->id) }}" class="btn btn-lg btn-success">
                <i class="bi bi-download me-2"></i> Descargar QR
            </a>
        </div>
    </div>
</div>
@endsection

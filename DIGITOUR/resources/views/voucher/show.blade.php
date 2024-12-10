@extends('templateViews')
@section('contenido')
<div class="container mt-4">
    <h1>Voucher a validar</h1>
    <p><strong>Descripción de la oferta:</strong> {{ $data['descripcion_oferta'] }}</p>
    <p><strong>Nombre del beneficiario:</strong> {{ $data['nombre_cliente'] }}</p>
    <p><strong>RUT:</strong> {{ $data['rut'] }}</p>

    <!-- Formulario para validar el voucher -->
    <form action="{{ route('voucher.validate', $voucher->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('PATCH')
        <button type="submit" class="btn btn-success">Validar</button>
    </form>

    <!-- Mensajes -->
    <div class="mt-3">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
    </div>
</div>
@endsection

@extends('templateViews')
@section('contenido')
<div class="container mt-4">
    <h1>Voucher a validar</h1>
    <p><strong>Descripción de la oferta:</strong> {{ $data['descripcion_oferta'] }}</p>
    <p><strong>Nombre del beneficiario:</strong> {{ $data['nombre_cliente'] }}</p>
    <p><strong>RUT:</strong> {{ $data['rut'] }}</p>

    <!-- Botón para validar el voucher usando AJAX -->
    <button id="validateVoucher" class="btn btn-success" data-id="{{ $voucher->id }}">Validar</button>

    <!-- Mensajes -->
    <div id="messages" class="mt-3"></div>
</div>

<script src="{{ asset('js/validacion.js')}}"></script>
@endsection


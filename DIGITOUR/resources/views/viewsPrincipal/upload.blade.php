@extends('templateViews')

@section('contenido')
<div class="container">
    <h1 class="text-center my-4">Subir Imagen del Servicio</h1>

    <form action="{{ route('upload.store') }}" method="POST" enctype="multipart/form-data" class="shadow p-4 rounded bg-white">
        @csrf
        <div class="mb-3">
            <label for="user_id" class="form-label">ID Usuario:</label>
            <input type="number" name="user_id" id="user_id" class="form-control" placeholder="Ingrese el ID del usuario" required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Imagen del servicio (máx 20MB):</label>
            <input type="file" name="image" id="image" class="form-control" accept="image/jpeg,image/png" required>
        </div>
        <button type="submit" class="btn btn-success w-100">Subir Imagen</button>
    </form>

    @if(session('success'))
        <div class="alert alert-success mt-4">
            <p>{{ session('success') }}</p>
            <img src="{{ asset('storage/uploads/' . session('filename')) }}" alt="Imagen del servicio" class="img-fluid rounded shadow">
        </div>
    @endif
</div>
@endsection

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Voucher</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center text-success">Crear Voucher</h1>
    <form action="{{ route('voucher.store') }}" method="POST" class="mt-4">
        @csrf
        <div class="mb-3">
            <label for="rut" class="form-label">RUT</label>
            <input type="text" id="rut" name="rut" class="form-control" placeholder="Ingrese el RUT (Ej: 12.345.678-9)" required>
        </div>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ingrese su nombre completo" required>
        </div>
        <button type="submit" class="btn btn-success w-100">Crear Voucher</button>
    </form>

    @if (session('success'))
        <div class="alert alert-success mt-3">{{ session('success') }}</div>
    @endif
</div>
</body>
</html>

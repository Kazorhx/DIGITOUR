<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        .navbar-custom {
            background-color: rgb(255, 255, 255);
        }
        body {
            padding-top: 56px;
        }
    </style>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light navbar-custom w-100 fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="DIGITOUR">
            <img src="{{ asset('images/logo.jpg') }}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
            DIGITOUR
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Contenido -->
<div class="container mt-4">
    @yield('contenido')
</div>

<script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</body>
</html>

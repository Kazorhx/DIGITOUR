<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .navbar-custom {
            background-color: #e1e1e1;
        }
        body {
            padding-top: 56px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .container {
            flex: 1;
        }
        .social-section {
            background-color: #f8f9fa;
            padding: 10px 0;
            text-align: center;
            font-size: 12px;
            margin-top: 20px; /* Espacio entre el contenido y la sección de redes */
            margin-bottom: 10px; /* Ajuste del espacio inferior */
        }
        .social-icons {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .social-icons li {
            display: inline;
            margin: 0 10px;
        }
        .social-icons a {
            text-decoration: none;
            color: #333;
            font-size: 20px;
        }
        .social-icons a:hover {
            color: #007bff;
        }
    </style>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light navbar-custom w-100 fixed-top">
    <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/logo.jpg') }}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
            DIGITOUR
        </a>
        <!-- Opciones del menú -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Actividades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Gastronomía</a>
                </li>
            </ul>

            <!-- Botón de Login -->
            <button class="btn btn-outline-primary ms-3" type="button" data-bs-toggle="modal" data-bs-target="#loginModal">
                Iniciar sesión
            </button>
        </div>
    </div>
</nav>

<!-- Contenido -->
<div class="container mt-4">
    @yield('contenido')
</div>

<!-- Sección de Redes Sociales -->
<div class="social-section">
    <div class="container">
        <ul class="social-icons">
            <li><a href="https://www.facebook.com" target="_blank"><i class="bi bi-facebook"></i></a></li>
            <li><a href="https://www.instagram.com" target="_blank"><i class="bi bi-instagram"></i></a></li>
            <li><a href="https://twitter.com" target="_blank"><i class="bi bi-twitter"></i></a></li>
            <li><a href="https://www.linkedin.com" target="_blank"><i class="bi bi-linkedin"></i></a></li>
        </ul>
        <p>&copy; 2024 DIGITOUR - Todos los derechos reservados</p>
    </div>
</div>

<script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</body>
</html>

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
        /* Navbar */
        .navbar-custom {
            background-color: #4DC0B5;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .navbar-custom .navbar-brand {
            font-weight: bold;
            color: #fff;
        }

        .navbar-custom .navbar-brand:hover {
            color: #eee;
        }

        .navbar-custom .nav-link {
            color: #fff;
        }

        .navbar-custom .nav-link:hover {
            color: #ddd;
        }

        .navbar-custom .btn-outline-primary {
            color: #fff;
            border-color: #fff;
        }

        .navbar-custom .btn-outline-primary:hover {
            background-color: #fff;
            color: #4DC0B5;
        }

        body {
            padding-top: 70px;
            background-color: #f9f9f9;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .container {
            flex: 1;
        }

        /* Redes Sociales */
        .social-section {
            background-color: #4DC0B5;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        .social-icons {
            list-style: none;
            padding: 0;
            margin: 10px 0;
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .social-icons li {
            display: inline;
        }

        .social-icons a {
            text-decoration: none;
            color: #fff;
            font-size: 24px;
            transition: color 0.3s ease;
        }

        .social-icons a:hover {
            color: #ddd;
        }

        .social-section p {
            margin-top: 15px;
            font-size: 14px;
        }

        /* Footer */
        .footer {
            background-color: #4DC0B5;
            color: #fff;
            padding: 20px 0;
            text-align: center;
            position: relative;
            left: 0;
            right: 0;
            width: 100vw; /* Asegura que ocupe el ancho completo de la ventana */
            margin-top: auto;
        }

        .footer p {
            margin: 0;
            font-size: 14px;
        }
    </style>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-custom fixed-top">
    <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/logo.jpg') }}" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
            DIGITOUR
        </a>

        <!-- Menú colapsable -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Inicio</a>
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
                <li class="nav-item">
                    <a class="nav-link" href="#">Artesanías</a>
                </li>
            </ul>
            <!-- Botón de Login -->
            <a href="{{ route('login') }}" class="btn btn-outline-primary ms-3">Iniciar sesión</a>
        </div>
    </div>
</nav>

<!-- Contenido principal -->
<div class="container mt-4">
    <div class="row mt-5">
        @yield('contenido')
    </div>
</div>

<!-- Redes Sociales -->
<div class="social-section">
    <ul class="social-icons">
        <li><a href="https://www.facebook.com" target="_blank"><i class="bi bi-facebook"></i></a></li>
        <li><a href="https://www.instagram.com" target="_blank"><i class="bi bi-instagram"></i></a></li>
        <li><a href="https://twitter.com" target="_blank"><i class="bi bi-twitter"></i></a></li>
        <li><a href="https://www.linkedin.com" target="_blank"><i class="bi bi-linkedin"></i></a></li>
    </ul>
</div>

<!-- Footer -->
<div class="footer">
    <p>&copy; 2024 DIGITOUR - Todos los derechos reservados</p>
</div>

<script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</body>
</html>

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
            background-color: #e1e1e1;
        }

        body {
            padding-top: 56px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            margin: 0;
        }

        .container {
            flex: 1; /* Asegura que el contenido principal ocupe todo el espacio disponible */
        }

        /* Pie de página */
        .footer {
            background: #4DC0B5;
            color: white;
            padding: 40px 20px;
            margin-top: 40px;
            width: 100%; /* Garantiza que abarque todo el ancho */
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .footer-content {
            width: 100%;
            max-width: 1200px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); /* Adaptable a dispositivos */
            gap: 20px;
            text-align: left;
        }

        .footer-links {
            list-style: none;
            padding: 0;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: white;
            text-decoration: none;
            font-size: 14px;
        }

        .footer-links a:hover {
            text-decoration: underline;
        }

        /* Iconos de redes sociales */
        .social-icons {
            list-style: none;
            display: flex;
            justify-content: center;
            padding: 0;
            margin: 20px 0 10px 0;
        }

        .social-icons li {
            margin: 0 10px;
        }

        .social-icons a {
            color: white;
            font-size: 24px;
            text-decoration: none;
        }

        .social-icons a:hover {
            color: #007bff;
        }

        .social-text {
            font-size: 12px;
            margin-top: 10px;
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
                <a href="{{ route('login') }}" class="btn btn-outline-primary ms-3">Iniciar sesión</a>
            </div>
        </div>
    </nav>

    <!-- Contenido principal -->
    <div class="container mt-4">
        @yield('contenido')
    </div>

    <!-- Pie de página -->
    <footer class="footer">
        <div class="footer-content">
            <ul class="footer-links">
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Nosotros</a></li>
                <li><a href="#">Servicios</a></li>
            </ul>
            <ul class="footer-links">
                <li><a href="#">Contacto</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">FAQ</a></li>
            </ul>
            <ul class="footer-links">
                <li><a href="#">Términos</a></li>
                <li><a href="#">Privacidad</a></li>
                <li><a href="#">Legal</a></li>
            </ul>
        </div>
        <ul class="social-icons">
            <li><a href="https://www.facebook.com" target="_blank"><i class="bi bi-facebook"></i></a></li>
            <li><a href="https://www.instagram.com" target="_blank"><i class="bi bi-instagram"></i></a></li>
            <li><a href="https://twitter.com" target="_blank"><i class="bi bi-twitter"></i></a></li>
            <li><a href="https://www.linkedin.com" target="_blank"><i class="bi bi-linkedin"></i></a></li>
        </ul>
        <p class="social-text">&copy; 2024 DIGITOUR - Todos los derechos reservados</p>
    </footer>

    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</body>
</html>

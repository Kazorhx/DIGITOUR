<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>
    <!-- Bootstrap y Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        /* Navbar personalizado */
        .navbar-custom {
            background-color: #4DC0B5;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar-custom .navbar-brand {
            color: white;
            font-weight: bold;
        }

        .navbar-custom .navbar-brand:hover {
            color: #f8f9fa;
        }

        .navbar-custom .nav-link {
            color: white;
            font-size: 16px;
        }

        .navbar-custom .nav-link:hover {
            color: #e0e0e0;
        }

        .navbar-custom .btn-outline-primary {
            color: white;
            border-color: white;
        }

        .navbar-custom .btn-outline-primary:hover {
            background-color: white;
            color: #4DC0B5;
        }

        /* Footer */
        .footer {
            background-color: #4DC0B5;
            color: white;
            padding: 40px 20px;
            margin-top: 40px;
            width: 100%;
            text-align: center;
        }

        .footer-links {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .footer-links a {
            color: white;
            text-decoration: none;
            font-size: 14px;
        }

        .footer-links a:hover {
            text-decoration: underline;
        }

        .social-icons {
            list-style: none;
            padding: 0;
            margin: 20px 0 10px 0;
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .social-icons a {
            color: white;
            font-size: 24px;
            text-decoration: none;
        }

        .social-icons a:hover {
            color: #007bff;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
        <div class="container-fluid">
            <!-- Botón de retroceso -->
            <button onclick="history.back()" class="btn btn-outline-secondary me-3">
                <i class="bi bi-arrow-left"></i> Atrás
            </button>

            <!-- Logo y título -->
            <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
                <img src="{{ asset('images/logo.jpg') }}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top me-2">
                DIGITOUR
            </a>

            <!-- Botón de colapso -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menú -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('viewsPrincipal.hoteleria') ? 'active' : '' }}" href="{{ route('viewsPrincipal.hoteleria') }}">Hotelería</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('viewsPrincipal.gastronomia') ? 'active' : '' }}" href="{{ route('viewsPrincipal.gastronomia') }}">Gastronomía</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('viewsPrincipal.actividades') ? 'active' : '' }}" href="{{ route('viewsPrincipal.actividades') }}">Actividades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('viewsPrincipal.artesanias') ? 'active' : '' }}" href="{{ route('viewsPrincipal.artesanias') }}">Artesanías</a>
                    </li>
                </ul>
                <a href="{{ route('login') }}" class="btn btn-outline-primary ms-3">
                    <i class="bi bi-box-arrow-in-right"></i> Iniciar sesión
                </a>
            </div>
        </div>
    </nav>

    <!-- Contenido principal -->
    <div class="container mt-5 pt-5">
        @yield('contenido')
    </div>

    <!-- Footer -->
    <footer class="footer">
        <ul class="footer-links">
            <li><a href="{{ route('home') }}">Inicio</a></li>
            <li><a href="#">Contacto</a></li>
            <li><a href="#">Términos</a></li>
        </ul>
        <ul class="social-icons">
            <li><a href="https://www.facebook.com" target="_blank"><i class="bi bi-facebook"></i></a></li>
            <li><a href="https://www.instagram.com" target="_blank"><i class="bi bi-instagram"></i></a></li>
            <li><a href="https://twitter.com" target="_blank"><i class="bi bi-twitter"></i></a></li>
            <li><a href="https://www.linkedin.com" target="_blank"><i class="bi bi-linkedin"></i></a></li>
        </ul>
        <p>&copy; 2024 DIGITOUR - Todos los derechos reservados</p>
    </footer>

    <!-- Scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

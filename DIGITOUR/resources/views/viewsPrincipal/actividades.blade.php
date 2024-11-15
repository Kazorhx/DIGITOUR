@extends('templateViews')
@section('contenido')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades - Los Queñes</title>
    <style>
        /* Reset y estilo base */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #fff;
        }

        /* Encabezado */
        .header {
            padding: 20px;
            background-color: white;
        }

        .logo {
            max-width: 100px;
        }

        /* Sección hero */
        .hero-section {
            display: flex;
            gap: 20px;
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .hero-card {
            flex: 1;
            position: relative;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .hero-card:hover {
            transform: scale(1.05);
        }

        .hero-card img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        .hero-card h2 {
            position: absolute;
            bottom: 20px;
            left: 20px;
            color: white;
            font-size: 24px;
            text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5);
        }

        /* Sección de contenido */
        .content-section {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .content-title {
            color: #2ea843;
            margin-bottom: 20px;
            font-size: 28px;
            font-weight: bold;
        }

        .content-text {
            color: #666;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        /* Tarjetas de actividad */
        .activity-card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            gap: 20px;
        }

        .activity-card img {
            width: 200px;
            height: 150px;
            object-fit: cover;
            border-radius: 8px;
        }

        .activity-content {
            flex: 1;
        }

        .activity-content h3 {
            color: #333;
            margin-bottom: 10px;
            font-size: 20px;
        }

        .activity-content p {
            color: #666;
            margin-bottom: 15px;
            font-size: 16px;
        }

        .btn-details {
            display: inline-block;
            background: #2ea843;
            color: white;
            padding: 8px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .btn-details:hover {
            background-color: #239336;
        }

        /* Pie de página */
        .footer {
            background: #4DC0B5;
            color: white;
            padding: 40px 20px;
            margin-top: 40px;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .footer-links {
            list-style: none;
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
    </style>
</head>
<body>
    <!-- Sección principal -->
    <section class="hero-section">
        <div class="hero-card">
            <img src="{{ asset('images/kayak.jpg') }}" alt="Rafting en Los Queñes">
            <h2>Busca Adrenalina</h2>
        </div>
        <div class="hero-card">
            <img src="{{ asset('images/Servicios Spa.jpg') }}" alt="Spa en Los Queñes">
            <h2>Relájate</h2>
        </div>
    </section>

    <!-- Contenido principal -->
    <section class="content-section">
        <h2 class="content-title">Vive la Aventura y Relájate en Los Queñes</h2>
        <p class="content-text">En Los Queñes, emoción y tranquilidad se combinan para ofrecerte experiencias únicas. Desde la adrenalina del rafting en el río Teno hasta la serenidad de un relajante spa, este destino tiene algo para todos.</p>

        <div class="activity-card">
            <img src="{{ asset('images/rio.jpg') }}" alt="Rafting en el Río Teno">
            <div class="activity-content">
                <h3>Rafting</h3>
                <p>Disfruta de la emoción del rafting en los rápidos del Río Teno. Perfecto para aventureros de todos los niveles, una actividad llena de energía y diversión.</p>
                <a href="#" class="btn-details">Más Detalles</a>
            </div>
        </div>

        <div class="activity-card">
            <img src="{{ asset('images/Servicios Spa.jpg') }}" alt="Spa relajante en Los Queñes">
            <div class="activity-content">
                <h3>Spa</h3>
                <p>Relájate con tratamientos revitalizantes y baños termales diseñados para brindarte paz y renovación en un entorno natural.</p>
                <a href="#" class="btn-details">Más Detalles</a>
            </div>
        </div>
    </section>

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
            <ul class="footer-links">
                <li><a href="#">Carreras</a></li>
                <li><a href="#">Socios</a></li>
                <li><a href="#">Noticias</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>
@endsection
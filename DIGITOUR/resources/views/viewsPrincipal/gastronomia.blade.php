@extends('templateViews')
@section('contenido')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gastronomía - Los Queñes</title>
    <style>
        /* Reset y estilos base */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f5f5f5;
            line-height: 1.6;
            color: #333;
        }

        img {
            max-width: 100%;
            display: block;
        }

        /* Encabezado y hero */
        .hero {
            position: relative;
            height: 400px;
            overflow: hidden;
        }

        .hero img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .hero-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            text-align: center;
            font-size: 36px;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        /* Texto introductorio */
        .intro-text {
            max-width: 1200px;
            margin: 30px auto;
            padding: 20px;
            text-align: center;
            color: #666;
        }

        /* Sección de restaurantes */
        .restaurants-section {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .restaurants-container {
            background-color: #f0f0f0;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        .restaurant-card {
            display: flex;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 20px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        .restaurant-card img {
            width: 200px;
            height: 150px;
            object-fit: cover;
        }

        .restaurant-content {
            padding: 20px;
            flex: 1;
            display: flex;
            justify-content: space-between;
            align-items: start;
        }

        .restaurant-info {
            flex: 1;
        }

        .restaurant-info h3 {
            margin-bottom: 10px;
            font-size: 18px;
            color: #333;
        }

        .restaurant-info p {
            font-size: 14px;
            color: #666;
        }

        .btn-como-llegar {
            background: #2ea843;
            color: white;
            padding: 8px 20px;
            border-radius: 20px;
            text-decoration: none;
            font-size: 14px;
            white-space: nowrap;
        }

        .btn-como-llegar:hover {
            background: #27963a;
        }

        /* Pie de página */
        .footer {
            background: #6BC1B8;
            color: white;
            padding: 40px 20px;
            margin-top: 40px;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
            gap: 30px;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 8px;
        }

        .footer-links a {
            color: white;
            text-decoration: none;
            font-size: 13px;
            opacity: 0.9;
        }

        .footer-links a:hover {
            opacity: 1;
        }
            .intro-text {
        max-width: 1200px;
        margin: 30px auto;
        padding: 20px;
        text-align: center;
        color: #333; /* Color más oscuro para mayor contraste */
        font-size: 22px; /* Tamaño de fuente más grande */
        line-height: 1.8; /* Más espaciado entre líneas para legibilidad */
        background-color: #f0f0f0; /* Fondo claro para resaltar */
        border-radius: 10px; /* Bordes redondeados */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra para mayor profundidad */
    }
    </style>
</head>
<body>
    <section class="hero">
        <img src="{{ asset('images/comida3.jpg') }}" alt="Gastronomía">
        <div class="hero-text">Descubre las delicias<br>en Los Queñes</div>
    </section>

  <div class="intro-text">
    En Los Queñes, cada plato cuenta una historia. Desde las empanadas rellenas de carne y especias locales hasta el exquisito cordero al palo, nuestros sabores reflejan la riqueza de nuestra tierra. ¡Descubre la auténtica esencia de Los Queñes en cada bocado!
</div>
<div class="cabins-section">
        @foreach ($perfiles as $profile)
            @include('templateCard', [
                'image' => $profile->image ?? asset('images/default_cabin.jpg'),
                'nombre' => $profile->nombre,
                'descripcion' => $profile->descripcion,
                'url_geolocalizacion' => $profile->url_geolocalizacion,
            ])
        @endforeach
    </div>
</body>
</html>
@endsection

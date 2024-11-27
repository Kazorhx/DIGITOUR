@extends('templateViews')
@section('contenido')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artesanías - Los Queñes</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: white;
            margin: 0 auto;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Asegura que el contenido mínimo cubra toda la ventana */
        }

        .content {
            flex: 1; /* Permite que el contenido principal ocupe el espacio disponible */
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .hero {
            position: relative;
            height: 400px;
            border-radius: 15px;
            overflow: hidden;
            margin: 20px 0;
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
            font-size: 32px;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
            width: 100%;
            font-style: italic;
        }

        .intro-text {
            text-align: center;
            color: #666;
            line-height: 1.6;
            font-size: 15px;
            margin: 30px auto;
            max-width: 900px;
            padding: 0 20px;
        }

        .artisan-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            margin-bottom: 20px;
            padding: 15px;
            display: flex;
            align-items: center;
            gap: 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .artisan-image-container {
            width: 300px;
            height: 200px;
            border-radius: 10px;
            overflow: hidden;
            flex-shrink: 0;
        }

        .artisan-image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .artisan-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .artisan-title {
            color: #333;
            font-size: 20px;
            font-weight: bold;
        }

        .artisan-description {
            color: #666;
            font-size: 14px;
            line-height: 1.5;
        }

        .btn-como-llegar {
            display: inline-block;
            background: #2ea843;
            color: white;
            padding: 8px 20px;
            border-radius: 20px;
            text-decoration: none;
            font-size: 14px;
            align-self: flex-start;
            box-shadow: 0 2px 4px rgba(0,0,0,0.2);
        }

        /* Pie de página */
        .footer {
            background: #2ea843; /* Color verde */
            color: white;
            padding: 20px 0;
            text-align: center;
            width: 100%; /* Asegura que abarque todo el ancho */
            position: relative; /* Asegura que no esté dentro del flujo limitado */
            left: 0;
        }

        .footer p {
            margin: 0;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="content">
        <section class="hero">
            <img src="{{ asset('images/artesania1349.png') }}" alt="Artesanías en Los Queñes">
            <div class="hero-text">Descubre el arte local<br>en Los Queñes</div>
        </section>

        <div class="intro-text">
            En Los Queñes, nuestros artesanos mantienen vivas las tradiciones ancestrales a través de sus creaciones únicas. Cada pieza cuenta una historia, transmitiendo la rica cultura de nuestra región mediante técnicas heredadas de generación en generación. Descubre la magia de nuestras artesanías locales y llévate un pedacito de nuestra cultura.
        </div>

       <div class="cabins-section">
        @foreach ($perfiles as $profile)
            @include('templateCard', [
                'image' => $profile->image ?? asset('images/artesania.jpeg'),
                'nombre' => $profile->nombre,
                'descripcion' => $profile->descripcion,
                'url_geolocalizacion' => $profile->url_geolocalizacion,
            ])
        @endforeach
    </div>
   </div>

</body>
</html>
@endsection

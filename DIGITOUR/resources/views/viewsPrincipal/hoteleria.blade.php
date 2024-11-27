@extends('templateViews')
@section('contenido')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospedaje - Los Queñes</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f5f5f5;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .content {
            flex: 1;
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
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
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

        .cabins-section {
            margin-bottom: 40px;
        }

        .cabin-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            margin-bottom: 20px;
            padding: 15px;
            display: flex;
            align-items: center;
            gap: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .cabin-image-container {
            width: 300px;
            height: 200px;
            border-radius: 10px;
            overflow: hidden;
            flex-shrink: 0;
        }

        .cabin-image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .cabin-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .cabin-title {
            color: #333;
            font-size: 20px;
            font-weight: bold;
        }

        .cabin-description {
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
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        /* Pie de página */
        .footer {
            background: #2ea843;
            color: white;
            text-align: center;
            padding: 20px 0;
            width: 100%;
            position: relative;
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
        <img src="{{ asset('images/cabañapremiun.jpg') }}" alt="Hospedaje en Los Queñes">
        <div class="hero-text">Descubre el encanto de hospedarte<br>en Los Queñes</div>
    </section>

    <div class="intro-text">
        Nuestra localidad mágica es el lugar perfecto para desconectarse, nuestras cabañas ofrecen una estancia rodeada en medio de la naturaleza. Con opciones para parejas, familias y aventureros, cada cabaña está diseñada para que disfrutes de la tranquilidad y belleza del entorno natural.
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
</div>
@endsection


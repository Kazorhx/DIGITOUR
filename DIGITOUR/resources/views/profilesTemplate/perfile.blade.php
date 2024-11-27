@extends('templateViews')
@section('contenido')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $profile->nombre }}</title>
    <style>
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .content {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .hero {
            position: relative;
            height: 400px;
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 30px;
        }

        .hero img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .description {
            display: flex;
            gap: 20px;
            margin-bottom: 30px;
        }

        .description img {
            max-width: 300px;
            border-radius: 10px;
        }

        .details {
            flex: 1;
        }

        .details h1 {
            color: #2ea843;
            margin-bottom: 10px;
        }

        .details p {
            color: #666;
            line-height: 1.6;
        }

        .offers {
            margin-top: 30px;
        }

        .offers h2 {
            color: #2ea843;
            margin-bottom: 20px;
        }

        .card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            padding: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .card p {
            color: #666;
            margin: 0;
        }

        .card span {
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="content">
        <!-- Imagen principal -->
        <div class="hero">
            <img src="{{ asset('storage/' . $profile->imagen) }}" alt="{{ $profile->nombre }}">
        </div>

        <!-- Descripción del perfil -->
        <div class="description">
            <img src="{{ asset('storage/' . $profile->imagen) }}" alt="Imagen de {{ $profile->nombre }}">
            <div class="details">
                <h1>{{ $profile->nombre }}</h1>
                <p>{{ $profile->descripcion }}</p>
                <p><span>Redes Sociales:</span> <a href="{{ $profile->redes_sociales }}" target="_blank">{{ $profile->redes_sociales }}</a></p>
                <p><span>Contacto:</span> {{ $profile->datos_contacto }}</p>
                <p><span>Geolocalización:</span> <a href="{{ $profile->url_geolocalizacion }}" target="_blank">Ver en Google Maps</a></p>
            </div>
        </div>

        <!-- Ofertas -->
        <div class="offers">
            <h2>Ofertas</h2>
            @if($offers->count() > 0)
                @foreach($offers as $offer)
                    <div class="card">
                        <p><span>Oferta:</span> {{ $offer->descripcion }}</p>
                        <p><span>Válido desde:</span> {{ $offer->fecha_inicio }}</p>
                        <p><span>Válido hasta:</span> {{ $offer->fecha_fin }}</p>
                    </div>
                @endforeach
            @else
                <p>No hay ofertas disponibles para este emprendimiento.</p>
            @endif
        </div>
    </div>
</body>
</html>
@endsection

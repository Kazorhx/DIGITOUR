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
            background-color: #f5f5f5;
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

    </style>
</head>
<body>
    <section class="hero">
        <img src="/api/placeholder/1200/400" alt="Artesanías en Los Queñes">
        <div class="hero-text">Descubre el arte local<br>en Los Queñes</div>
    </section>

    <div class="intro-text">
        En Los Queñes, nuestros artesanos mantienen vivas las tradiciones ancestrales a través de sus creaciones únicas. Cada pieza cuenta una historia, transmitiendo la rica cultura de nuestra región mediante técnicas heredadas de generación en generación. Descubre la magia de nuestras artesanías locales y llévate un pedacito de nuestra cultura.
    </div>

    <div class="artisans-section">
        <div class="artisan-card">
            <div class="artisan-image-container">
                <img src="/api/placeholder/300/200" alt="Telar Los Queñes">
            </div>
            <div class="artisan-content">
                <h3 class="artisan-title">Telar Los Queñes</h3>
                <p class="artisan-description">Descubre la maestría del tejido tradicional en nuestro taller de telares. Aquí podrás encontrar mantas, ponchos y tapices elaborados con lana natural y tintes orgánicos, cada pieza refleja la dedicación y el amor por mantener viva esta ancestral técnica.</p>
                <a href="#" class="btn-como-llegar">¿Cómo llegar?</a>
            </div>
        </div>

        <div class="artisan-card">
            <div class="artisan-image-container">
                <img src="/api/placeholder/300/200" alt="Alfarería Nativa">
            </div>
            <div class="artisan-content">
                <h3 class="artisan-title">Alfarería Nativa</h3>
                <p class="artisan-description">En nuestro taller de cerámica, cada pieza es moldeada a mano utilizando técnicas tradicionales. Encuentra vasijas, platos y decoraciones únicas que combinan la estética ancestral con toques contemporáneos, creando piezas perfectas para tu hogar.</p>
                <a href="#" class="btn-como-llegar">¿Cómo llegar?</a>
            </div>
        </div>

        <div class="artisan-card">
            <div class="artisan-image-container">
                <img src="/api/placeholder/300/200" alt="Tallados en Madera">
            </div>
            <div class="artisan-content">
                <h3 class="artisan-title">Tallados en Madera</h3>
                <p class="artisan-description">Nuestros maestros artesanos transforman la madera nativa en verdaderas obras de arte. Desde pequeñas figuras decorativas hasta muebles únicos, cada pieza refleja la belleza natural de la madera local y la habilidad de nuestros talladores.</p>
                <a href="#" class="btn-como-llegar">¿Cómo llegar?</a>
            </div>
        </div>

        <div class="artisan-card">
            <div class="artisan-image-container">
                <img src="/api/placeholder/300/200" alt="Joyería Artesanal">
            </div>
            <div class="artisan-content">
                <h3 class="artisan-title">Joyería Artesanal</h3>
                <p class="artisan-description">Descubre nuestra colección de joyas artesanales, donde cada pieza es creada con materiales locales y técnicas tradicionales. Collares, pulseras y aretes que combinan la belleza de las piedras naturales con diseños únicos inspirados en nuestra cultura.</p>
                <a href="#" class="btn-como-llegar">¿Cómo llegar?</a>
            </div>
        </div>
    </div>
</body>
</html>
@endsection
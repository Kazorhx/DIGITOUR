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

        .cabin-card {
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
            box-shadow: 0 2px 4px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>
    <section class="hero">
        <img src="{{ asset('images/cabañapremiun.jpg') }}" alt="Hospedaje en Los Queñes">
        <div class="hero-text">Descubre el encanto de hospedarte<br>en Los Queñes</div>
    </section>

    <div class="intro-text">
        Nuestra localidad mágica es el lugar perfecto para desconectarse, nuestras cabañas ofrecen una estancia rodeada en medio de la naturaleza. Con opciones para parejas, familias y aventureros, cada cabaña está diseñada para que disfrutes de la tranquilidad y belleza del entorno natural.
    </div>

    <div class="cabins-section">
        <div class="cabin-card">
            <div class="cabin-image-container">
                <img src="/api/placeholder/300/200" alt="Cabañas Los Maquis">
            </div>
            <div class="cabin-content">
                <h3 class="cabin-title">Cabañas Los Maquis</h3>
                <p class="cabin-description">Perfectas para parejas y familias, estas cabañas combinan comfort moderno con un entorno natural único, ideal para quienes buscan actividades al aire libre y un ambiente acogedor.</p>
                <a href="#" class="btn-como-llegar">¿Cómo llegar?</a>
            </div>
        </div>

        <div class="cabin-card">
            <div class="cabin-image-container">
                <img src="/api/placeholder/300/200" alt="Cabañas El Puente">
            </div>
            <div class="cabin-content">
                <h3 class="cabin-title">Cabañas El Puente</h3>
                <p class="cabin-description">Ubicadas junto al río Teno, estas cabañas ofrecen vistas panorámicas y un ambiente único, con detalles para hacer memorable tu estadía mientras disfrutas del entorno romántico.</p>
                <a href="#" class="btn-como-llegar">¿Cómo llegar?</a>
            </div>
        </div>

        <div class="cabin-card">
            <div class="cabin-image-container">
                <img src="/api/placeholder/300/200" alt="Cabañas El Roble">
            </div>
            <div class="cabin-content">
                <h3 class="cabin-title">Cabañas El Roble</h3>
                <p class="cabin-description">Rodeadas de un impresionante paisaje de bosques, estas cabañas ofrecen una experiencia sencilla en plena naturaleza, perfectas para desconectarse y replicar las actividades.</p>
                <a href="#" class="btn-como-llegar">¿Cómo llegar?</a>
            </div>
        </div>
    </div>
</body>
</html>
@endsection
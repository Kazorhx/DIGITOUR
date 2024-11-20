@extends('templateViews')
@section('contenido')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades - Los Queñes</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <style>
        /* Reset y estilo base */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-color: #f4f4f4;
        }

        /* Hero Section */
        .hero-section {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            padding: 30px;
            max-width: 1200px;
            margin: 20px auto;
        }

        .hero-card {
            flex: 1;
            position: relative;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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
            bottom: 60px; /* Aumenta el espacio desde el borde inferior */
            left: 20px;
            color: white;
            font-size: 24px;
            text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5);
            font-weight: bold;
            margin: 0;
        }

        .hero-card p {
            position: absolute;
            bottom: 20px; /* Ajusta la distancia del texto */
            left: 20px;
            color: white;
            font-size: 16px;
            margin: 0; /* Elimina el margen por defecto */
        }

        /* Content Section */
        .content-section {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
            text-align: center;
        }

        .content-title {
            color: #2ea843;
            margin-bottom: 20px;
            font-size: 32px;
            font-weight: bold;
        }

        .content-text {
            color: #666;
            line-height: 1.8;
            margin-bottom: 30px;
            font-size: 18px;
        }

        /* Activity Cards */
        .activity-card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .activity-card img {
            width: 250px;
            height: 180px;
            object-fit: cover;
            border-radius: 8px;
        }

        .activity-content {
            flex: 1;
            text-align: left;
        }

        .activity-content h3 {
            color: #333;
            margin-bottom: 10px;
            font-size: 24px;
            font-weight: bold;
        }

        .activity-content p {
            color: #666;
            margin-bottom: 15px;
            font-size: 16px;
            line-height: 1.6;
        }

        .btn-details {
            display: inline-block;
            background: #2ea843;
            color: white;
            padding: 10px 25px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .btn-details:hover {
            background-color: #239336;
        }

        /* Footer Section */
        .footer {
            margin-top: 40px;
            text-align: center;
            font-size: 16px;
            color: #666;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-section {
                flex-direction: column;
                gap: 10px;
            }

            .activity-card {
                flex-direction: column;
                text-align: center;
            }

            .activity-card img {
                width: 100%;
                height: auto;
            }

            .activity-content {
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-card">
            <img src="{{ asset('images/kayak.jpg') }}" alt="Rafting en Los Queñes">
            <h2>Busca Adrenalina</h2>
            <p>¡Descubre la aventura del rafting!</p>
        </div>
        <div class="hero-card">
            <img src="{{ asset('images/Servicios Spa.jpg') }}" alt="Spa en Los Queñes">
            <h2>Relájate</h2>
            <p>Disfruta de la serenidad y el confort</p>
        </div>
    </section>

    <!-- Content Section -->
    <section class="content-section">
        <h2 class="content-title">Vive la Aventura y Relájate en Los Queñes</h2>
        <p class="content-text">
            En Los Queñes, la emoción y el descanso se unen para ofrecerte experiencias inolvidables. Ya sea que busques la adrenalina del rafting o la serenidad de un spa, aquí encontrarás actividades para todos los gustos.
        </p>

        <!-- Activity Card 1 -->
        <div class="activity-card">
            <img src="{{ asset('images/rio.jpg') }}" alt="Rafting en el Río Teno">
            <div class="activity-content">
                <h3>Rafting</h3>
                <p>
                    Sumérgete en la adrenalina del rafting en el Río Teno. Experimenta la emoción de navegar por rápidos mientras disfrutas de paisajes naturales impresionantes.
                </p>
                <a href="#" class="btn-details">Más Detalles</a>
            </div>
        </div>

        <!-- Activity Card 2 -->
        <div class="activity-card">
            <img src="{{ asset('images/Servicios Spa.jpg') }}" alt="Spa relajante en Los Queñes">
            <div class="activity-content">
                <h3>Spa</h3>
                <p>
                    Relájate y rejuvenece en Spa Río Blanco. Disfruta de tratamientos revitalizantes y baños termales rodeados de naturaleza.
                </p>
                <a href="#" class="btn-details">Más Detalles</a>
            </div>
        </div>
    </section>
</body>
</html>
@endsection

@extends('templateViews')
@section('contenido')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <!-- Fuente personalizada desde Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Raleway', Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        /* Hero Section */
        .hero {
            height: 60vh;
            background-image: url('https://images.unsplash.com/photo-1464822759023-fed622ff2c3b');
            background-size: cover;
            background-position: center;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.4);
        }

        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 800px;
        }

        .hero-content h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .hero-content p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }

        /* Main Content */
        .main-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        .titulo-explora {
            color: #00a650;
            font-size: 2.5rem;
            font-weight: 700;
            margin: 2rem 0;
            text-transform: uppercase;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .titulo-explora::before,
        .titulo-explora::after {
            content: '';
            display: block;
            width: 50px;
            height: 2px;
            background-color: #00a650;
            margin: 0 15px;
        }

        .subtitulo-explora {
            color: #666;
            font-size: 1.2rem;
            text-align: center;
            margin-bottom: 2rem;
        }

        /* Descripción con contenedor gris */
        .descripcion-container {
            display: flex;
            align-items: center;
            background-color: #f0f0f0; /* Fondo gris claro */
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Sombra ligera */
            gap: 1.5rem;
            margin: 3rem auto;
            max-width: 900px;
        }

        .descripcion-container img {
            width: 45%; /* Imagen más grande pero no dominante */
            border-radius: 8px;
            object-fit: cover;
            height: auto;
        }

        .descripcion-container p {
            flex: 1;
            color: #666;
            font-size: 1rem;
            line-height: 1.8;
            text-align: justify;
        }

        /* Cards Section */
        .cards-container {
            display: flex;
            gap: 1.5rem;
            justify-content: center;
            margin-top: 3rem;
            flex-wrap: wrap; /* Permite que las tarjetas se acomoden en varias filas en pantallas pequeñas */
        }

        .card {
            background: #f5f5f5;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease;
            width: 23%; /* Ajuste para 4 tarjetas en línea en pantallas grandes */
            cursor: pointer;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .card-content {
            padding: 1rem;
            text-align: center;
        }

        .card-title {
            font-size: 1.2rem;
            color: #333;
            margin-bottom: 0.5rem;
        }

        .card-subtitle {
            font-size: 0.95rem;
            color: #666;
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .descripcion-container {
                flex-direction: column;
                text-align: center;
            }

            .descripcion-container img {
                width: 100%;
                margin-bottom: 1rem;
            }

            .card {
                width: 45%; /* 2 tarjetas por fila en pantallas medianas */
            }
        }

        @media (max-width: 576px) {
            .card {
                width: 100%; /* 1 tarjeta por fila en pantallas pequeñas */
            }

            .hero-content h1 {
                font-size: 2rem;
            }

            .hero-content p {
                font-size: 1rem;
            }

            .titulo-explora {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Rincones mágicos te esperan</h1>
            <p>Descubre paisajes únicos y vive experiencias inolvidables con nosotros</p>
        </div>
    </section>

    <!-- Main Content -->
    <main class="main-content">
        <h2 class="titulo-explora">Explora</h2>
        <div class="subtitulo-explora">Los Queñes</div>

        <!-- Contenedor gris con imagen y texto -->
        <div class="descripcion-container">
            <img src="{{ asset('images/rio.jpg') }}" alt="Paisaje Los Queñes">
            <p>
                Los Queñes es una pequeña localidad ubicada en la Región del Maule, Chile, en la confluencia de los ríos Teno y Claro.
                Su nombre proviene del quechua y significa "abundancia de korles", reflejando su riqueza natural.
                Los Queñes se ha convertido en un destino turístico único, rodeado de montañas y bosques nativos.
            </p>
        </div>

           <!-- Cards Section -->
        <div class="cards-container">
            <!-- Card 1 -->
            <a href="{{ route('viewsPrincipal.hoteleria') }}" class="card">
                <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945" alt="Hospedaje">
                <div class="card-content">
                    <h3 class="card-title">Hospedaje</h3>
                    <p class="card-subtitle">¿Buscas un lugar para relajarte?</p>
                </div>
            </a>

            <!-- Card 2 -->
            <a href="{{ route('viewsPrincipal.actividades') }}" class="card">
                <img src="https://images.unsplash.com/photo-1533692328991-08159ff19fca" alt="Actividades">
                <div class="card-content">
                    <h3 class="card-title">Actividades</h3>
                    <p class="card-subtitle">Aventura y Descanso</p>
                </div>
            </a>

            <!-- Card 3 -->
            <a href="{{ route('viewsPrincipal.gastronomia') }}" class="card">
                <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0" alt="Gastronomía">
                <div class="card-content">
                    <h3 class="card-title">Gastronomía</h3>
                    <p class="card-subtitle">Revisa nuestras opciones</p>
                </div>
            </a>

            <!-- Card 4 -->
            <a href="{{ route('viewsPrincipal.artesanias') }}" class="card">
                <img src="{{ asset('images/artesania1349.png') }}" alt="Artesanías">
                <div class="card-content">
                    <h3 class="card-title">Artesanías</h3>
                    <p class="card-subtitle">Descubre nuestras artesanías</p>
                </div>
            </a>
        </div>
    </main>

</body>
</html>
@endsection

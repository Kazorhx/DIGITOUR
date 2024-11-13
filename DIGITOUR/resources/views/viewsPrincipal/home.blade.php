@extends('templateProfile')
@section('contenido')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explora Los Queñes</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
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
            background: rgba(0,0,0,0.4);
        }

        .hero-content {
            position: relative;
            z-index: 1;
            width: 100%;
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
            text-align: center;
            color: #00a650;
            font-size: 2rem;
            margin: 2rem 0;
            text-transform: uppercase;
        }

        .subtitulo-explora {
            text-align: center;
            color: #666;
            font-size: 1.2rem;
            margin-top: -1rem;
            margin-bottom: 2rem;
        }

        .descripcion-container {
            background-color: #f0f0f0;
            padding: 1.5rem;
            border-radius: 8px;
        }

        .descripcion {
            text-align: justify;
            margin: 0 auto;
            line-height: 1.6;
            max-width: 900px;
            color: #666;
            font-size: 0.95rem;
        }

        /* Cards Section */
        .cards-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
            margin-top: 3rem;
            padding: 0 2rem;
        }

        .card {
            background: #f5f5f5;
            border-radius: 4px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            cursor: pointer;
            transition: transform 0.3s ease;
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
            background: #eee;
        }

        .card-title {
            font-size: 1rem;
            color: #333;
            margin-bottom: 0.25rem;
        }

        .card-subtitle {
            font-size: 0.9rem;
            color: #666;
        }

        .card-source {
            font-size: 0.75rem;
            color: #999;
            margin-top: 0.5rem;
        }

        /* Footer */
        .footer {
            background-color: #5bc0bc;
            color: white;
            padding: 2rem 0;
            margin-top: 4rem;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 2rem;
            padding: 0 2rem;
        }

        .footer-section h3 {
            font-size: 1rem;
            margin-bottom: 1rem;
            text-transform: uppercase;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li {
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
        }

        .footer-section ul li a {
            color: white;
            text-decoration: none;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .cards-container {
                grid-template-columns: repeat(2, 1fr);
            }

            .footer-content {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 480px) {
            .cards-container {
                grid-template-columns: 1fr;
            }

            .footer-content {
                grid-template-columns: 1fr;
            }

            .hero-content h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>

    <section class="hero">
        <div class="hero-content">
            <h1>Bienvenidos a Los Queñes</h1>
            <p>Donde el encanto de la naturaleza y la aventura se unen</p>
        </div>
    </section>

    <main class="main-content">
        <h2 class="titulo-explora">Explora</h2>
        <div class="subtitulo-explora">Los Queñes</div>

        <div class="descripcion-container">
            <div class="descripcion">
                <p>Los Queñes es una pequeña localidad ubicada en la Región del Maule, Chile, en la confluencia de los ríos Teno y Claro. Su nombre proviene del quechua y significa 'abundancia de korles', reflejando su riqueza natural en especies nativas. Es el destino emergente de la zona baja Argentina. Cuna el desarrollo agrícola del Valle, convertido hoy en belleza escénica, acentuada al disponer el rincón al cultivo y la pesca, y su entorno tranquilo rodeado de montañas y bosques nativos.</p>
            </div>
        </div>

        <div class="cards-container">

            <div class="card">
                <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945" alt="Hospedaje">
                <div class="card-content">
                    <h3 class="card-title">Hospedaje</h3>
                    <p class="card-subtitle">¿Buscas un lugar para relajarte?</p>
                    <p class="card-source">Fuente: Unsplash</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="card">
                <img src="https://images.unsplash.com/photo-1533692328991-08159ff19fca" alt="Actividades">
                <div class="card-content">
                    <h3 class="card-title">Aventura Y Descanso</h3>
                    <p class="card-subtitle">Actividades</p>
                    <p class="card-source">Fuente: Unsplash</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="card">
                <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0" alt="Gastronomía">
                <div class="card-content">
                    <h3 class="card-title">Gastronomía</h3>
                    <p class="card-subtitle">Revisa Nuestras Opciones</p>
                    <p class="card-source">Fuente: Unsplash</p>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h3>Contacto</h3>
                <ul>
                    <li>Teléfono</li>
                    <li>Email</li>
                    <li>Dirección</li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Síguenos</h3>
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Twitter</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Links</h3>
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Actividades</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Newsletter</h3>
                <p>Suscríbete para recibir nuestras novedades</p>
            </div>
        </div>
    </footer>
</body>
</html>

@endsection

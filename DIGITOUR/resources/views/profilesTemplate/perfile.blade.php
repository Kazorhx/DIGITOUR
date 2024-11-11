@extends('templateProfile')
@section('contenido')
 <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de usuario</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<!-- Carousel -->
<div class="carousel-container mb-5">
    <div id="carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/publicidad 2.jpg') }}" class="d-block w-100" alt="plato1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/publicidad3.jpg') }}" class="d-block w-100" alt="plato2">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>
</div>

<div class="container custom-card">
    <!-- Información del restaurante -->
    <div class="restaurant-info mb-4">
        <div class="row align-items-center">
            <div class="col-md-4">
                <img src="{{ asset('images/comida2.jpg') }}" alt="Plato destacado" class="img-fluid rounded">
            </div>
            <div class="col-md-8">
                <h2>{{ $perfil->nombre }}/h2>
                <p>
                    Restaurante Doña Juanita es un acogedor establecimiento ubicado en la comuna de Las Higueras, conocido por ofrecer auténtica comida tradicional chilena. Nos especializamos en la preparación de platos tradicionales, utilizando ingredientes frescos y locales para garantizar el mejor sabor en cada uno de nuestros platos caseros.
                </p>
            </div>
        </div>
    </div>

    <!-- Productos destacados -->
    <section class="productos-destacados mt-4">
        <h3 class="text-center mb-4">Productos destacados</h3>
        <div class="row">
        @foreach($prod in $prods)

            {{ $prod->nombre }}
        {{  $prod->descripcion }}
            <div class="col-md-4 mb-4">
                <div class="product-card text-center">
                    <img src="{{ asset('images/comida2.jpg') }}" alt="Producto 1" class="img-fluid">
                    <h5>Plato 1</h5>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="product-card text-center">
                    <img src="{{ asset('images/comida2.jpg') }}" alt="Producto 2" class="img-fluid">
                    <h5>Plato 2</h5>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="product-card text-center">
                    <img src="{{ asset('images/comida2.jpg') }}" alt="Producto 3" class="img-fluid">
                    <h5>Plato 3</h5>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de contacto y redes sociales -->
    <div class="contact-section text-center mt-5">
        <h4>Contáctanos en:</h4>
        <div class="contact-links d-flex justify-content-center mb-4">
            <a href="#" class="social-link me-3"><i class="fab fa-facebook"></i></a>
            <a href="#" class="social-link me-3"><i class="fab fa-instagram"></i></a>
            <a href="#" class="social-link"><i class="fab fa-whatsapp"></i></a>
        </div>

        <!-- Código QR -->
        <div class="qr-code">
            <img src="{{ asset('images/qr.png') }}" alt="Código QR" class="img-fluid">
        </div>

        <!-- Botón Cómo llegar -->
        <div class="mt-4">
            <p class="d-inline-flex gap-1">
                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                   ¿Como llegar?
                </a>
            </p>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6536.521803957588!2d-70.82088155709208!3d-35.00017354125858!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9664e09cf6c88ebb%3A0xa7ca62f8a7f34fda!2sLos%20Quenes%2C%20Romeral%2C%20Maule!5e0!3m2!1ses!2scl!4v1730002552628!5m2!1ses!2scl"
                                width="900"
                                height="450"
                                style="border:0;"
                                allowfullscreen=""
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</body>
</html>
@endsection

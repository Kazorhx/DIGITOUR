@extends('templateProfile')
@section('contenido')

    <!-- Header -->
    <header class="bg-light py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <h1 class="h5">Perfil de Usuario</h1>
            <nav>
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Productos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Sobre</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Ayuda</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Banner Image -->
    <section>
        <img src="" class="img-fluid w-100" alt="Banner">
    </section>

    <!-- Restaurant Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <img src="ruta/imagen-restaurante.jpg" class="img-fluid rounded" alt="Restaurante">
                </div>
                <div class="col-lg-8">
                    <h2 class="text-success">Restaurante Doña Juanita</h2>
                    <p>Restaurante Doña Juanita es un acogedor establecimiento ubicado en la comuna de Los Queñes, conocido por ofrecer auténtica comida casera chilena...</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="py-5 bg-light">
        <div class="container text-center">
            <h3 class="text-success">Productos destacados</h3>
            <div class="row">
                <div class="col-md-4">
                    <img src="ruta/imagen1.jpg" class="img-fluid rounded" alt="Producto 1">
                </div>
                <div class="col-md-4">
                    <img src="ruta/imagen2.jpg" class="img-fluid rounded" alt="Producto 2">
                </div>
                <div class="col-md-4">
                    <img src="ruta/imagen3.jpg" class="img-fluid rounded" alt="Producto 3">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer with QR and Links -->
    <footer class="py-5 text-center">
        <div class="container">
            <p>Conócenos en:</p>
            <div class="d-flex justify-content-center mb-3">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram mx-3"></i></a>
                <a href="#"><i class="bi bi-whatsapp"></i></a>
            </div>
            <img src="ruta/qr-code.png" alt="QR Code" class="img-fluid mb-3">
            <br>
            <a href="#" class="btn btn-success">¿Cómo llegar?</a>
        </div>
    </footer>

@endsection

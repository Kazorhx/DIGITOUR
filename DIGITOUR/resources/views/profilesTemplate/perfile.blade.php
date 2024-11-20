@extends('templateViews')
@section('contenido')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <style>
        body {
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .container {
            flex: 1;
        }

        /* Contenedor principal */
        .main-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 40px;
        }

        /* Carousel */
        .carousel-container img {
            height: 300px;
            object-fit: cover;
        }

        /* Información del restaurante */
        .restaurant-info h2 {
            color: #2ea843;
            font-weight: bold;
        }

        .restaurant-info p {
            color: #666;
            line-height: 1.6;
        }

        /* Productos destacados */
        .productos-destacados h3 {
            color: #2ea843;
            text-align: center;
            margin-bottom: 20px;
        }

        .product-card {
            text-align: center;
            background: #fff;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .product-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .product-card h5 {
            color: #333;
        }

        /* Ofertas */
        .ofertas-section h3 {
            color: #2ea843;
            text-align: center;
            margin-bottom: 20px;
        }

        .offer-card {
            text-align: center;
            background: white;
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .offer-card img {
            width: 100%;
            height: 100px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .offer-card p {
            color: #666;
            font-size: 14px;
        }

        .btn-voucher {
            background-color: #2ea843;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 14px;
            margin-top: 10px;
            border: none;
            cursor: pointer;
        }

        .btn-voucher:hover {
            background-color: #239336;
        }

        /* Footer */
        .footer {
            background-color: #4DC0B5;
            color: white;
            padding: 20px;
            text-align: center;
            width: 100vw;
            margin-top: auto;
        }

        .footer p {
            margin: 0;
            font-size: 14px;
        }

        /* Modal */
        .modal-content {
            border-radius: 10px;
        }

        .modal-header {
            background-color: #2ea843;
            color: white;
        }
    </style>
</head>
<body>
<div class="container main-container">
    <!-- Carousel -->
    <div class="carousel-container mb-5">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/publicidad.jpg') }}" class="d-block w-100" alt="Publicidad 1">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/publicidad3.jpg') }}" class="d-block w-100" alt="Publicidad 2">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/publicidad 2.jpg') }}" class="d-block w-100" alt="Publicidad 3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- Información del restaurante -->
    <div class="restaurant-info mb-4">
        <div class="row align-items-center">
            <div class="col-md-4">
                <img src="{{ asset('images/comida2.jpg') }}" alt="Plato destacado" class="img-fluid rounded">
            </div>
            <div class="col-md-8">
                <h2>Restaurante Doña Juanita</h2>
                <p>
                    Restaurante Doña Juanita es un acogedor establecimiento ubicado en la comuna de Los Queñes.
                </p>
            </div>
        </div>
    </div>

    <!-- Productos destacados -->
    <section class="productos-destacados mt-4">
        <h3>Productos destacados</h3>
        <div class="row">
            <div class="col-md-4">
                <div class="product-card">
                    <img src="{{ asset('images/pizza.jpeg') }}" alt="Producto 1">
                    <h5>Producto 1</h5>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-card">
                    <img src="{{ asset('images/comida2.jpg') }}" alt="Producto 2">
                    <h5>Producto 2</h5>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-card">
                    <img src="{{ asset('images/hambuergesa.webp') }}" alt="Producto 3">
                    <h5>Producto 3</h5>
                </div>
            </div>
        </div>
    </section>

    <!-- Ofertas -->
    <section class="ofertas-section mt-4">
        <h3>Ofertas</h3>
        <div class="row">
            <div class="col-md-4">
                <div class="offer-card">
                    <img src="{{ asset('images/offer1.jpg') }}" alt="Oferta 1">
                    <p>10% de descuento en almuerzos.</p>
                    <button class="btn-voucher" data-bs-toggle="modal" data-bs-target="#voucherModal">Generar Voucher</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="offer-card">
                    <img src="{{ asset('images/offer2.jpg') }}" alt="Oferta 2">
                    <p>Happy Hour de 6 PM a 8 PM.</p>
                    <button class="btn-voucher" data-bs-toggle="modal" data-bs-target="#voucherModal">Generar Voucher</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="offer-card">
                    <img src="{{ asset('images/offer3.jpg') }}" alt="Oferta 3">
                    <p>2x1 en postres.</p>
                    <button class="btn-voucher" data-bs-toggle="modal" data-bs-target="#voucherModal">Generar Voucher</button>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Modal -->
<div class="modal fade" id="voucherModal" tabindex="-1" aria-labelledby="voucherModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="voucherModalLabel">Generar Voucher</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="rut" class="form-label">RUT</label>
                        <input type="text" class="form-control" id="rut" placeholder="Ingrese su RUT" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Generar</button>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</body>
</html>
@endsection

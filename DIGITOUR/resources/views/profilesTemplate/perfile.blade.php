@extends('templateViews')
@section('contenido')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil - Generar Voucher</title>
    <style>
        /* Reset y estilos base */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f5f5f5;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .content {
            padding: 20px;
        }

        .carousel {
            width: 100%;
            margin-bottom: 20px;
        }

        .carousel img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        .details {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            align-items: center;
        }

        .details img {
            flex: 1 1 45%;
            max-width: 400px;
            height: auto;
            border-radius: 10px;
            object-fit: cover;
        }

        .details .text {
            flex: 1 1 50%;
        }

        .details h1 {
            font-size: 24px;
            color: #2ea843;
            margin-bottom: 10px;
        }

        .details p {
            text-align: justify;
            color: #666;
            font-size: 16px;
        }

        .offers {
            margin-top: 30px;
        }

        .offers h2 {
            color: #2ea843;
            text-align: center;
            margin-bottom: 20px;
        }

        .offers .row {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            justify-items: center;
        }

        .card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 250px;
            height: 250px;
            text-align: center;
        }

        .card p {
            font-size: 16px;
            margin-bottom: 15px;
        }

        .btn-voucher {
            display: block;
            width: 100%;
            padding: 10px;
            background: #28a745;
            color: white;
            text-align: center;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .btn-voucher:hover {
            background-color: #218838;
        }

        /* Modal estilos */
        #voucherModal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .modal-content {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            width: 400px;
        }

        .modal-header {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
            text-align: center;
        }

        .modal-body {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .modal-body input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }

        .modal-footer {
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
        }

        .close-btn {
            background-color: #dc3545;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .close-btn:hover {
            background-color: #c82333;
        }

        .btn-generate {
            background-color: #28a745;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-generate:hover {
            background-color: #218838;
        }

        #qrCodeContainer img {
            margin-top: 15px;
            max-width: 200px;
        }
    </style>
</head>
<body>
    <!-- Carrusel -->
   <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('images/publicidad.jpg') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/publicidad 2.jpg') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/publicidad3.jpg') }}" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
    <!-- Contenido principal en recuadro blanco -->
    <div class="container">
        <div class="content">
            <!-- Detalles del perfil -->
            <div class="details">
                <img src="{{ asset('images/cabañapremiun.jpg') }}" alt="Imagen del restaurante">
                <div class="text">
                    <h1>{{ $profile->nombre }}</h1>
                    <p>{{ $profile->descripcion }}</p>
                </div>
            </div>

            <!-- Ofertas -->
            <div class="offers">
                <h2>Ofertas Disponibles</h2>
                <div class="row">
                    @foreach ($offers as $offer)
                    <div class="card">
                        <p><strong>Oferta:</strong> {{ $offer->descripcion }}</p>
                        <p><strong>Desde:</strong> {{ $offer->fecha_inicio }}</p>
                        <p><strong>Hasta:</strong> {{ $offer->fecha_fin }}</p>
                        <button class="btn-voucher" onclick="openModal({{ $offer->id }})">Generar Voucher</button>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="voucherModal">
        <div class="modal-content">
            <div class="modal-header">
                Generar Voucher
            </div>
            <form id="voucherForm">
                @csrf
                <input type="hidden" id="oferta_id" name="oferta_id">
                <div class="modal-body">
                    <label for="nombre_cliente">Nombre del Beneficiario</label>
                    <input type="text" id="nombre_cliente" name="nombre_cliente" required>
                    <label for="rut">RUT del Beneficiario</label>
                    <input type="text" id="rut" name="rut" required>
                    <div id="qrCodeContainer"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="close-btn" onclick="closeModal()">Cerrar</button>
                    <button type="submit" class="btn-generate">Generar Voucher</button>
                    <div id="qrcode"></div>
                </div>
            </form>
        </div>
    </div>

    <script src="{{ asset('js/qrcode.min.js')}}"></script>

    <!-- Scripts -->    
    <script>
        function openModal(offerId) {
            const modal = document.getElementById('voucherModal');
            modal.style.display = 'flex';
            document.getElementById('oferta_id').value = offerId;
        }

        function closeModal() {
            const modal = document.getElementById('voucherModal');
            modal.style.display = 'none';
        }

        document.getElementById('voucherForm').addEventListener('submit', async function (e) {
            e.preventDefault();

            const offerId = document.getElementById('oferta_id').value;
            const nombreCliente = document.getElementById('nombre_cliente').value;
            const rut = document.getElementById('rut').value;

            try {
                const response = await fetch('/voucher/store', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ oferta_id: offerId, nombre_cliente: nombreCliente, rut: rut })
                });

                const data = await response.json();

                if (data.success) {
                    new QRCode(document.getElementById("qrcode"), data.qrUrl);
                } else {
                    alert('Error al generar el voucher. Intente nuevamente.');
                }
            } catch (error) {
                console.error('Error:', error);
                alert('Ocurrió un error al procesar la solicitud.');
            }
        });
    </script>
</body>
</html>
@endsection

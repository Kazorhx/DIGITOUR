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

        .details h1 {
            color: #2ea843;
            text-align: center;
        }

        .details p {
            text-align: center;
            color: #666;
        }

        .offers {
            margin-top: 30px;
        }

        .offers h2 {
            color: #2ea843;
            text-align: center;
            margin-bottom: 20px;
        }

        .card {
            background: white;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .card p {
            margin: 0 0 10px;
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
    <div class="content">
        <!-- Imagen principal -->
        <div class="hero">
            <img src="{{ asset('images/publicidad 2.jpg') }}" alt="Cabecera del perfil">
        </div>

        <!-- Detalles del perfil -->
        <div class="details">
            <h1>{{ $profile->nombre }}</h1>
            <p>{{ $profile->descripcion }}</p>
        </div>

        <!-- Ofertas -->
        <div class="offers">
            <h2>Ofertas Disponibles</h2>
            @foreach ($offers as $offer)
            <div class="card">
                <p><strong>Oferta:</strong> {{ $offer->descripcion }}</p>
                <p><strong>Válido desde:</strong> {{ $offer->fecha_inicio }}</p>
                <p><strong>Válido hasta:</strong> {{ $offer->fecha_fin }}</p>
                <button class="btn-voucher" onclick="openModal({{ $offer->id }})">Generar Voucher</button>
            </div>
            @endforeach
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

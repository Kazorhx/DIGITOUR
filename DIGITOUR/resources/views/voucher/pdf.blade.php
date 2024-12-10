<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voucher</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 20px;
        }
        .qr-code {
            margin: 20px 0;
        }
        .voucher-info {
            text-align: left;
            margin: 0 auto;
            width: 50%;
        }
    </style>
</head>
<body>
    <h1>Voucher</h1>
    <p><strong>ID:</strong> {{ $voucher->id }}</p>
    <p><strong>Nombre del cliente:</strong> {{ $voucher->nombre_cliente }}</p>
    <p><strong>RUT:</strong> {{ $voucher->rut }}</p>
    <p><strong>Oferta:</strong> {{ $voucher->oferta_id }}</p>
    <p><strong>Fecha de emisión:</strong> {{ $voucher->fecha_emision }}</p>
    <p><strong>Fecha de validación:</strong> {{ $voucher->fecha_validacion }}</p>

    <div class="qr-code">
        <img src="data:image/png;base64,{{ base64_encode($qrCode) }}" alt="Código QR">
    </div>
</body>
</html>

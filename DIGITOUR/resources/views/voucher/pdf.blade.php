<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Voucher</title>
</head>
<body>
    <h1>Voucher: {{ $voucher->nombre_cliente }}</h1>
    <p>Oferta: {{ $voucher->offer->descripcion }}</p>
    <p>RUT: {{ $voucher->rut }}</p>
    <p>Fecha de Emisión: {{ $voucher->fecha_emision }}</p>
    <div style="text-align: center; margin-top: 30px;">
        <img src="data:image/png;base64,{{ base64_encode(QrCode::format('png')->size(300)->generate($voucher->url)) }}" alt="QR Code">
    </div>
</body>
</html>

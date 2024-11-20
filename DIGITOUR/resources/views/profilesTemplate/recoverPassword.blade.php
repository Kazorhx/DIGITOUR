<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recuperar Contraseña</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
</head>
<body style="background-image: url({{ asset('images/bg.jpg') }});">
<div class="login">
    <form action="{{ route('password.recover') }}" method="POST">
        @csrf <!-- Incluir el token CSRF para la protección -->
        <h1>Recuperar Contraseña</h1>
        <p class="text-center">Ingrese su correo electrónico para enviarle un enlace de recuperación</p>
        <div class="input-box">
            <input type="email" name="email" placeholder="Ingrese su correo" required>
        </div>
        <button type="submit" class="btn-login">Enviar enlace</button>

        @if (session('status'))
            <div class="alert alert-success mt-2">{{ session('status') }}</div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger mt-2">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <div class="text-center mt-3">
            <a href="{{ route('login') }}">Volver al inicio de sesión</a>
        </div>
    </form>
</div>

<script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</body>
</html>

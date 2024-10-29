<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/bootstrap.css') }} ">
</head>
<body style=" background-image: url( {{ asset('images/bg.jpg') }} ) ">
<div class="login">
    <form action="">
        <h1>Bienvenidos a DIGITOUR</h1>
        <div class="input-box">
            <input type="text" placeholder=" Ingrese su correo" required>
            <div class="input-box">
                <input type="password" placeholder="Ingrese su contraseña" required>
            </div>
            <div class="recordar-contraseña">
                <label><input type="checkbox">Recuerdame </label>
                <a href="#">¿Olvidaste tu contraseña?</a>
            </div>
        </div>
       <button type="submit" class="btn-login"> Iniciar sesión</button>

    </form>
</div>

<script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</body>
</html>

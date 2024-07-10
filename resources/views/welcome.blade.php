<!DOCTYPE html>
<html>
<head>
    <title>Bienvenido</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <div class="jumbotron mt-5">
            <h1 class="display-4">Bienvenido a Nuestro Sistema</h1>
            <p class="lead">Por favor, inicia sesión o regístrate para continuar.</p>
            <hr class="my-4">
            <a class="btn btn-primary btn-lg" href="{{ route('login') }}" role="button">Iniciar Sesión</a>
            <a class="btn btn-secondary btn-lg" href="{{ route('register') }}" role="button">Registrarse</a>
        </div>
    </div>
</body>
</html>

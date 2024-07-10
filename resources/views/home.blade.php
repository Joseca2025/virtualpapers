<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
</head>

<body>
    <h1>Bienvenido, {{ Auth::user()->nombre }}</h1>
    <p>Has iniciado sesión correctamente.</p>
    <a href="{{ route('logout') }}"
        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar sesión</a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</body>

</html>

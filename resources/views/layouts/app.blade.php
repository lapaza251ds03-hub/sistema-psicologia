<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo', 'Inicio') · {{ config('app.name') }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
</head>
<body>
    <header class="container">
        <nav>
            <ul><li><strong>Sistema de Psicología</strong></li></ul>
            <ul>
                <li><a href="{{ route('inicio') }}">Inicio</a></li>
                <li><a href="#">Pacientes</a></li>
                <li><a href="#">Citas</a></li>
                <li><a href="#">Evaluaciones</a></li>
                <li><a href="#">Terapeutas</a></li>
            </ul>
        </nav>
    </header>

    <main class="container">
        @yield('contenido')
    </main>

    <footer class="container">
        <small>Sistema de Gestión Psicológica · 2026</small>
    </footer>
</body>
</html>
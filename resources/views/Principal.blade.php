<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Hotel Amaykay - Inicio</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: #f3f4f6;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        header {
            background-color: #2c3e50;
            color: white;
            padding: 2rem;
        }
        h1 {
            margin: 0;
        }
        main {
            padding: 2rem;
        }
        .btn {
            display: inline-block;
            background-color: #3498db;
            color: white;
            padding: 1rem 2rem;
            border: none;
            border-radius: 8px;
            text-decoration: none;
            font-size: 1.1rem;
            margin-top: 1.5rem;
        }
        .btn:hover {
            background-color: #2980b9;
        }
        footer {
            background-color: #2c3e50;
            color: white;
            padding: 1rem;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Bienvenido al Hotel Amaykay</h1>
        <p>Tu descanso es nuestra prioridad</p>
    </header>

    <main>
        <h2>¿Listo para reservar?</h2>
        <p>Explora nuestras habitaciones y servicios exclusivos diseñados para brindarte la mejor experiencia.</p>
        <a href="{{ route('reservas.index') }}" class="btn">Ver Disponibilidad</a>
    </main>

    <footer>
        &copy; {{ date('Y') }} Hotel Amaykay. Todos los derechos reservados.
    </footer>
</body>
</html>

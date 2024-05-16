<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Lista de Eventos</title>
</head>
<style>
    body {
        font-family: Cambria, serif; ;
        margin: 0;
        padding: 0;
        background-color: #a6dd9f;
        color: #333;
    }

    .container {
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        font-size: 45px;
        margin-bottom: 20px;
        text-align: center;
        color: #000000;
    }

    .return-button {
        display: inline-block;
        padding: 10px 20px;
        background-color: #218d38;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        font-size: 18px;
        transition: background-color 0.3s;
        margin-bottom: 20px;
    }

    .return-button:hover {
        background-color: #2ab331;
    }

    .event-container {
        background-color: #f0f0f0;
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .event h2 {
        margin-top: 0;
        font-size: 24px;
        color: #000000;
    }

    .event p {
        margin: 10px 0;
        font-size: 16px;
        color: #666;
    }

    .event {
        text-align: right;
    }
</style>
<body>
<div class="container">
    <h1>Eventos</h1>
    <a href="{{ route ('eventos.crear')}}" class="return-button">Agregar Nuevo Evento</a>

    @foreach ($eventos as $evento)
        <div class="event-container">
            <h2>{{ $evento->nombre }}</h2>
            <p>Ubicación: {{ $evento->ubicacion }}</p>
            <p>Fecha: {{ $evento->date }}</p>
        </div>
    @endforeach
</div>
</body>
</html>


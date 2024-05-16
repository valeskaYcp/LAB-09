<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Agregar nuevo evento</title>
</head>
<style>
    body {
        font-family: Cambria, serif; ;
        margin: 0;
        padding: 0;
        background-color: #82c579;
        color: #000000;
    }
    .container {
        max-width: 600px;
        margin: 20px auto; 
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        margin-top: 60px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        font-family: Cambria, serif; 
        font-size: 28px;
        margin-bottom: 20px;
        color: #000000;
        text-align: center;
    }

    .form-container {
        padding: 20px;
        border-radius: 8px;
        background-color: #f2f2f2;
        margin-bottom: 20px; 
    }

    form {
        display: flex;
        flex-direction: column;
    }

    label {
        margin-bottom: 8px;
    }

    input[type="text"],
    input[type="datetime-local"],
    input[type="submit"] {
        padding: 10px;
        margin-bottom: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 18px;
        font-family: Cambria, serif;
    }

    input[type="submit"] {
        background-color: #249c2a;
        color: #fff;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    input[type="submit"]:hover {
        background-color: #17a32f;
    }

    .return-button {
        display: inline-block;
        padding: 10px 20px;
        background-color: #000000;
        color: #fff;
        text-decoration: none;
        border-radius: 4px;
        font-family: Cambria, serif;
        font-size: 16px;
        transition: background-color 0.3s;
        margin-left: 20px; 
    }

    .return-button:hover {
        background-color: #5a6268;
    }
</style>
<body>
<div class="container">
    <h1>Agregar Evento</h1>

    <div class="form-container">
        <form method="POST" action="{{ route('eventos.store') }}">
            @csrf
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre">

            <label for="ubicacion">Ubicación:</label>
            <input type="text" id="ubicacion" name="ubicacion">

            <label for="date">Fecha:</label>
            <input type="datetime-local" id="date" name="date">

            <input type="submit" value="Agregar Evento">
        </form>
    </div>

    <a href="{{ route ('eventos.inicio')}}" class="return-button">Volver al inicio</a>
</div>
</body>
</html>


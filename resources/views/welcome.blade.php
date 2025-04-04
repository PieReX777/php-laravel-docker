<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles -->
        <style>
            body {
                font-family: 'Instrument Sans', sans-serif;
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                background-color: #FDFDFC;
                color: #1b1b18;
                flex-direction: column;
            }
            h1 {
                font-size: 3rem;
                text-align: center;
            }
            .button {
                padding: 10px 20px;
                background-color: #4CAF50;
                color: white;
                font-size: 1rem;
                text-align: center;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                margin-top: 20px;
            }
            .button:hover {
                background-color: #45a049;
            }
        </style>
    </head>
    <body>
        <h1>Hola Mundo desde Laravel 12, de Joaquin Zea Burga</h1>

        <!-- Botón de Login -->
        <a href="{{ route('login') }}">
            <button class="button">Iniciar sesión</button>
        </a>
    </body>
</html>

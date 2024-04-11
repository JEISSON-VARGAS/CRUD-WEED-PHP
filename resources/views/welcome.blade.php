<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIENVENIDO | WEED</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to left, #d1c0ff, #9fe6a0, #ffb3a7, #a0e6ff);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        p {
            color: #666;
            margin-bottom: 30px;
        }

        .btn {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-transform: uppercase;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin: 0 10px;
            text-decoration: none;
            display: inline-block;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .btn-secondary {
            background-color: #55aa55; /* Cambié el color a #55aa55 */
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-transform: uppercase;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin: 0 10px;
            text-decoration: none;
            display: inline-block;
        }

        .btn-secondary:hover {
            background-color: #000000; /* Cambié el color hover a un tono más oscuro */
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Bienvenido</h1>
        <p>Gracias por unirte a nuestra plataforma. Estamos emocionados de tenerte con nosotros.
            Ingresa mi WEED
        </p>
        @if (Route::has('login'))
            <nav class="-mx-3 flex flex-1 justify-end">
                @auth
                    <a
                        href="{{ url('/dashboard') }}"
                        class="btn-secondary"
                    >
                        Dashboard
                    </a>
                @else
                    <a
                        href="{{ route('login') }}"
                        class="btn-secondary"
                    >
                        Iniciar sesión
                    </a>

                    @if (Route::has('register'))
                        <a
                            href="{{ route('register') }}"
                            class="btn-secondary"
                        >
                            Registrarse
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
    </div>
</body>
</html>

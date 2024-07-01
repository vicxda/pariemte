<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DavShop - Tienda de Ropa</title>
    <!-- Aquí puedes incluir tus estilos CSS y scripts JS -->
    <style>
        /* Estilos CSS personalizados */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        nav {
            background-color: #333;
            color: #fff;
            padding: 10px;
        }
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin-right: 20px;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
        }
        .container {
            max-width: 960px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <!-- Barra de navegación -->
    <nav>
        <ul>
            <li><a href="/">Inicio</a></li>
            <li><a href="/ropa-hombre">Ropa de Hombre</a></li>
            <li><a href="/ropa-mujer">Ropa de Mujer</a></li>
            <li><a href="/ropa-hot">Ropa Hot</a></li>
            <li><a href="/contacto">Contacto</a></li>
        </ul>
    </nav>
    
    <!-- Contenido principal -->
    <div class="container">
        @yield('content')
    </div>

    <!-- Pie de página -->
    <footer>
        &copy; {{ date('Y') }} DavShop - Todos los derechos reservados
    </footer>
</body>
</html>

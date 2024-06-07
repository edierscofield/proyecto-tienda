<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Tienda de Abarrotes')</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <style>
        .logo {
            position: fixed;
            top: 70px;
            left: 10px;
            width: 90px; /* Ajusta el tamaño según sea necesario */
            z-index: 1000;
        }
    </style>
</head>
<body class="bg-light text-dark">
    <div class="logo">
        <img src="{{ asset('images/td_logo.png') }}" alt="Tienda Django Logo" class="img-fluid">
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary mb-4">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="{{ url('/home') }}">Tienda de Abarrotes</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('clientes.index') }}">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('productos.index') }}">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('inventarios.index') }}">Inventarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('proveedores.index') }}">Proveedores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('ventas.index') }}">Ventas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>

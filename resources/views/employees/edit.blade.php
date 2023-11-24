<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    {{-- <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css"> --}}
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

    <header class="bg-dark text-light text-center py-5">
        <h1 class="display-4">Encabezado de la Página</h1>
        <p class="lead">Descripción o subencabezado</p>
    </header>
  

    <!-- Contenido principal -->
    <div class="container mt-5">
        <div class="container mt-5">
        <h2>Editar empleado</h2>
        <form action="{{ route('employees.update', $employee->id) }}" method="POST">
            @csrf
            @method('PUT')
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Add your form fields here -->
            <!-- Example: -->
            <div class="form-group">
                <label for="name">Nombre Completo*</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $employee->name }}" required>
            </div>

            <div class="form-group">
                <label for="email">Correo electrónico*</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ $employee->email }}" required>
            </div>

            <!-- Add more form fields as needed -->

            <button class="btn btn-primary" type="submit">Actualizar</button>
        </form>
    </div>
    </div>

    <footer>
        <p>Derechos de autor © 2023 Mi Página Web</p>
    </footer>
</body>

</html>
 
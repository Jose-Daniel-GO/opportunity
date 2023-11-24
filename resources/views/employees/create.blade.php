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
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Contenido principal -->
    <div class="container mt-5">

        <main>
            <section>
                <h2>Crear empleado</h2>
                <form action="{{ route('employees.store') }}" method="POST">
                    @csrf
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    <div class="row mb-3">
                        <div class="col-md-6 text-right">
                            <label for="name">Nombre Completo*</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6 text-right">
                            <label for="email">Correo electrónico*</label>
                        </div>
                        <div class="col-md-6">
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6 text-right">
                            <label for="sex">Sexo*</label>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sex" id="masculino" value="M" required>
                                <label class="form-check-label" for="masculino">Masculino</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sex" id="femenino" value="F" required>
                                <label class="form-check-label" for="femenino">Femenino</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6 text-right">
                            <label for="area_id">Área*</label>
                        </div>
                        <div class="col-md-6">
                            <select name="area_id" id="area_id" class="form-control" required>
                                <option value="1">Administracion</option>
                                <option value="2">Secretaria</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6 text-right">
                            <label for="description">Descripción*</label>
                        </div>
                        <div class="col-md-6">
                            <textarea name="description" id="description" class="form-control" row mb-3s="3" required></textarea>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="boletin" id="boletin" value="1" required>
                                <label class="form-check-label" for="boletin">Deseo recibir boletin informativo</label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6 text-right">
                            <label for="roles">Roles*</label>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="roles" id="proyectos" value="1" required>
                                    <label class="form-check-label" for="proyectos">Profecional de Proyectos</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="roles" id="estrategico" value="2" required>
                                    <label class="form-check-label" for="estrategico">Gerente estrategico</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="roles" id="estrategico" value="3" required>
                                    <label class="form-check-label" for="estrategico">Auxiliar administrativo</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Guardar</button>
                </form>
            </section>
        </main>
    </div>

    <footer>
        <p>Derechos de autor © 2023 Mi Página Web</p>
    </footer>
</body>

</html>
 
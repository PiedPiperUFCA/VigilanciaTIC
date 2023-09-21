<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Fonte Google -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <!-- Fonte Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/layoutmain.css">
    <script src="/js/script.js"></script>
</head>

<body class="antialiased">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark ">
            <div class="container">
                <a class="navbar-brand" href="/"><img src="/img/logo.jpeg" alt="Logotipo" />d</a>
                
                <div>
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Início</a>
                        </li>

                        <li class="nav-item">
                            <a href="/formularios" class="nav-link">Formulários</a>
                        </li>
                        <li class="nav-item">
                            <a href="/suporte" class="nav-link">Suporte</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

   
    @yield('content')
</body>

</html>

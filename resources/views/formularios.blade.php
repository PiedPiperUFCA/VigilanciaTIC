@extends('layouts.main')
@section('title','Formularios')
@section('content')

<link href="{{ asset('css/pagformularios.css') }}" rel="stylesheet">

<body>
    <div class="container">
        <h1 class="text-center">Escolha um Formulário</h1>

        <!-- Campo de pesquisa -->
        <div class="mb-3">
            <input type="text" id="searchInput" class="form-control" placeholder="Pesquisar formulários...">
        </div>

        <div class="btn-container" id="btnContainer">
            <a href="formularios/influenza" class="btn btn-primary">Influenza - SINAN</a>
            <a href="formularios/influenza" class="btn btn-success">Paralisia Flácida Aguda / Poliomelite - SINAN</a>
            <a href="formularios/influenza" class="btn btn-danger">Dengue - SINAN</a>
            <a href="formularios/influenza" class="btn btn-warning">Zika - SINAN</a>
            <a href="formularios/influenza" class="btn btn-success">Febre Amarela - SINAN</a>
            <a href="formularios/influenza" class="btn btn-primary">Meningite - SINAN</a>
            <a href="formularios/influenza" class="btn btn-primary">Intoxicação Exógena - SINAN</a>


        </div>
    </div>

    <script src="{{ asset('js/buscaForms.js') }}"></script>

    </script>


</body>
@endsection
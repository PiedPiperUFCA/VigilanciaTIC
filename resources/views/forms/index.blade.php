@extends('layouts.admin')

@section('title_page','Cadastramento de fichas de notificações')
@section('description_page','Realize a pesquisa da ficha que deseja preencher!')

@section('content')

    <link href="{{ asset('css/pagformularios.css') }}" rel="stylesheet">

    <div class="container">

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

    <script src="{{asset('js/buscaForms.js') }}"></script>


@endsection

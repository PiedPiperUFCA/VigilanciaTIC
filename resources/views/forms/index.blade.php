@extends('layouts.main-sbadmin')

@section('subtitle_page','Cadastramento de fichas de notificações')
@section('description_page','Realize a pesquisa da ficha que deseja preencher!')

@section('content')

    <link href="{{ asset('css/pagformularios.css') }}" rel="stylesheet">

    <div class="container">

        <!-- Campo de pesquisa -->
        <div class="mb-3">
            <input type="text" id="searchInput" class="form-control" placeholder="Pesquisar formulários...">
        </div>

        <div class="btn-container" id="btnContainer">
            <a href="/influenza" class="btn btn-primary">Influenza
                <span class="badge text-gray-100 bg-secondary">SINAN</span>
            </a>
            <a href="formularios/antirabico" class="btn btn-success">Anti-Rábico Humano
                <span class="badge text-gray-100 bg-secondary">SINAN</span>
            </a>
            <a href="formularios/influenza" class="btn btn-danger">Dengue
                <span class="badge text-gray-100 bg-secondary">SINAN</span>
            </a>
            <a href="formularios/influenza" class="btn btn-warning">Zika
                <span class="badge text-gray-100 bg-secondary">SINAN</span>
            </a>
            <a href="formularios/influenza" class="btn btn-success">Febre Amarela
                <span class="badge text-gray-100 bg-secondary">SINAN</span>
            </a>
            <a href="formularios/influenza" class="btn btn-primary">Meningite
                <span class="badge text-gray-100 bg-secondary">SINAN</span>
            </a>
            <a href="formularios/influenza" class="btn btn-primary">Intoxicação Exógena
                <span class="badge text-gray-100 bg-secondary">SINAN</span>
            </a>
        </div>
    </div>

    <script src="{{asset('js/buscaForms.js') }}"></script>


@endsection

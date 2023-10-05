@extends('layouts.main-sbadmin')

@section('subtitle_page','Histórico de fichas')
@section('description_page','Abaixo estão listadas todas as fichas preenchidas.')

@section('content')

    <!-- Page Heading -->
    <hr>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTable - Histórico de fichas</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>CNS</th>
                        <th>Unidade de Saúde</th>
                        <th>Agravo (CID)</th>
                        <th>Notificado em</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>CNS</th>
                        <th>Unidade de Saúde</th>
                        <th>Agravo (CID)</th>
                        <th>Notificado em</th>
                        <th>Status</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <tr>
                        <td>785 4739 5118 0005</td>
                        <td>Unidade de Saúde Aeroporto</td>
                        <td>W 64</td>
                        <td>20/08/2023</td>
                        <td>Notificado</td>
                    </tr>
                    <tr>
                        <td>207 8245 1332 0004</td>
                        <td>Unidade de Saúde Limoeiro</td>
                        <td>W 64</td>
                        <td>20/09/2023</td>
                        <td>Em investigação</td>
                    </tr>
                    <tr>
                        <td>816 9861 8112 0008</td>
                        <td>Unidade de Saúde Franciscanos</td>
                        <td>San Francisco</td>
                        <td>25/12/2023</td>
                        <td>Concluído</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

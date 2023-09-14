@extends('layouts.layoutforms')
@section('title','Influenza')
@section('content')

    <h1 style="text-align: center;">SINAN</h1>
    <p style="text-align: center;">SISTEMA DE INFORMAÇÃO DE AGRAVOS DE NOTIFICAÇÃO</p>
    <form action="">
        <div class="form-group col-md-3">
            <input type="number" name="N°" id="N°" class="form-control" placeholder="N°" required style="background-color: rgb(212, 209, 214);">
        </div>
    </form>
    <p style="text-align: center;">FICHA DE INVESTIGAÇÃO <strong>INFLUENZA HUMANA POR NOVO SUBTIPO (PANDÊMICO)</strong></p>
    <div class="container">
        <form class="form-row" action="">
            <fieldset>
                <legend style="text-align: center;"><strong>Dados Gerais</strong></legend>
                <br>
                <div class="form-group">
                    <label for="Tipo de Notificação">1 - Tipo de Notificação</label>
                    <input type="text" name="Tipo de Notificação" id="Tipo de Notificação" class="form-control" required>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="Agravo/Doença">2 - Agravo/Doença</label>
                        <input type="text" name="Agravo/Doençao" id="Agravo/Doença" class="form-control" required">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="Código (CID)">Código (CID)</label>
                        <input type="text" name="Código (CID)" id="Código (CID)" class="form-control" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="Data de Notificação">3 - Data de Notificação</label>
                        <input type="date" name="Data de Notificação" id="Data de Notificação" class="form-control" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="UF">4 - UF</label>
                        <input type="text" name="UF" id="UF" class="form-control" required>
                    </div>
                    <div class="form-group col-md-7">
                        <label for="Município de Notificação">5 - Município de Notificação</label>
                        <input type="text" name="Município de Notificação" id="Município de Notificação" class="form-control" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="Código (IBGE)">Código (IBGE)</label>
                        <input type="text" name="Código (IBGE)" id="Código (IBGE)" class="form-control" required>
                    </div>

                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="Unidade de Saúde (ou outra fonte notificadora)">6 - Unidade de Saúde (ou outra fonte notificadora)</label>
                        <input type="text" name="Unidade de Saúde (ou outra fonte notificadora)" id="Unidade de Saúde (ou outra fonte notificadora)" class="form-control" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="Código">Código</label>
                        <input type="text" name="Código" id="Código" class="form-control" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="Data dos Primeiros Sintomas">7 - Data dos Primeiros Sintomas</label>
                        <input type="date" name="Data dos Primeiros Sintomas" id="Data dos Primeiros Sintomas" class="form-control" required>
                    </div>
                </div>
                <input type="submit" value="Enviar" class="btn btn-primary">

    </div>
    </fieldset>
    </form>
    </div>
    </div>

@endsection
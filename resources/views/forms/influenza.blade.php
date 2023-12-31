@extends('layouts.layoutforms')
@section('title','Influenza')
@section('typeNotification','INFLUENZA HUMANA POR NOVO SUBTIPO (PANDÊMICO)')
@section('content')
    <hr>
    <h1 style="text-align: center;">Dados Complementares do Caso</h1>
    <div class="container">
        <fieldset>
            <legend style="text-align: center;"><strong>Antecedentes Epidemiológicos</strong></legend>
            <br>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="Data da Investigação">31 - Data da Investigação</label>
                    <input type="date" name="Data da Investigação" id="Data da Investigação" class="form-control">
                </div>

                <div class="form-group col-md-9">
                    <label for="Ocupação">32 - Ocupação</label>
                    <input type="text" name="Ocupação" id="Ocupação" class="form-control""></div>
                    </div>

                <div class=" form-row">
                    <div class="form-group col-md-3">
                        <label for="Recebeu Vacina contra Gripe">33 - Recebeu Vacina contra Gripe</label>
                        <br><br>
                        <select name="Recebeu Vacina contra Gripe" id="Recebeu Vacina contra Gripe" class="form-control">
                            <option selected>Escolher...</option>
                            <option>1 - Sim</option>
                            <option>2 - Não</option>
                            <option>9 - Ignorado</option>
                        </select>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="Se sim, data da última dose">34 - Se sim, data da última dose</label>
                        <br><br>
                        <input type="date" name="Se sim, data da última dose" id="Se sim, data da última dose" class="form-control">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="Recebeu Vacina Anti-Pneumocócica">35 - Recebeu Vacina Anti-Pneumocócica</label>
                        <select name="Recebeu Vacina Anti-Pneumocócica" id="Recebeu Vacina Anti-Pneumocócica" class="form-control">
                            <option selected>Escolher...</option>
                            <option>1 - Sim</option>
                            <option>2 - Não</option>
                            <option>9 - Ignorado</option>
                        </select>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="Se sim, data da última dose_2">36 - Se sim, data da última dose</label>
                        <br><br>
                        <input type="date" name="Se sim, data da última dose_2" id="Se sim, data da última dose_2" class="form-control">
                    </div>

                </div>
                <div class="form-group">
                    <label for="Contato com Caso">37 - Contato com Caso Suspeito ou Confirmado de Influenza Humana por Novo Subtipo (até 10 dias antesdo início dos sinais e sintomas)</label>
                    <select type="text" name="Contato com Caso" id="Contato com Caso" class="form-control">
                        <option selected>Escolher...</option>
                        <option>1 - Domicílio</option>
                        <option>2 - Vizinhança</option>
                        <option>3 - Trabalho</option>
                        <option>4 - Creche/Escola</option>
                        <option>5 - Posto de Saúde/Hospital</option>
                        <option>6 - Outro Estado/Município</option>
                        <option>7 - Sem História de Contato</option>
                        <option>8 - Outro País</option>
                        <option>9 - Ignorado</option>
                        <option>10 - Meio de Transporte</option>
                        <option>11 - Outro</option>
                    </select>

                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="Meio de Transporte">Meio de Transporte</label>
                        <input type="text" name="Meio de Transporte" id="Meio de Transporte" class="form-control">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="Outros_AE">Outros</label>
                        <input type="text" name="Outros_AE" id="Outros_AE" class="form-control">
                    </div>

                </div>

                <h1 style="font-size: 13pt;">38 - Informações sobre Deslocamento (datas e locais freqüentados no período de até 10 dias antes do início dos sinais e sintomas)</h1>

                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="Data_AE">Data</label>
                        <input type="date" name="Data_AE" id="Data_AE" class="form-control">
                    </div>

                    <div class="form-group col-md-1">
                        <label for="UF_EP">UF</label>
                        <input type="text" name="UF_EP" id="UF_EP" class="form-control">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="Município/Localidade_EP">Município/Localidade</label>
                        <input type="text" name="Município/Localidade_EP" id="Município/Localidade_EP" class="form-control">
                    </div>

                    <div class="form-group col-md-2">
                        <label for="País_AE">País</label>
                        <input type="text" name="País_AE" id="País_AE" class="form-control">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="Meio de Transporte">Meio de Transporte</label>
                        <input type="text" name="Meio de Transporte" id="Meio de Transporte" class="form-control">
                    </div>

                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <input type="date" name="Data_AE_2" id="Data_AE_2" class="form-control">
                    </div>

                    <div class="form-group col-md-1">
                        <input type="text" name="UF_EP_2" id="UF_EP_2" class="form-control">
                    </div>

                    <div class="form-group col-md-3">
                        <input type="text" name="Município/Localidade_EP_2" id="Município/Localidade_EP_2" class="form-control">
                    </div>

                    <div class="form-group col-md-2">
                        <input type="text" name="País_AE_2" id="País_AE_2" class="form-control">
                    </div>

                    <div class="form-group col-md-3">
                        <input type="text" name="Meio de Transporte_2" id="Meio de Transporte_2" class="form-control">
                    </div>

                </div>

                <div class="form-row">
                    <div class="form-group col-md-3">
                        <input type="date" name="Data_AE_3" id="Data_AE_3" class="form-control">
                    </div>

                    <div class="form-group col-md-1">
                        <input type="text" name="UF_EP_3" id="UF_EP_3" class="form-control">
                    </div>

                    <div class="form-group col-md-3">
                        <input type="text" name="Município/Localidade_EP_3" id="Município/Localidade_EP_3" class="form-control">
                    </div>

                    <div class="form-group col-md-2">
                        <input type="text" name="País_AE_3" id="País_AE_3" class="form-control">
                    </div>

                    <div class="form-group col-md-3">
                        <input type="text" name="Meio de Transporte_3" id="Meio de Transporte_3" class="form-control">
                    </div>

                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="Contato com Aves">39 - Contato com Aves Doentes ou Mortas até 10 dias antes do início dos sinais e sintomas?</label>
                        <select name="Contato com Aves" id="Contato com Aves" class="form-control">
                            <option selected>Escolher...</option>
                            <option>1 - Sim</option>
                            <option>2 - Não</option>
                            <option>9 - Ignorado</option>
                        </select>
                    </div>

                    <div class="form-group col-md-1">
                        <label for="UF_EP_4">40 - UF</label>
                        <br><br>
                        <input type="text" name="UF_EP_4" id="UF_EP_4" class="form-control">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="Município/Localidade_EP">41 - Nome do Município</label>
                        <br><br>
                        <input type="text" name="Município/Localidade_EP" id="Município/Localidade_EP" class="form-control">
                    </div>

                    <div class="form-group col-md-2">
                        <label for="País_AE_4">42 - País</label>
                        <br><br>
                        <input type="text" name="País_AE_4" id="País_AE_4" class="form-control">
                    </div>
                </div>
        </fieldset>
    </div>
    <hr>
    <div class="container">
        <fieldset>
            <legend style="text-align: center;"><strong>Dados Clínicos</strong></legend>
            <br>
            <div class="form-group">
                <label for="Sinais e Sintomas">43 - Sinais e Sintomas</label>
                <select name="Sinais e Sintomas" id="Sinais e Sintomas" class="form-control">
            </div>
            <option selected>Escolher...</option>
            <option>1 - Sim</option>
            <option>2 - Não</option>
            <option>9 - Ignorado</option>
            </select>

    </div>

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Febre">
        <label class="form-check-label" for="inlineCheckbox1">Febre</label>
    </div>

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Dispnéia">
        <label class="form-check-label" for="inlineCheckbox2">Dispnéia</label>
    </div>

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="Mialgia">
        <label class="form-check-label" for="inlineCheckbox3">Mialgia</label>
    </div>

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="Diarréia">
        <label class="form-check-label" for="inlineCheckbox4">Diarréia</label>
    </div>

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="Tosse">
        <label class="form-check-label" for="inlineCheckbox5">Tosse</label>
    </div>

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="Dor de Garganta">
        <label class="form-check-label" for="inlineCheckbox6">Dor de Garganta</label>
    </div>

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="Conjuntivite">
        <label class="form-check-label" for="inlineCheckbox7">Conjuntivite</label>
    </div>

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox8" value="Calafrio">
        <label class="form-check-label" for="inlineCheckbox8">Calafrio</label>
    </div>

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox9" value="Artralgia">
        <label class="form-check-label" for="inlineCheckbox9">Artralgia</label>
    </div>

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox10" value="Coriza">
        <label class="form-check-label" for="inlineCheckbox10">Coriza</label>
    </div>
    <br><br>

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="text" id="inlineCheckbox11" placeholder="Outro">
        <label class="form-check-label" for="inlineCheckbox11"></label>
    </div>
    <br><br>

    <div class="form-group">
        <label for="Comorbidade">44 - Comorbidade</label>
        <select name="Comorbidade" id="Comorbidade" class="form-control">
    </div>
    <option selected>Escolher...</option>
    <option>1 - Sim</option>
    <option>2 - Não</option>
    <option>9 - Ignorado</option>
    </select>

    </div>

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox12" value="Cardiopatia Crônica">
        <label class="form-check-label" for="inlineCheckbox12">Cardiopatia Crônica</label>
    </div>

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox13" value="Renal Crônico">
        <label class="form-check-label" for="inlineCheckbox13">Renal Crônico</label>
    </div>

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox14" value="Imunodeprimido">
        <label class="form-check-label" for="inlineCheckbox14">Imunodeprimido</label>
    </div>

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox15" value="Doença Metabólica Crônica">
        <label class="form-check-label" for="inlineCheckbox15">Doença Metabólica Crônica</label>
    </div>

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox16" value="Pneumopatia crônica">
        <label class="form-check-label" for="inlineCheckbox16">Pneumopatia crônica</label>
    </div>

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox17" value="Hemoglobinopatia">
        <label class="form-check-label" for="inlineCheckbox17">Hemoglobinopatia</label>
    </div>

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox18" value="Tabagismo">
        <label class="form-check-label" for="inlineCheckbox18">Tabagismo</label>
    </div>
    <br><br>

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="text" id="inlineCheckbox19" placeholder="Outro">
        <label class="form-check-label" for="inlineCheckbox19"></label>
    </div>

    </div>

    </div>
    </fieldset>
    </div>
    <hr>
    </div>
    <div class="container">
        <fieldset>
            <legend style="text-align: center;"><strong>Atendimento</strong></legend>
            <br>
            <div class="form-row">
                <div class="form-group col-md-8">
                    <label for="Ocorreu Hospitalização">45 - Ocorreu Hospitalização</label>
                    <select name="Ocorreu Hospitalização" id="Ocorreu Hospitalização" class="form-control">
                        <option selected>Escolher...</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                        <option>9 - Ignorado</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="Data da Internação">46 - Data da Internação</label>
                    <input type="date" name="Data da Internação" id="Data da Internação" class="form-control">
                </div>

                <div class="form-group col-md-1">
                    <label for="UF_At">47 - UF</label>
                    <input type="text" name="UF_At" id="UF_At" class="form-control">
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="Município do Hospital">48 - Município do Hospital</label>
                    <input type="text" name="Município do Hospital" id="Município do Hospital" class="form-control">
                </div>

                <div class="form-group col-md-3">
                    <label for="Código (IBGE)_At">Código (IBGE)</label>
                    <input type="text" name="Código (IBGE)_At" id="Código (IBGE)_At" class="form-control">
                </div>

                <div class="form-group col-md-3">
                    <label for="Nome do Hospital">49 - Nome do Hospital</label>
                    <input type="text" name="Nome do Hospital" id="Nome do Hospital" class="form-control">
                </div>

                <div class="form-group col-md-3">
                    <label for="Código_At">Código</label>
                    <input type="text" name="Código_At" id="Código_At" class="form-control">
                </div>

            </div>

        </fieldset>
    </div>
    <hr>
    <div class="container">
        <fieldset>
            <legend style="text-align: center;"><strong>Dados Laboratoriais</strong></legend>
            <br>
            <strong>PCR</strong>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="Data da Coleta_DL_1">50 - Data da Coleta</label>
                    <input type="date" name="Data da Coleta_DL_1" id="Data da Coleta_DL_1" class="form-control""></div>

                    <div class=" form-group col-md-3">
                    <label for="Tipo de Amostra_DL_1">51 - Tipo de Amostra</label>
                    <select name="Tipo de Amostra_DL_1" id="Tipo de Amostra_DL_1" class="form-control">
                        <option selected>Escolher...</option>
                        <option>1 - Secreção de Nasofaringe</option>
                        <option>2 - Lavado Bronco-alveolar</option>
                        <option>3 - Fezes</option>
                        <option>4 - Tecido pós-mortem</option>
                        <option>5 - Soro</option>
                        <option>6 - Outro</option>
                        <option>9 - Ignorado</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="Outro_DL_1">Outro</label>
                    <input type="text" name="Outro_DL_1" id="Outro_DL_1" class="form-control">
                </div>

                <div class="form-group col-md-3">
                    <label for="Resultado_DL_1">52 - Resultado</label>
                    <select name="Resultado_DL_1" id="Resultado_DL_1" class="form-control">
                        <option selected>Escolher...</option>
                        <option>1 - Positivo</option>
                        <option>2 - Negativo</option>
                        <option>3 - Inconclusivo</option>
                        <option>4 - Não realizado</option>
                    </select>
                </div>

            </div>

            <div class="form-row">
                <div class="form-group col-md-9">
                    <label for="Diagnóstico Etiológico_1">53- Diagnóstico Etiológico</label>
                    <select name="Diagnóstico Etiológico_1" id="Diagnóstico Etiológico_1" class="form-control">
                        <option selected>Escolher...</option>
                        <option>1 - Influenza por novo subtipo viral (pandêmico)</option>
                        <option>2 - Influenza A Sazonal</option>
                        <option>3 - Influenza B Sazonal</option>
                        <option>4 - Influenza Aviária</option>
                        <option>5 - Outro Agente Infeccioso</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="Tipo_DL_1">54 - Tipo</label>
                    <input type="text" name="Tipo_DL_1" id="Tipo_DL_1" class="form-control" placeholder="H_N_">
                </div>
            </div>

            <strong>CULTURA</strong>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="Data da Coleta_DL_2">55 - Data da Coleta</label>
                    <input type="date" name="Data da Coleta_DL_2" id="Data da Coleta_DL_2" class="form-control""></div>

                    <div class=" form-group col-md-3">
                    <label for="Tipo de Amostra_DL_2">56 - Tipo de Amostra</label>
                    <select name="Tipo de Amostra_DL_2" id="Tipo de Amostra_DL_2" class="form-control">
                        <option selected>Escolher...</option>
                        <option>1 - Secreção de Nasofaringe</option>
                        <option>2 - Lavado Bronco-alveolar</option>
                        <option>3 - Fezes</option>
                        <option>4 - Tecido pós-mortem</option>
                        <option>5 - Soro</option>
                        <option>6 - Outro</option>
                        <option>9 - Ignorado</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="Outro_DL_2">Outro</label>
                    <input type="text" name="Outro_DL_2" id="Outro_DL_2" class="form-control">
                </div>

                <div class="form-group col-md-3">
                    <label for="Resultado_DL_2">57 - Resultado</label>
                    <select name="Resultado_DL_2" id="Resultado_DL_2" class="form-control">
                        <option selected>Escolher...</option>
                        <option>1 - Positivo</option>
                        <option>2 - Negativo</option>
                        <option>3 - Inconclusivo</option>
                        <option>4 - Não realizado</option>
                    </select>
                </div>
            </div>

            <strong>INIBIÇÃO DA HEMAGLUTINAÇÃO</strong>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="Data da Coleta_DL_3">58 - Data da Coleta</label>
                    <input type="date" name="Data da Coleta_DL_3" id="Data da Coleta_DL_3" class="form-control""></div>


                    <div class=" form-group col-md-9">
                    <label for="Resultado_DL_3">59 - Resultado</label>
                    <select name="Resultado_DL_3" id="Resultado_DL_3" class="form-control">
                        <option selected>Escolher...</option>
                        <option>1 - Positivo</option>
                        <option>2 - Negativo</option>
                        <option>3 - Inconclusivo</option>
                        <option>4 - Não realizado</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-9">
                    <label for="Diagnóstico Etiológico_2">60- Diagnóstico Etiológico</label>
                    <select name="Diagnóstico Etiológico_2" id="Diagnóstico Etiológico_2" class="form-control">
                        <option selected>Escolher...</option>
                        <option>1 - Influenza por novo subtipo viral (pandêmico)</option>
                        <option>2 - Influenza A Sazonal</option>
                        <option>3 - Influenza B Sazonal</option>
                        <option>4 - Influenza Aviária</option>
                        <option>5 - Outro Agente Infeccioso</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="Tipo_DL_2">61 - Tipo</label>
                    <input type="text" name="Tipo_DL_2" id="Tipo_DL_2" class="form-control" placeholder="H_N_">
                </div>
            </div>

            <strong>RAIO X TÓRAX</strong>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="Realização">62 - Realização</label>
                    <input type="date" name="Realização" id="Realização" class="form-control""></div>

                    <div class=" form-group col-md-6">
                    <label for="Resultado_DL_4">63 - Se sim, resultado</label>
                    <select name="Resultado_DL_4" id="Resultado_DL_4" class="form-control">
                        <option selected>Escolher...</option>
                        <option>1 - Normal</option>
                        <option>2 - Infiltrado Intersticial</option>
                        <option>3 - Consolidação</option>
                        <option>4 - Misto</option>
                        <option>5 - Outros</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="Outro_DL_3">Outros</label>
                    <input type="text" name="Outro_DL_3" id="Outro_DL_3" class="form-control">
                </div>

            </div>
        </fieldset>
    </div>
    <hr>
    <div class="container">
        <fieldset>
            <legend style="text-align: center;"><strong>Conclusão</strong></legend>
            <br>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="Classificação Final">64 - Classificação Final</label>
                    <select name="Classificação Final" id="Classificação Final" class="form-control">
                        <option selected>Escolher...</option>
                        <option>1 - Influenza por Novo Subtipo Viral</option>
                        <option>2 - Outro agente infeccioso</option>
                        <option>3 - Descartado</option>
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label for="Outro_C">Outro agente infeccioso</label>
                    <input type="text" name="Outro_C" id="Outro_C" class="form-control">
                </div>

                <div class="form-group col-md-4">
                    <label for="Critério de Confirmação">65 - Critério de Confirmação</label>
                    <select name="Critério de Confirmação" id="Critério de Confirmação" class="form-control">
                        <option selected>Escolher...</option>
                        <option>1 - Laboratorial </option>
                        <option>2 - Clínico-Epidemiológico</option>
                    </select>
                </div>

            </div>
            <strong>LOCAL PROVÁVEL DE FONTE DE INFECÇÃO</strong>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="autóctone">66 - O caso é autóctone do município de residência?</label>
                    <select name="autóctone" id="autóctone" class="form-control">
                        <option selected>Escolher...</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                        <option>3 - Indeterminado</option>
                    </select>
                </div>

                <div class="form-group col-md-1">
                    <label for="UF_C">67 - UF</label>
                    <input type="text" name="UF_C" id="UF_C" class="form-control">
                </div>

                <div class="form-group col-md-5">
                    <label for="País_C">68 - País</label>
                    <input type="text" name="País_C" id="País_C" class="form-control">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="Municipio_C">69 - Município</label>
                    <input type="text" name="Municipio_C" id="Municipio_C" class="form-control">
                </div>

                <div class="form-group col-md-2">
                    <label for="Código_IBGE_C">Código (IBGE)</label>
                    <input type="text" name="Código_IBGE_C" id="Código_IBGE_C" class="form-control">
                </div>

                <div class="form-group col-md-3">
                    <label for="Distrito_C">70 - Distrito</label>
                    <input type="text" name="Municipio_C" id="Distrito_C" class="form-control">
                </div>

                <div class="form-group col-md-3">
                    <label for="Bairro_C">71 - Bairro</label>
                    <input type="text" name="Bairro_C" id="Bairro_C" class="form-control">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="DRT_C">72 - Doença Relacionada ao Trabalho</label>
                    <select name="DRT_C" id="DRT_C" class="form-control">
                        <option selected>Escolher...</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                        <option>9 - Ignorado</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="Evolucao">73 - Evolução do Caso</label>
                    <select name="Evolucao" id="Evolucao" class="form-control">
                        <option selected>Escolher...</option>
                        <option>1 - Cura</option>
                        <option>2- Óbito por Influenza</option>
                        <option>3- Óbito por outras causas</option>
                        <option>9- Ignorado</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="Obito">74 - Data do Óbito</label>
                    <input type="date" name="Obito" id="Obito" class="form-control">
                </div>

                <div class="form-group col-md-3">
                    <label for="Encerramento">75 - Data do Encerramento</label>
                    <input type="date" name="Encerramento" id="Encerramento" class="form-control">
                </div>
            </div>

        </fieldset>
    </div>
    <hr>
    <div class="container">
        <fieldset>
            <br>
            <div class="form-group">
                <label for="Obs_add"><strong>Observações Adicionais</strong></label>
                <input type="text" name="Obs_add" id="Obs_add" class="form-control">
            </div>

        </fieldset>
    </div>
    <hr>
    <div class="container">
        <fieldset>
            <legend style="text-align: center;"><strong>Investigador</strong></legend>
            <br>
            <div class="form-row">
                <div class="form-group col-md-9">
                    <label for="Municipio_Inv">Município/Unidade de Saúde</label>
                    <input type="text" name="Municipio_Inv" id="Municipio_Inv" class="form-control""></div>

                    <div class=" form-group col-md-3">
                    <label for="Unid_Inv">Cód. da Unid. de Saúde</label>
                    <input type="text" name="Unid_Inv" id="Unid_Inv" class="form-control">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-5">
                    <label for="Nome_Inv">Nome</label>
                    <input type="text" name="Nome_Inv" id="Nome_Inv" class="form-control">
                </div>

                <div class="form-group col-md-5">
                    <label for="Funcao_Inv">Função</label>
                    <input type="text" name="Funcao_Invo" id="Funcao_Inv" class="form-control">
                </div>

                <div class="form-group col-md-2">
                    <label for="Assinatura_Inv">Assinatura</label>
                    <input type="text" name="Assinatura_Inv" id="Assinatura_Inv" class="form-control">
                </div>
            </div>

        </fieldset>
    </div>
    <hr>
    <div style="display: flex; justify-content: center;">
        <input type="submit" value="Enviar" class="btn btn-primary">
    </div>
    <br>
</form>
<script src="{{ asset('js/getAge.js') }}">
</script>
@endsection
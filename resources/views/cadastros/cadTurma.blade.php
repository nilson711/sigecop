@extends('layouts.mainSigecop')

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li>
                <i class="ace-icon fa fa-home home-icon"></i>
                <a href="/cop/inicial">Copav</a>
            </li>

            <li>Configurar</li>

            <li class="active">Turmas</li>
            {{--            <li class="breadcrumb-item active" aria-current="page">Intranet</li>--}}
        </ol>
        <hr>
    </nav>

    <!-- Modal -->
    <div class="modal fade" id="modalAddTurma" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="staticBackdropLabel">Turma 01</h3>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form style="width: 100%; margin-top: 15px" class="offset-2" method="post" action="#">
                        {{-- CSRF--}}
                        {{csrf_field()}}
                        <div class=" row form-group">

                            <div class="col-md-4">
                                <label for="modalidadeTurma">Modalidade</label>
                                <select class="form-control" id="modalidadeTurma" name="modalidadeTurma">
                                    <option disabled selected>Selecione</option>
                                    <option value="1">AFO</option>
                                    <option value="2">ATLETISMO</option>
                                    <option value="3">BASQUETE</option>
                                    <option value="4">DM-I</option>
                                    <option value="5">DM-II</option>
                                    <option value="6">FUTEBOL SOCIETY</option>
                                    <option value="7">FUTSAL</option>
                                    <option value="8">GIN. LOCALIZADA</option>
                                    <option value="9">HANDEBOL</option>
                                    <option value="10">HIDROGINÁSTICA</option>
                                    <option value="11">JUDÔ</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="naipeModalidade">Naipe</label>
                                <select class="form-control" id="naipeModalidade" name="naipeModalidade">
                                    <option disabled selected>Selecione</option>
                                    <option value="1">Masculino</option>
                                    <option value="2">Feminino</option>
                                    <option value="3">Misto</option>

                                </select>
                            </div>
                            <div class="col-md-5">
                                <label for="faixaModalidadeInicial" style="margin-left: 20px">Faixa Etária (ex: 12 a 14) </label>
                                <div class="col-md-6">
{{--                                    <label for="faixaModalidadeInicial">De</label>--}}
                                    <input type="Number" class="form-control" id="faixaModalidadeInicial" name="faixaModalidadeInicial" title="Faixa etária inicial">
                                </div>
                                <div class="col-md-6">
{{--                                    <label for="faixaModalidadeFinal">Até</label>--}}
                                    <input type="Number" class="form-control" id="faixaModalidadeFinal" name="faixaModalidadeFinal" title="Faixa etária final">
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-2">
                                <label for="nivelTurma">Nível</label>
                                <input type="Number" class="form-control" id="nivelTurma" name="nivelTurma" title="Nível da Turma">
                            </div>
                            <div class="col-md-2">
                                <label for="vagasModalidade">Qtd</label>
                                <input type="Number" class="form-control" id="vagasModalidade" name="vagasModalidade" title="Total de alunos da turma">
                            </div>
                            <div class="col-md-8">
                                <label for="profTurma">Professor</label>
                                <select class="form-control" id="profTurma" name="profTurma" title="Professor da Turma">
                                    <option disabled selected>Selecione</option>
                                    <option value="1">JOÃO RIBEIRO</option>
                                    <option value="2">LEONARDO MOURA SOARES</option>
                                    <option value="3">NILSON CAMPOS DA SILVA</option>
                                    <option value="4">RAFAEL MURTA</option>
                                    <option value="5">FERNANDO ALVES BARBOSA</option>
                                </select>
                            </div>

                        </div>
                        <hr>

                        <div class="row form-group">

                            <div class="col-md-5">
                                <label for="horarioInicialModalidade" style="font-size: 10pt; margin-left: 20px">Horário (ex: 10:00 a 11:00) </label>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" id="horarioInicialModalidade" name="horarioFinalModalidade" title="Hora de início da Modalidade">
                                </div>
                                <p class="col-md-1"> a </p>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" id="faixaModalidadeFinal" name="faixaModalidadeFinal" title="Hora de término da Modalidade">
                                </div>
                            </div>

                            <div class="col-md-7">
                                <div class="control-group">
                                    <label class="control-label" style="font-size: 10pt">Dias</label>

                                    <div class="checkbox">
                                        <label>
                                            <input name="segunda" id="segunda" type="checkbox" class="ace">
                                            <span class="lbl" style="font-size: 8pt"> Seg</span>
                                        </label>
                                        <label>
                                            <input name="terca" id="terca" type="checkbox" class="ace">
                                            <span class="lbl" style="font-size: 8pt"> Ter</span>
                                        </label>
                                        <label>
                                            <input name="quarta" id="quarta" type="checkbox" class="ace">
                                            <span class="lbl" style="font-size: 8pt"> Qua</span>
                                        </label>
                                        <label>
                                            <input name="quinta" id="quinta" type="checkbox" class="ace">
                                            <span class="lbl" style="font-size: 8pt"> Qui</span>
                                        </label>
                                        <label>
                                            <input name="sexta" id="sexta" type="checkbox" class="ace">
                                            <span class="lbl" style="font-size: 8pt"> Sex</span>
                                        </label>
                                        <label>
                                            <input name="sabado" id="sabado" type="checkbox" class="ace">
                                            <span class="lbl" style="font-size: 8pt"> Sab</span>
                                        </label>
                                    </div>

{{--                                    <div class="checkbox">--}}

{{--                                    </div>--}}


                                </div>
                            </div>
                        </div>











{{--                        <div style="text-align: center; margin-top: 15px">--}}
{{--                            <a href="#"><button type="submit" class="btn btn-primary btn-sm" style="width: 60%">Cadastrar</button></a>--}}
{{--                        </div>--}}
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
{{--                    <button type="button" class="btn btn-primary">Sim</button>--}}
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL FIM-->


    <div class="col-sm-12">
        <div style="padding: 15px;">
            <div class="hidden-sm hidden-xs btn-group" title="Adicionar Novo Professor">
                <button type="button-primary" class="btn btn-primary btn-sm no-border" data-toggle="modal" data-target="#modalAddTurma"><i class="ace-icon fa fa-plus bigger-120"></i>Nova Turma</button>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <h3>Cadastro de Turmas</h3>

                    <table id="simple-table" class="table  table-bordered table-hover">
                        <thead>
                        <tr>
                            <th class="col-md-1">Id</th>
                            <th class="col-md-2">Modalidade</th>
                            <th class="col-md-1">Naipe</th>
                            <th class="col-md-1">Faixa Etária</th>
                            <th class="col-md-1">Horário</th>
                            <th class="col-md-1">Dias</th>
                            <th class="col-md-2">Professor</th>
                            <th class="col-md-1">Vagas</th>
                            <th class="col-md-2"></th>

                        </tr>
                        </thead>

                        <tbody>

                        {{--Linha Tabela Professores--}}
                        <tr style="font-size: 9pt">
                            <td>01</td>
                            <td>HIDROGINÁSTICA - 1</td>
                            <td>Masculino</td>
                            <td style="text-align: center">12 a 14 anos</td>
                            <td>14:00 - 15:00</td>
                            <td>Ter-Qui-Sab</td>
                            <td>JOÃO RIBEIRO</td>
                            <td style="text-align: center">3</td>
                            <td>
                                <div class="hidden-sm hidden-xs btn-group"><button class="btn btn-xs btn-info" data-toggle="modal" data-target="#modalAddTurma" title="Editar"><i class="ace-icon fa fa-pencil bigger-120"></i></button></div>
                                <a href="/cop_files/pauta.pdf" class="btn btn-xs btn-success hidden-sm hidden-xs" title="Gerador de Pauta"><i class="fa fa-check-square-o" aria-hidden="true"></i></a>
                                <div class="hidden-sm hidden-xs btn-group"><button class="btn btn-xs btn-warning" data-toggle="modal" data-target="#" title="Alunos da Turma"><i class="fa fa-users" aria-hidden="true"></i></button></div>


                            </td>


                        </tbody>
                    </table>


                </div><!-- /.span -->

            </div>
        </div>
    </div>


    <!--------------------------------- MOSTRA A QUANTIDADE DE VAGAS DAS TURMAS--------------------------------------------->



@endsection

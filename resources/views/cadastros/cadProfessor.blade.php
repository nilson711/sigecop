@extends('layouts.mainSigecop')

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li>
                <i class="ace-icon fa fa-home home-icon"></i>
                <a href="/cop/inicial">Copav</a>
            </li>

            <li>Configurar</li>

            <li class="active">Professores</li>
            {{--            <li class="breadcrumb-item active" aria-current="page">Intranet</li>--}}
        </ol>
        <hr>
    </nav>

    <!-- Modal -->
    <div class="modal fade" id="modalAddProfessor" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="staticBackdropLabel">Professor</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form style="width: 100%; margin-top: 15px" class="offset-2" method="post" action="#">
                        {{-- CSRF--}}
                        {{csrf_field()}}
                        <div class=" row form-group">
                            <div class="col-md-8">
                                <label for="newProfessor">Nome</label>
                                <input type="text" class="form-control" id="newProfessor" name="newProfessor" placeholder="Digite o nome do Professor" required>
                            </div>
                            <div class="col-md-3">
                                <label for="instituicaoProf">Instituição</label>
                                <select class="form-control" id="instituicaoProf" name="instituicaoProf">
                                    <option disabled selected>Selecione</option>
                                    <option value="1">FAC</option>
                                    <option value="2">IDECACE</option>
                                </select>
                            </div>
                        </div>

                            <div class="row form-group">
                                <div class="col-md-3">
                                    <label for="rgProfessor">RG</label>
                                    <input type="text" class="form-control" id="rgProfessor" name="rgProfessor" placeholder="Nº do RG">
                                </div>
                                <div class="col-md-3">
                                    <label for="orgExpProf">Órgão Expedidor</label>
                                    <input type="text" class="form-control" id="orgExpProf" name="orgExpProf" placeholder="Órgão Expedidor do RG">
                                </div>
                                <div class="col-md-3">
                                    <label for="cpfProf">CPF</label>
                                    <input type="text" class="form-control cpf" id="cpfProf" name="cpfProf" required onblur="validaCPF()">
                                    <small id="alertaCPF" style="color: red" hidden>Digite seu CPF corretamente.</small>
                                </div>
                                <div class="col-md-3">
                                    <label for="celProf">Celular</label>
                                    <input type="tel" class="form-control" id="celProf" name="celProf" class="form-control cel" placeholder="contato / whatsApp" required>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-6">
                                    <label for="emailProf">Email</label>
                                    <input type="email" class="form-control" id="emailProf" name="emailProf" placeholder="email de contato" required>
                                    <small id="alertaEmail" style="color: red" hidden>Os e-mails não conferem.</small>
                                </div>
                                <div class="col-sm-6">
                                    <label for="confirmaEmailProf">Cornfirmação de Email</label>
                                    <input type="email" class="form-control" id="confirmaEmailProf" name="confirmaEmailProf" placeholder="confirme o email" onblur="testarEmail()" required>
                                </div>
                            </div>
                            <div class="hr"></div>





                            <div class="col-xs-12">
                                <br>
                                <table id="ModalidadesProf" class="table  table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th class="col-md-5" style="font-size: 8pt">Modalidade</th>
                                        <th class="col-md-1" style="font-size: 8pt">Treinador</th>
                                        <th class="col-md-1" style="font-size: 8pt">Horas</th>
                                        <th class="col-md-1"></th>
                                    </tr>
                                    </thead>

                                    <tbody>

                                    {{--Linha Tabela --}}
                                    <tr>
                                        <td>ATLETISMO</td>
                                        <td style="text-align: center">Sim</td>
                                        <td style="text-align: center">30</td>
                                        <td style="text-align: center">
                                            <div class="hidden-sm hidden-xs btn-group"><button class="btn btn-xs btn-danger" data-toggle="#" data-target="#"><i class="ace-icon fa fa-trash-o bigger-120" title="Excluir"></i></button></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>JUDÔ</td>
                                        <td style="text-align: center">Não</td>
                                        <td style="text-align: center">30</td>
                                        <td style="text-align: center">
                                            <div class="hidden-sm hidden-xs btn-group"><button class="btn btn-xs btn-danger" data-toggle="#" data-target="#"><i class="ace-icon fa fa-trash-o bigger-120" title="Excluir"></i></button></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>KARATE</td>
                                        <td style="text-align: center">Sim</td>
                                        <td style="text-align: center">40</td>
                                        <td style="text-align: center">
                                            <div class="hidden-sm hidden-xs btn-group"><button class="btn btn-xs btn-danger" data-toggle="#" data-target="#"><i class="ace-icon fa fa-trash-o bigger-120" title="Excluir"></i></button></div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div><!-- /.span -->
                            <div class="row" style="margin-left: 1px">
                                <div class="col-md-7">
                                    <label for="modalidadeProf" style="text-align: center; font-size: 8pt">Incluir Modalidade</label>
                                    <select class="form-control" id="modalidadeProf" name="modalidadeProf">
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
                                <div class="col-md-2" style="margin-left: -10px">
                                    <label for="treinadorProf" style="text-align: center; font-size: 8pt">Treinador</label>
                                    <select class="form-control" id="treinadorProf" name="treinadorProf">
                                        <option disabled selected>Selecione</option>
                                        <option value="1">Sim</option>
                                        <option value="2">Não</option>
                                    </select>
                                </div>
                                <div class="col-md-2" style="margin-left: -15px">
                                    <label for="horasProf" title="Carga Horária do Professor" style="text-align: center; font-size: 8pt">Horas</label>
                                    <input type="number" class="form-control" id="horasProf" name="horasProf">
                                </div>
                                <div class="col-md-1">
                                    <label for="horasProf" title="Carga Horária do Professor" style="color: white">.</label><br>
                                    <button class="btn btn-xs btn-success" data-toggle="#" data-target="#" style="margin-left: -15px"><i class="ace-icon fa fa-plus bigger-120" title="Incluir"></i></button>
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
                <button type="button-primary" class="btn btn-primary btn-sm no-border" data-toggle="modal" data-target="#modalAddProfessor"><i class="ace-icon fa fa-plus bigger-120"></i>Novo Professor</button>
            </div>
            <div class="row">
                <div class="col-xs-10">
                    <h3>Cadastro de Professores</h3>

                    <table id="simple-table" class="table  table-bordered table-hover">
                        <thead>
                        <tr>
                            <th class="col-md-1">Id Prof</th>
                            <th>Professor</th>
                            <th>Instituição</th>
                            <th>Horas</th>
                            <th>Treinador</th>
                            <th></th>

                        </tr>
                        </thead>

                        <tbody>

                        {{--Linha Tabela Professores--}}
                        <tr>
                            <td>01</td>
                            <td>ALESSANDRA COSMO CIRQUEIRA DE SOUZA</td>
                            <td>FAC</td>
                            <td>30</td>
                            <td>Sim</td>
                            <td>
                                <div class="hidden-sm hidden-xs btn-group"><button class="btn btn-xs btn-info" data-toggle="modal" data-target="#modalAddProfessor"><i class="ace-icon fa fa-pencil bigger-120" title="Editar"></i></button></div>
                            </td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td>CARLA MELO LACERDA</td>
                            <td>FAC</td>
                            <td>40</td>
                            <td>Não</td>
                            <td>
                                <div class="hidden-sm hidden-xs btn-group"><button class="btn btn-xs btn-info" data-toggle="modal" data-target="#modalAddProfessor"><i class="ace-icon fa fa-pencil bigger-120" title="Editar"></i></button></div>
                            </td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td>EDUARDO JOSÉ TORRES</td>
                            <td>IDECACE</td>
                            <td>30</td>
                            <td>Sim</td>
                            <td>
                                <div class="hidden-sm hidden-xs btn-group"><button class="btn btn-xs btn-info" data-toggle="modal" data-target="#modalAddProfessor"><i class="ace-icon fa fa-pencil bigger-120" title="Editar"></i></button></div>
                            </td>
                        </tr>

                        </tbody>
                    </table>


                </div><!-- /.span -->

            </div>
        </div>
    </div>


    <!--------------------------------- MOSTRA A QUANTIDADE DE VAGAS DAS TURMAS--------------------------------------------->



@endsection

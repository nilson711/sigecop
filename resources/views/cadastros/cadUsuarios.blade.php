@extends('layouts.mainSigecop')

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li>
                <i class="ace-icon fa fa-home home-icon"></i>
                <a href="/cop/inicial">Copav</a>
            </li>

            <li>Configurar</li>

            <li class="active">Usuários</li>
            {{--            <li class="breadcrumb-item active" aria-current="page">Intranet</li>--}}
        </ol>
        <hr>
    </nav>

    <!-- Modal -->
    <div class="modal fade" id="modalAddUsuario" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="staticBackdropLabel">Usuário</h3>
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
                                <label for="localUsuario">Nome</label>
                                <input type="text" class="form-control" id="localUsuario" name="localUsuario" placeholder="Digite o nome do usuário" required>
                            </div>
                            <div class="col-md-2">
                                <label for="nivelUsuario">Nível</label>
                                <input type="number" class="form-control" id="nivelUsuario" name="nivelUsuario">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-8">
                                <label for="instituicaoProf">Local</label>
                                <select class="form-control" id="instituicaoProf" name="instituicaoProf">
                                    <option disabled selected>Selecione</option>
                                    <option value="1">SEL</option>
                                    <option value="2">Cop Planaltina</option>
                                    <option value="3">Cop Setor O</option>
                                    <option value="4">Cop Sobradinho</option>
                                </select>
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
            <div class="hidden-sm hidden-xs btn-group" title="Adicionar Novo Usuário">
                <button type="button-primary" class="btn btn-primary btn-sm no-border" data-toggle="modal" data-target="#modalAddUsuario"><i class="ace-icon fa fa-plus bigger-120"></i>Novo Usuário</button>
            </div>
            <div class="row">
                <div class="col-xs-10">
                    <h3>Cadastro de Usuários</h3>

                    <table id="simple-table" class="table  table-bordered table-hover">
                        <thead>
                        <tr>
                            <th class="col-md-1">Id User</th>
                            <th>Nome</th>
                            <th>Local</th>
                            <th style="text-align: center">Nível</th>
                            <th></th>

                        </tr>
                        </thead>

                        <tbody>

                        {{--Linha Tabela Professores--}}
                        <tr>
                            <td style="text-align: center">01</td>
                            <td>ALESSANDRA COSMO CIRQUEIRA DE SOUZA</td>
                            <td>SEL</td>
                            <td style="text-align: center">5</td>
                            <td>
                                <div class="hidden-sm hidden-xs btn-group"><button class="btn btn-xs btn-info" data-toggle="modal" data-target="#modalAddUsuario"><i class="ace-icon fa fa-pencil bigger-120" title="Editar"></i></button></div>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: center">02</td>
                            <td>CARLA MELO LACERDA</td>
                            <td>Cop Planaltina</td>
                            <td style="text-align: center">3</td>
                            <td>
                                <div class="hidden-sm hidden-xs btn-group"><button class="btn btn-xs btn-info" data-toggle="modal" data-target="#modalAddUsuario"><i class="ace-icon fa fa-pencil bigger-120" title="Editar"></i></button></div>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: center">03</td>
                            <td>EDUARDO JOSÉ TORRES</td>
                            <td>Cop Setor O</td>
                            <td style="text-align: center">7</td>
                            <td>
                                <div class="hidden-sm hidden-xs btn-group"><button class="btn btn-xs btn-info" data-toggle="modal" data-target="#modalAddUsuario"><i class="ace-icon fa fa-pencil bigger-120" title="Editar"></i></button></div>
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

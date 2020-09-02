@extends('layouts.mainSigecop')

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li>
                <i class="ace-icon fa fa-home home-icon"></i>
                <a href="/cop/inicial">Copav</a>
            </li>

            <li>Configurar</li>

            <li class="active">Modalidades</li>
            {{--            <li class="breadcrumb-item active" aria-current="page">Intranet</li>--}}
        </ol>
        <hr>
    </nav>

    <!-- Modal -->
    <div class="modal fade" id="modalAddModalidade" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="staticBackdropLabel">Adicionar Modalidade</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form style="width: 60%; margin-top: 30px" class="offset-2" method="post" action="/cop/inicial">
                        {{-- CSRF--}}
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="newModalidade">Modalidade</label>
                            <input type="text" class="form-control" id="newModalidade" name="newModalidade" placeholder="Digite o nome da Modalidade" required>

                        </div>
                        <br>

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
            <div class="hidden-sm hidden-xs btn-group" title="Adicionar Nova Modalidade">
                <button type="button-primary" class="btn btn-primary btn-sm no-border" data-toggle="modal" data-target="#modalAddModalidade"><i class="ace-icon fa fa-plus bigger-120"></i>Nova Modalidade</button>
            </div>
            <div class="row">
                <div class="col-xs-6">
                    <h3>Cadastro de Modalidades</h3>

                    <table id="simple-table" class="table  table-bordered table-hover">
                        <thead>
                        <tr>
                            <th class="col-md-1">Id</th>
                            <th>Modalidade</th>

                            <th></th>

                        </tr>
                        </thead>

                        <tbody>

                        {{--Linha Tabela Responsável--}}
                        <tr>
                            <td>01</td>
                            <td>DM-II</td>
                            <td>
                                <div class="hidden-sm hidden-xs btn-group"><button class="btn btn-xs btn-info" data-toggle="modal" data-target="#modalAddModalidade"><i class="ace-icon fa fa-pencil bigger-120" title="Editar"></i></button></div>
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

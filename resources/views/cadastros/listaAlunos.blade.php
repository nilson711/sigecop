@extends('layouts.mainSigecop')

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li>
                <i class="ace-icon fa fa-home home-icon"></i>
                <a href="/cop/inicial">Copav</a>
            </li>

            <li>
                <a href="#">Alunos</a>
            </li>
            <li class="active">Lista</li>
            {{--            <li class="breadcrumb-item active" aria-current="page">Intranet</li>--}}
        </ol>
        <hr>
    </nav>

    <!-- Modal -->
    <div class="modal fade" id="modalDetalhesProtocolo" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="staticBackdropLabel">Detalhes do Protocolo</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h6><strong>Nº Protocolo: 100000.2020</strong></h6>
                    <h6>Data: 04/02/2020 </h6>
                    <h6>Assunto: Bolsa Atleta </h6>
                    <h6>Status: Concedido </h6>
                    <p>Observações: Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
{{--                    <button type="button" class="btn btn-primary">Sim</button>--}}
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL FIM-->


    <div class="col-xs-12">
        <h3>LISTA DE ALUNOS</h3>
    <!--------------------------------- MOSTRA LISTA DE ALUNOS--------------------------------------------->

    <table class="table table-bordered table-hover">
        <div class="row">
            <div class="col-xs-6">
                <div class="dataTables_length" id="dynamic-table_length">
                    <label>Mostar <select name="dynamic-table_length" aria-controls="dynamic-table" class="form-control input-sm">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select> registros</label>
                </div>
            </div>
            <div class="col-xs-6">
                <div id="dynamic-table_filter" class="dataTables_filter">
                    <label>Procurar:<input type="search" class="form-control input-sm" placeholder="buscar pelo nome" aria-controls="dynamic-table"></label>
                </div>
            </div>
        </div>
        <thead>
        <tr>
            <th class="col-sm-1" scope="col">Cód</th>
            <th scope="col">Nome</th>
            <th class="col-sm-1" scope="col"></th>

        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">11</th>
            <td>Miguel de Sousa Campos</td>
            <td><div class="hidden-sm hidden-xs action-buttons"><a class="green" href="/cop/cadAluno"><i class="ace-icon fa fa-pencil bigger-130"></i></a></div></td>
        </tr>
        <tr>
            <th scope="row">18</th>
            <td>Sarah de Sousa Campos</td>
            <td><div class="hidden-sm hidden-xs action-buttons"><a class="green" href="/cop/cadAluno"><i class="ace-icon fa fa-pencil bigger-130"></i></a></div></td>
        </tr>
        <tr>
            <th scope="row">34</th>
            <td>Rodrigo da Silva Nascimento</td>
            <td><div class="hidden-sm hidden-xs action-buttons"><a class="green" href="/cop/cadAluno"><i class="ace-icon fa fa-pencil bigger-130"></i></a></div></td>
        </tr>




        </tbody>
    </table>
    </div>

@endsection

@extends('layouts.mainSigecop')

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <i class="ace-icon fa fa-home home-icon"></i>
            <a href="/cop/inicial">Copav</a>
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

    <h3>Olá Servidor!</h3>
    <p>Seja bem vindo ao SIGECOP da Secretaria de Estado de Esporte e Lazer do Distrito Federal.</p>
    <p>Aqui você terá todas as ferramentas para auxiliá-lo no seu trabalho.</p>
    <hr>
    <h4>DISPONIBILIDADE DE  VAGAS</h4>


    <div class="col-xs-12">
        <table id="simple-table" class="table  table-bordered table-hover">
            <thead>

    <!--------------------------------- MOSTRA A QUANTIDADE DE VAGAS DAS TURMAS--------------------------------------------->

    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th scope="col">Cód Turma</th>
            <th scope="col">Modalidade</th>
            <th scope="col">Naipe</th>
            <th scope="col">Faixa Etária</th>
            <th scope="col">Horário</th>
            <th scope="col">Turno</th>
            <th scope="col">Dias</th>
            <th scope="col" style="text-align: center">Vagas</th>
            <th scope="col">Prof</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">11</th>
            <td>Futebol</td>
            <td>Masculino</td>
            <td>7 a 8 anos</td>
            <td>15:30 as 16:30</td>
            <td>Vespertino</td>
            <td>Ter-Qua-Qui</td>
            <td style="text-align: center">7</td>
            <td>João Ribeiro</td>
        </tr>
        <tr>
            <th scope="row">23</th>
            <td>DM II</td>
            <td>Misto</td>
            <td>4 a 6 anos</td>
            <td>10:30 as 11:20</td>
            <td>Matutino</td>
            <td>Ter-Qui</td>
            <td style="text-align: center">12</td>
            <td>Patrícia Alencar</td>
        </tr>
        <tr>
            <th scope="row">27</th>
            <td>DM I</td>
            <td>Misto</td>
            <td>4 a 6 anos</td>
            <td>08:30 as 09:20</td>
            <td>Matutino</td>
            <td>Seg-Qua-Sex</td>
            <td style="text-align: center">3</td>
            <td>Jessica Freitas</td>
        </tr>
        <tr>
            <th scope="row">12</th>
            <td>Natação</td>
            <td>Misto</td>
            <td>6 a 8 anos</td>
            <td>10:00 as 11:00</td>
            <td>Matutino</td>
            <td>Ter-Qui-Sab</td>
            <td style="text-align: center">2</td>
            <td>Jessica Freitas</td>
        </tr>

        </tbody>
    </table>

@endsection

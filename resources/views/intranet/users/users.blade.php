@extends('layouts.mainSigecop')

@section('content')

    <div class="main-content">
        <div class="main-content-inner">
            <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <i class="ace-icon fa fa-home home-icon"></i>
                        <a href="#">Home</a>
                    </li>

{{--                    <li>--}}
{{--                        <a href="#">Other Pages</a>--}}
{{--                    </li>--}}
                    <li class="active">Usuários</li>
                </ul><!-- /.breadcrumb -->

{{--                <div class="nav-search" id="nav-search">--}}
{{--                    <form class="form-search">--}}
{{--								<span class="input-icon">--}}
{{--									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />--}}
{{--									<i class="ace-icon fa fa-search nav-search-icon"></i>--}}
{{--								</span>--}}
{{--                    </form>--}}
{{--                </div><!-- /.nav-search -->--}}
            </div>

            <div class="page-content">


                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">NOME</th>
                                    <th scope="col">E-MAIL</th>
                                    <th scope="col">NIVEL</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- PAGE CONTENT ENDS -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.page-content -->
        </div>
    </div><!-- /.main-content -->

@endsection

//===29/06===//

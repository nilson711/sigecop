<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>SIGECOP - SELDF</title>

    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="http://ace.jeka.by/assets/css/jquery-ui.custom.min.css" />
    <link rel="stylesheet" href="http://ace.jeka.by/assets/css/jquery.gritter.min.css" />
    <link rel="stylesheet" href="http://ace.jeka.by/assets/css/select2.min.css" />
    <link rel="stylesheet" href="http://ace.jeka.by/assets/css/bootstrap-datepicker3.min.css" />
    <link rel="stylesheet" href="http://ace.jeka.by/assets/css/bootstrap-editable.min.css" />

    <!-- text fonts -->
    <link rel="stylesheet" href="http://ace.jeka.by/assets/css/fonts.googleapis.com.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="http://ace.jeka.by/assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
    <link rel="stylesheet" href="http://ace.jeka.by/assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="http://ace.jeka.by/assets/css/ace-part2.min.css" class="ace-main-stylesheet"/>
    <link rel="stylesheet" href="http://ace.jeka.by/assets/css/ace-ie.min.css" />
    <![endif]-->
    <link rel="stylesheet" href="http://ace.jeka.by/assets/css/ace-skins.min.css" />
    <link rel="stylesheet" href="http://ace.jeka.by/assets/css/ace-rtl.min.css" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="http://ace.jeka.by/assets/css/ace-ie.min.css"/>
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="http://ace.jeka.by/assets/js/ace-extra.min.js"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src="http://ace.jeka.by/assets/js/html5shiv.min.js"></script>
    <script src="http://ace.jeka.by/assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="no-skin">
<div id="navbar" class="navbar navbar-default          ace-save-state">
    <div class="navbar-container ace-save-state" id="navbar-container">
        <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
            <span class="sr-only">Toggle sidebar</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>
        </button>

        <div class="navbar-header pull-left" style="margin-left: -10px; align-content:l">
            <img src="/cop_files/cabecalhoSEL.png" alt="some text" width=100%">
        </div>

        <div class="navbar-buttons navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">


            </ul>
        </div>
    </div><!-- /.navbar-container -->
</div>

<div class="main-container ace-save-state" id="main-container">
    <script type="text/javascript">
        try{ace.settings.loadState('main-container')}catch(e){}
    </script>

    <div id="sidebar" class="sidebar                  responsive                    ace-save-state">
        <script type="text/javascript">
            try{ace.settings.loadState('sidebar')}catch(e){}
        </script>

        <!--				<div class="sidebar-shortcuts" id="sidebar-shortcuts">-->
        <!--					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">-->
        <!--						<button class="btn btn-success">-->
        <!--							<i class="ace-icon fa fa-signal"></i>-->
        <!--						</button>-->

        <!--						<button class="btn btn-info">-->
        <!--							<i class="ace-icon fa fa-pencil"></i>-->
        <!--						</button>-->

        <!--						<button class="btn btn-warning">-->
        <!--							<i class="ace-icon fa fa-users"></i>-->
        <!--						</button>-->

        <!--						<button class="btn btn-danger">-->
        <!--							<i class="ace-icon fa fa-cogs"></i>-->
        <!--						</button>-->
        <!--					</div>-->

        <!--					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">-->
        <!--						<span class="btn btn-success"></span>-->

        <!--						<span class="btn btn-info"></span>-->

        <!--						<span class="btn btn-warning"></span>-->

        <!--						<span class="btn btn-danger"></span>-->
        <!--					</div>-->
        <!--				</div>&lt;!&ndash; /.sidebar-shortcuts &ndash;&gt;-->

        <ul class="nav nav-list">
            <img src="/cop_files/ico-logo-olimpic.svg" alt="some text" width=100% align="center" >
            <li class="" style="left: 15px">
                {{--						<a href="#">--}}
                <i class="menu-icon fa fa-arrow-down"></i>
                <span class="menu-text"> MENU INTRANETddd</span>
                {{--						</a>--}}

                <b class="arrow"></b>
            </li>

{{--            <li class="">--}}
{{--                <a href="/cop/enviardocs">--}}
{{--                    <i class="menu-icon fa fa-check"></i>--}}
{{--                    <span class="menu-text"> NOVO PROTOCOLO </span>--}}
{{--                </a>--}}

{{--                <b class="arrow"></b>--}}
{{--            </li>--}}

            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-user"></i>
                    <span class="menu-text">Aluno</span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="/cop/listaAlunos">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Lista de Alunos
                        </a>

                        <b class="arrow"></b>
                    </li>
                    <li class="">
                        <a href="#">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Carteirinha
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>

            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-search"></i>
                    <span class="menu-text"> Gestão</span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="#">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Listas
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="#">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Gráficos
                        </a>

                        <b class="arrow"></b>
                    </li>
                    <li class="">
                        <a href="#">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Outros
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>

            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-gears"></i>
                    <span class="menu-text"> Configurar</span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="#">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Modalidades
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="#">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Professores
                        </a>

                        <b class="arrow"></b>
                    </li>
                    <li class="">
                        <a href="#">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Turmas
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>


            <li class="">
                <a href="/logout">
                    <i class="menu-icon fa fa-close"></i>
                    <span class="menu-text"> SAIR </span>
                </a>

                <b class="arrow"></b>
            </li>

        </ul><!-- /.nav-list -->

        <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
            <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
        </div>
    </div>

    <div class="main-content">
        <div class="main-content-inner">
            {{--					<div class="breadcrumbs ace-save-state" id="breadcrumbs">--}}
            {{--						<ul class="breadcrumb">--}}
            {{--							<li>--}}
            {{--								<i class="ace-icon fa fa-home home-icon"></i>--}}
            {{--								<a href="#">Home</a>--}}
            {{--							</li>--}}

            {{--							<li>--}}
            {{--								<a href="#">Other Pages</a>--}}
            {{--							</li>--}}
            {{--							<li class="active">Blank Page</li>--}}
            {{--						</ul><!-- /.breadcrumb -->--}}

            {{--						<!-- /.nav-search -->--}}
            {{--					</div>--}}

            <div class="page-content">
                <div class="ace-settings-container" id="ace-settings-container">

                </div><!-- /.ace-settings-container -->

                <div class="row">
                    <div class="col-xs-12">
                        <!-------------------------------------- CONTEUDO / CONTENT DO ADM -------------------------------------------->
                    @yield('content')
                    <!-- PAGE CONTENT ENDS -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.page-content -->
        </div>
    </div><!-- /.main-content -->

    <div class="footer">
        <div class="footer-inner">
            <div class="footer-content">
                {{--						<div>--}}
                {{--							<a href="/sel/home" class="">--}}
                {{--								<i class="menu-icon fa fa-home"></i>--}}
                {{--								<span class="menu-text"> Inicio </span>--}}
                {{--							</a>--}}
                {{--						</div>--}}
                <small>
							<span class="">
								<span class="blue bolder">Getec</span>
								SELDF &copy; 2020
							</span>
                </small>

                &nbsp; &nbsp;
                {{--						<span class="action-buttons">--}}
                {{--							<a href="#">--}}
                {{--								<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>--}}
                {{--							</a>--}}

                {{--							<a href="#">--}}
                {{--								<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>--}}
                {{--							</a>--}}

                {{--							<a href="#">--}}
                {{--								<i class="ace-icon fa fa-rss-square orange bigger-150"></i>--}}
                {{--							</a>--}}
                {{--						</span>--}}
            </div>
        </div>
    </div>

    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
    </a>
</div><!-- /.main-container -->

<!-- basic scripts -->

<!--[if !IE]> -->
<script src="/assets/js/jquery-2.1.4.min.js"></script>

<!-- <![endif]-->

<!--[if IE]>
<script src="/assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="/assets/js/bootstrap.min.js"></script>

<!-- page specific plugin scripts -->

<!-- ace scripts -->
<script src="/assets/js/ace-elements.min.js"></script>
<script src="/assets/js/ace.min.js"></script>

<!-- inline scripts related to this page -->
</body>


<script src="/vendor/mask/jquery.mask.js"></script>
<script src="/js/personal.js"></script>

<script>
    $(document).ready(function(){
        $('.date').mask('00/00/0000');
        $('.time').mask('00:00');
        $('.date_time').mask('00/00/0000 00:00:00');
        $('.cep').mask('00000-000');
        $('.phone').mask('(00) 0000-0000');
        $('.cel').mask('(00) 00000-0000');
        $('.phone_us').mask('(000) 000-0000');
        $('.mixed').mask('AAA 000-S0S');
        $('.cpf').mask('000.000.000-00', {reverse: true});
        $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
        $('.numeroComPonto').mask('000.000.000.000.000', {reverse: true});
        $('.money').mask('000.000.000.000.000,00', {reverse: true});
        $('.licencaSO').mask('AAAAA-AAAAA-AAAAA-AAAAA-AAAAA', {reverse: false});
        $('.anydesk').mask('000 000 000', {reverse: false});
        $('.tempo').mask('00:00:00:000', {reverse: false});
    });

</script>

<script>

    function testarEmail(){
        // console.log($('#emailProfissional').val())
        email = $('#emailProfissional').val()
        confemail = $('#confirmaEmailProfissional').val()



        if(email !== confemail){
            // console.log('jjjjj')
            $('#alertaEmail').attr('hidden',false)
        }else{
            $('#alertaEmail').attr('hidden',true)
        }

        // console.log('passou')
    }

    function mostrarCREF(tipoProfissional){

        if(parseFloat(tipoProfissional)==1){
            $('#divCREF').attr('hidden',true)
        }
        if(parseFloat(tipoProfissional)==2){
            $('#divCREF').attr('hidden',false)
        }
    }


    function checkRequired() {

        if($('#nomeProfissional').val() == ''){
            alert('O nome do Profissional é requerido.');
            $('#aceiteRegulamento').attr('checked', false)
            $('#nomeProfissional').focus()
            return false
        }

        if($('#emailProfissional').val() == ''){
            alert('O e-mail do Profissional é requerido. ');
            $('#aceiteRegulamento').attr('checked', false)
            $('#emailProfissional').focus()
            return false
        }
        if($('#confirmaEmailProfissional').val() == ''){
            alert('Confirme o email. ');
            $('#aceiteRegulamento').attr('checked', false)
            $('#confirmaEmailProfissional').focus()
            return false
        }
        if((!$('#estagiario').prop('checked')) && (!$('#professor').prop('checked')) ){
            alert('Escolha o tipo de Profissional.');
            $('#aceiteRegulamento').attr('checked', false)
            $('#estagiario').focus()
            return false
        }
        if($('#nascProfissional').val() == ''){
            alert('Data Nascimento requerida. ');
            $('#aceiteRegulamento').attr('checked', false)
            $('#nascProfissional').focus()
            return false
        }
        if($('#rgProfissional').val() == ''){
            alert('RG é requerido. ');
            $('#aceiteRegulamento').attr('checked', false)
            $('#rgProfissional').focus()
            return false
        }
        if($('#cpfProfissional').val() == ''){
            alert('CPF é requerido. ');
            $('#aceiteRegulamento').attr('checked', false)
            $('#cpfProfissional').focus()
            return false
        }
        if($('#celProfissional').val() == ''){
            alert('Celular é requerido. ');
            $('#aceiteRegulamento').attr('checked', false)
            $('#celProfissional').focus()
            return false
        }
        if($('#celProfissional').val().length != 15){
            alert('Número de Celular inválido.');
            $('#aceiteRegulamento').attr('checked', false)
            $('#celProfissional').focus()
            return false
        }
        if($('#localProfissional').val() == 'Selecione a cidade de atuação'){
            alert('Selecione o local de atuação. ');
            $('#aceiteRegulamento').attr('checked', false)
            $('#localProfissional').focus()
            return false
        }
        if($('#especialidadeProfissional').val() == 'Selecione a Especialidade'){
            alert('Selecione uma Especialidade. ');
            $('#aceiteRegulamento').attr('checked', false)
            $('#especialidadeProfissional').focus()
            return false
        }
        if($('#dispProfissional').val() == 'Selecione'){
            alert('Selecione o período de preferência. ');
            $('#aceiteRegulamento').attr('checked', false)
            $('#dispProfissional').focus()
            return false
        }
        if((!$('#Segunda').prop('checked')) && (!$('#Terca').prop('checked')) && (!$('#Quarta').prop('checked')) && (!$('#Quinta').prop('checked')) && (!$('#Sexta').prop('checked')) && (!$('#Sabado').prop('checked')) && (!$('#Domingo').prop('checked')) ){
            alert('Escolha pelo menos um dia da Semana.');
            $('#aceiteRegulamento').attr('checked', false)
            $('#Segunda').focus()
            return false
        }
        if($('#horaInicioProfissional').val() == '') {
            alert('Defina a hora de início.');
            $('#aceiteRegulamento').attr('checked', false)
            $('#horaInicioProfissional').focus()
            return false
        }
        if($('#horaFimProfissional').val() == '') {
            alert('Defina a hora final.');
            $('#aceiteRegulamento').attr('checked', false)
            $('#horaFimProfissional').focus()
            return false
        }
        if($('#horaFimProfissional').val() <= $('#horaInicioProfissional').val()) {
            alert('A hora final deve ser maior que a de início.');
            $('#aceiteRegulamento').attr('checked', false)
            $('#horaFimProfissional').focus()
            return false
        }
        if($('#estagiario').prop('checked')) {
            $('#crefProfissional').attr('required', false)
        }else{
            $('#crefProfissional').attr('required', true)
        }

        testaAceite()

    }

    function testaAceite() {
        if($('#aceiteRegulamento').prop('checked')){
            $('#btnEnviar').attr('disabled', false)
        }else{
            $('#btnEnviar').attr('disabled', true)
        }
    }
    function validaCPF()
    {
        cpf = $('#cpfProfissional').val()
        // cpf = $('#cpfPessoa').val();
        cpf = cpf.replace(/[^\d]+/g,'');

        if(cpf == ''){

            $('#alertCPF').show();
        }
        // Elimina CPFs invalidos conhecidos
        if (cpf.length != 11 ||
            cpf == "00000000000" ||
            cpf == "11111111111" ||
            cpf == "22222222222" ||
            cpf == "33333333333" ||
            cpf == "44444444444" ||
            cpf == "55555555555" ||
            cpf == "66666666666" ||
            cpf == "77777777777" ||
            cpf == "88888888888" ||
            cpf == "99999999999"){

            $('#alertCPF').show();
            return false;
        }

        // Valida 1o digito
        add = 0;
        for (i=0; i < 9; i ++)
            add += parseInt(cpf.charAt(i)) * (10 - i);
        rev = 11 - (add % 11);
        if (rev == 10 || rev == 11)
            rev = 0;
        if (rev != parseInt(cpf.charAt(9))){
            $('#alertaCPF').attr('hidden', false);
            return false;
        }

        // Valida 2o digito
        add = 0;
        for (i = 0; i < 10; i ++)
            add += parseInt(cpf.charAt(i)) * (11 - i);
        rev = 11 - (add % 11);
        if (rev == 10 || rev == 11)
            rev = 0;
        if (rev != parseInt(cpf.charAt(10))){
            $('#alertaCPF').attr('hidden', false);
            return false;
        }
        // console.log('cerfto');
        $('#alertaCPF').attr('hidden', true);
        return true;
    }

    function timeFromTimestamp(date)
    {
        data = date.split(' ').reverse();
        return data[0];

    }

    function dateToBR(date)
    {
        data = date.split(' ').reverse();
        return data[1].split('-').reverse().join('/');
    }


</script>

{{--<script src="/vendor/jquery/jquery.js"></script>--}}
<script type="text/javascript">
    $(".alert").fadeTo(2000, 5000).slideUp(500, function(){
        $(".alert").slideUp(500);
    });
</script>
</html>

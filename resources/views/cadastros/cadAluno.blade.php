@extends('layouts.mainSigecop')

@section('content')

    <!-- Modal -->
    <div class="modal fade" id="modalDetalhesDeficiencia" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <img id="img-defic" src="/cop_files/deficient_icon.png" style="width: 100px">
                    <h3 class="modal-title" id="staticBackdropLabel">Aluno com Deficiência</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row form-group">
                        <div class="col-md-6">
                            <label for="etniaUser">Tipo de Deficiência</label>
                            <select class="form-control" id="etniaUser" name="etniaUser">
                                <option disabled selected>Selecione</option>
                                <option>FÍSICA</option>
                                <option>VISUAL</option>
                                <option>AUDITIVA</option>
                                <option>MENTAL</option>
                                <option>INTELECTUAL</option>
                                <option>DMU</option>
                                <option>TGD</option>
                                <option>AUTISMO</option>
                                <option>TRANSTORNO DE CONDUTA</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="obsDeficiencia">Observações</label><br>
{{--                            <input type="text" class="form-control">--}}
                            <textarea id="obsDeficiencia" name="obsDeficiencia"></textarea>
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                    {{--                    <button type="button" class="btn btn-primary">Sim</button>--}}
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL FIM-->

	<body class="no-skin">

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>


            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li>
                        <i class="ace-icon fa fa-home home-icon"></i>
                        <a href="/cop/inicial">Copav</a>
                    </li>

                    <li>
                        <a href="#">Lista</a>
                    </li>
                    <li class="active">Cadastro do Aluno</li>
                    {{--            <li class="breadcrumb-item active" aria-current="page">Intranet</li>--}}
                </ol>
                <hr>
            </nav>

					<div class="page-content">


						<div class="page-header">
							<h1>
								Cadastro do Aluno
							</h1>
{{--                            <div class="clearfix">--}}
{{--                                <div class="pull-left alert alert-success no-margin alert-dismissable">--}}
{{--                                    <button type="button" class="close" data-dismiss="alert">--}}
{{--                                        <i class="ace-icon fa fa-times"></i>--}}
{{--                                    </button>--}}

{{--                                    <i class="ace-icon fa fa-umbrella bigger-120 blue"></i>--}}
{{--                                    Clique na foto ou nos campos para editá-los...--}}
{{--                                </div>--}}
{{--                            </div>--}}
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- CONTEÚDO DA PÁGINA -->

								<div>
									<div id="user-profile-2" class="user-profile">
										<div class="tabbable">
											<ul class="nav nav-tabs padding-18">
												<li class="active">
													<a data-toggle="tab" href="#home">
														<i class="green ace-icon fa fa-user bigger-120"></i>
														Aluno
													</a>
												</li>

												<li>
													<a data-toggle="tab" href="#info_adicionais">
														<i class="orange ace-icon fa fa-info-circle bigger-120"></i>
														Informações Adicionais
													</a>
												</li>

												<li>
													<a data-toggle="tab" href="#matriculas">
														<i class="blue ace-icon fa fa-check-square-o bigger-120"></i>
														Matrículas
													</a>
												</li>

												<li>
													<a data-toggle="tab" href="#pictures">
														<i class="pink ace-icon fa fa-picture-o bigger-120"></i>
														Matrículas
													</a>
												</li>
                                                <li>
                                                    <a data-toggle="tab" href="#pictures">
                                                        <i class="pink ace-icon fa fa-picture-o bigger-120"></i>
                                                        Documentos
                                                    </a>
                                                </li>
											</ul>

											<div class="tab-content no-border padding-24">
												<div id="home" class="tab-pane in active">
													<div class="row">
                                                        <div class="col-xs-12 col-sm-3 center">
                                                            <div>
												<span class="profile-picture">
													<img id="avatar" class="editable img-responsive" alt="Alex's Avatar" src="/assets/images/avatars/miguel.jpg" />
												</span>

                                                                <div class="space-4"></div>

                                                                <div class="profile-user-info profile-user-info-striped" style="font-size: 14pt">
                                                                    <div class="profile-info-row">
                                                                        <div class="profile-info-value">
                                                                            <span class="editable editable-click editable-unsaved" id="username" style="display: inline; background-color: rgba(0, 0, 0, 0);"><strong>MIGUEL DE SOUSA CAMPOS</strong></span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="profile-info-row">
                                                                        <div class="profile-info-value">
                                                                            <span id="age" style="display: inline;">8 anos</span>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                                <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                                                                    <div class="inline position-relative">
                                                                        <a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
                                                                            <i class="ace-icon fa fa-circle light-green"></i>
                                                                            &nbsp;
                                                                            <span class="white">Ativo</span>
                                                                        </a>

                                                                        <ul class="align-left dropdown-menu dropdown-caret dropdown-lighter">
                                                                            <li class="dropdown-header"> Status </li>

                                                                            <li>
                                                                                <a href="#">
                                                                                    <i class="ace-icon fa fa-circle green"></i>
                                                                                    &nbsp;
                                                                                    <span class="green">Ativo</span>
                                                                                </a>
                                                                            </li>

                                                                            <li>
                                                                                <a href="#">
                                                                                    <i class="ace-icon fa fa-circle red"></i>
                                                                                    &nbsp;
                                                                                    <span class="red">Expulso</span>
                                                                                </a>
                                                                            </li>

                                                                            <li>
                                                                                <a href="#">
                                                                                    <i class="ace-icon fa fa-circle grey"></i>
                                                                                    &nbsp;
                                                                                    <span class="grey">Suspenso</span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="profile-contact-info">
                                                                <div class="profile-contact-links align-left" style="padding-left: 25px">
                                                                    <div class="row">
                                                                        <input type="checkbox" aria-label="Checkbox for following text input">
                                                                        <a href="#modalDetalhesDeficiencia" data-toggle="modal" class="btn btn-link">
                                                                            <i class="ace-icon fa fa-wheelchair bigger-120 blue"></i>
                                                                            PCD
                                                                        </a>
                                                                    </div>
                                                                    <div class="row">
                                                                        <input type="checkbox" aria-label="Checkbox for following text input">
                                                                        <a href="#" class="btn btn-link">
                                                                            <i class="ace-icon fa fa-thumbs-up bigger-120 blue"></i>
                                                                            Termo Compromisso
                                                                        </a>

                                                                    </div>
                                                                    <div class="row">
                                                                        <input type="checkbox" aria-label="Checkbox for following text input">
                                                                        <a href="#" class="btn btn-link" title="Autoriza o uso de imagem.">
                                                                            <i class="ace-icon fa fa-camera bigger-120 blue"></i>
                                                                            Uso de Imagem
                                                                        </a>
                                                                    </div>
                                                                    <div class="row">
                                                                        <input type="checkbox" aria-label="Checkbox for following text input">
                                                                        <a href="#" class="btn btn-link" title="Autoriza o uso de Atividade Física.">
                                                                            <i class="ace-icon fa fa-soccer-ball-o bigger-120 blue"></i>
                                                                            Praticar Atividade Física
                                                                        </a>
                                                                    </div>

                                                                </div>

                                                                <div class="space-6"></div>

                                                            </div>

                                                            <div class="hr hr16 dotted"></div>

                                                            <div class="profile-contact-info">
                                                                <div class="profile-contact-links align-left">

                                                                    <div>
                                                                        <i class="ace-icon fa fa-eye bigger-110"></i>
                                                                        <label for="form-field-11">Observações</label>

                                                                        <textarea id="form-field-11" class="autosize-transition form-control" style="overflow: hidden; overflow-wrap: break-word; resize: horizontal; height: 200px;"></textarea>
                                                                    </div>

                                                                </div>

                                                                <div class="space-6"></div>

                                                            </div>

                                                            <div class="hr hr12 dotted"></div>
                                                            <div class="profile-contact-info">
                                                                <div class="profile-contact-links align-left">
                                                                    <a href="#" class="btn btn-link">
                                                                        {{--														<i class="ace-icon fa fa- bigger-120 green"></i>--}}
                                                                        <i class="ace-icon fa fa-id-badge bigger-140 green"></i>
                                                                        Fazer Carteirinha
                                                                    </a><br>

                                                                    <a href="#" class="btn btn-link">
                                                                        <i class="ace-icon fa fa-envelope bigger-140 green"></i>
                                                                        Enviar email
                                                                    </a><br>

                                                                    <a href="#" class="btn btn-link">
                                                                        <i class="ace-icon fa fa-print bigger-140 green"></i>
                                                                        Imprimir Ficha
                                                                    </a><br>
                                                                    <a href="#" class="btn btn-link">
                                                                        <i class="ace-icon fa fa-save bigger-140 green"></i>
                                                                        Salvar
                                                                    </a>
                                                                </div>

                                                                <div class="space-6"></div>

                                                            </div>
                                                        </div>

														<div class="col-xs-12 col-sm-9">
															<h5 class="blue" style="width: 90%">
                                                                {{-- DATA DE ABERTURA DO CADASTRO--}}
																<span class="middle">Data do Cadastro: 21/07/2020</span>

                                                                {{--DATA EM QUE O CADASTRO FOI ATUALIZADO--}}
                                                                {{-- MUDA DE COR SE FOR FICANDO DESATUALIZADO--}}
																<span class="label label-success arrowed-in-right" style="text-arightlign: ">
																	<i class="ace-icon fa fa-circle smaller-80 align-middle"></i>
																	 Atualizado em: 21/07/2020
																</span>
															</h5>

                                                            <form style="width: 90%; margin-top: 30px"  method="post" action="/cop/login/msgcadsucess">
                                                                {{-- CSRF--}}
                                                                {{csrf_field()}}

                                                                <div class="row form-group">
                                                                    <div class="col-md-3">
                                                                        <label for="dtNascUser">Data Nascimento</label>
                                                                        <input type="date" class="form-control" id="dtNascUser" name="dtNascUser" title="Data de Nascimento do Aluno">
                                                                    </div>

                                                                    <div class="col-md-3">
                                                                        <label for="etniaUser">Sexo</label>
                                                                        <select class="form-control" id="etniaUser" name="etniaUser">
                                                                            <option disabled selected>Selecione</option>
                                                                            <option>Masculino</option>
                                                                            <option>Feminino</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <label for="etniaUser">Etnia</label>
                                                                        <select class="form-control" id="etniaUser" name="etniaUser">
                                                                            <option disabled selected>Selecione</option>
                                                                            <option>Branco</option>
                                                                            <option>Negro</option>
                                                                            <option>Pardo</option>
                                                                            <option>Indígena</option>
                                                                            <option>Amarelo</option>
                                                                            <option>Não Definido</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <label for="paisUser">Nacionalidade</label>
                                                                        <select class="form-control" id="paisUser" name="paisUser">
                                                                            <option value="África do Sul">África do Sul</option>
                                                                            <option value="Albânia">Albânia</option>
                                                                            <option value="Alemanha">Alemanha</option>
                                                                            <option value="Andorra">Andorra</option>
                                                                            <option value="Angola">Angola</option>
                                                                            <option value="Anguilla">Anguilla</option>
                                                                            <option value="Antigua">Antigua</option>
                                                                            <option value="Arábia Saudita">Arábia Saudita</option>
                                                                            <option value="Argentina">Argentina</option>
                                                                            <option value="Armênia">Armênia</option>
                                                                            <option value="Aruba">Aruba</option>
                                                                            <option value="Austrália">Austrália</option>
                                                                            <option value="Áustria">Áustria</option>
                                                                            <option value="Azerbaijão">Azerbaijão</option>
                                                                            <option value="Bahamas">Bahamas</option>
                                                                            <option value="Bahrein">Bahrein</option>
                                                                            <option value="Bangladesh">Bangladesh</option>
                                                                            <option value="Barbados">Barbados</option>
                                                                            <option value="Bélgica">Bélgica</option>
                                                                            <option value="Benin">Benin</option>
                                                                            <option value="Bermudas">Bermudas</option>
                                                                            <option value="Botsuana">Botsuana</option>
                                                                            <option value="Brasil" selected>Brasil</option>
                                                                            <option value="Brunei">Brunei</option>
                                                                            <option value="Bulgária">Bulgária</option>
                                                                            <option value="Burkina Fasso">Burkina Fasso</option>
                                                                            <option value="botão">botão</option>
                                                                            <option value="Cabo Verde">Cabo Verde</option>
                                                                            <option value="Camarões">Camarões</option>
                                                                            <option value="Camboja">Camboja</option>
                                                                            <option value="Canadá">Canadá</option>
                                                                            <option value="Cazaquistão">Cazaquistão</option>
                                                                            <option value="Chade">Chade</option>
                                                                            <option value="Chile">Chile</option>
                                                                            <option value="China">China</option>
                                                                            <option value="Cidade do Vaticano">Cidade do Vaticano</option>
                                                                            <option value="Colômbia">Colômbia</option>
                                                                            <option value="Congo">Congo</option>
                                                                            <option value="Coréia do Sul">Coréia do Sul</option>
                                                                            <option value="Costa do Marfim">Costa do Marfim</option>
                                                                            <option value="Costa Rica">Costa Rica</option>
                                                                            <option value="Croácia">Croácia</option>
                                                                            <option value="Dinamarca">Dinamarca</option>
                                                                            <option value="Djibuti">Djibuti</option>
                                                                            <option value="Dominica">Dominica</option>
                                                                            <option value="EUA">EUA</option>
                                                                            <option value="Egito">Egito</option>
                                                                            <option value="El Salvador">El Salvador</option>
                                                                            <option value="Emirados Árabes">Emirados Árabes</option>
                                                                            <option value="Equador">Equador</option>
                                                                            <option value="Eritréia">Eritréia</option>
                                                                            <option value="Escócia">Escócia</option>
                                                                            <option value="Eslováquia">Eslováquia</option>
                                                                            <option value="Eslovênia">Eslovênia</option>
                                                                            <option value="Espanha">Espanha</option>
                                                                            <option value="Estônia">Estônia</option>
                                                                            <option value="Etiópia">Etiópia</option>
                                                                            <option value="Fiji">Fiji</option>
                                                                            <option value="Filipinas">Filipinas</option>
                                                                            <option value="Finlândia">Finlândia</option>
                                                                            <option value="França">França</option>
                                                                            <option value="Gabão">Gabão</option>
                                                                            <option value="Gâmbia">Gâmbia</option>
                                                                            <option value="Gana">Gana</option>
                                                                            <option value="Geórgia">Geórgia</option>
                                                                            <option value="Gibraltar">Gibraltar</option>
                                                                            <option value="Granada">Granada</option>
                                                                            <option value="Grécia">Grécia</option>
                                                                            <option value="Guadalupe">Guadalupe</option>
                                                                            <option value="Guam">Guam</option>
                                                                            <option value="Guatemala">Guatemala</option>
                                                                            <option value="Guiana">Guiana</option>
                                                                            <option value="Guiana Francesa">Guiana Francesa</option>
                                                                            <option value="Guiné-bissau">Guiné-bissau</option>
                                                                            <option value="Haiti">Haiti</option>
                                                                            <option value="Holanda">Holanda</option>
                                                                            <option value="Honduras">Honduras</option>
                                                                            <option value="Hong Kong">Hong Kong</option>
                                                                            <option value="Hungria">Hungria</option>
                                                                            <option value="Iêmen">Iêmen</option>
                                                                            <option value="Ilhas Cayman">Ilhas Cayman</option>
                                                                            <option value="Ilhas Cook">Ilhas Cook</option>
                                                                            <option value="Ilhas Curaçao">Ilhas Curaçao</option>
                                                                            <option value="Ilhas Marshall">Ilhas Marshall</option>
                                                                            <option value="Ilhas Turks & Caicos">Ilhas Turks & Caicos</option>
                                                                            <option value="Ilhas Virgens (brit.)">Ilhas Virgens (brit.)</option>
                                                                            <option value="Ilhas Virgens(amer.)">Ilhas Virgens(amer.)</option>
                                                                            <option value="Ilhas Wallis e Futuna">Ilhas Wallis e Futuna</option>
                                                                            <option value="Índia">Índia</option>
                                                                            <option value="Indonésia">Indonésia</option>
                                                                            <option value="Inglaterra">Inglaterra</option>
                                                                            <option value="Irlanda">Irlanda</option>
                                                                            <option value="Islândia">Islândia</option>
                                                                            <option value="Israel">Israel</option>
                                                                            <option value="Itália">Itália</option>
                                                                            <option value="Jamaica">Jamaica</option>
                                                                            <option value="Japão">Japão</option>
                                                                            <option value="Jordânia">Jordânia</option>
                                                                            <option value="Kuwait">Kuwait</option>
                                                                            <option value="Latvia">Latvia</option>
                                                                            <option value="Líbano">Líbano</option>
                                                                            <option value="Liechtenstein">Liechtenstein</option>
                                                                            <option value="Lituânia">Lituânia</option>
                                                                            <option value="Luxemburgo">Luxemburgo</option>
                                                                            <option value="Macau">Macau</option>
                                                                            <option value="Macedônia">Macedônia</option>
                                                                            <option value="Madagascar">Madagascar</option>
                                                                            <option value="Malásia">Malásia</option>
                                                                            <option value="Malaui">Malaui</option>
                                                                            <option value="Mali">Mali</option>
                                                                            <option value="Malta">Malta</option>
                                                                            <option value="Marrocos">Marrocos</option>
                                                                            <option value="Martinica">Martinica</option>
                                                                            <option value="Mauritânia">Mauritânia</option>
                                                                            <option value="Mauritius">Mauritius</option>
                                                                            <option value="México">México</option>
                                                                            <option value="Moldova">Moldova</option>
                                                                            <option value="Mônaco">Mônaco</option>
                                                                            <option value="Montserrat">Montserrat</option>
                                                                            <option value="Nepal">Nepal</option>
                                                                            <option value="Nicarágua">Nicarágua</option>
                                                                            <option value="Niger">Niger</option>
                                                                            <option value="Nigéria">Nigéria</option>
                                                                            <option value="Noruega">Noruega</option>
                                                                            <option value="Nova Caledônia">Nova Caledônia</option>
                                                                            <option value="Nova Zelândia">Nova Zelândia</option>
                                                                            <option value="Omã">Omã</option>
                                                                            <option value="Palau">Palau</option>
                                                                            <option value="Panamá">Panamá</option>
                                                                            <option value="Papua-nova Guiné">Papua-nova Guiné</option>
                                                                            <option value="Paquistão">Paquistão</option>
                                                                            <option value="Peru">Peru</option>
                                                                            <option value="Polinésia Francesa">Polinésia Francesa</option>
                                                                            <option value="Polônia">Polônia</option>
                                                                            <option value="Porto Rico">Porto Rico</option>
                                                                            <option value="Portugal">Portugal</option>
                                                                            <option value="Qatar">Qatar</option>
                                                                            <option value="Quênia">Quênia</option>
                                                                            <option value="Rep. Dominicana">Rep. Dominicana</option>
                                                                            <option value="Rep. Tcheca">Rep. Tcheca</option>
                                                                            <option value="Reunion">Reunion</option>
                                                                            <option value="Romênia">Romênia</option>
                                                                            <option value="Ruanda">Ruanda</option>
                                                                            <option value="Rússia">Rússia</option>
                                                                            <option value="Saipan">Saipan</option>
                                                                            <option value="Samoa Americana">Samoa Americana</option>
                                                                            <option value="Senegal">Senegal</option>
                                                                            <option value="Serra Leone">Serra Leone</option>
                                                                            <option value="Seychelles">Seychelles</option>
                                                                            <option value="Singapura">Singapura</option>
                                                                            <option value="Síria">Síria</option>
                                                                            <option value="Sri Lanka">Sri Lanka</option>
                                                                            <option value="St. Kitts & Nevis">St. Kitts & Nevis</option>
                                                                            <option value="St. Lúcia">St. Lúcia</option>
                                                                            <option value="St. Vincent">St. Vincent</option>
                                                                            <option value="Sudão">Sudão</option>
                                                                            <option value="Suécia">Suécia</option>
                                                                            <option value="Suiça">Suiça</option>
                                                                            <option value="Suriname">Suriname</option>
                                                                            <option value="Tailândia">Tailândia</option>
                                                                            <option value="Taiwan">Taiwan</option>
                                                                            <option value="Tanzânia">Tanzânia</option>
                                                                            <option value="Togo">Togo</option>
                                                                            <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                                                            <option value="Tunísia">Tunísia</option>
                                                                            <option value="Turquia">Turquia</option>
                                                                            <option value="Ucrânia">Ucrânia</option>
                                                                            <option value="Uganda">Uganda</option>
                                                                            <option value="Uruguai">Uruguai</option>
                                                                            <option value="Venezuela">Venezuela</option>
                                                                            <option value="Vietnã">Vietnã</option>
                                                                            <option value="Zaire">Zaire</option>
                                                                            <option value="Zâmbia">Zâmbia</option>
                                                                            <option value="Zimbábue">Zimbábue</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-md-4">
                                                                        <label for="estadoOrigUser">Estado</label>
                                                                        <select class="form-control" id="estadoOrigUser" name="estadoOrigUser">
                                                                            <option selected>Selecione</option>
                                                                            <option value="AC">Acre</option>
                                                                            <option value="AL">Alagoas</option>
                                                                            <option value="AP">Amapá</option>
                                                                            <option value="AM">Amazonas</option>
                                                                            <option value="BA">Bahia</option>
                                                                            <option value="CE">Ceará</option>
                                                                            <option value="DF">Distrito Federal</option>
                                                                            <option value="ES">Espírito Santo</option>
                                                                            <option value="GO">Goiás</option>
                                                                            <option value="MA">Maranhão</option>
                                                                            <option value="MT">Mato Grosso</option>
                                                                            <option value="MS">Mato Grosso do Sul</option>
                                                                            <option value="MG">Minas Gerais</option>
                                                                            <option value="PA">Pará</option>
                                                                            <option value="PB">Paraíba</option>
                                                                            <option value="PR">Paraná</option>
                                                                            <option value="PE">Pernambuco</option>
                                                                            <option value="PI">Piauí</option>
                                                                            <option value="RJ">Rio de Janeiro</option>
                                                                            <option value="RN">Rio Grande do Norte</option>
                                                                            <option value="RS">Rio Grande do Sul</option>
                                                                            <option value="RO">Rondônia</option>
                                                                            <option value="RR">Roraima</option>
                                                                            <option value="SC">Santa Catarina</option>
                                                                            <option value="SP">São Paulo</option>
                                                                            <option value="SE">Sergipe</option>
                                                                            <option value="TO">Tocantins</option>
                                                                            <option value="EX">Estrangeiro</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-8">
                                                                        <label for="cidadeOrigUser">Naturalidade</label>
                                                                        <select class="form-control" id="cidadeOrigUser" name="cidadeOrigUser">
                                                                            <option selected>Selecione</option>
                                                                            <option value="#">Brasília</option>
                                                                            <option value="#">Planaltina</option>
                                                                            <option value="#">Sobradinho</option>
                                                                            <option value="#">Taguatinga</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12 form-group">
                                                                        <label for="nomeMae">Nome da Mãe</label>
                                                                        <input type="text" class="form-control" id="nomeMae" name="nomeMae" placeholder="Nome da mãe do aluno." required>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12 form-group">
                                                                        <label for="nomePai">Nome do Pai</label>
                                                                        <input type="text" class="form-control" id="nomePai" name="nomePai" placeholder="Nome da pai do aluno.">
                                                                    </div>
                                                                </div>

                                                                <div class="row form-group">
                                                                    <div class="col-md-3">
                                                                        <label for="rgUser">RG do Aluno</label>
                                                                        <input type="text" class="form-control" id="rgUser" name="rgUser" placeholder="Nº do RG">
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <label for="orgExpUser">Órgão Expedidor</label>
                                                                        <input type="text" class="form-control" id="orgExpUser" name="orgExpUser" placeholder="Órgão Expedidor do RG">
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <label for="cpfUser">CPF do Aluno</label>
                                                                        <input type="text" class="form-control cpf" id="cpfUser" name="cpfUser" required onblur="validaCPF()">
                                                                        <small id="alertaCPF" style="color: red" hidden>Digite seu CPF corretamente.</small>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <label for="celUser">Celular</label>
                                                                        <input type="tel" class="form-control" id="celUser" name="celUser" class="form-control cel" placeholder="contato / whatsApp" required>
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-6">
                                                                        <label for="emailUser">Email</label>
                                                                        <input type="email" class="form-control" id="emailUser" name="emailUser" placeholder="email de contato" required>
                                                                        <small id="alertaEmail" style="color: red" hidden>Os e-mails não conferem.</small>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <label for="confirmaEmailUser">Cornfirmação de Email</label>
                                                                        <input type="email" class="form-control" id="confirmaEmailUser" name="confirmaEmailUser" placeholder="confirme o email" onblur="testarEmail()" required>
                                                                    </div>
                                                                </div>
                                                                <div class="hr"></div>
                                                                <div class="row form-group">
                                                                    <div class="col-md-12">
                                                                        <i class="ace-icon fa fa-envelope bigger-120 align-middle"></i>
                                                                        <label for="endAluno">Endereço</label>
                                                                        <input type="text" class="form-control" id="endAluno" name="endAluno" placeholder="Endereço do aluno.">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-md-4">
                                                                        <label for="endBairroAluno">Bairro</label>
                                                                        <input type="text" class="form-control" id="endBairroAluno" name="endBairroAluno" placeholder="Bairro/Setor.">
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <label for="endNumeroCasa">Nº</label>
                                                                        <input type="text" class="form-control" id="endNumeroCasa" name="endNumeroCasa" title="Número da Casa/Apartamento/Lote">
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label for="endComplemento">Complemento</label>
                                                                        <input type="text" class="form-control" id="endComplemento" name="endComplemento">
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <label for="endCep">CEP</label>
                                                                        <input type="text" class="form-control" id="endCep" name="endCep">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-md-4">
                                                                        <label for="estadoOrigUser">Estado</label>
                                                                        <select class="form-control" id="estadoOrigUser" name="estadoOrigUser">
                                                                            <option selected>Selecione</option>
                                                                            <option value="AC">Acre</option>
                                                                            <option value="AL">Alagoas</option>
                                                                            <option value="AP">Amapá</option>
                                                                            <option value="AM">Amazonas</option>
                                                                            <option value="BA">Bahia</option>
                                                                            <option value="CE">Ceará</option>
                                                                            <option value="DF">Distrito Federal</option>
                                                                            <option value="ES">Espírito Santo</option>
                                                                            <option value="GO">Goiás</option>
                                                                            <option value="MA">Maranhão</option>
                                                                            <option value="MT">Mato Grosso</option>
                                                                            <option value="MS">Mato Grosso do Sul</option>
                                                                            <option value="MG">Minas Gerais</option>
                                                                            <option value="PA">Pará</option>
                                                                            <option value="PB">Paraíba</option>
                                                                            <option value="PR">Paraná</option>
                                                                            <option value="PE">Pernambuco</option>
                                                                            <option value="PI">Piauí</option>
                                                                            <option value="RJ">Rio de Janeiro</option>
                                                                            <option value="RN">Rio Grande do Norte</option>
                                                                            <option value="RS">Rio Grande do Sul</option>
                                                                            <option value="RO">Rondônia</option>
                                                                            <option value="RR">Roraima</option>
                                                                            <option value="SC">Santa Catarina</option>
                                                                            <option value="SP">São Paulo</option>
                                                                            <option value="SE">Sergipe</option>
                                                                            <option value="TO">Tocantins</option>
                                                                            <option value="EX">Estrangeiro</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-8">
                                                                        <label for="cidadeOrigUser">Cidade</label>
                                                                        <select class="form-control" id="cidadeOrigUser" name="cidadeOrigUser">
                                                                            <option selected>Selecione</option>
                                                                            <option value="#">Brasília</option>
                                                                            <option value="#">Planaltina</option>
                                                                            <option value="#">Sobradinho</option>
                                                                            <option value="#">Taguatinga</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="hr hr-8 dotted"></div>



                                                            </form>




														</div><!-- /.col -->
													</div><!-- /.row -->

													<div class="space-20"></div>

													<div class="row">
														<div class="col-xs-12 col-sm-6">
															<div class="widget-box transparent">
																<div class="widget-header widget-header-small">
																	<h4 class="widget-title smaller">
																		<i class="ace-icon fa fa-check-square-o bigger-110"></i>
																		Little About Me
																	</h4>
																</div>

																<div class="widget-body">
																	<div class="widget-main">
																		<p>
																			My job is mostly lorem ipsuming and dolor sit ameting as long as consectetur adipiscing elit.
																		</p>
																		<p>
																			Sometimes quisque commodo massa gets in the way and sed ipsum porttitor facilisis.
																		</p>
																		<p>
																			The best thing about my job is that vestibulum id ligula porta felis euismod and nullam quis risus eget urna mollis ornare.
																		</p>
																		<p>
																			Thanks for visiting my profile.
																		</p>
																	</div>
																</div>
															</div>
														</div>

														<div class="col-xs-12 col-sm-6">
															<div class="widget-box transparent">
																<div class="widget-header widget-header-small header-color-blue2">
																	<h4 class="widget-title smaller">
																		<i class="ace-icon fa fa-lightbulb-o bigger-120"></i>
																		My Skills
																	</h4>
																</div>

																<div class="widget-body">
																	<div class="widget-main padding-16">
																		<div class="clearfix">
																			<div class="grid3 center">
																				<div class="easy-pie-chart percentage" data-percent="45" data-color="#CA5952">
																					<span class="percent">45</span>%
																				</div>

																				<div class="space-2"></div>
																				Graphic Design
																			</div>

																			<div class="grid3 center">
																				<div class="center easy-pie-chart percentage" data-percent="90" data-color="#59A84B">
																					<span class="percent">90</span>%
																				</div>

																				<div class="space-2"></div>
																				HTML5 & CSS3
																			</div>

																			<div class="grid3 center">
																				<div class="center easy-pie-chart percentage" data-percent="80" data-color="#9585BF">
																					<span class="percent">80</span>%
																				</div>

																				<div class="space-2"></div>
																				Javascript/jQuery
																			</div>
																		</div>

																		<div class="hr hr-16"></div>

																		<div class="profile-skills">
																			<div class="progress">
																				<div class="progress-bar" style="width:80%">
																					<span class="pull-left">HTML5 & CSS3</span>
																					<span class="pull-right">80%</span>
																				</div>
																			</div>

																			<div class="progress">
																				<div class="progress-bar progress-bar-success" style="width:72%">
																					<span class="pull-left">Javascript & jQuery</span>

																					<span class="pull-right">72%</span>
																				</div>
																			</div>

																			<div class="progress">
																				<div class="progress-bar progress-bar-purple" style="width:70%">
																					<span class="pull-left">PHP & MySQL</span>

																					<span class="pull-right">70%</span>
																				</div>
																			</div>

																			<div class="progress">
																				<div class="progress-bar progress-bar-warning" style="width:50%">
																					<span class="pull-left">Wordpress</span>

																					<span class="pull-right">50%</span>
																				</div>
																			</div>

																			<div class="progress">
																				<div class="progress-bar progress-bar-danger" style="width:38%">
																					<span class="pull-left">Photoshop</span>

																					<span class="pull-right">38%</span>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div><!-- /#home -->

												<div id="info_adicionais" class="tab-pane">

                                                    <div class="col-sm-12">

                                                        <div id="accordion" class="accordion-style1 panel-group">
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <h4 class="panel-title">
                                                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false">
                                                                            <i class="bigger-110 ace-icon fa fa-graduation-cap" data-icon-hide="ace-icon fa fa-folder-open-o" data-icon-show="ace-icon fa fa-graduation-cap"></i>
                                                                            &nbsp;Escolaridade
                                                                        </a>
                                                                    </h4>
                                                                </div>

                                                                <div class="panel-collapse collapse" id="collapseOne" aria-expanded="false" style="height: 0px;">
                                                                    <div style="padding: 15px">
                                                                        <form method="post" action="/cop/login/msgcadsucess">
                                                                            {{-- CSRF--}}
                                                                            {{csrf_field()}}

                                                                            <div class="row form-group">
                                                                                <div class="col-md-3">
                                                                                    <label for="estuda">Estuda</label>
                                                                                    <select class="form-control" id="estuda" name="estuda">
                                                                                        <option disabled selected>Selecione</option>
                                                                                        <option>SIM</option>
                                                                                        <option>NÃO</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <label for="parceria">Parceria</label>
                                                                                    <select class="form-control" id="parceria" name="parceria">
                                                                                        <option disabled selected>Selecione</option>
                                                                                        <option>CBDF</option>
                                                                                        <option>Conselho Tutelar</option>
                                                                                        <option>PMDF</option>
                                                                                        <option>SEDF</option>
                                                                                        <option>SESDF</option>
                                                                                        <option>SEL</option>
                                                                                        <option>TJDFT</option>
                                                                                        <option>OUTRO</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row">
                                                                                <div class="col-md-10  form-group">
                                                                                    <label for="escola">Escola</label>
                                                                                    <input type="text" class="form-control" id="escola" name="escola" placeholder="Nome da Escola onde o aluno estuda">
                                                                                </div>
                                                                                <div class="col-md-2">
                                                                                    <label for="tipoEscola">Tipo</label>
                                                                                    <select class="form-control" id="tipoEscola" name="tipoEscola">
                                                                                        <option disabled selected>Selecione</option>
                                                                                        <option>Pública</option>
                                                                                        <option>Particular</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row form-group">

                                                                                <div class="col-md-3">
                                                                                    <label for="escolaridade">Escolaridade</label>
                                                                                    <select class="form-control" id="escolaridade" name="escolaridade">
                                                                                        <option disabled selected>Selecione</option>
                                                                                        <option>Educação Infantil</option>
                                                                                        <option>Ensino Fundamental</option>
                                                                                        <option>Ensino Médio</option>
                                                                                        <option>EJA</option>
                                                                                        <option>Ensino Especial</option>
                                                                                        <option>Superior</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <label for="serie">Série</label>
                                                                                    <select class="form-control" id="serie" name="serie">
                                                                                        <option disabled selected>Selecione</option>
                                                                                        <option>Ed. Infantil</option>
                                                                                        <option>1º Ano</option>
                                                                                        <option>2º Ano</option>
                                                                                        <option>3º Ano</option>
                                                                                        <option>4º Ano</option>
                                                                                        <option>5º Ano</option>
                                                                                        <option>6º Ano</option>
                                                                                        <option>7º Ano</option>
                                                                                        <option>8º Ano</option>
                                                                                        <option>9º Ano</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <label for="turma">Turma</label>
                                                                                    <input type="text" class="form-control" id="turma" name="turma" placeholder="Turma">
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <label for="turno">Turno</label>
                                                                                    <select class="form-control" id="turno" name="turno">
                                                                                        <option disabled selected>Selecione</option>
                                                                                        <option>Matutino</option>
                                                                                        <option>Vespertino</option>
                                                                                        <option>Noturno</option>
                                                                                    </select>
                                                                                </div>

                                                                            </div>

                                                                        </form>
                                                                    </div>

                                                                </div>
                                                            </div>

                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <h4 class="panel-title">
                                                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false">
                                                                            <i class="bigger-110 ace-icon fa fa-heartbeat" data-icon-hide="ace-icon fa fa-heart-o" data-icon-show="ace-icon fa fa-heartbeat"></i>
                                                                            &nbsp;PAR-Q
                                                                        </a>
                                                                    </h4>
                                                                </div>

                                                                <div class="panel-collapse collapse" id="collapseTwo" aria-expanded="false" style="height: 0px;">
                                                                    <div style="padding: 15px">
                                                                        <form method="post" action="/cop/login/msgcadsucess">
                                                                            {{-- CSRF--}}
                                                                            {{csrf_field()}}

                                                                            <div class="row form-group">
                                                                                <div class="col-sm-12">
                                                                                    <div class="control-group">
                                                                                        <label class="control-label bolder blue">QUESTIONÁRIO DE PRONTIDÃO PARA ATIVIDADE FÍSICA</label>

                                                                                        <div class="checkbox">
                                                                                            <label>
                                                                                                <input name="form-field-checkbox" class="ace ace-checkbox-2" type="checkbox">
                                                                                                <span class="lbl"> Algum médico já disse que você possui algum problema de coração e que só deveria realizar atividade física superviosionado por profissionais de saúde?</span>
                                                                                            </label>
                                                                                        </div>

                                                                                        <div class="checkbox">
                                                                                            <label>
                                                                                                <input name="form-field-checkbox" class="ace ace-checkbox-2" type="checkbox">
                                                                                                <span class="lbl"> Sente dores no peito quando realiza atividade física?</span>
                                                                                            </label>
                                                                                        </div>

                                                                                        <div class="checkbox">
                                                                                            <label>
                                                                                                <input name="form-field-checkbox" class="ace ace-checkbox-2" type="checkbox">
                                                                                                <span class="lbl"> No último mês, você sentiu dores no peito quando praticou atividade física?</span>
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="checkbox">
                                                                                            <label>
                                                                                                <input name="form-field-checkbox" class="ace ace-checkbox-2" type="checkbox">
                                                                                                <span class="lbl"> Apresenta desequilíbrio devido a tontura ou perda de consciência?</span>
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="checkbox">
                                                                                            <label>
                                                                                                <input name="form-field-checkbox" class="ace ace-checkbox-2" type="checkbox">
                                                                                                <span class="lbl"> Possui algum problema ósseo ou articular que piora com atividade física?</span>
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="checkbox">
                                                                                            <label>
                                                                                                <input name="form-field-checkbox" class="ace ace-checkbox-2" type="checkbox">
                                                                                                <span class="lbl"> Toma atualmente algum medicamento para pressão arterial ou coração?</span>
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="checkbox">
                                                                                            <label>
                                                                                                <input name="form-field-checkbox" class="ace ace-checkbox-2" type="checkbox">
                                                                                                <span class="lbl"> Sabe de alguma outra razão pela qual você não deve praticar atividade física?</span>
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="col-md-12  form-group">
                                                                                            <label for="obsParQ">Observações</label>
                                                                                            <textarea id="obsParQ" name="obsParQ" class="autosize-transition form-control" style="overflow: hidden; overflow-wrap: break-word; resize: horizontal; height: 100px;" placeholder="Informações adicionais sobre condições de saúde do Aluno."></textarea>
                                                                                        </div>


                                                                                    </div>
                                                                                </div>

                                                                            </div>



                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <h4 class="panel-title">
                                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true">
                                                                            <i class="bigger-110 ace-icon fa fa-users" data-icon-hide="ace-icon fa fa-user-plus" data-icon-show="ace-icon fa fa-users"></i>
                                                                            &nbsp;Responsáveis
                                                                        </a>
                                                                    </h4>
                                                                </div>

                                                                <div class="panel-collapse collapse" id="collapseThree" aria-expanded="true" style="">
                                                                    <div style="padding: 15px;">
                                                                        <div class="row">
                                                                            <div class="col-xs-12">
                                                                                <table id="simple-table" class="table  table-bordered table-hover">
                                                                                    <thead>
                                                                                    <tr>
                                                                                        <th class="col-md-6">Nome</th>
                                                                                        <th>Parentesco</th>
                                                                                        <th class="center"> Resp</th>
                                                                                        <th>Telefone</th>
                                                                                        <th>Situação</th>
                                                                                        <th class="detail-col">Detalhes</th>
                                                                                        <th></th>

                                                                                    </tr>
                                                                                    </thead>

                                                                                    <tbody>

                                                                                {{--Linha Tabela Responsável--}}
                                                                                    <tr>
                                                                                        <td>Nilson Campos</td>
                                                                                        <td>Pai</td>
                                                                                        <td class="center">
                                                                                            <label class="pos-rel">
                                                                                                <input type="checkbox" class="ace">
                                                                                                <span class="lbl"></span>
                                                                                            </label>
                                                                                        </td>
                                                                                        <td>(61) 99502-2652</td>
                                                                                        <td class="hidden-480">
                                                                                            <span class="label label-sm label-success">Autorizado</span>
                                                                                        </td>

                                                                                        <td class="center">
                                                                                            <div class="action-buttons">
                                                                                                <a href="#" class="green bigger-140 show-details-btn" title="Show Details">
                                                                                                    <i class="ace-icon fa fa-angle-double-down"></i>
                                                                                                    <span class="sr-only">Details</span>
                                                                                                </a>
                                                                                            </div>
                                                                                        </td>

                                                                                        <td>
                                                                                            <div class="hidden-sm hidden-xs btn-group">
                                                                                                <button class="btn btn-xs btn-success">
                                                                                                    <i class="ace-icon fa fa-check bigger-120"></i>
                                                                                                </button>

                                                                                                <button class="btn btn-xs btn-info">
                                                                                                    <i class="ace-icon fa fa-pencil bigger-120"></i>
                                                                                                </button>

                                                                                                <button class="btn btn-xs btn-danger">
                                                                                                    <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                                </button>

                                                                                                <button class="btn btn-xs btn-warning">
                                                                                                    <i class="ace-icon fa fa-flag bigger-120"></i>
                                                                                                </button>
                                                                                            </div>

                                                                                            <div class="hidden-md hidden-lg">
                                                                                                <div class="inline pos-rel">
                                                                                                    <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                                        <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                                                                                                    </button>

                                                                                                    <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                                        <li>
                                                                                                            <a href="#" class="tooltip-info" data-rel="tooltip" title="" data-original-title="View">
																			<span class="blue">
																				<i class="ace-icon fa fa-search-plus bigger-120"></i>
																			</span>
                                                                                                            </a>
                                                                                                        </li>

                                                                                                        <li>
                                                                                                            <a href="#" class="tooltip-success" data-rel="tooltip" title="" data-original-title="Edit">
																			<span class="green">
																				<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																			</span>
                                                                                                            </a>
                                                                                                        </li>

                                                                                                        <li>
                                                                                                            <a href="#" class="tooltip-error" data-rel="tooltip" title="" data-original-title="Delete">
																			<span class="red">
																				<i class="ace-icon fa fa-trash-o bigger-120"></i>
																			</span>
                                                                                                            </a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>

                                                                                    <tr class="detail-row">
                                                                                        <td colspan="8">
                                                                                            <div class="table-detail">
                                                                                                <div class="row">
                                                                                                    <div class="col-xs-12 col-sm-2">
                                                                                                        <div class="text-center">
                                                                                                            <img height="150" class="thumbnail inline no-margin-bottom" alt="Domain Owner's Avatar" src="assets/images/avatars/profile-pic.jpg">
                                                                                                            <br>
                                                                                                            <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                                                                                                                <div class="inline position-relative">
                                                                                                                    <a class="user-title-label" href="#">
                                                                                                                        <i class="ace-icon fa fa-circle light-green"></i>
                                                                                                                        &nbsp;
                                                                                                                        <span class="white">Alex M. Doe</span>
                                                                                                                    </a>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="col-xs-12 col-sm-7">
                                                                                                        <div class="space visible-xs"></div>

                                                                                                        <div class="profile-user-info profile-user-info-striped">
                                                                                                            <div class="profile-info-row">
                                                                                                                <div class="profile-info-name"> Username </div>

                                                                                                                <div class="profile-info-value">
                                                                                                                    <span>alexdoe</span>
                                                                                                                </div>
                                                                                                            </div>

                                                                                                            <div class="profile-info-row">
                                                                                                                <div class="profile-info-name"> Location </div>

                                                                                                                <div class="profile-info-value">
                                                                                                                    <i class="fa fa-map-marker light-orange bigger-110"></i>
                                                                                                                    <span>Netherlands, Amsterdam</span>
                                                                                                                </div>
                                                                                                            </div>

                                                                                                            <div class="profile-info-row">
                                                                                                                <div class="profile-info-name"> Age </div>

                                                                                                                <div class="profile-info-value">
                                                                                                                    <span>38</span>
                                                                                                                </div>
                                                                                                            </div>

                                                                                                            <div class="profile-info-row">
                                                                                                                <div class="profile-info-name"> Joined </div>

                                                                                                                <div class="profile-info-value">
                                                                                                                    <span>2010/06/20</span>
                                                                                                                </div>
                                                                                                            </div>

                                                                                                            <div class="profile-info-row">
                                                                                                                <div class="profile-info-name"> Last Online </div>

                                                                                                                <div class="profile-info-value">
                                                                                                                    <span>3 hours ago</span>
                                                                                                                </div>
                                                                                                            </div>

                                                                                                            <div class="profile-info-row">
                                                                                                                <div class="profile-info-name"> About Me </div>

                                                                                                                <div class="profile-info-value">
                                                                                                                    <span>Bio</span>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="col-xs-12 col-sm-3">
                                                                                                        <div class="space visible-xs"></div>
                                                                                                        <h4 class="header blue lighter less-margin">Send a message to Alex</h4>

                                                                                                        <div class="space-6"></div>

                                                                                                        <form>
                                                                                                            <fieldset>
                                                                                                                <textarea class="width-100" resize="none" placeholder="Type something…"></textarea>
                                                                                                            </fieldset>

                                                                                                            <div class="hr hr-dotted"></div>

                                                                                                            <div class="clearfix">
                                                                                                                <label class="pull-left">
                                                                                                                    <input type="checkbox" class="ace">
                                                                                                                    <span class="lbl"> Email me a copy</span>
                                                                                                                </label>

                                                                                                                <button class="pull-right btn btn-sm btn-primary btn-white btn-round" type="button">
                                                                                                                    Submit
                                                                                                                    <i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
                                                                                                                </button>
                                                                                                            </div>
                                                                                                        </form>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>

                                                                                {{--Linha Tabela Responsável--}}
                                                                                <tr>
                                                                                    <td>Fabiana Lopes de Sousa</td>
                                                                                    <td>Mãe</td>
                                                                                    <td class="center">
                                                                                        <label class="pos-rel">
                                                                                            <input type="checkbox" class="ace">
                                                                                            <span class="lbl"></span>
                                                                                        </label>
                                                                                    </td>
                                                                                    <td>(61) 99689-6647</td>
                                                                                    <td class="hidden-480">
                                                                                        <span class="label label-sm label-success">Autorizado</span>
                                                                                    </td>

                                                                                    <td class="center">
                                                                                        <div class="action-buttons">
                                                                                            <a href="#" class="green bigger-140 show-details-btn" title="Show Details">
                                                                                                <i class="ace-icon fa fa-angle-double-down"></i>
                                                                                                <span class="sr-only">Details</span>
                                                                                            </a>
                                                                                        </div>
                                                                                    </td>

                                                                                    <td>
                                                                                        <div class="hidden-sm hidden-xs btn-group">
                                                                                            <button class="btn btn-xs btn-success">
                                                                                                <i class="ace-icon fa fa-check bigger-120"></i>
                                                                                            </button>

                                                                                            <button class="btn btn-xs btn-info">
                                                                                                <i class="ace-icon fa fa-pencil bigger-120"></i>
                                                                                            </button>

                                                                                            <button class="btn btn-xs btn-danger">
                                                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                            </button>

                                                                                            <button class="btn btn-xs btn-warning">
                                                                                                <i class="ace-icon fa fa-flag bigger-120"></i>
                                                                                            </button>
                                                                                        </div>

                                                                                        <div class="hidden-md hidden-lg">
                                                                                            <div class="inline pos-rel">
                                                                                                <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                                    <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                                                                                                </button>

                                                                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                                    <li>
                                                                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="" data-original-title="View">
																			<span class="blue">
																				<i class="ace-icon fa fa-search-plus bigger-120"></i>
																			</span>
                                                                                                        </a>
                                                                                                    </li>

                                                                                                    <li>
                                                                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="" data-original-title="Edit">
																			<span class="green">
																				<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																			</span>
                                                                                                        </a>
                                                                                                    </li>

                                                                                                    <li>
                                                                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="" data-original-title="Delete">
																			<span class="red">
																				<i class="ace-icon fa fa-trash-o bigger-120"></i>
																			</span>
                                                                                                        </a>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>

                                                                                <tr class="detail-row">
                                                                                    <td colspan="8">
                                                                                        <div class="table-detail">
                                                                                            <div class="row">
                                                                                                <div class="col-xs-12 col-sm-2">
                                                                                                    <div class="text-center">
                                                                                                        <img height="150" class="thumbnail inline no-margin-bottom" alt="Domain Owner's Avatar" src="assets/images/avatars/profile-pic.jpg">
                                                                                                        <br>
                                                                                                        <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                                                                                                            <div class="inline position-relative">
                                                                                                                <a class="user-title-label" href="#">
                                                                                                                    <i class="ace-icon fa fa-circle light-green"></i>
                                                                                                                    &nbsp;
                                                                                                                    <span class="white">Alex M. Doe</span>
                                                                                                                </a>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="col-xs-12 col-sm-7">
                                                                                                    <div class="space visible-xs"></div>

                                                                                                    <div class="profile-user-info profile-user-info-striped">
                                                                                                        <div class="profile-info-row">
                                                                                                            <div class="profile-info-name"> Username </div>

                                                                                                            <div class="profile-info-value">
                                                                                                                <span>alexdoe</span>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="profile-info-row">
                                                                                                            <div class="profile-info-name"> Location </div>

                                                                                                            <div class="profile-info-value">
                                                                                                                <i class="fa fa-map-marker light-orange bigger-110"></i>
                                                                                                                <span>Netherlands, Amsterdam</span>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="profile-info-row">
                                                                                                            <div class="profile-info-name"> Age </div>

                                                                                                            <div class="profile-info-value">
                                                                                                                <span>38</span>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="profile-info-row">
                                                                                                            <div class="profile-info-name"> Joined </div>

                                                                                                            <div class="profile-info-value">
                                                                                                                <span>2010/06/20</span>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="profile-info-row">
                                                                                                            <div class="profile-info-name"> Last Online </div>

                                                                                                            <div class="profile-info-value">
                                                                                                                <span>3 hours ago</span>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="profile-info-row">
                                                                                                            <div class="profile-info-name"> About Me </div>

                                                                                                            <div class="profile-info-value">
                                                                                                                <span>Bio</span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="col-xs-12 col-sm-3">
                                                                                                    <div class="space visible-xs"></div>
                                                                                                    <h4 class="header blue lighter less-margin">Send a message to Alex</h4>

                                                                                                    <div class="space-6"></div>

                                                                                                    <form>
                                                                                                        <fieldset>
                                                                                                            <textarea class="width-100" resize="none" placeholder="Type something…"></textarea>
                                                                                                        </fieldset>

                                                                                                        <div class="hr hr-dotted"></div>

                                                                                                        <div class="clearfix">
                                                                                                            <label class="pull-left">
                                                                                                                <input type="checkbox" class="ace">
                                                                                                                <span class="lbl"> Email me a copy</span>
                                                                                                            </label>

                                                                                                            <button class="pull-right btn btn-sm btn-primary btn-white btn-round" type="button">
                                                                                                                Submit
                                                                                                                <i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
                                                                                                            </button>
                                                                                                        </div>
                                                                                                    </form>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>

                                                                                {{--Linha Tabela Responsável--}}
                                                                                <tr>
                                                                                    <td>Suelene de Oliveira dos Santos</td>
                                                                                    <td>Vizinho(a)</td>
                                                                                    <td class="center">
                                                                                        <label class="pos-rel">
                                                                                            <input type="checkbox" class="ace">
                                                                                            <span class="lbl"></span>
                                                                                        </label>
                                                                                    </td>
                                                                                    <td>(61) 99666-4789</td>
                                                                                    <td class="hidden-480">
                                                                                        <span class="label label-sm label-success">Autorizado</span>
                                                                                    </td>

                                                                                    <td class="center">
                                                                                        <div class="action-buttons">
                                                                                            <a href="#" class="green bigger-140 show-details-btn" title="Show Details">
                                                                                                <i class="ace-icon fa fa-angle-double-down"></i>
                                                                                                <span class="sr-only">Details</span>
                                                                                            </a>
                                                                                        </div>
                                                                                    </td>

                                                                                    <td>
                                                                                        <div class="hidden-sm hidden-xs btn-group">
                                                                                            <button class="btn btn-xs btn-success">
                                                                                                <i class="ace-icon fa fa-check bigger-120"></i>
                                                                                            </button>

                                                                                            <button class="btn btn-xs btn-info">
                                                                                                <i class="ace-icon fa fa-pencil bigger-120"></i>
                                                                                            </button>

                                                                                            <button class="btn btn-xs btn-danger">
                                                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                            </button>

                                                                                            <button class="btn btn-xs btn-warning">
                                                                                                <i class="ace-icon fa fa-flag bigger-120"></i>
                                                                                            </button>
                                                                                        </div>

                                                                                        <div class="hidden-md hidden-lg">
                                                                                            <div class="inline pos-rel">
                                                                                                <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                                    <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                                                                                                </button>

                                                                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                                    <li>
                                                                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="" data-original-title="View">
																			<span class="blue">
																				<i class="ace-icon fa fa-search-plus bigger-120"></i>
																			</span>
                                                                                                        </a>
                                                                                                    </li>

                                                                                                    <li>
                                                                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="" data-original-title="Edit">
																			<span class="green">
																				<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																			</span>
                                                                                                        </a>
                                                                                                    </li>

                                                                                                    <li>
                                                                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="" data-original-title="Delete">
																			<span class="red">
																				<i class="ace-icon fa fa-trash-o bigger-120"></i>
																			</span>
                                                                                                        </a>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>

                                                                                <tr class="detail-row">
                                                                                    <td colspan="8">
                                                                                        <div class="table-detail">
                                                                                            <div class="row">
                                                                                                <div class="col-xs-12 col-sm-2">
                                                                                                    <div class="text-center">
                                                                                                        <img height="150" class="thumbnail inline no-margin-bottom" alt="Domain Owner's Avatar" src="assets/images/avatars/profile-pic.jpg">
                                                                                                        <br>
                                                                                                        <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                                                                                                            <div class="inline position-relative">
                                                                                                                <a class="user-title-label" href="#">
                                                                                                                    <i class="ace-icon fa fa-circle light-green"></i>
                                                                                                                    &nbsp;
                                                                                                                    <span class="white">Alex M. Doe</span>
                                                                                                                </a>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="col-xs-12 col-sm-7">
                                                                                                    <div class="space visible-xs"></div>

                                                                                                    <div class="profile-user-info profile-user-info-striped">
                                                                                                        <div class="profile-info-row">
                                                                                                            <div class="profile-info-name"> Username </div>

                                                                                                            <div class="profile-info-value">
                                                                                                                <span>alexdoe</span>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="profile-info-row">
                                                                                                            <div class="profile-info-name"> Location </div>

                                                                                                            <div class="profile-info-value">
                                                                                                                <i class="fa fa-map-marker light-orange bigger-110"></i>
                                                                                                                <span>Netherlands, Amsterdam</span>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="profile-info-row">
                                                                                                            <div class="profile-info-name"> Age </div>

                                                                                                            <div class="profile-info-value">
                                                                                                                <span>38</span>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="profile-info-row">
                                                                                                            <div class="profile-info-name"> Joined </div>

                                                                                                            <div class="profile-info-value">
                                                                                                                <span>2010/06/20</span>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="profile-info-row">
                                                                                                            <div class="profile-info-name"> Last Online </div>

                                                                                                            <div class="profile-info-value">
                                                                                                                <span>3 hours ago</span>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="profile-info-row">
                                                                                                            <div class="profile-info-name"> About Me </div>

                                                                                                            <div class="profile-info-value">
                                                                                                                <span>Bio</span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="col-xs-12 col-sm-3">
                                                                                                    <div class="space visible-xs"></div>
                                                                                                    <h4 class="header blue lighter less-margin">Send a message to Alex</h4>

                                                                                                    <div class="space-6"></div>

                                                                                                    <form>
                                                                                                        <fieldset>
                                                                                                            <textarea class="width-100" resize="none" placeholder="Type something…"></textarea>
                                                                                                        </fieldset>

                                                                                                        <div class="hr hr-dotted"></div>

                                                                                                        <div class="clearfix">
                                                                                                            <label class="pull-left">
                                                                                                                <input type="checkbox" class="ace">
                                                                                                                <span class="lbl"> Email me a copy</span>
                                                                                                            </label>

                                                                                                            <button class="pull-right btn btn-sm btn-primary btn-white btn-round" type="button">
                                                                                                                Submit
                                                                                                                <i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
                                                                                                            </button>
                                                                                                        </div>
                                                                                                    </form>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>

                                                                                {{--Linha Tabela Responsável--}}
                                                                                <tr>
                                                                                    <td>Sebastião Antonio Pereira de Paula</td>
                                                                                    <td>Pai</td>
                                                                                    <td class="center">
                                                                                        <label class="pos-rel">
                                                                                            <input type="checkbox" class="ace">
                                                                                            <span class="lbl"></span>
                                                                                        </label>
                                                                                    </td>
                                                                                    <td>(61) 95555-3030</td>
                                                                                    <td class="hidden-480">
                                                                                        <span class="label label-sm label-danger">Proibido</span>
                                                                                    </td>

                                                                                    <td class="center">
                                                                                        <div class="action-buttons">
                                                                                            <a href="#" class="green bigger-140 show-details-btn" title="Show Details">
                                                                                                <i class="ace-icon fa fa-angle-double-down"></i>
                                                                                                <span class="sr-only">Details</span>
                                                                                            </a>
                                                                                        </div>
                                                                                    </td>

                                                                                    <td>
                                                                                        <div class="hidden-sm hidden-xs btn-group">
                                                                                            <button class="btn btn-xs btn-success">
                                                                                                <i class="ace-icon fa fa-check bigger-120"></i>
                                                                                            </button>

                                                                                            <button class="btn btn-xs btn-info">
                                                                                                <i class="ace-icon fa fa-pencil bigger-120"></i>
                                                                                            </button>

                                                                                            <button class="btn btn-xs btn-danger">
                                                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                            </button>

                                                                                            <button class="btn btn-xs btn-warning">
                                                                                                <i class="ace-icon fa fa-flag bigger-120"></i>
                                                                                            </button>
                                                                                        </div>

                                                                                        <div class="hidden-md hidden-lg">
                                                                                            <div class="inline pos-rel">
                                                                                                <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                                    <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                                                                                                </button>

                                                                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                                    <li>
                                                                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="" data-original-title="View">
																			<span class="blue">
																				<i class="ace-icon fa fa-search-plus bigger-120"></i>
																			</span>
                                                                                                        </a>
                                                                                                    </li>

                                                                                                    <li>
                                                                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="" data-original-title="Edit">
																			<span class="green">
																				<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																			</span>
                                                                                                        </a>
                                                                                                    </li>

                                                                                                    <li>
                                                                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="" data-original-title="Delete">
																			<span class="red">
																				<i class="ace-icon fa fa-trash-o bigger-120"></i>
																			</span>
                                                                                                        </a>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>

                                                                                <tr class="detail-row">
                                                                                    <td colspan="8">
                                                                                        <div class="table-detail">
                                                                                            <div class="row">
                                                                                                <div class="col-xs-12 col-sm-2">
                                                                                                    <div class="text-center">
                                                                                                        <img height="150" class="thumbnail inline no-margin-bottom" alt="Domain Owner's Avatar" src="assets/images/avatars/profile-pic.jpg">
                                                                                                        <br>
                                                                                                        <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                                                                                                            <div class="inline position-relative">
                                                                                                                <a class="user-title-label" href="#">
                                                                                                                    <i class="ace-icon fa fa-circle light-green"></i>
                                                                                                                    &nbsp;
                                                                                                                    <span class="white">Alex M. Doe</span>
                                                                                                                </a>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="col-xs-12 col-sm-7">
                                                                                                    <div class="space visible-xs"></div>

                                                                                                    <div class="profile-user-info profile-user-info-striped">
                                                                                                        <div class="profile-info-row">
                                                                                                            <div class="profile-info-name"> Username </div>

                                                                                                            <div class="profile-info-value">
                                                                                                                <span>alexdoe</span>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="profile-info-row">
                                                                                                            <div class="profile-info-name"> Location </div>

                                                                                                            <div class="profile-info-value">
                                                                                                                <i class="fa fa-map-marker light-orange bigger-110"></i>
                                                                                                                <span>Netherlands, Amsterdam</span>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="profile-info-row">
                                                                                                            <div class="profile-info-name"> Age </div>

                                                                                                            <div class="profile-info-value">
                                                                                                                <span>38</span>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="profile-info-row">
                                                                                                            <div class="profile-info-name"> Joined </div>

                                                                                                            <div class="profile-info-value">
                                                                                                                <span>2010/06/20</span>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="profile-info-row">
                                                                                                            <div class="profile-info-name"> Last Online </div>

                                                                                                            <div class="profile-info-value">
                                                                                                                <span>3 hours ago</span>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="profile-info-row">
                                                                                                            <div class="profile-info-name"> About Me </div>

                                                                                                            <div class="profile-info-value">
                                                                                                                <span>Bio</span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="col-xs-12 col-sm-3">
                                                                                                    <div class="space visible-xs"></div>
                                                                                                    <h4 class="header blue lighter less-margin">Send a message to Alex</h4>

                                                                                                    <div class="space-6"></div>

                                                                                                    <form>
                                                                                                        <fieldset>
                                                                                                            <textarea class="width-100" resize="none" placeholder="Type something…"></textarea>
                                                                                                        </fieldset>

                                                                                                        <div class="hr hr-dotted"></div>

                                                                                                        <div class="clearfix">
                                                                                                            <label class="pull-left">
                                                                                                                <input type="checkbox" class="ace">
                                                                                                                <span class="lbl"> Email me a copy</span>
                                                                                                            </label>

                                                                                                            <button class="pull-right btn btn-sm btn-primary btn-white btn-round" type="button">
                                                                                                                Submit
                                                                                                                <i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
                                                                                                            </button>
                                                                                                        </div>
                                                                                                    </form>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>

                                                                                    </tbody>
                                                                                </table>
                                                                            </div><!-- /.span -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div><!-- /.col -->

                                                <div id="matriculas" class="tab-pane">

                                                    <div class="col-sm-12">

                                                        <div style="padding: 15px;">
                                                            <div class="row">
                                                                <div class="col-xs-12">
                                                                    <table id="simple-table" class="table  table-bordered table-hover">
                                                                        <thead>
                                                                        <tr>
                                                                            <th>Tipo</th>
                                                                            <th>data</th>
                                                                            <th>Modalidade</th>
                                                                            <th>Turma</th>
                                                                            <th>Naipe</th>
                                                                            <th>Horário</th>
                                                                            <th>Dias</th>
                                                                            <th>Faixa Etária</th>

                                                                            <th></th>

                                                                        </tr>
                                                                        </thead>

                                                                        <tbody>

                                                                        {{--Linha Tabela Responsável--}}
                                                                        <tr>
                                                                            <td>Pré</td>
                                                                            <td>15/07/2020</td>
                                                                            <td>DM-II</td>
                                                                            <td>13</td>
                                                                            <td>Masculino</td>
                                                                            <td>08:50 as 09:50</td>
                                                                            <td>Qua-Sex</td>
                                                                            <td>7 a 8 anos</td>


                                                                            <td>
                                                                                <div class="hidden-sm hidden-xs btn-group">
                                                                                    <button class="btn btn-xs btn-success">
                                                                                        <i class="ace-icon fa fa-check bigger-120"></i>
                                                                                    </button>

                                                                                    <button class="btn btn-xs btn-info">
                                                                                        <i class="ace-icon fa fa-pencil bigger-120"></i>
                                                                                    </button>

                                                                                    <button class="btn btn-xs btn-danger">
                                                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                    </button>

                                                                                    <button class="btn btn-xs btn-warning">
                                                                                        <i class="ace-icon fa fa-flag bigger-120"></i>
                                                                                    </button>
                                                                                </div>

                                                                                <div class="hidden-md hidden-lg">
                                                                                    <div class="inline pos-rel">
                                                                                        <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                            <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                                                                                        </button>

                                                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                            <li>
                                                                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="" data-original-title="View">
																			<span class="blue">
																				<i class="ace-icon fa fa-search-plus bigger-120"></i>
																			</span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="" data-original-title="Edit">
																			<span class="green">
																				<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																			</span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="" data-original-title="Delete">
																			<span class="red">
																				<i class="ace-icon fa fa-trash-o bigger-120"></i>
																			</span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        </tbody>
                                                                    </table>
                                                                </div><!-- /.span -->
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div><!-- /.col -->

														<div class="col-sm-6">


														</div><!-- /.col -->
													</div><!-- /.row -->

													<div class="space-12"></div>

{{--													<div class="center">--}}
{{--														<button type="button" class="btn btn-sm btn-primary btn-white btn-round">--}}
{{--															<i class="ace-icon fa fa-rss bigger-150 middle orange2"></i>--}}
{{--															<span class="bigger-110">View more activities</span>--}}

{{--															<i class="icon-on-right ace-icon fa fa-arrow-right"></i>--}}
{{--														</button>--}}
{{--													</div>--}}
												</div><!-- /#feed -->



											</div>
										</div>
									</div>
								</div>

								<div class="hide">
									<div id="user-profile-3" class="user-profile row">
										<div class="col-sm-offset-1 col-sm-10">
											<div class="well well-sm">
												<!-- -
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		&nbsp; -->
												<div class="inline middle blue bigger-110"> Your profile is 70% complete </div>

												&nbsp; &nbsp; &nbsp;
												<div style="width:200px;" data-percent="70%" class="inline middle no-margin progress progress-striped active pos-rel">
													<div class="progress-bar progress-bar-success" style="width:70%"></div>
												</div>
											</div><!-- /.well -->

											<div class="space"></div>

											<form class="form-horizontal">
												<div class="tabbable">
													<ul class="nav nav-tabs padding-16">
														<li class="active">
															<a data-toggle="tab" href="#edit-basic">
																<i class="green ace-icon fa fa-pencil-square-o bigger-125"></i>
																Basic Info
															</a>
														</li>

														<li>
															<a data-toggle="tab" href="#edit-settings">
																<i class="purple ace-icon fa fa-cog bigger-125"></i>
																Settings
															</a>
														</li>

														<li>
															<a data-toggle="tab" href="#edit-password">
																<i class="blue ace-icon fa fa-key bigger-125"></i>
																Password
															</a>
														</li>
													</ul>

													<div class="tab-content profile-edit-tab-content">
														<div id="edit-basic" class="tab-pane in active">
															<h4 class="header blue bolder smaller">General</h4>

															<div class="row">
																<div class="col-xs-12 col-sm-4">
																	<input type="file" />
																</div>

																<div class="vspace-12-sm"></div>

																<div class="col-xs-12 col-sm-8">
																	<div class="form-group">
																		<label class="col-sm-4 control-label no-padding-right" for="form-field-username">Username</label>

																		<div class="col-sm-8">
																			<input class="col-xs-12 col-sm-10" type="text" id="form-field-username" placeholder="Username" value="alexdoe" />
																		</div>
																	</div>

																	<div class="space-4"></div>

																	<div class="form-group">
																		<label class="col-sm-4 control-label no-padding-right" for="form-field-first">Name</label>

																		<div class="col-sm-8">
																			<input class="input-small" type="text" id="form-field-first" placeholder="First Name" value="Alex" />
																			<input class="input-small" type="text" id="form-field-last" placeholder="Last Name" value="Doe" />
																		</div>
																	</div>
																</div>
															</div>

															<hr />
															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-date">Birth Date</label>

																<div class="col-sm-9">
																	<div class="input-medium">
																		<div class="input-group">
																			<input class="input-medium date-picker" id="form-field-date" type="text" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" />
																			<span class="input-group-addon">
																				<i class="ace-icon fa fa-calendar"></i>
																			</span>
																		</div>
																	</div>
																</div>
															</div>

															<div class="space-4"></div>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right">Gender</label>

																<div class="col-sm-9">
																	<label class="inline">
																		<input name="form-field-radio" type="radio" class="ace" />
																		<span class="lbl middle"> Male</span>
																	</label>

																	&nbsp; &nbsp; &nbsp;
																	<label class="inline">
																		<input name="form-field-radio" type="radio" class="ace" />
																		<span class="lbl middle"> Female</span>
																	</label>
																</div>
															</div>

															<div class="space-4"></div>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-comment">Comment</label>

																<div class="col-sm-9">
																	<textarea id="form-field-comment"></textarea>
																</div>
															</div>

															<div class="space"></div>
															<h4 class="header blue bolder smaller">Contact</h4>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-email">Email</label>

																<div class="col-sm-9">
																	<span class="input-icon input-icon-right">
																		<input type="email" id="form-field-email" value="alexdoe@gmail.com" />
																		<i class="ace-icon fa fa-envelope"></i>
																	</span>
																</div>
															</div>

															<div class="space-4"></div>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-website">Website</label>

																<div class="col-sm-9">
																	<span class="input-icon input-icon-right">
																		<input type="url" id="form-field-website" value="http://www.alexdoe.com/" />
																		<i class="ace-icon fa fa-globe"></i>
																	</span>
																</div>
															</div>

															<div class="space-4"></div>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-phone">Phone</label>

																<div class="col-sm-9">
																	<span class="input-icon input-icon-right">
																		<input class="input-medium input-mask-phone" type="text" id="form-field-phone" />
																		<i class="ace-icon fa fa-phone fa-flip-horizontal"></i>
																	</span>
																</div>
															</div>

															<div class="space"></div>
															<h4 class="header blue bolder smaller">Social</h4>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-facebook">Facebook</label>

																<div class="col-sm-9">
																	<span class="input-icon">
																		<input type="text" value="facebook_alexdoe" id="form-field-facebook" />
																		<i class="ace-icon fa fa-facebook blue"></i>
																	</span>
																</div>
															</div>

															<div class="space-4"></div>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-twitter">Twitter</label>

																<div class="col-sm-9">
																	<span class="input-icon">
																		<input type="text" value="twitter_alexdoe" id="form-field-twitter" />
																		<i class="ace-icon fa fa-twitter light-blue"></i>
																	</span>
																</div>
															</div>

															<div class="space-4"></div>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-gplus">Google+</label>

																<div class="col-sm-9">
																	<span class="input-icon">
																		<input type="text" value="google_alexdoe" id="form-field-gplus" />
																		<i class="ace-icon fa fa-google-plus red"></i>
																	</span>
																</div>
															</div>
														</div>

														<div id="edit-settings" class="tab-pane">
															<div class="space-10"></div>

															<div>
																<label class="inline">
																	<input type="checkbox" name="form-field-checkbox" class="ace" />
																	<span class="lbl"> Make my profile public</span>
																</label>
															</div>

															<div class="space-8"></div>

															<div>
																<label class="inline">
																	<input type="checkbox" name="form-field-checkbox" class="ace" />
																	<span class="lbl"> Email me new updates</span>
																</label>
															</div>

															<div class="space-8"></div>

															<div>
																<label>
																	<input type="checkbox" name="form-field-checkbox" class="ace" />
																	<span class="lbl"> Keep a history of my conversations</span>
																</label>

																<label>
																	<span class="space-2 block"></span>

																	for
																	<input type="text" class="input-mini" maxlength="3" />
																	days
																</label>
															</div>
														</div>

														<div id="edit-password" class="tab-pane">
															<div class="space-10"></div>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-pass1">New Password</label>

																<div class="col-sm-9">
																	<input type="password" id="form-field-pass1" />
																</div>
															</div>

															<div class="space-4"></div>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-pass2">Confirm Password</label>

																<div class="col-sm-9">
																	<input type="password" id="form-field-pass2" />
																</div>
															</div>
														</div>
													</div>
												</div>

												<div class="clearfix form-actions">
													<div class="col-md-offset-3 col-md-9">
														<button class="btn btn-info" type="button">
															<i class="ace-icon fa fa-check bigger-110"></i>
															Save
														</button>

														&nbsp; &nbsp;
														<button class="btn" type="reset">
															<i class="ace-icon fa fa-undo bigger-110"></i>
															Reset
														</button>
													</div>
												</div>
											</form>
										</div><!-- /.span -->
									</div><!-- /.user-profile -->
								</div>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="assets/js/jquery-ui.custom.min.js"></script>
		<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="assets/js/jquery.gritter.min.js"></script>
		<script src="assets/js/bootbox.js"></script>
		<script src="assets/js/jquery.easypiechart.min.js"></script>
		<script src="assets/js/bootstrap-datepicker.min.js"></script>
		<script src="assets/js/jquery.hotkeys.index.min.js"></script>
		<script src="assets/js/bootstrap-wysiwyg.min.js"></script>
		<script src="assets/js/select2.min.js"></script>
		<script src="assets/js/spinbox.min.js"></script>
		<script src="assets/js/bootstrap-editable.min.js"></script>
		<script src="assets/js/ace-editable.min.js"></script>
		<script src="assets/js/jquery.maskedinput.min.js"></script>

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {

				//editables on first profile page
				$.fn.editable.defaults.mode = 'inline';
				$.fn.editableform.loading = "<div class='editableform-loading'><i class='ace-icon fa fa-spinner fa-spin fa-2x light-blue'></i></div>";
			    $.fn.editableform.buttons = '<button type="submit" class="btn btn-info editable-submit"><i class="ace-icon fa fa-check"></i></button>'+
			                                '<button type="button" class="btn editable-cancel"><i class="ace-icon fa fa-times"></i></button>';

				//editables

				//text editable
			    $('#username')
				.editable({
					type: 'text',
					name: 'username'
			    });



				//select2 editable
				var countries = [];
			    $.each({ "CA": "Canada", "IN": "India", "NL": "Netherlands", "TR": "Turkey", "US": "United States"}, function(k, v) {
			        countries.push({id: k, text: v});
			    });

				var cities = [];
				cities["CA"] = [];
				$.each(["Toronto", "Ottawa", "Calgary", "Vancouver"] , function(k, v){
					cities["CA"].push({id: v, text: v});
				});
				cities["IN"] = [];
				$.each(["Delhi", "Mumbai", "Bangalore"] , function(k, v){
					cities["IN"].push({id: v, text: v});
				});
				cities["NL"] = [];
				$.each(["Amsterdam", "Rotterdam", "The Hague"] , function(k, v){
					cities["NL"].push({id: v, text: v});
				});
				cities["TR"] = [];
				$.each(["Ankara", "Istanbul", "Izmir"] , function(k, v){
					cities["TR"].push({id: v, text: v});
				});
				cities["US"] = [];
				$.each(["New York", "Miami", "Los Angeles", "Chicago", "Wysconsin"] , function(k, v){
					cities["US"].push({id: v, text: v});
				});

				var currentValue = "NL";
			    $('#country').editable({
					type: 'select2',
					value : 'NL',
					//onblur:'ignore',
			        source: countries,
					select2: {
						'width': 140
					},
					success: function(response, newValue) {
						if(currentValue == newValue) return;
						currentValue = newValue;

						var new_source = (!newValue || newValue == "") ? [] : cities[newValue];

						//the destroy method is causing errors in x-editable v1.4.6+
						//it worked fine in v1.4.5
						/**
						$('#city').editable('destroy').editable({
							type: 'select2',
							source: new_source
						}).editable('setValue', null);
						*/

						//so we remove it altogether and create a new element
						var city = $('#city').removeAttr('id').get(0);
						$(city).clone().attr('id', 'city').text('Select City').editable({
							type: 'select2',
							value : null,
							//onblur:'ignore',
							source: new_source,
							select2: {
								'width': 140
							}
						}).insertAfter(city);//insert it after previous instance
						$(city).remove();//remove previous instance

					}
			    });

				$('#city').editable({
					type: 'select2',
					value : 'Amsterdam',
					//onblur:'ignore',
			        source: cities[currentValue],
					select2: {
						'width': 140
					}
			    });



				//custom date editable
				$('#signup').editable({
					type: 'adate',
					date: {
						//datepicker plugin options
						    format: 'yyyy/mm/dd',
						viewformat: 'yyyy/mm/dd',
						 weekStart: 1

						//,nativeUI: true//if true and browser support input[type=date], native browser control will be used
						//,format: 'yyyy-mm-dd',
						//viewformat: 'yyyy-mm-dd'
					}
				})

			    $('#age').editable({
			        type: 'spinner',
					name : 'age',
					spinner : {
						min : 16,
						max : 99,
						step: 1,
						on_sides: true
						//,nativeUI: true//if true and browser support input[type=number], native browser control will be used
					}
				});


			    $('#login').editable({
			        type: 'slider',
					name : 'login',

					slider : {
						 min : 1,
						  max: 50,
						width: 100
						//,nativeUI: true//if true and browser support input[type=range], native browser control will be used
					},
					success: function(response, newValue) {
						if(parseInt(newValue) == 1)
							$(this).html(newValue + " hour ago");
						else $(this).html(newValue + " hours ago");
					}
				});

				$('#about').editable({
					mode: 'inline',
			        type: 'wysiwyg',
					name : 'about',

					wysiwyg : {
						//css : {'max-width':'300px'}
					},
					success: function(response, newValue) {
					}
				});



				// *** editable avatar *** //
				try {//ie8 throws some harmless exceptions, so let's catch'em

					//first let's add a fake appendChild method for Image element for browsers that have a problem with this
					//because editable plugin calls appendChild, and it causes errors on IE at unpredicted points
					try {
						document.createElement('IMG').appendChild(document.createElement('B'));
					} catch(e) {
						Image.prototype.appendChild = function(el){}
					}

					var last_gritter
					$('#avatar').editable({
						type: 'image',
						name: 'avatar',
						value: null,
						//onblur: 'ignore',  //don't reset or hide editable onblur?!
						image: {
							//specify ace file input plugin's options here
							btn_choose: 'Change Avatar',
							droppable: true,
							maxSize: 110000,//~100Kb

							//and a few extra ones here
							name: 'avatar',//put the field name here as well, will be used inside the custom plugin
							on_error : function(error_type) {//on_error function will be called when the selected file has a problem
								if(last_gritter) $.gritter.remove(last_gritter);
								if(error_type == 1) {//file format error
									last_gritter = $.gritter.add({
										title: 'File is not an image!',
										text: 'Please choose a jpg|gif|png image!',
										class_name: 'gritter-error gritter-center'
									});
								} else if(error_type == 2) {//file size rror
									last_gritter = $.gritter.add({
										title: 'File too big!',
										text: 'Image size should not exceed 100Kb!',
										class_name: 'gritter-error gritter-center'
									});
								}
								else {//other error
								}
							},
							on_success : function() {
								$.gritter.removeAll();
							}
						},
					    url: function(params) {
							// ***UPDATE AVATAR HERE*** //
							//for a working upload example you can replace the contents of this function with
							//examples/profile-avatar-update.js

							var deferred = new $.Deferred

							var value = $('#avatar').next().find('input[type=hidden]:eq(0)').val();
							if(!value || value.length == 0) {
								deferred.resolve();
								return deferred.promise();
							}


							//dummy upload
							setTimeout(function(){
								if("FileReader" in window) {
									//for browsers that have a thumbnail of selected image
									var thumb = $('#avatar').next().find('img').data('thumb');
									if(thumb) $('#avatar').get(0).src = thumb;
								}

								deferred.resolve({'status':'OK'});

								if(last_gritter) $.gritter.remove(last_gritter);
								last_gritter = $.gritter.add({
									title: 'Avatar Updated!',
									text: 'Uploading to server can be easily implemented. A working example is included with the template.',
									class_name: 'gritter-info gritter-center'
								});

							 } , parseInt(Math.random() * 800 + 800))

							return deferred.promise();

							// ***END OF UPDATE AVATAR HERE*** //
						},

						success: function(response, newValue) {
						}
					})
				}catch(e) {}

				/**
				//let's display edit mode by default?
				var blank_image = true;//somehow you determine if image is initially blank or not, or you just want to display file input at first
				if(blank_image) {
					$('#avatar').editable('show').on('hidden', function(e, reason) {
						if(reason == 'onblur') {
							$('#avatar').editable('show');
							return;
						}
						$('#avatar').off('hidden');
					})
				}
				*/

				//another option is using modals
				$('#avatar2').on('click', function(){
					var modal =
					'<div class="modal fade">\
					  <div class="modal-dialog">\
					   <div class="modal-content">\
						<div class="modal-header">\
							<button type="button" class="close" data-dismiss="modal">&times;</button>\
							<h4 class="blue">Change Avatar</h4>\
						</div>\
						\
						<form class="no-margin">\
						 <div class="modal-body">\
							<div class="space-4"></div>\
							<div style="width:75%;margin-left:12%;"><input type="file" name="file-input" /></div>\
						 </div>\
						\
						 <div class="modal-footer center">\
							<button type="submit" class="btn btn-sm btn-success"><i class="ace-icon fa fa-check"></i> Submit</button>\
							<button type="button" class="btn btn-sm" data-dismiss="modal"><i class="ace-icon fa fa-times"></i> Cancel</button>\
						 </div>\
						</form>\
					  </div>\
					 </div>\
					</div>';


					var modal = $(modal);
					modal.modal("show").on("hidden", function(){
						modal.remove();
					});

					var working = false;

					var form = modal.find('form:eq(0)');
					var file = form.find('input[type=file]').eq(0);
					file.ace_file_input({
						style:'well',
						btn_choose:'Click to choose new avatar',
						btn_change:null,
						no_icon:'ace-icon fa fa-picture-o',
						thumbnail:'small',
						before_remove: function() {
							//don't remove/reset files while being uploaded
							return !working;
						},
						allowExt: ['jpg', 'jpeg', 'png', 'gif'],
						allowMime: ['image/jpg', 'image/jpeg', 'image/png', 'image/gif']
					});

					form.on('submit', function(){
						if(!file.data('ace_input_files')) return false;

						file.ace_file_input('disable');
						form.find('button').attr('disabled', 'disabled');
						form.find('.modal-body').append("<div class='center'><i class='ace-icon fa fa-spinner fa-spin bigger-150 orange'></i></div>");

						var deferred = new $.Deferred;
						working = true;
						deferred.done(function() {
							form.find('button').removeAttr('disabled');
							form.find('input[type=file]').ace_file_input('enable');
							form.find('.modal-body > :last-child').remove();

							modal.modal("hide");

							var thumb = file.next().find('img').data('thumb');
							if(thumb) $('#avatar2').get(0).src = thumb;

							working = false;
						});


						setTimeout(function(){
							deferred.resolve();
						} , parseInt(Math.random() * 800 + 800));

						return false;
					});

				});



				//////////////////////////////
				$('#profile-feed-1').ace_scroll({
					height: '250px',
					mouseWheelLock: true,
					alwaysVisible : true
				});

				$('a[ data-original-title]').tooltip();

				$('.easy-pie-chart.percentage').each(function(){
				var barColor = $(this).data('color') || '#555';
				var trackColor = '#E2E2E2';
				var size = parseInt($(this).data('size')) || 72;
				$(this).easyPieChart({
					barColor: barColor,
					trackColor: trackColor,
					scaleColor: false,
					lineCap: 'butt',
					lineWidth: parseInt(size/10),
					animate:false,
					size: size
				}).css('color', barColor);
				});

				///////////////////////////////////////////

				//right & left position
				//show the user info on right or left depending on its position
				$('#user-profile-2 .memberdiv').on('mouseenter touchstart', function(){
					var $this = $(this);
					var $parent = $this.closest('.tab-pane');

					var off1 = $parent.offset();
					var w1 = $parent.width();

					var off2 = $this.offset();
					var w2 = $this.width();

					var place = 'left';
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) place = 'right';

					$this.find('.popover').removeClass('right left').addClass(place);
				}).on('click', function(e) {
					e.preventDefault();
				});


				///////////////////////////////////////////
				$('#user-profile-3')
				.find('input[type=file]').ace_file_input({
					style:'well',
					btn_choose:'Change avatar',
					btn_change:null,
					no_icon:'ace-icon fa fa-picture-o',
					thumbnail:'large',
					droppable:true,

					allowExt: ['jpg', 'jpeg', 'png', 'gif'],
					allowMime: ['image/jpg', 'image/jpeg', 'image/png', 'image/gif']
				})
				.end().find('button[type=reset]').on(ace.click_event, function(){
					$('#user-profile-3 input[type=file]').ace_file_input('reset_input');
				})
				.end().find('.date-picker').datepicker().next().on(ace.click_event, function(){
					$(this).prev().focus();
				})
				$('.input-mask-phone').mask('(999) 999-9999');

				$('#user-profile-3').find('input[type=file]').ace_file_input('show_file_list', [{type: 'image', name: $('#avatar').attr('src')}]);


				////////////////////
				//change profile
				$('[data-toggle="buttons"] .btn').on('click', function(e){
					var target = $(this).find('input[type=radio]');
					var which = parseInt(target.val());
					$('.user-profile').parent().addClass('hide');
					$('#user-profile-'+which).parent().removeClass('hide');
				});



				/////////////////////////////////////
				$(document).one('ajaxloadstart.page', function(e) {
					//in ajax mode, remove remaining elements before leaving page
					try {
						$('.editable').editable('destroy');
					} catch(e) {}
					$('[class*=select2]').remove();
				});
			});
		</script>
	</body>

@endsection

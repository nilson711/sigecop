@extends('layouts.mainSigecop')

@section('content')


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

                <div class="widget-body">
                    <div class="widget-main">
                        <div id="fuelux-wizard-container">
                            <div>
                                <ul class="steps">
                                    <li data-step="1" class="active">
                                        <span class="step">1</span>
                                        <span class="title">Validation states</span>
                                    </li>

                                    <li data-step="2">
                                        <span class="step">2</span>
                                        <span class="title">Alerts</span>
                                    </li>

                                    <li data-step="3">
                                        <span class="step">3</span>
                                        <span class="title">Payment Info</span>
                                    </li>

                                    <li data-step="4">
                                        <span class="step">4</span>
                                        <span class="title">Other Info</span>
                                    </li>
                                </ul>
                            </div>

                            <hr />

                            <div class="step-content pos-rel">
                                <div class="step-pane active" data-step="1">
                                    <h3 class="lighter block green">Enter the following information</h3>

                                    <form class="form-horizontal" id="sample-form">
                                        <div class="form-group has-warning">
                                            <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Input with warning</label>

                                            <div class="col-xs-12 col-sm-5">
																	<span class="block input-icon input-icon-right">
																		<input type="text" id="inputWarning" class="width-100" />
																		<i class="ace-icon fa fa-leaf"></i>
																	</span>
                                            </div>
                                            <div class="help-block col-xs-12 col-sm-reset inline"> Warning tip help! </div>
                                        </div>

                                        <div class="form-group has-error">
                                            <label for="inputError" class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right">Input with error</label>

                                            <div class="col-xs-12 col-sm-5">
																	<span class="block input-icon input-icon-right">
																		<input type="text" id="inputError" class="width-100" />
																		<i class="ace-icon fa fa-times-circle"></i>
																	</span>
                                            </div>
                                            <div class="help-block col-xs-12 col-sm-reset inline"> Error tip help! </div>
                                        </div>

                                        <div class="form-group has-success">
                                            <label for="inputSuccess" class="col-xs-12 col-sm-3 control-label no-padding-right">Input with success</label>

                                            <div class="col-xs-12 col-sm-5">
																	<span class="block input-icon input-icon-right">
																		<input type="text" id="inputSuccess" class="width-100" />
																		<i class="ace-icon fa fa-check-circle"></i>
																	</span>
                                            </div>
                                            <div class="help-block col-xs-12 col-sm-reset inline"> Success tip help! </div>
                                        </div>

                                        <div class="form-group has-info">
                                            <label for="inputInfo" class="col-xs-12 col-sm-3 control-label no-padding-right">Input with info</label>

                                            <div class="col-xs-12 col-sm-5">
																	<span class="block input-icon input-icon-right">
																		<input type="text" id="inputInfo" class="width-100" />
																		<i class="ace-icon fa fa-info-circle"></i>
																	</span>
                                            </div>
                                            <div class="help-block col-xs-12 col-sm-reset inline"> Info tip help! </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputError2" class="col-xs-12 col-sm-3 control-label no-padding-right">Input with error</label>

                                            <div class="col-xs-12 col-sm-5">
																	<span class="input-icon block">
																		<input type="text" id="inputError2" class="width-100" />
																		<i class="ace-icon fa fa-times-circle red"></i>
																	</span>
                                            </div>
                                            <div class="help-block col-xs-12 col-sm-reset inline"> Error tip help! </div>
                                        </div>
                                    </form>

                                    <form class="form-horizontal hide" id="validation-form" method="get">
                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">Email Address:</label>

                                            <div class="col-xs-12 col-sm-9">
                                                <div class="clearfix">
                                                    <input type="email" name="email" id="email" class="col-xs-12 col-sm-6" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="space-2"></div>

                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="password">Password:</label>

                                            <div class="col-xs-12 col-sm-9">
                                                <div class="clearfix">
                                                    <input type="password" name="password" id="password" class="col-xs-12 col-sm-4" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="space-2"></div>

                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="password2">Confirm Password:</label>

                                            <div class="col-xs-12 col-sm-9">
                                                <div class="clearfix">
                                                    <input type="password" name="password2" id="password2" class="col-xs-12 col-sm-4" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="hr hr-dotted"></div>

                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">Company Name:</label>

                                            <div class="col-xs-12 col-sm-9">
                                                <div class="clearfix">
                                                    <input type="text" id="name" name="name" class="col-xs-12 col-sm-5" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="space-2"></div>

                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="phone">Phone Number:</label>

                                            <div class="col-xs-12 col-sm-9">
                                                <div class="input-group">
																		<span class="input-group-addon">
																			<i class="ace-icon fa fa-phone"></i>
																		</span>

                                                    <input type="tel" id="phone" name="phone" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="space-2"></div>

                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="url">Company URL:</label>

                                            <div class="col-xs-12 col-sm-9">
                                                <div class="clearfix">
                                                    <input type="url" id="url" name="url" class="col-xs-12 col-sm-8" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="hr hr-dotted"></div>

                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3 no-padding-right">Subscribe to</label>

                                            <div class="col-xs-12 col-sm-9">
                                                <div>
                                                    <label>
                                                        <input name="subscription" value="1" type="checkbox" class="ace" />
                                                        <span class="lbl"> Latest news and announcements</span>
                                                    </label>
                                                </div>

                                                <div>
                                                    <label>
                                                        <input name="subscription" value="2" type="checkbox" class="ace" />
                                                        <span class="lbl"> Product offers and discounts</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="space-2"></div>

                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3 no-padding-right">Gender</label>

                                            <div class="col-xs-12 col-sm-9">
                                                <div>
                                                    <label class="line-height-1 blue">
                                                        <input name="gender" value="1" type="radio" class="ace" />
                                                        <span class="lbl"> Male</span>
                                                    </label>
                                                </div>

                                                <div>
                                                    <label class="line-height-1 blue">
                                                        <input name="gender" value="2" type="radio" class="ace" />
                                                        <span class="lbl"> Female</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="hr hr-dotted"></div>

                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="state">State</label>

                                            <div class="col-xs-12 col-sm-9">
                                                <select id="state" name="state" class="select2" data-placeholder="Click to Choose...">
                                                    <option value="">&nbsp;</option>
                                                    <option value="AL">Alabama</option>
                                                    <option value="AK">Alaska</option>
                                                    <option value="AZ">Arizona</option>
                                                    <option value="AR">Arkansas</option>
                                                    <option value="CA">California</option>
                                                    <option value="CO">Colorado</option>
                                                    <option value="CT">Connecticut</option>
                                                    <option value="DE">Delaware</option>
                                                    <option value="FL">Florida</option>
                                                    <option value="GA">Georgia</option>
                                                    <option value="HI">Hawaii</option>
                                                    <option value="ID">Idaho</option>
                                                    <option value="IL">Illinois</option>
                                                    <option value="IN">Indiana</option>
                                                    <option value="IA">Iowa</option>
                                                    <option value="KS">Kansas</option>
                                                    <option value="KY">Kentucky</option>
                                                    <option value="LA">Louisiana</option>
                                                    <option value="ME">Maine</option>
                                                    <option value="MD">Maryland</option>
                                                    <option value="MA">Massachusetts</option>
                                                    <option value="MI">Michigan</option>
                                                    <option value="MN">Minnesota</option>
                                                    <option value="MS">Mississippi</option>
                                                    <option value="MO">Missouri</option>
                                                    <option value="MT">Montana</option>
                                                    <option value="NE">Nebraska</option>
                                                    <option value="NV">Nevada</option>
                                                    <option value="NH">New Hampshire</option>
                                                    <option value="NJ">New Jersey</option>
                                                    <option value="NM">New Mexico</option>
                                                    <option value="NY">New York</option>
                                                    <option value="NC">North Carolina</option>
                                                    <option value="ND">North Dakota</option>
                                                    <option value="OH">Ohio</option>
                                                    <option value="OK">Oklahoma</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="PA">Pennsylvania</option>
                                                    <option value="RI">Rhode Island</option>
                                                    <option value="SC">South Carolina</option>
                                                    <option value="SD">South Dakota</option>
                                                    <option value="TN">Tennessee</option>
                                                    <option value="TX">Texas</option>
                                                    <option value="UT">Utah</option>
                                                    <option value="VT">Vermont</option>
                                                    <option value="VA">Virginia</option>
                                                    <option value="WA">Washington</option>
                                                    <option value="WV">West Virginia</option>
                                                    <option value="WI">Wisconsin</option>
                                                    <option value="WY">Wyoming</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="space-2"></div>

                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="platform">Platform</label>

                                            <div class="col-xs-12 col-sm-9">
                                                <div class="clearfix">
                                                    <select class="input-medium" id="platform" name="platform">
                                                        <option value="">------------------</option>
                                                        <option value="linux">Linux</option>
                                                        <option value="windows">Windows</option>
                                                        <option value="mac">Mac OS</option>
                                                        <option value="ios">iOS</option>
                                                        <option value="android">Android</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="space-2"></div>

                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="comment">Comment</label>

                                            <div class="col-xs-12 col-sm-9">
                                                <div class="clearfix">
                                                    <textarea class="input-xlarge" name="comment" id="comment"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="space-8"></div>

                                        <div class="form-group">
                                            <div class="col-xs-12 col-sm-4 col-sm-offset-3">
                                                <label>
                                                    <input name="agree" id="agree" type="checkbox" class="ace" />
                                                    <span class="lbl"> I accept the policy</span>
                                                </label>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="step-pane" data-step="2">
                                    <div>
                                        <div class="alert alert-success">
                                            <button type="button" class="close" data-dismiss="alert">
                                                <i class="ace-icon fa fa-times"></i>
                                            </button>

                                            <strong>
                                                <i class="ace-icon fa fa-check"></i>
                                                Well done!
                                            </strong>

                                            You successfully read this important alert message.
                                            <br />
                                        </div>

                                        <div class="alert alert-danger">
                                            <button type="button" class="close" data-dismiss="alert">
                                                <i class="ace-icon fa fa-times"></i>
                                            </button>

                                            <strong>
                                                <i class="ace-icon fa fa-times"></i>
                                                Oh snap!
                                            </strong>

                                            Change a few things up and try submitting again.
                                            <br />
                                        </div>

                                        <div class="alert alert-warning">
                                            <button type="button" class="close" data-dismiss="alert">
                                                <i class="ace-icon fa fa-times"></i>
                                            </button>
                                            <strong>Warning!</strong>

                                            Best check yo self, you're not looking too good.
                                            <br />
                                        </div>

                                        <div class="alert alert-info">
                                            <button type="button" class="close" data-dismiss="alert">
                                                <i class="ace-icon fa fa-times"></i>
                                            </button>
                                            <strong>Heads up!</strong>

                                            This alert needs your attention, but it's not super important.
                                            <br />
                                        </div>
                                    </div>
                                </div>

                                <div class="step-pane" data-step="3">
                                    <div class="center">
                                        <h3 class="blue lighter">This is step 3</h3>
                                    </div>
                                </div>

                                <div class="step-pane" data-step="4">
                                    <div class="center">
                                        <h3 class="green">Congrats!</h3>
                                        Your product is ready to ship! Click finish to continue!
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr />
                        <div class="wizard-actions">
                            <button class="btn btn-prev">
                                <i class="ace-icon fa fa-arrow-left"></i>
                                Prev
                            </button>

                            <button class="btn btn-success btn-next" data-last="Finish">
                                Next
                                <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                            </button>
                        </div>
                    </div><!-- /.widget-main -->
                </div><!-- /.widget-body -->



            </div><!-- /.page-header -->

            <div class="row">
                <div class="col-xs-12">
                    <!-- CONTEÚDO DA PÁGINA -->


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

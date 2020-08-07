<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login.loginUsuarioCop');
});


// ============================== ROTAS DO USUÁRIO INTERNO ==============================//

Route::post('/cop/inicial', function(){
    return view('inicialCop');
});

Route::get('/cop/inicial', function(){
    return view('inicialCop');
});

Route::get('/cop/cadAluno', function (){
  return view('cadastros.cadAluno');
});

Route::get('/cop/listaAlunos', function (){
    return view('cadastros.listaAlunos');
});

Route::get('/cop/enviardocs', function(){
    return view('enviarDocumentos');
});

Route::get('/cop/msgconfirmacao', function(){
    return view('msgDocsEnviados');
});

Route::get('/cop/login/user', function(){
    return view('login.loginUsuarioCop');
});

Route::get('/cop/login/userCad', function(){
    return view('login.cadUsuarioCop');
});

Route::get('/cop/login/newpassword', function(){
    return view('login.redefinirSenhaUsuarioCop');
});

Route::post('/cop/login/passwordsent', function(){
    return view('login.msgNewPassUsuarioCop');
});

Route::post('/cop/login/msgcadsucess', function(){
    return view('login.msgNewCadUsuarioCop');
});

Route::get('/cop/login/msgcadsucess', function(){
    return view('login.msgNewCadUsuarioCop');
});

Route::get('/logout', function(){
    return view('login.loginUsuarioCop');
});



// ============================== ROTAS DA INTRANET ==============================//

Route::get('/intranet', function(){
    return view('intranet.loginIntranet.intranetloginUsuarioCop');
});

Route::get('/intranet/inicio', function(){
    return view('intranet.intranetProtocolo');
});

Route::post('/intranet/inicio', function(){
    return view('intranet.intranetProtocolo');
});


//========================

Route::get ('buscarDados', function (){
    $users = DB::table('usersprotocolo')->where('levelUserProtocolo', '2')->get();
    return $users;
});

<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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


// Rota para página inicial


Route::get('/', function() {
    return view('.home.home');
});
 
// Rota para adquirência

Route::get('/adquirencia', function () {
    return view('.para-empresas.adquirencia'); //rota para assistência médica
});

// Rota para conta digital PF

Route::get('/conta-digital-pessoa-fisica', function () {
    return view('.para-voce.conta-digital-pessoa-fisica'); //rota para assistência médica
});


// Rota para conta digital PJ

Route::get('/conta-digital-pessoa-juridica', function () {
    return view('.para-empresas.conta-digital-pessoa-juridica'); //rota para assistência médica
});

// Rota para conta digital Empréstimo pessoal

Route::get('/emprestimo', function () {
    return view('.para-voce.emprestimo'); //rota para assistência médica
});


// Rota para tela de ajuda 

Route::get('/ajuda', function () {
    return view('.ajuda.ajuda'); //rota para assistência médica
});


// Rota para câmbio

Route::get('/cambio', function () {
    return view('.para-voce.cambio'); //rota para assistência médica
});

 
Route::get('/adquira', function () {
    return view('.contact.index'); //rota para assistência médica
});


// Rota para enviar os dados por e-mail e gravá-los no banco de dados

Route::post('/solicitar-contato',  'App\Http\Controllers\ContatoController@enviaContato');


// Rota para redirect de erro:

Route::fallback(function () {
    // throw new MethodNotAllowedHttpException([], 'error-post');
    return view('.error-post');  

   
});


 
// Rota para os termos das assistências
Route::get('/estassist-termos',function(){
    return view('.estassist.termos-e-condicoes');
});

 
//  Politica de Privacidade

Route::get ('/politica-de-privacidade', function(){
    return view('.termos.politica-de-privacidade');
});

// Termos de uso

Route::get ('/termos-de-uso', function(){
    return view('.termos.termos-de-uso');
});

// Segurança na internet

Route::get ('/seguranca', function(){
    return view('.termos.seguranca');
});

// Termos e condições de uso POS

Route::get('/termo-e-condicoes-de-uso-do-totem-ou-pos', function(){
    return view('.termos.termo-e-condicoes-de-uso-do-totem-ou-pos');
});

Route::get('/oab', function() {
    return view('.oab.oab');
});
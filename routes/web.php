<?php

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/formulario','\App\Http\Controllers\cadastroController@formulario')->name('carregarFormulario');
Route::get('/listauser','\App\Http\Controllers\cadastroController@listauser')->name('listarUsuario');
Route::POST('/mostrar-dados','\App\Http\Controllers\cadastroController@dados')->name('carregarUsuario');
Route::POST('/salvar-usuario','\App\Http\Controllers\cadastroController@salvar')->name('salvarUsuario');
Route::POST('/salvar-edicao','\App\Http\Controllers\cadastroController@salvarEdicao')->name('salvarEdicao');
Route::get('/usuario/editar/{id}','\App\Http\Controllers\cadastroController@editarUsuario')->name('editarUsuario');
Route::get('/usuario/excluir/{id}','\App\Http\Controllers\cadastroController@excluirUsuario')->name('excluirUsuario');


## ROTAS DOS ENDEREÇOS
Route::get('/endereco','\App\Http\Controllers\cadastroController@endereco')->name('carregarEndereco');
Route::get('/listendereco','\App\Http\Controllers\cadastroController@listendereco')->name('listarEndereco');
Route::POST('/mostrar-endereco','\App\Http\Controllers\cadastroController@dadosendereco')->name('carregarDadosEndereco');
Route::get('/endereco/editar/{id}','\App\Http\Controllers\cadastroController@editarEndereco')->name('editarEndereco');
Route::get('/endereco/excluir/{id}','\App\Http\Controllers\cadastroController@excluirEndereco')->name('excluirEndereco');


##ROTA GET: PUXA PELA BARRA DE endereco
##ROTA POST: RETORNA UMA INFORMAÇÃO VIA FORMULARIO

Route::prefix('usuario')->group(function () { //   ROTA: /usuario/create
    //rotas padrão
    Route::get('create', 'App\Http\Controllers\novoController@create')->name('createUsuario');
    Route::POST('save', 'App\Http\Controllers\novoController@save')->name('saveUsuario');
     
});
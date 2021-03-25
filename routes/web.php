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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/formulario','\App\Http\Controllers\cadastroController@formulario')->name('carregarFormulario');
Route::get('/listauser','\App\Http\Controllers\cadastroController@listauser')->name('carregarTabela');
Route::POST('/mostrar-dados','\App\Http\Controllers\cadastroController@dados')->name('carregarUsuario');
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cadastroController extends Controller
{
    //

    public function formulario(){
        return view ('formulario');
    }
    public function listauser(){
        return view ('listauser');
    }    

    public function dados(Request $request){
        $nome = $request->nome;
        $data = $request->data;
        $senha = $request->senha;
        $matricula = $request->matricula;

        return view('dados', compact('nome', 'data', 'senha', 'matricula'));
    }
}
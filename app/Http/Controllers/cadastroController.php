<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\usuario;
use App\models\endereco;
class cadastroController extends Controller
{
    //

    public function welcome(){
        return view ('welcome');
    }
   
   
    public function formulario(){
        return view ('formulario');
    }
    public function endereco(){
        return view ('endereco');
    }

    public function listauser(){
        $usuarios = Usuario::orderBy("id", "asc")->get();
        return view ('listauser', compact ('usuarios'));
    }    
    public function listendereco(){
        $endereco = Endereco::orderBy("id", "asc")->get();
        return view ('listendereco', compact ('endereco'));
    }    

    public function dados(Request $request){
        $usuario = new Usuario();
        $usuario->nome = $request->nome;
        $usuario->data_nascimento = $request->data_nascimento;
        $usuario->senha =$request->senha;
        $usuario->matricula = $request->matricula;
        $usuario->save();

        return view('dados', compact('usuario'));

    }
    
    public function salvar(Request $request){
        $usuario = new Usuario();
        $usuario->nome = $request->nome;
        $usuario->data_nascimento = $request->data_nascimento;
        $usuario->senha =$request->senha;
        $usuario->matricula = $request->matricula;
        $usuario->save();

        return view('dados', compact('usuario'));

    }
    public function listar(){
        
        $usuarios = Usuario::all();
        return view ('usuario.listauser', compact('usuarios'));

    }
  
    public function editarUsuario($id){
        $usuario = Usuario::where('id', $id)->first();
        return view('edit', compact('usuario'));
    }
    public function excluirUsuario($id){
        Usuario::destroy($id);
        return redirect (route ('listarUsuario'));
    }
    public function salvarEdicao(Request $request){

        $usuario = Usuario::where('id', $request->id)->first();
        $usuario->nome = $request->nome;
        $usuario->data_nascimento = $request->data_nascimento;
        $usuario->senha =$request->senha;
        $usuario->matricula = $request->matricula;
        $usuario->update();
        return redirect (route ('listarUsuario'));

    }
   
    public function salvarEndereco(Request $request){

        $endereco  = Endereco::where('id', $request->id)->first();
        $endereco ->logradouro= $request->logradouro;
        $endereco ->complemento = $request->complemento;
        $endereco ->bairro =$request->bairro;
        $endereco ->cidade = $request->cidade;
        $endereco ->estado = $request->estado;
        $endereco ->numero= $request->numero;
        $endereco->cep = $request->cep;
        $usuario->update();
        return redirect (route ('carregarListaEndereco'));

    }

    public function salvarEdicaoEndereco(Request $request){

        $endereco  = Endereco::where('id', $request->id)->first();
        $endereco ->logradouro= $request->logradouro;
        $endereco ->complemento = $request->complemento;
        $endereco ->bairro =$request->bairro;
        $endereco ->cidade = $request->cidade;
        $endereco ->estado = $request->estado;
        $endereco ->numero= $request->numero;
        $endereco->cep = $request->cep;
        $endereco->update();
        return redirect (route ('salvarEdicaoEndereco'));

    }
    public function dadosendereco(Request $request){
        $endereco = new Endereco();
        $endereco->bairro = $request->bairro;
        $endereco->cidade = $request->cidade;
        $endereco->estado =$request->estado;
        $endereco->complemento = $request->complemento;
        $endereco->numero = $request->numero;
        $endereco->logradouro = $request->logradouro;
        $endereco->cep = $request->cep;

        $endereco->save();

        return view('dadosendereco', compact('endereco'));
}
public function editarEndereco($id){
    $endereco = Endereco::where('id', $id)->first();
    return view('editendereco', compact('endereco'));
}
public function excluirEndereco($id){
    Endereco::destroy($id);
    return redirect (route ('listarEndereco'));
}
}
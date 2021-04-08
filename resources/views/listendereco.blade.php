<!DOCTYPE html>
<html>
    <head> 
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
     
        <meta charset="UTF-8" lang="pt-br"/>
        <title> Formulario </title>
    </head>
    <body>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">bairro</th>
                    <th scope="col">Proprietario</th>
                    <th scope="col">cidade</th>
                    <th scope="col">estado</th>
                    <th scope="col">complemento</th>
                    <th scope="col">logradouro</th>
                    <th scope="col">numero</th>
                    <th scope="col">cep</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($endereco as $endereco)
          <tr>
            <td>{{$endereco->id }}</td>
            <td>{{$endereco->usuario->nome }}</td>
            <td>{{$endereco->bairro }}</td>
            <td>{{$endereco->cidade }}</td>
            <td>{{$endereco->estado }}</td>
            <td>{{$endereco->complemento }}</td>
            <td>{{$endereco->logradouro }}</td>
            <td>{{$endereco->numero }}</td>
            <td>{{$endereco->cep }}</td>
            <td>
              <a href=
            "{{ route('editarEndereco', $endereco->id) }}">Editar</a>
            <a href="{{ route('excluirEndereco', $endereco->id) }}">Excluir</a>
            </td>
          </tr>
         
          @endforeach
          <tr>
           
          </tr>
        </tbody>
      </table>
    </body>
  </html>
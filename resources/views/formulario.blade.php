<!DOCTYPE html>
<html>
    <head> 
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
     
        <meta charset="UTF-8" lang="pt-br"/>
        <title> Formulario </title>
    </head>
    <body>
        <center> <h2>Informações</h2></center>
        <div class="container">
          
            <form method="POST" action="{{ route('carregarUsuario') }}">
              @csrf
              <center>
            <div class="form-group">
              <label for="exampleInputEmail1">Nome Completo</label>
              <input type="string" class="form-control" id="nomeInput" name="nome" ><br>
             
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Data de Nascimento</label>
                <input type="date" class="form-control" id="dataInput" name="data"><br>
               
              </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Senha</label>
              <input type="password" class="form-control" id="senhaInput" name="senha"><br>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Matrícula</label>
              <input type="number" class="form-control" id="matriculaInput" name="matricula">
            </div>
         
            <button type="submit" class="btn btn-primary">Enviar</button>
            
          </center>
          </form>
          </div>
        
    </body>
</html>
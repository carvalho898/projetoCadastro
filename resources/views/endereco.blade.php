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
          
            <form method="POST" action="{{ route('carregarDadosEndereco') }}">
              @csrf
              <center>
            <div class="form-group">
              <label for="exampleInputEmail1">Bairro</label>
              <input type="string" class="form-control" id="bairroInput" name="bairro" ><br>
             
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Cidade</label>
                <input type="string" class="form-control" id="cidadeInput" name="cidade"><br>
               
              </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Estado</label>
              <select class="form-control" id="estado" name="estado">
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
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Complemento </label>
              <input type="string" class="form-control" id="complementoInput" name="complemento">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Numero </label>
              <input type="number" class="form-control" id="numeroInput" name="numero">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Logradouro </label>
              <input type="string" class="form-control" id="logradouroInput" name="logradouro">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">CEP </label>
              <input type="string" class="form-control" id="cepInput" name="cep">
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
            
          </center>
          </form>
          </div>
        
    </body>
</html>
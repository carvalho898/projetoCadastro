<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>MENU</title>
</head>
<body>
<center><h1>CONSULTA/REGISTRO DE DADOS</h1>
    <h2><a href= "{{route('carregarFormulario')}}" class="btn btn-primary btn-lg" >REGISTRAR USUÁRIO</a></h2>
    <h2><a href= "{{route('listarUsuario')}}" class="btn btn-primary btn-lg" >USUÁRIOS REGISTRADOS</a></h2>
    <h2><a href= "{{route('carregarEndereco')}}" class="btn btn-primary btn-lg" >REGISTRAR ENDEREÇO</a></h2>
    <h2><a href= "{{route('listarEndereco')}}" class="btn btn-primary btn-lg" >ENDEREÇOS REGISTRADOS</a></h2>
    <h2><a href= "{{route('createUsuario')}}" class="btn btn-primary btn-lg" >REGISTRAR USUÁRIO E ENDEREÇO</a></h2>
    

</body>
</html>
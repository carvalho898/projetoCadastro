<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>REGISTRO</title>
</head>

<body>
    Nome: {{ $usuario->nome }} <br>
    Data: {{ $usuario->data_nascimento }} <br>
    Senha: {{ $usuario->senha }} <br>
    Matricula: {{ $usuario->matricula }}

</body>

</html>

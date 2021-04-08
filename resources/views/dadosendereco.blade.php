<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>REGISTRO</title>
</head>

<body>
    Bairro: {{ $endereco->bairro }} <br>
    Cidade: {{ $endereco->cidade }} <br>
    Estado: {{ $endereco->estado }} <br>
    Complemento: {{ $endereco->complemento }}<br>
    Numero: {{ $endereco->numero }}<br>
    Logradouro: {{ $endereco->logradouro }}<br>
     CEP: {{ $endereco->cep }}<br>

</body>

</html>

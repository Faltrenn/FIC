<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Usuários:</h2>
    @foreach($nomes as $nome)
    <ul>
        <li><a href="usuarios/{{$nome}}">{{$nome}}</a></li>
    </ul>
    @endforeach
</body>
</html>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Bem-vindo ao App de Motorista</h1>
    <a href="{{ route('login') }}">Login</a>
    <a href="{{ route('register') }}">Cadastrar</a>
</body>
</html>

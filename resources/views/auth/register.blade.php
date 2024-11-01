<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
</head>
<body>
    <h1>Cadastrar</h1>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <input type="text" name="name" placeholder="Nome" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Senha" required>
        <input type="password" name="password_confirmation" placeholder="Confirme a Senha" required>
        <button type="submit">Cadastrar</button>
    </form>
    <a href="{{ route('login') }}">Já tem uma conta? Entre aqui</a>
</body>
</html>

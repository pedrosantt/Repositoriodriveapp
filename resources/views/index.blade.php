<!-- resources/views/index.blade.php -->
<link rel="stylesheet" href="{{ asset('resources/css/app.css') }}">

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login e Cadastro</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-900 text-white flex items-center justify-center h-screen">
    <div class="w-full max-w-md space-y-8">
        <h1 class="text-3xl font-bold text-center">App de Motorista</h1>

        <!-- Formulário de Login -->
        <div class="bg-gray-800 p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-4">Login</h2>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium">Email</label>
                    <input type="email" name="email" id="email" class="w-full p-2 rounded" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium">Senha</label>
                    <input type="password" name="password" id="password" class="w-full p-2 rounded" required>
                </div>
                <button type="submit" class="w-full bg-purple-600 p-2 rounded mt-4">Entrar</button>
            </form>
        </div>

        <!-- Formulário de Cadastro -->
        <div class="bg-gray-800 p-6 rounded-lg shadow-md mt-8">
            <h2 class="text-xl font-semibold mb-4">Cadastro</h2>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium">Nome</label>
                    <input type="text" name="name" id="name" class="w-full p-2 rounded" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium">Email</label>
                    <input type="email" name="email" id="email" class="w-full p-2 rounded" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium">Senha</label>
                    <input type="password" name="password" id="password" class="w-full p-2 rounded" required>
                </div>
                <button type="submit" class="w-full bg-green-600 p-2 rounded mt-4">Cadastrar</button>
            </form>
        </div>
    </div>
</body>
</html>

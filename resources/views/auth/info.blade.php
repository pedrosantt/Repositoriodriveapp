<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações do Usuário</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <!-- resources/views/auth/info.blade.php -->

@extends('layouts.app') <!-- Certifique-se de que você tem um layout chamado 'app' -->

@section('content')
    <h1>Informações do Usuário</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <h2>{{ $user->name }}</h2>
    <p>Email: {{ $user->email }}</p>

    @if($cars->isEmpty())
        <p>Você não tem nenhum carro cadastrado.</p>
        <a href="{{ route('car.register') }}">Cadastrar Carro</a>
    @else
        <h3>Carros Cadastrados:</h3>
        <ul>
            @foreach($cars as $car)
                <li>{{ $car->make }} {{ $car->model }} - {{ $car->year }}</li>
            @endforeach
        </ul>
    @endif
@endsection
</body>
</html>

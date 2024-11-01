@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Minhas Informações</h1>
    <p>Nome: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>

    <h2>Meus Carros</h2>
    @if($cars->isEmpty())
        <p>Você não cadastrou nenhum carro.</p>
        <a href="{{ route('car.register') }}">Cadastrar Carro</a> <!-- Link para a tela de cadastro -->
    @else
        <ul>
            @foreach($cars as $car)
                <li>{{ $car->make }} {{ $car->model }} ({{ $car->year }}) - Placa: {{ $car->license_plate }}</li>
            @endforeach
        </ul>
        <a href="{{ route('car.register') }}">Cadastrar Novo Carro</a> <!-- Link para cadastrar mais carros -->
    @endif
</div>
@endsection


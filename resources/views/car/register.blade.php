@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Cadastrar Carro</h1>
    <form action="{{ route('car.store') }}" method="POST">
        @csrf
        <div>
            <label for="make">Marca:</label>
            <input type="text" name="make" id="make" required>
        </div>
        <div>
            <label for="model">Modelo:</label>
            <input type="text" name="model" id="model" required>
        </div>
        <div>
            <label for="year">Ano:</label>
            <input type="number" name="year" id="year" required min="1900" max="{{ date('Y') }}">
        </div>
        <div>
            <label for="license_plate">Placa:</label>
            <input type="text" name="license_plate" id="license_plate" required>
        </div>
        <button type="submit">Cadastrar Carro</button>
    </form>
</div>
@endsection

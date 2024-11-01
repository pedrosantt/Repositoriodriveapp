<?php

namespace App\Http\Controllers;

use App\Models\Car; // Certifique-se de que você tem um modelo Car
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index()
    {
        return view('index'); // Substitua 'index' pela view que você deseja exibir
    }

    public function showCarRegisterForm()
    {
        return view('car.register'); // Certifique-se de criar essa view
    }

    public function storeCar(Request $request)
    {
        // Validação dos dados do carro
        $request->validate([
            'make' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|max:' . date('Y'),
            'license_plate' => 'required|string|max:10',
        ]);

        // Criar novo carro
        Car::create([
            'make' => $request->make,
            'model' => $request->model,
            'year' => $request->year,
            'license_plate' => $request->license_plate,
            'user_id' => auth()->id(), // Associe o carro ao usuário autenticado
        ]);

        return redirect()->route('home')->with('success', 'Carro cadastrado com sucesso!');
    }

    public function showUserInfo()
    {
        $user = auth()->user(); // Pega o usuário autenticado
        $cars = $user->cars; // Supondo que você tenha uma relação no modelo User

        return view('user.info', compact('user', 'cars')); // Crie a view user.info
    }
}

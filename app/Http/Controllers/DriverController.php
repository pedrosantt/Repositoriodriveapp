<?php

namespace App\Http\Controllers;
use App\Models\User; // Adicione isso
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DriverController extends Controller
{
    // Página inicial com opções de login e cadastro
    public function index()
    {
        return view('auth.index'); // Redireciona para a página inicial
    }

    // Tela de Login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Processar o Login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if (Auth::attempt($credentials)) {
            // Redireciona para a página de informações do usuário após o login
            return redirect()->route('user.info')->with('success', 'Login realizado com sucesso!');
        }
    
        return back()->withErrors([
            'email' => 'As credenciais fornecidas não correspondem a nossos registros.',
        ]);
    }

    // Tela de Cadastro
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Processar o Cadastro
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        Auth::login($user);

        return redirect()->route('user.info')->with('success', 'Cadastro realizado com sucesso!');
    }

    // Tela de Informações do Usuário
    public function showUserInfo()
    {
        $user = Auth::user();
        $cars = $user->cars; // Supondo que você tenha uma relação no modelo User

        return view('user.info', compact('user', 'cars'));
    }

    // Formulário para Cadastrar Carro
    public function showCarRegisterForm()
    {
        return view('car.register');
    }

    // Processar o Cadastro do Carro
    public function storeCar(Request $request)
    {
        $request->validate([
            'make' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|max:' . date('Y'),
            'license_plate' => 'required|string|max:10',
        ]);

        Car::create([
            'make' => $request->make,
            'model' => $request->model,
            'year' => $request->year,
            'license_plate' => $request->license_plate,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('user.info')->with('success', 'Carro cadastrado com sucesso!');
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; // Verifique se esta linha está correta
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Tentar autenticar o usuário
        if (Auth::attempt($request->only('email', 'password'))) {
            // Autenticação bem-sucedida, redirecionar
            return redirect()->route('user.info'); // Redirecione para a rota correta
        }

        // Se falhar, redirecionar de volta com uma mensagem de erro
        return back()->withErrors([
            'email' => 'As credenciais fornecidas estão incorretas.',
        ]);
    }
}

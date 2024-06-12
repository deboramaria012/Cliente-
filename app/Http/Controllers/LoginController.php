<?php

namespace App\Http\Controllers;

use App\Models\ClienteModel;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('site.login');
    }

    public function autenticar(Request $request)
    {
        // Lógica de validação dos dados do formulário...

        $emailCliente = $request->get('emailCliente');
        $senhaCliente = $request->get('senhaCliente');

        $cliente = ClienteModel::where($emailCliente)->first();

        if ($cliente && Hash::check($senhaCliente, $cliente->senhaCliente)) {
            // Login bem-sucedido
        } else {
            // Falha na autenticação
            if (Auth::attempt(['email' => $emailCliente, 'password' => $senhaCliente])) {
                // Autenticação bem-sucedida
            } else {
                // Autenticação falhou
            }

        }

    }
}

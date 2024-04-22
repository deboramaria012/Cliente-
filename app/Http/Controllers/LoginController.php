<?php

namespace App\Http\Controllers;

use App\Models\ClienteModel;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('site.login');
    }

    public function autenticar(Request $request)
{
    $regras = [
        'emailUsuario'   => 'required|email',
        'senhaUsuario'   => 'required'
    ];

    $msg = [
        'emailUsuario.required'     =>  'Email obrigatório',
        'emailUsuario.email'        =>  'O e-mail informado deve ser válido',
        'senhaUsuario.required'     =>  'Senha obrigatória',
    ];

    $request->validate($regras, $msg);

    $emailUsuario = $request->get('emailUsuario');
    $senhaUsuario = $request->get('senhaUsuario');

    $cliente = ClienteModel::where('email', $emailUsuario)->first();
    if (!$cliente) {
        return back()->withErrors(['emailUsuario' => 'O email informado não existe']);
    }

    if ($cliente->senha != $senhaUsuario) {
        return back()->withErrors(['senhaUsuario' => 'Senha incorreta']);
    }

    session([
        'id' => $cliente->id,
        'emailUsuario' => $cliente->email,
        'nome' => $cliente->nome,
        'tipo_usuario' => 'cliente',
    ]);

    return redirect()->route('dashboard.cliente');
}

}


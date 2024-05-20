<?php

namespace App\Http\Controllers;

use App\Models\ClienteModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('site.login');
    }
    public function autenticar(Request $request)
    {
        // Lógica de validação dos dados do formulário...

        $emailCliente = $request->get('emailCliente');
        $senhaCliente = $request->get('senhaCliente');


        $cliente = ClienteModel::where('email', $emailCliente)->first();

        if ($cliente) {
            // Faça algo com os dados do cliente encontrado
        } else {
            // Tratar caso nenhum cliente seja encontrado
            return 'Cliente não encontrado.';
        }

        if (!is_null($emailCliente)) {
            $cliente = ClienteModel::where('email', $emailCliente)->first();
            // Restante do código...
        } else {
            // Tratar caso a variável $emailUsuario seja nula
        }

        // Verifica se a senha está correta
        if (!Hash::check($senhaCliente, $cliente->senha)) {
            return back()->withErrors(['senhaUsuario' => 'Senha incorreta']);
        }

        // Lógica de mapeamento do tipo de usuário
        if ($cliente->nivelUsuario === 'admin') {
            return redirect()->route('dashboard.admin');
        }

        // Se for um cliente, define a sessão para o dashboard de cliente
        session([
            'id' => $cliente->id,
            'emailCliente' => $cliente->email,
            'nome' => $cliente->nome,
            'tipo_usuario' => 'cliente',
        ]);

        return redirect()->route('dashboard.cliente');
    }
}

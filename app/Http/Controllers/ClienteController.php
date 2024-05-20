<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ClienteModel;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function buscarClientePorEmail(Request $request)
    {
        $emailCliente = $request->input('email'); // Supondo que você esteja passando o email via parâmetro de requisição

        $cliente = ClienteModel::where('endereco_email', $emailCliente)->first();

        if ($cliente) {
            // Faça algo com os dados do cliente encontrado, como retornar uma view
            return view('cliente', ['cliente' => $cliente]);
        } else {
            // Tratar caso nenhum cliente seja encontrado, como retornar uma mensagem de erro
            return redirect()->back()->with('error', 'Cliente não encontrado.');
        }
    }
}

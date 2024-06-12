<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    // Método para exibir a página do carrinho
    public function index()
    {
        // Obter itens do carrinho da sessão
        $carrinho = session()->get('carrinho', []);
        return view('carrinho.index', compact('carrinho'));
    }

    // Método para adicionar um item ao carrinho
    public function adicionarItem(Request $request)
    {
        $id = $request->input('id');
        $nome = $request->input('nome');
        $preco = $request->input('preco');
        $quantidade = $request->input('quantidade', 1);

        $carrinho = session()->get('carrinho', []);

        if(isset($carrinho[$id])) {
            $carrinho[$id]['quantidade'] += $quantidade;
        } else {
            $carrinho[$id] = [
                'nome' => $nome,
                'preco' => $preco,
                'quantidade' => $quantidade,
            ];
        }

        session()->put('carrinho', $carrinho);

        return redirect()->route('carrinho.index')->with('success', 'Item adicionado ao carrinho!');
    }

    // Método para remover um item do carrinho
    public function removerItem(Request $request)
    {
        $id = $request->input('id');

        $carrinho = session()->get('carrinho', []);

        if(isset($carrinho[$id])) {
            unset($carrinho[$id]);
        }

        session()->put('carrinho', $carrinho);

        return redirect()->route('carrinho.index')->with('success', 'Item removido do carrinho!');
    }

    // Outros métodos conforme necessário (como calcular o total do carrinho, etc.)
}

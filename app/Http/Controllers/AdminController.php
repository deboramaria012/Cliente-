<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ClienteModel;
use App\Models\Produto;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function indexCliente()
    {
        $clientes = ClienteModel::all();
        return view('dashboard.cliente.admin', ['clientes' => $clientes]);
    }

    public function createCliente()
    {
        return view('admin.clientes.create');
    }

    public function storeCliente(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:clientes',
        ]);

        $cliente = new ClienteModel();
        $cliente->nome = $request->nome;
        $cliente->email = $request->email;

        $cliente->save();

        return redirect()->route('admin.cliente.index')->with('success', 'Cliente criado com sucesso!');
    }

    public function editCliente($id)
    {
        $cliente = ClienteModel::find($id);

        if (!$cliente) {
            abort(404, 'Cliente não encontrado');
        }

        return view('admin.clientes.edit', ['cliente' => $cliente]);
    }

    public function updateCliente(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:clientes,email,' . $id,
        ]);

        $cliente = ClienteModel::find($id);

        if (!$cliente) {
            abort(404, 'Cliente não encontrado');
        }

        $cliente->nome = $request->nome;
        $cliente->email = $request->email;

        $cliente->save();

        return redirect()->route('admin.cliente.index')->with('success', 'Cliente atualizado com sucesso!');
    }

    public function destroyCliente($id)
    {
        $cliente = ClienteModel::find($id);

        if (!$cliente) {
            abort(404, 'Cliente não encontrado');
        }

        $cliente->delete();

        return redirect()->route('admin.cliente.index')->with('success', 'Cliente deletado com sucesso!');
    }

    // Métodos para gerenciar produtos do cliente
    public function indexProduto($clienteId)
    {
        $cliente = ClienteModel::find($clienteId);

        if (!$cliente) {
            abort(404, 'Cliente não encontrado');
        }

        $produtos = Produto::where('cliente_id', $clienteId)->get();
        return view('admin.produtos.index', ['cliente' => $cliente, 'produtos' => $produtos]);
    }

    public function createProduto($clienteId)
    {
        $cliente = ClienteModel::find($clienteId);

        if (!$cliente) {
            abort(404, 'Cliente não encontrado');
        }

        return view('admin.produtos.create', ['cliente' => $cliente]);
    }

    public function storeProduto(Request $request, $clienteId)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string|max:255',
            'preco' => 'required|numeric',
        ]);

        $produto = new Produto();
        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->preco = $request->preco;
        $produto->cliente_id = $clienteId;

        $produto->save();

        return

        $produto->save();

        return redirect()->route('admin.produto.index', $clienteId)->with('success', 'Produto criado com sucesso!');
    }

    public function editProduto($clienteId, $produtoId)
    {
        $cliente = ClienteModel::find($clienteId);

        if (!$cliente) {
            abort(404, 'Cliente não encontrado');
        }

        $produto = Produto::where('cliente_id', $clienteId)->find($produtoId);

        if (!$produto) {
            abort(404, 'Produto não encontrado');
        }

        return view('admin.produtos.edit', ['cliente' => $cliente, 'produto' => $produto]);
    }

    public function updateProduto(Request $request, $clienteId, $produtoId)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string|max:255',
            'preco' => 'required|numeric',
        ]);

        $produto = Produto::where('cliente_id', $clienteId)->find($produtoId);

        if (!$produto) {
            abort(404, 'Produto não encontrado');
        }

        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->preco = $request->preco;

        $produto->save();

        return redirect()->route('admin.produto.index', $clienteId)->with('success', 'Produto atualizado com sucesso!');
    }

    public function destroyProduto($clienteId, $produtoId)
    {
        $cliente = ClienteModel::find($clienteId);

        if (!$cliente) {
            abort(404, 'Cliente não encontrado');
        }

        $produto = Produto::where('cliente_id', $clienteId)->find($produtoId);

        if (!$produto) {
            abort(404, 'Produto não encontrado');
        }

        $produto->delete();

        return redirect()->route('admin.produto.index', $clienteId)->with('success', 'Produto deletado com sucesso!');
    }
}


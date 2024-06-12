<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ClienteModel;
use App\Models\Produto;
use Illuminate\Http\Request;

class AdminController extends Controller
{
// AdminController.php

public function index()
{
    // Fetch all customers
    $clientes = ClienteModel::all();

    // Return a view with the customers data
    return view('dashboard.admin.clientes.index', ['clientes' => $clientes]);
}

public function createCliente()
{
    // Return a view for creating a new customer
    return view('dashboard.admin.clientes.create');
}

public function cadCliente(Request $request)
{
    // Validate and process the customer creation request
    $validatedData = $request->validate([
        'nome' => 'required|max:255',
        'email' => 'required|email|unique:clientes',
        'telefone' => 'required|min:10',
    ]);

    // Create a new customer record
    $cliente = ClienteModel::create($validatedData);

    // Return a redirect to the customer list
    return redirect()->route('admin.cliente.index')->with('success', 'Cliente cadastrado com sucesso!');
}

public function editCliente($id)
{
    // Find the customer by ID
    $cliente = ClienteModel::find($id);

    // Return a view for editing the customer
    return view('dashboard.admin.clientes.edit', ['cliente' => $cliente]);
}

public function updateCliente(Request $request, $id)
{
    // Validate and process the customer update request
    $validatedData = $request->validate([
        'nome' => 'required|max:255',
        'email' => 'required|email|unique:clientes,email,'.$id,
        'telefone' => 'required|min:10',
    ]);

    // Find the customer by ID
    $cliente = ClienteModel::findOrFail($id);

    // Update the customer record with validated data
    $cliente->update($validatedData);

    // Return a redirect to the customer list
    return redirect()->route('admin.cliente.index')->with('success', 'Cliente atualizado com sucesso!');
}
}

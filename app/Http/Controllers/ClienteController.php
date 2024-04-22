<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ClienteModel;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
{
    $idCliente = session('id');
    $cliente = ClienteModel::find($idCliente);

    if (!$cliente) {
        abort(404, 'Cliente não encontrado');
    }

    $usuario = $cliente->usuario; // Assumindo que existe uma relação entre Cliente e Usuario

    return view('site.dashboard.cliente.cliente', compact('cliente', 'usuario'));
}

}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ClienteModel;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $idCliente = session('id');
        $cliente = ClienteModel::find($idCliente);

        if (!$cliente) {
            abort(404, 'Cliente não encontrado');
        }

        // Carregar o layout do dashboard com a view do admin
        return view('layouts.dashboard', ['cliente' => $cliente]);
    }
}

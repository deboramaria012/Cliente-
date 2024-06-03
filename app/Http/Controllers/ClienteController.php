<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ClienteModel;
use App\Models\Usuario;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $idCliente = session('id');
        $cliente = ClienteModel::find($idCliente);

        $tipoUsuario = session('tipo');

        $usuario = Usuario::find($tipoUsuario);

        if(!$cliente){
            abort(404,'Cliente não encontrado');
        }
        return view('site.dashboard.cliente.cliente', compact('cliente', 'usuario'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ClienteModel;
use App\Models\Usuario;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
// ClienteController.php

 
        public function index()
        {
            return view('dashboard.administrador.cliente.index');
        }
    }

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardClienteController extends Controller
{
    public function admin()
    {
        return view('dashboard.cliente.admin');
    }
}


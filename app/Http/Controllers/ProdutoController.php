<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;


class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::all(); // Supondo que você tenha um modelo Produto

        return view('produtos', ['produtos' => $produtos]);
    }
}

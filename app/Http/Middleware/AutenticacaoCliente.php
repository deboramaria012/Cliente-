<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AutenticacaoCliente
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::guard('cliente')->check()) {
            return $next($request);
        }

        return redirect()->route('login'); // Redireciona para a rota de login
    }
}

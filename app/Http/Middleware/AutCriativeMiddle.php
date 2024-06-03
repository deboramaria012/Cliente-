<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AutenticacaoClienteMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            // Redireciona o usuário para a página de login se não estiver autenticado
            return redirect()->route('login');
        }

        // Permite que o request prossiga para a próxima etapa (ou rota, se estiver tudo certo)
        return $next($request);
    }
}

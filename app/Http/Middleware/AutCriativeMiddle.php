<?php

namespace App\Http\Middleware;

use App\Models\ClienteModel;
use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;

class AutCriativeMiddle
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, )
    {

        if (Auth::guard('cliente')->check()) {
            return $next($request);
        }

        return redirect()->route('login'); // Redireciona para a rota de login
    }
}


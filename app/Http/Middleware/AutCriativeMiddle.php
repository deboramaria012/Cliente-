<?php

namespace App\Http\Middleware;

use App\Models\ClienteModel;
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

        $email = session('emailUsuario');
        if ($email) {
            $cliente = ClienteModel::where('email', $email)->first();
            if (!$cliente) {
                return redirect()->route('/login')->withErrors(['emailUsuario' => 'Não autenticado']);
            }
            
            return $next($request);
        }

        return redirect()->route('/login')->withErrors(['emailUsuario' => 'Não autenticado']);
    }
}


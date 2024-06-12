<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

        public function handle($request, Closure $next)
        {
            if (Auth::check() && Auth::user()->tipo_usuario_type === 'Admin') {
                return $next($request);
            }

            return redirect('/login')->withErrors(['Você não tem permissão para acessar esta área.']);
        }
    }

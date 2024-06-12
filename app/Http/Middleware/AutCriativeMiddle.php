<?php

namespace App\Http\Middleware;

use App\Models\ClienteModel;
use App\Models\Usuario;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AutenticacaoClienteMiddleware
{
    public function handle(Request $request, Closure $next, $tipoUser)
    {
        $email = session('emailUsuario');
        if ($email) {
            $usuario = Usuario::where('emailUsuario', $email)->first();
            if (!$usuario) {
                return redirect()->route('/login')->withErrors(['emailUsuario' => 'Não autenticado']);
            }
            $tipoUsuario = $usuario->tipo_usuario;
            if ($tipoUsuario) {
                $tipo = null;

                if ($tipoUsuario instanceof ClienteModel) {
                    $tipo = 'cliente';
                } elseif ($tipoUsuario instanceof ClienteModel) {
                    $tipo = $tipoUsuario->nivelFuncionario;
                }
            }

            if ($tipo == $tipoUser) {
                return $next($request);
            } else {
                // return back()->withErrors(['emailUsuario'=>'Acesso não permitido para esse perfil']);
            }
        }
    }
}

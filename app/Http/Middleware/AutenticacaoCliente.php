<?php

namespace App\Http\Middleware;

use App\Models\ClienteModel;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Closure;


class AutenticacaoCliente
{
    public function handle(Request $request, Closure $next)
    {
        $email = session('email');

        if($email){

            $usuario = Usuario::where('emailCliente',$email)->first();

            if (!$usuario){
                return redirect()->route('login')->withErrors(['email' => 'Não autenticado']);
            }

            $tipoCliente = $usuario->tipo_usuario;

            if ($tipoCliente) {
               $tipo = null;

                if($tipoCliente instanceof ClienteModel){
                    $tipo = 'aluno';
                } elseif ($tipoCliente instanceof ClienteModel){
                    $tipo = $tipoCliente->tipoFuncionario;
                }

            }

            if($tipo == $tipoCliente){

             return $next($request);

            }else{
                return back()->withErrors(['Email' => 'Acess não permitido para esse perfil']);
            }

            }

    }
}



@extends('layoutdash.layout')

@section('conteudo-dash')



<!-- painel de opções -->
<div class="pg-tp">
    <i class="ion-cube"></i>
    <div class="pr-tp-inr">
     <h4>LISTA DE FUNCIONÁRIOS</h4>
     <h6>Usuario:</h6>
     <span>Nome:<strong>{{ $func->nome_funcionario }}</strong> | Cargo:
      <strong>{{ $func->cargo_funcionario }}</strong> |Tipo:
       <strong>{{ $func->tipo_funcionario}}</strong></span>
    </div>
</div>
<!-- topo da página -->


<div class="widget pad50-65">
    <a href="{{ route('admin.funcionario.create') }}" class="btn btn-success btnAluno">Novo Funcionario</a>
    <table class="table">
    <thead class="thead-inverse">
     <tr>
         <th>Nome</th>
         <th>Email</th>
         <th>tipofuncionario</th>
        </tr>
        </thead>
    <tbody>
        @foreach($listaFunc as $func)
        <td>
         <td>{{ $func->nomefuncionario }}</td>
         <td>{{ $func->emailfuncionario }}</td>
         <td>{{ $func->telefonefuncionario }}</td>
         <td>{{ $func->tipoFuncionario }}</td>
        <td><a href="{{ route('admin.func.edit', $func->idFuncionario) }}"  class="btn btn-primary">Editar</a></td>
            <td>
                <form action="{{ route('admin.funcionario.desativar', $func->idFuncionario) }}" method="POST"
                 style="display: inline;">
                 @csrf
                 @method('PUT')
                 <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
    </table>
    </div>


@endsection

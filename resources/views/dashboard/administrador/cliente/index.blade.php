
@extends('layoutdash.layout')


@section('content')
<div class="container">
    <h1>Clientes</h1>
    <a href="{{ route('admin.cliente.create') }}" class="btn btn-primary">Adicionar Cliente</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->nomeCliente }}</td>
                    <td>{{ $cliente->emailCliente }}</td>
                    <td>{{ $cliente->telefoneCliente }}</td>
                    <td>
                        <a href="{{ route('admin.cliente.edit', $cliente->idCliente) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('admin.cliente.delete', $cliente->idCliente) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Deletar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@extends('layoutdash.layout')

@section('content')
<div class="container">
    <h1>Editar Cliente</h1>
    <form action="{{ route('admin.cliente.update', $cliente->idCliente) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nomeCliente">Nome</label>
            <input type="text" name="nomeCliente" id="nomeCliente" class="form-control" value="{{ $cliente->nomeCliente }}" required>
        </div>
        <div class="form-group">
            <label for="emailCliente">Email</label>
            <input type="email" name="emailCliente" id="emailCliente" class="form-control" value="{{ $cliente->emailCliente }}" required>
        </div>
        <div class="form-group">
            <label for="telefoneCliente">Telefone</label>
            <input type="text" name="telefoneCliente" id="telefoneCliente" class="form-control" value="{{ $cliente->telefoneCliente }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
@endsection

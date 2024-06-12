@extends('layoutdash.layout')

@section('content')
<div class="container">
    <h1>Adicionar Cliente</h1>
    <form action="{{ route('admin.cliente.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nomeCliente">Nome</label>
            <input type="text" name="nomeCliente" id="nomeCliente" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="emailCliente">Email</label>
            <input type="email" name="emailCliente" id="emailCliente" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="telefoneCliente">Telefone</label>
            <input type="text" name="telefoneCliente" id="telefoneCliente" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="senhaCliente">Senha</label>
            <input type="password" name="senhaCliente" id="senhaCliente" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
@endsection

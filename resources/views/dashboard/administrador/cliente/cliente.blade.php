@extends('layoutdash.layout')

@section('content')
    <h1>Adicionar Cliente</h1>
    <form action="{{ route('admin.cliente.store') }}" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <button type="submit">Salvar</button>
    </form>
@endsection


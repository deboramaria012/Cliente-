<!-- produtos.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Produtos Disponíveis</h1>

    <div class="lista-produtos">
        @if(count($produtos) > 0)
            <ul>
                @foreach($produtos as $produto)
                    <li>
                        <h3>{{ $produto->nome }}</h3>
                        <p>Preço: R$ {{ $produto->preco }}</p>
                        <!-- Botão "Adicionar ao Carrinho" -->
                        <form action="{{ route('adicionarAoCarrinho') }}" method="post">
                            @csrf
                            <input type="hidden" name="produto_id" value="{{ $produto->id }}">
                            <button type="submit">Adicionar ao Carrinho</button>
                        </form>
                    </li>
                @endforeach
            </ul>
        @else
            <p>Nenhum produto disponível.</p>
        @endif
    </div>
@endsection

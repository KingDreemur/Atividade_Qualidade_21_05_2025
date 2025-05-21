@extends('layout')

@section('content')
<div class="container">
    <h1>Detalhes do Produto</h1>

    <div class="mb-3">
        <strong>Nome:</strong>
        <p>{{ $produto->nome }}</p>
    </div>

    <div class="mb-3">
        <strong>Preço:</strong>
        <p>R$ {{ number_format($produto->preco, 2, ',', '.') }}</p>
    </div>

    <div class="mb-3">
        <strong>Descrição:</strong>
        <p>{{ $produto->descricao ?? 'Sem descrição' }}</p>
    </div>

    <a href="{{ route('produtos.index') }}" class="btn btn-secondary">Voltar</a>
</div>
@endsection

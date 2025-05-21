@extends('layout')

@section('content')
<h2>Pessoas</h2>
<a href="{{ route('pessoas.create') }}">Nova Pessoa</a>
@if(session('success'))
    <p>{{ session('success') }}</p>
@endif
<table border="1">
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Ações</th>
    </tr>
    @foreach ($pessoas as $pessoa)
    <tr>
        <td>{{ $pessoa->nome }}</td>
        <td>{{ $pessoa->email }}</td>
        <td>{{ $pessoa->telefone }}</td>
        <td>
            <a href="{{ route('pessoas.edit', $pessoa) }}">Editar</a>
            <form action="{{ route('pessoas.destroy', $pessoa) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit">Excluir</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection


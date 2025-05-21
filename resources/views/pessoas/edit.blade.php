@extends('layout')

@section('content')
<h2>Editar Pessoa</h2>
<form action="{{ route('pessoas.update', $pessoa) }}" method="POST">
    @csrf
    @method('PUT')
    @include('pessoas.form')
    <button type="submit">Atualizar</button>
</form>
@endsection

@extends('layout')

@section('content')
<h2>Nova Pessoa</h2>
<form action="{{ route('pessoas.store') }}" method="POST">
    @csrf
    @include('pessoas.form')
    <button type="submit">Salvar</button>
</form>
@endsection

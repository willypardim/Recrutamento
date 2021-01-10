@extends('candidatos.layouts.app')

@section('title', 'Home')
    
@section('conteudo')

<a href="{{ route('candidato.create') }}" class="teste">Cadastrar candidato</a>
@endsection


@extends('candidatos.layouts.app')

@section('title', 'Home')
    
@section('conteudo')

<a href="{{ route('candidato.create') }}">Cadastrar candidato</a>
@endsection


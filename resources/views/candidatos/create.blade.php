@extends('candidatos.layouts.app')

@section('title', 'Cadastro candidato')
    
@section('conteudo')
    <h1>pagina de cadastro</h1>
    <form action="{{ route('candidato.store') }}" method="POST">
        @include('candidatos.includes.form')
    </form>
@endsection



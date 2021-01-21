@extends('candidatos.layouts.app')

@section('title', 'Home')
    
@section('conteudo')
    @include('candidatos.layouts.top-partial')
    <div class="container col-8 bg-white mt-3 p-4 text-center">
        <a href="{{ route('candidato.create') }}">É Programador? Cadastre-se para vagas!</a>
    </div>

    <div class="container col-8 bg-white mt-3 p-4 text-center">
        <a href="{{ route('login') }}">Sou recrutador!</a>
    </div>
@endsection


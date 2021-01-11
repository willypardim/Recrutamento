@extends('candidatos.layouts.app')

@section('title', 'Cadastro candidato')
    
@section('conteudo')
    <div class="container col-8 bg-white mt-5 p-5">
        <p class="lead text-center">
            <strong>
                Cadastro de candidato
            </strong>
        </p>
        <form action="{{ route('candidato.store') }}" method="POST">
            @include('candidatos.includes.form')
            <a href="{{ route('inicio.inicio')}}" class="btn btn-danger mt-3">Cancelar</a>
        </form>
    </div>
@endsection



@extends('candidatos.layouts.app')

@section('title', 'Erro')
    
@section('conteudo')
    <div class="container">
        <div class="alert alert-danger" role="alert">
            Não conseguimos entender sua requisição, <a href="{{  route('candidato.index')  }}" class="alert-link">clique aqui</a> e retorne a página inicial.
        </div>
    </div>
@endsection
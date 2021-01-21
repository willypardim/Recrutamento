@extends('candidatos.layouts.app')

@section('title', 'Cadastro finalizado')
    
@section('conteudo')
    @include('candidatos.layouts.top-partial')
    <div class="container bg-white mt-4 p-4">
        <div class="alert alert-success" role="alert">
            Cadastro realizado com sucesso! Os recrutadores entrarão em contato caso você seja selecionado, boa sorte!
        </div>
    </div>
@endsection



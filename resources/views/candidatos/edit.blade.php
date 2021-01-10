@extends('candidatos.layouts.app')

@section('title', 'Editar candidato')
    
@section('conteudo')
    <div class="container col-8 bg-white mt-5 p-5">
        <p class="lead text-center">
            <strong>
                Editar dados do candidato
            </strong>
        </p>
        <form action="{{ route('candidato.update', $candidato->id) }}" method="POST">
            @csrf
            @method('PUT')
            @include('candidatos.includes.form')
        </form>
    </div>
@endsection



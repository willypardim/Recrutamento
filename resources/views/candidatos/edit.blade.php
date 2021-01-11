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
            <a href="{{ route('candidato.index')}}" class="btn btn-danger mt-3">Cancelar</a>
        </form>
    </div>
@endsection



@extends('candidatos.layouts.app')

@section('title', 'Home')
    
@section('conteudo')
    <div class="col-12 text-right">
        <a href="{{ route('candidato.create') }}" class="bg-info p-1 btn btn text-white">Cadastrar candidato</a>

    </div>

    <div class="container col-8 bg-white mt-3 p-4">
        <p class="lead text-center">
            <strong>
                Candidaturas
            </strong>
        </p>
        @foreach ($candidatos as $candidato) 
            <div class="card mt-3">
                <div class="card-header bg-white">
                    Candidatura Nº: {{ $candidato->id }}
                </div>
                <div class="card-body">
                <p class="card-text"><strong>Candidato:</strong> {{ $candidato->nome }}</p>
                <p class="card-text"><strong>Email:</strong> {{ $candidato->email }}</p>
                <p class="card-text"><strong>Idade:</strong> {{ $candidato->idade }}</p>
                <p class="card-text"><strong>URL Linkedin:</strong> {{ $candidato->linkedin }}</p>
                <a href="#" class="btn btn-primary">Saber mais</a>
                </div>
            </div> 
        @endforeach
    </div>
@endsection


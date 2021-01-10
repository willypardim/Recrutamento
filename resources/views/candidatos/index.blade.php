@extends('candidatos.layouts.app')

@section('title', 'Home')
    
@section('conteudo')
    <div class="col-12 text-right">
        <a href="{{ route('candidato.create') }}" class="bg-info p-1 btn btn text-white">Cadastrar candidato</a>

    </div>
    
    <div class="container col-8 bg-white mt-3 p-4">
        <p class="lead text-center">
            <strong>
                Busque um candidato por conhecimentos
            </strong>
        </p>
        <form action="{{ route('candidato.index')}} " method="GET">
            <div class="input-group mb-3">
                <select name="search" id="search" class="form-control">
                    <option value="">Escolha uma tecnologia para filtrar</option>
                    <option value="C#">C#</option>
                    <option value="JavaScript">JavaScript</option>
                    <option value="Nodejs">Nodejs</option>
                    <option value="Angular">Angular</option>
                    <option value="React">React</option>
                    <option value="Ionic">Ionic</option>
                    <option value="Mensageria">Mensageria</option>
                    <option value="PHP">PHP</option>
                    <option value="Laravel">Laravel</option>
                </select>
                <div class="input-group-append">
                  <button class="btn btn-outline-primary" type="submit" id="button-addon2">Buscar</button>
                </div>
                
            </div>
        </form>
    </div>

    <div class="container col-8 bg-white mt-3 p-4">
        @if ($search)
            <p class="lead text-center">
                <strong>
                    Buscando candidatos com habilidades em: {{ $search }}
                </strong>
            </p>
        @else
            <p class="lead text-center">
                <strong>
                    Candidatos
                </strong>
            </p>
        @endif
        
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

                <div class="btn-group" role="group" aria-label="Exemplo básico">
                    <a href="{{ route('candidato.show', $candidato->id)}}" class="btn btn-primary mr-2">Saber mais</a>
                    <a href="{{ route('candidato.edit', $candidato->id)}}" class="btn btn-success mr-2">Editar</a>
                    <form action="{{ route('candidato.destroy', $candidato->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger">Deletar candidato</button>
                    </form>
                  </div>
                </div>
            </div> 
        @endforeach

        @if (count($candidatos) == 0 && $search)
            <p>Não foi possível encontrar candidatos com conhecimentos em {{ $search }} <a href="{{ route('candidato.index') }}">Ver tudo</a></p>
        @elseif(count($candidatos) == 0)
            <div class="alert alert-primary" role="alert">
                Não há candidatos cadastrados! <a href={{  route('candidato.create')  }} class="alert-link">Clique aqui</a> para adicionar.
            </div>
        @endif
    </div>
@endsection


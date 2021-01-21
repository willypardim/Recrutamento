@extends('candidatos.layouts.app')

@section('title', 'Home')
    
@section('conteudo')
    @include('candidatos.layouts.top-complet')
    <div class="container col-8 bg-white mt-3 p-4">
        <p class="lead text-center">
            <strong>
                Filtre os candidatos por habilidade
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

    
    @if ($search)
        <div class="container col-8 bg-white mt-3">
            <p class="lead text-center p-3">
                <strong>
                    Candidatos com habilidades em: {{ $search }}
                </strong>
            </p>
        </div>
    @else
        <div class="container col-8 bg-white mt-3">
            <p class="lead text-center p-2">
                <strong>
                    Candidaturas
                </strong>
            </p>
        </div>
    @endif    
        @foreach ($candidatos as $candidato) 
            <div class="container col-8 bg-white mt-3 p-2">
                <div class="card border-white">
                    <div class="card-header bg-white text-center">
                        Candidatura Nº: {{ $candidato->id }}
                    </div>
                    <div class="card-body">
                        <p class="card-text"><strong>Candidato:</strong> {{ $candidato->nome }}</p>
                        <p class="card-text"><strong>Email:</strong> {{ $candidato->email }}</p>
                        <p class="card-text"><strong>URL Linkedin:</strong> {{ $candidato->linkedin }}</p>

                        <div class="btn-group" role="group" aria-label="Exemplo básico">
                            <a href="{{ route('candidato.show', $candidato->id)}}" class="btn btn-primary mr-2">Saber mais</a>
                        </div>
                    </div>
                </div> 
            </div>    
        @endforeach
        
            @if (count($candidatos) == 0 && $search)
                <div class="container col-8 bg-white mt-3 p-4">
                    <p>Não foi possível encontrar candidatos com conhecimentos em {{ $search }} <a href="{{ route('candidato.index') }}">Ver tudo</a></p>
                </div>
            @elseif(count($candidatos) == 0)
                <div class="container col-8 bg-danger mt-3 p-4">
                    <div class="alert alert-primary" role="alert">
                        Não há candidatos cadastrados! <a href={{  route('candidato.create')  }} class="alert-link">Clique aqui</a> para adicionar.
                    </div>
                </div>  
            @endif
@endsection
@extends('candidatos.layouts.app')

@section('title', 'Home')
    
@section('conteudo')
    @include('candidatos.layouts.top-complet')
    <div class="container col-8 bg-white mt-3 p-4">
        <p class="lead text-center">
            <strong>
                Dados do candidato
            </strong>
        </p>
        <dl class="row">
        
            <dt class="col-sm-3">Nº Candidatura</dt>
            <dd class="col-sm-9">
              <p>{{$candidato->id}}</p>
            </dd>
      
            <dt class="col-sm-3">Candidato</dt>
            <dd class="col-sm-9"> {{$candidato->nome}}</dd>
      
            <dt class="col-sm-3">Email</dt>
            <dd class="col-sm-9">{{$candidato->email}}</dd>
      
            <dt class="col-sm-3">Idade</dt>
            <dd class="col-sm-9">
              <p>{{$candidato->idade}}</p>
            </dd>
      
            <dt class="col-sm-3">URL Linkedin</dt>
            <dd class="col-sm-9">{{$candidato->linkedin}}</dd>

            <dt class="col-sm-3">Competências</dt>
            <dd class="col-sm-9">
                <ul>
                    @foreach ($candidato->competencias as $competencia)
                        <li>{{ $competencia }} </li>
                    @endforeach
                </ul>
            </dd>
        </dl> 
        <div class="btn-group" role="group" aria-label="Exemplo básico">
            <a href="{{ route('candidato.edit', $candidato->id)}}" class="btn btn-dark mr-2">Editar</a>
        </div>
        <div class="btn-group" role="group" aria-label="Exemplo básico">
            <form action="{{ route('candidato.destroy', $candidato->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-outline-danger">Deletar candidato</button>
            </form>
        </div>
    </div>
@endsection


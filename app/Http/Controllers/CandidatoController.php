<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateCandidatoRequest;
use App\Models\Candidato;
use Illuminate\Http\Request;

class CandidatoController extends Controller
{

    public function index()
    {
        return view('candidatos.index');
    }

    public function create()
    {
        return view('candidatos.create');
    }

    public function store(StoreUpdateCandidatoRequest $request)
    {
        try {
            $candidato = new Candidato;

            $candidato->nome = $request->nome;
            $candidato->email = $request->email;
            $candidato->idade = $request->idade;
            $candidato->linkedin = $request->linkedin;
            $candidato->competencias = $request->competencias;
    
            $candidato->save();
        
        return redirect()->route('candidato.index');
        } catch (\Throwable $th) {
            return view('candidatos.catch.catch');
        }      
    }
}

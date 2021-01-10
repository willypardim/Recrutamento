<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateCandidatoRequest;
use App\Models\Candidato;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class CandidatoController extends Controller
{

    public function index()
    {
        $search = request('search');

        if($search){

            $candidatos = Candidato::where([
                ['competencias', 'like', '%'.$search.'%']
            ])->get();

        }else{
            $candidatos = Candidato::all();
        }

        return view('candidatos.index', ['candidatos' => $candidatos, 'search' => $search]);
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

    public function show($id)
    {   
        $candidato = Candidato::findOrFail($id);

        return view('candidatos.show', ['candidato' => $candidato]);
    }

    public function destroy($id)
    {
        try {
            Candidato::findOrFail($id)->delete();
        
            return redirect()->route('candidato.index');
        } catch (\Throwable $th) {
            return view('candidatos.catch.catch');
        }
        
    }

    public function edit($id)
    {
        if(!$candidato = Candidato::find($id))
        return redirect()->back();

        return view('candidatos.edit', compact('candidato'));
    }

    public function update(StoreUpdateCandidatoRequest $request, $id)
    {
        try {
            if(!$candidato = Candidato::find($id))
            return redirect()->back();

            $candidato->update($request->all());

            return redirect()->route('candidato.index');
        } catch (\Throwable $th) {
            return view('candidatos.catch.catch');
        }
    }
}

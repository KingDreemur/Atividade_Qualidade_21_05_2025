<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    public function index()
    {
        $pessoas = Pessoa::all();
        return view('pessoas.index', compact('pessoas'));
    }

    public function create()
    {
        return view('pessoas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email|unique:pessoas',
            'telefone' => 'required',
        ]);

        Pessoa::create($request->all());
        return redirect()->route('pessoas.index')->with('success', 'Pessoa criada com sucesso!');
    }

    public function edit(Pessoa $pessoa)
    {
        return view('pessoas.edit', compact('pessoa'));
    }

    public function update(Request $request, Pessoa $pessoa)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email|unique:pessoas,email,' . $pessoa->id,
            'telefone' => 'required',
        ]);

        $pessoa->update($request->all());
        return redirect()->route('pessoas.index')->with('success', 'Pessoa atualizada!');
    }

    public function destroy(Pessoa $pessoa)
    {
        $pessoa->delete();
        return redirect()->route('pessoas.index')->with('success', 'Pessoa removida.');
    }
}

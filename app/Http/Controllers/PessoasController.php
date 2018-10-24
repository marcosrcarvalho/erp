<?php

namespace App\Http\Controllers;

use App\Pessoa;
use Illuminate\Http\Request;

class PessoasController extends Controller
{
    public function list()
    {
        $list_pessoas = Pessoa::all();
        return view('fornecedores.listFornec', [
            'pessoas' => $list_pessoas
        ]);
    }

    public function new()
    {
        return view('fornecedores.newFornec');
    }

    public function store(Request $request)
    {
        Pessoa::create($request->all());
        return redirect('/')->with("messsage","Pessoa criada com sucesso!");
    }
}

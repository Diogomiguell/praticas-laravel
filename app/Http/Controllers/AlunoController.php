<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlunoRequest;
use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{

    public function index() 
    {
        $alunos = Aluno::orderByDesc('id')->get();
        
        //Carregar a VIEW
        return view('aluno.index', ['alunos' => $alunos]);
    }

    public function create() {
        //Carregar a VIEW
        return view('aluno.create');
    }

    public function store(AlunoRequest $request) 
    {
        //Validar os dados do form
        $request->validated();

        //Cadastrar aluno
        Aluno::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'data_nasc' => $request->data_nasc,
            'genero' => $request->genero
        ]);

        //Redirecionar a página
        return redirect()->route('aluno.index')
                        ->with('sucess', 'Aluno cadastrado com sucesso');
    }
}
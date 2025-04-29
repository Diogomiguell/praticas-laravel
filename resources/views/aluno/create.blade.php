@extends('layouts.app')

@section('content')
<h1>Cadastrar Alunos</h1>

<form action="{{ route('aluno-store') }}" method="post">
    @csrf
    @method('POST')

    <label for="nome">Nome:</label>
    <input type="text" name="nome" placeholder="Nome completo" required value="{{ old('nome') }}">
    <br><br>

    <label for="email">Email:</label>
    <input type="email" name="email" placeholder="Email pessoal" required value="{{ old('email') }}">
    <br><br>

    <label for="data_nasc">Data de Nascimento:</label>
    <input type="date" name="data_nasc" max="2015-12-31">
    <br><br>

    <label for="genero">Gênero <p style="font-size: 9pt">(Opcional)</p></label>
    <select name="genero" id="genero">
        <option value="" selected>Selecionar opção</option>
        <option value="masculino">Masculino</option>
        <option value="feminino">Feminino</option>
        <option value="outro">Outro</option>
    </select>
    <br><br>

    <input type="submit" value="Cadastrar">
</form>
@endsection
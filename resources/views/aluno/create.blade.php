@extends('layouts.app')

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diogo - Página de Cadastro</title>
</head>
<body>
    <a href="{{ route('aluno.lista') }}">Lista</a>

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

        <label for="genero">Gênero</label>
        <select name="genero" id="genero">
            <option value="" selected>Selecionar opção</option>
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
            <option value="outro">Outro</option>
        </select>
        <br><br>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diogo - Home</title>
</head>
<body>
    <a href="{{ route('aluno.create') }}">Cadastrar</a>

    <h1>Listar Alunos</h1>

    @if (@session('sucess'))
        <p style="color: #1c9e50">
            {{ session('sucess') }}
        </p>
    @endif
    
    @forelse ($alunos as $aluno)
        <strong>ID:</strong> {{ $aluno->id }}<br>
        <strong>NOME:</strong> {{ $aluno->nome }}<br>
        <strong>E-MAIL:</strong> {{ $aluno->email }}<br>
        <strong>DATA DE NASCIMENTO:</strong>  {{ $aluno->data_nasc }}<br>
        <strong>GENERO:</strong> {{ $aluno->genero }}<br><hr>
    @empty
        
    @endforelse
</body>
</html>
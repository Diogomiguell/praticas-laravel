@extends('layouts.app')

@section('content')

@if (@session('sucess'))
    <p style="color: #1c9e50">
        {{ session('sucess') }}
    </p>
@endif

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Lista de Alunos</h3>
  
          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 200px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Procurar">
  
              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>E-MAIL</th>
                <th>DATA DE NASCIMENTO</th>
                <th>GENERO</th>
                <th>...</th>
              </tr>
            </thead>
            <tbody>
                    @forelse ($alunos as $aluno)
                      <tr>     
                          <td>{{ $aluno->id }}</td>
                          <td>{{ $aluno->nome }}</td>
                          <td>{{ $aluno->email }}</td>
                          <td>{{ $aluno->data_nasc }}</td>
                          <td>{{ $aluno->genero }}</td>
                          <td>
                            <a href="#" class="btn btn-primary">
                              <i class="far fa-edit"></i>
                            </a>

                            <a href="#" class="btn btn-danger">
                              <i class="far fa-trash-alt"></i>
                            </a>
                          </td>
                      </tr> 
                    @empty
                      <tr>
                        <td>
                          Sem alunos cadastrados! <a href="{{ route('aluno.create') }}">Clique aqui</a>, para adicionar alunos
                        </td>
                      </tr>
                    @endforelse
            </tbody>
          </table>
          <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-lg-right">
            
            </ul>
            {{ $alunos->links() }}
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
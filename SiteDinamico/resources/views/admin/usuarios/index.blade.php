@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row">
        <h5>Lista de Usuários</h5>
        <nav class="blue lighten-3 z-depth-0">
          <div class="nav-wrapper">
            <div class="col s12">
              <a href="{{route('admin.principal')}}" class="breadcrumb">Início</a>
              <a href="#" class="breadcrumb">Lista de usários</a>
            </div>
          </div>
        </nav>
    </div>
    <div class="row">
        <table class="responsive-table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->id }}</td>
                    <td>{{ $usuario->name }}</td>
                    <td>{{ $usuario->email }}</td>
                    <td>
                        <a class="btn orange" href="#">Editar</a>
                        <a class="btn red" href="#">Deletar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <h5>Editar usuário</h5>
        <nav class="blue lighten-3 z-depth-0">
          <div class="nav-wrapper">
            <div class="col s12">
              <a href="{{route('admin.principal')}}" class="breadcrumb">Início</a>
              <a href="{{route('admin.usuarios')}}" class="breadcrumb">Lista de usuários</a>
              <a class="breadcrumb">Editar usuário</a>
            </div>
          </div>
        </nav>
    </div>
    <div class="row">
        <form action="{{route('admin.usuarios.atualizar',$usuario->id)}}" method="POST">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="put">
            @include('admin.usuarios._form')
            <button class="btn green">Atualizar</button>
        </form>
    </div>
</div>

@endsection

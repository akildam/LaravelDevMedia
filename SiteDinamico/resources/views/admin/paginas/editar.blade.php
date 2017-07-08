@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <h5>Editar Páginas</h5>
        <nav class="blue lighten-3 z-depth-0">
          <div class="nav-wrapper">
            <div class="col s12">
              <a href="{{route('admin.principal')}}" class="breadcrumb">Início</a>
              <a href="{{route('admin.paginas')}}" class="breadcrumb">Lista de páginas</a>
              <a class="breadcrumb">Editar página</a>
            </div>
          </div>
        </nav>
    </div>
    <div class="row">
        <form action="{{route('admin.paginas.atualizar',$pagina->id)}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="put">
            @include('admin.paginas._form')
            <button class="btn green">Atualizar</button>
        </form>
    </div>
</div>

@endsection

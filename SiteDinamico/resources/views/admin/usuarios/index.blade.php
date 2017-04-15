@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h5>Lista de Usuários</h5>
        <nav class="blue lighten-3 z-depth-0">
          <div class="nav-wrapper">
            <div class="col s12">
              <a href="{{route('admin.principal')}}" class="breadcrumb">Início</a>
              <a class="breadcrumb">Lista de usários</a>
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
                        <a class="btn orange" href="{{route('admin.usuarios.editar',$usuario->id)}}">Editar</a>
                        <button data-target="modalDeletar" data-url-exclusao="{{ route('admin.usuarios.deletar',$usuario->id) }}" class="btn red deletar">Deletar</button>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
        
    </div>
    
    <div class="row">
        <a class="btn green" href="{{route('admin.usuarios.adicionar')}}">Adicionar</a>
    </div>
</div>
<!-- Modal Structure -->
<div id="modalDeletar" class="modal">
    <div class="modal-content">
        <h4>Deletar usuário</h4>
        <p>Deseja deletar esse usuário?</p>
    </div>
    <div class="modal-footer">
        <button class="modal-action modal-close btn-flat">Não</button>
        <button id="exclusaoConfirmada" class="modal-action modal-close btn-flat">Sim</button>
    </div>
</div>
@endsection

@section('page_script')
<script type="text/javascript">
    $(document).ready(function() {
        var urlExclusao = null;
        $('.deletar').click(function(){
           urlExclusao = $(this).attr('data-url-exclusao');
        });
        $('#exclusaoConfirmada').click(function(){
            window.location.href = urlExclusao;
        });
    });
</script>
@endsection
@extends('layouts.site')

@section('content')
    <div class="container">
        <div class="row section">
            <h3>Contato</h3>
            <div class="divider"></div>
        </div>
        <div class="row section">
            <div class="col s12 m7">
                @if(isset($pagina->mapa))
                <div class="video-container">
                    {!! $pagina->mapa !!}
                </div>
                @else
                    <img src="{{asset( $pagina->imagem )}}" alt="mansão" class="responsive-img">
                @endif
            </div>
            <div class="col s12 m5">
                <h4>{{$pagina->titulo}}</h4>
                <blockquote>{{$pagina->descricao}}</blockquote>
                <form class="col s12" action="{{route('site.contato.enviar')}}" method="post">
                    {{csrf_field()}}
                    <div class="input-field">
                        <input type="text" name="nome" class="validate">
                        <label for="nome">Nome</label>
                    </div>
                    <div class="input-field">
                        <input type="text" name="email" class="validate">
                        <label for="email">E-mail</label>
                    </div>
                    <div class="input-field">
                        <textarea name="" id="" cols="30" rows="10" class="materialize-textarea"></textarea>
                       <label for="email">Mensagem</label>
                    </div>
                    <button class="btn blue">Enviar</button>
                </form>
            </div>
        </div>
    </div>
@endsection

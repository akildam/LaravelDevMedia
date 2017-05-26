<div class="input-field">
    <label for="titulo">Título</label>
    <input type="text" name="titulo" class="validate" id="titulo" value="{{ $pagina->titulo ?? '' }}" required="required"/>
</div>
<div class="input-field">
    <label for="descricao">Descrição</label>
    <input type="text" name="descricao" class="validate" id="descricao" value="{{ $pagina->descricao ?? '' }}" required="required"/>
</div>
@if(isset($pagina->email))
<div class="input-field">
    <label for="email">E-mail</label>
    <input type="text" name="email" class="validate" id="email" value="{{ $pagina->email ?? '' }}" required="required"/>
</div>
@endif
<div class="input-field">
    <label for="texto">Texto</label>
    <textarea name="texto" id="texto" class="materialize-textarea">
        {{ $pagina->texto ?? '' }}
    </textarea>
</div>
<div class="row">
    <div class="file-field input-field col m6 s12">
        <div class="btn">
            <span>Imagem</span>
            <input type="file" name="imagem" />
        </div>
        <div class="file-path-wrapper">
            <input type="text" class="file-path validate"/>
        </div>
    </div>
    <div class="col m6 s12">
        @if(isset($pagina->imagem))
            <img width="120" src="{{asset($pagina->imagem)}}"/>
        @endif
    </div>
</div>
<div class="input-field">
    <label for="mapa">Mapa</label>
    <textarea name="mapa" id="mapa" class="materialize-textarea">
        {{ $pagina->mapa ?? '' }}
    </textarea>
</div>
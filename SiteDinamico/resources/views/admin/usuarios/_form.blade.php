<div class="input-field">
    <label for="name">Nome</label>
    <input type="text" name="name" class="validate" id="name" value="{{ $usuario->name ?? '' }}" required="required"/>
</div>
<div class="input-field">
    <label for="email">E-mail</label>
    <input type="text" name="email" class="validate" id="email" value="{{ $usuario->email ?? '' }}" required="required"/>
</div>
<div class="input-field">
    <label for="password">Senha</label>
    <input type="password" name="password" class="validate" id="password"/>
</div>
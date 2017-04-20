<li><a target="_blank" href="{{route('site.home')}}">Elysium</a></li>
<li><a href="{{route('admin.principal')}}">Início</a></li>
@if(Auth::guest())
    <li><a href="{{route('admin.login')}}">Login</a></li>
@else
    <li>
        <i class="material-icons right">arrow_drop_down</i>
        @if($type=='desktop')
            <a class="dropdown-button" href="#!" data-activates="opcoesUsuario" style="white-space: nowrap;">{{Auth::user()->name}}</a>
            <ul id="opcoesUsuario" class="dropdown-content">
                <li>
                    <a href="#!">{{ Auth::user()->name }}</a>
                </li>
                <li>
                    <a href="{{ route('admin.usuarios') }}">Usuários</a>
                </li>
                <li>
                    <a href="{{ route('admin.paginas') }}">Páginas</a>
                </li>
            </ul>
        @else
            <a href="#!">{{Auth::user()->name}}</a>
        @endif
        
        <ul id="opcoesUsuario" class="dropdown-content">
            <li>
                <a href="{{ route('admin.usuarios') }}">Usuários</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="{{route('admin.login.sair')}}">Sair</a>
    </li>
@endif


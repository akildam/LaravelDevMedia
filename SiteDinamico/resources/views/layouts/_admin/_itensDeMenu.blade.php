<li><a target="_blank" href="{{route('site.home')}}">Elysium</a></li>
<li><a href="{{route('admin.principal')}}">Início</a></li>
@if(Auth::guest())
    <li><a href="{{route('admin.login')}}">Login</a></li>
@else
    <li><a href="#">{{Auth::user()->name}}</a></li>
    <li><a href="{{route('admin.login.sair')}}">Sair</a></li>
@endif
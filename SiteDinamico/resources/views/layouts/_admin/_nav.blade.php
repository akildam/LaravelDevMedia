<nav>
    <div class="nav-wrapper blue">
        <div class="container">
            <a href="{{route('admin.principal')}}" class="brand-logo">Elysium Admin</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                @include('layouts._admin._itensDeMenu')
            </ul>
            <ul class="side-nav" id="mobile-demo">
                @include('layouts._admin._itensDeMenu')
            </ul>
        </div>
    </div>
</nav>
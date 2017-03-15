<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('lib/materialize/dist/css/materialize.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <header>
        @include('layouts._site._nav')
    </header>
    <main>
        @yield('content')
    </main>
    @include('layouts._site._footer')
<script src="{{ asset('lib/jquery/dist/jquery.js') }}"></script>
<script src="{{ asset('lib/materialize/dist/js/materialize.js') }}"></script>
<script src="{{ asset('js/init.js') }}"></script>
</body>
</html>

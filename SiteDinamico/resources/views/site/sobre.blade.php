@extends('layouts.site')

@section('content')
    <div class="container">
        <div class="row section">
            <h3>Sobre</h3>
            <div class="divider"></div>
        </div>
        <div class="row section">
            <div class="col s12 m6">
                <img src="{{asset('img/001.jpg')}}" alt="mansão" class="responsive-img">
            </div>
            <div class="col s12 m6">
                <h4>A empresa</h4>
                <blockquote>
                    Descrição da empresa.
                </blockquote>
                <p>Texto sobre a empresa.</p>
            </div>
        </div>
    </div>
@endsection

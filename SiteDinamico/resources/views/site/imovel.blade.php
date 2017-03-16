@extends('layouts.site')

@section('content')
<div class="container">
    <div class="row section">
        <h3>Imóvel</h3>
        <div class="divider"></div>
    </div>
    <div class="row section">
        <div class="col s12 m8">
            <div class="row">
                <div class="slider">
                    <ul class="slides">
                        <li>
                            <img src="{{asset('img/004.jpg')}}" alt="mansão"/>
                            <div class="caption left-align">
                                <h3>Título da imagem</h3>
                                <h5>Descrição do slide</h5>
                            </div>
                        </li>
                        <li>
                            <img src="{{asset('img/005.jpg')}}" alt="mansão"/>
                            <div class="caption right-align">
                                <h3>Título da imagem</h3>
                                <h5>Descrição do slide</h5>
                            </div>
                        </li>
                        <li>
                            <img src="{{asset('img/006.jpg')}}" alt="mansão"/>
                            <div class="caption left-align">
                                <h3>Título da imagem</h3>
                                <h5>Descrição do slide</h5>
                            </div>
                        </li>
                        <li>
                            <img src="{{asset('img/007.jpg')}}" alt="mansão"/>
                            <div class="caption right-align">
                                <h3>Título da imagem</h3>
                                <h5>Descrição do slide</h5>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row" align="center">
                <button onclick="sliderPrev()" class="btn blue">Anterior</button>
                <button onclick="sliderNext()" class="btn blue">Próxima</button>
            </div>
        </div>
        <div class="col s12 m4">
            <h4>Título do imóvel</h4>
            <blockquote>
                Descrição do imóvel.
            </blockquote>
            <p><strong>Código:</strong> 123</p>
            <p><strong>Status:</strong> Vendido</p>
            <p><strong>Tipo:</strong> Vendido</p>
            <p><strong>Endereço:</strong> Rua Carlos Essenfelder, 4079</p>
            <p><strong>CEP:</strong> 81730060</p>
            <p><strong>Cidade:</strong> Curitiba</p>
            <p><strong>Valor:</strong> R$7.000.000,00</p>
            <a class="btn deep-orange" href="{{route('site.contato')}}">Entrar em contato</a>
        </div>
    </div>
</div>
@endsection

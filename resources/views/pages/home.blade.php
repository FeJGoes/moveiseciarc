@extends('institutional')

@section('title', 'Bem Vindo! Móveis&Cia')

@section('content')

<div class="banner-home uk-flex uk-flex-column">
    <img src="{{ asset('images/home.png') }}">
    
    <div class="uk-flex uk-flex-column uk-margin-large-left uk-margin-large-top uk-width-1-4@s uk-width-3-4">
        <img src="{{ asset('images/logo-branco.png') }}" alt="logo" width="60">
        <hr>
        <p class="text-p">Móveis e eletrodomésticos novos e usados. Aceitamos seu usado como base de troca em qualquer produto ou serviço.</p>
        <small class="text-p">Conheça melhor nossa empresa</small>
        <div class="uk-flex uk-flex-left uk-margin">
            <a href="{{ route('empresa') }}" class="uk-button uk-button-small btn-yellow btn-opacity-1-2">Empresa</a>
        </div>
    </div>
</div>

<div class="uk-text-center uk-margin-xlarge">
    <h3>Catálogos</h3>
    <div class="uk-flex uk-flex-center">
        <figure class="uk-margin-small">
            <img src="" alt="novos">
            <h4>Novos</h4>
        </figure>

        <figure class="uk-margin-small">
            <img src="" alt="usados">
            <h4>Usados</h4>
        </figure>

        <figure class="uk-margin-small">
            <img src="" alt="modelados">
            <h4>Modelados</h4>
        </figure>
    </div>

    <p class="uk-margin-xlarge-left uk-margin-xlarge-right">Hoje em dia, ter uma catálogo online é imprescindível. Você pode alcançar mais clientes, mais rapidamente e a qualquer momento. Os benefícios de ter seu catálogo sempre disponível online são infinitos</p>

    <small>Veja mais</small>
    <div class="uk-flex uk-flex-center">
        <a href="{{ route('catalogo') }}" class="uk-button uk-button-small btn-yellow">Catálogos</a>
    </div>
</div>

<div id="section-info-home" class="uk-padding">
    <h3>Contato</h3>
    <p class="uk-margin-xlarge-left uk-margin-xlarge-right">Entre em contato com a gente, esclareça suas dúvidas e confira como é nosso trabalho de perto, Diversos tipos de customização e móveis perfeitos para você, é só clicar abaixo!</p>

    <small>Veja mais</small>
    <div class="uk-flex uk-flex-center">
        <a href="{{ route('contato') }}" class="uk-button uk-button-small btn-yellow">contato</a>
    </div>
</div>
@endsection

@extends('layouts.institutional')

@section('title', 'Bem Vindo! Móveis&Cia')

@section('content')
<div class="uk-height-large uk-flex uk-flex-left uk-flex-middle uk-background-cover uk-light" data-src="{{ asset('images/home.png') }}" uk-img>
    <div class="uk-margin-xlarge-left uk-flex uk-flex-column uk-width-1-4">
        <img src="{{ asset('images/logo-branco.png') }}" alt="logo" width="60">
        <hr>
        <p>Móveis e eletrodomésticos novos e usados. Aceitamos seu usado como base de troca em qualquer produto ou serviço.</p>
        <small>Conheça melhor nossa empresa</small>
        <div class="uk-flex uk-flex-left uk-margin ">
            <button class="uk-button uk-button-small btn-yellow">Empresa</button>
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
        <button class="uk-button uk-button-small btn-yellow">Catálogos</button>
    </div>
</div>

<div id="section-info-home" class="uk-padding">
    <h3>Contato</h3>
    <p class="uk-margin-xlarge-left uk-margin-xlarge-right">Entre em contato com a gente, esclareça suas dúvidas e confira como é nosso trabalho de perto, Diversos tipos de customização e móveis perfeitos para você, é só clicar abaixo!</p>

    <small>Veja mais</small>
    <div class="uk-flex uk-flex-center">
        <button class="uk-button uk-button-small btn-yellow">contato</button>
    </div>
</div>
@endsection
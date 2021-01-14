@extends('templates.website')

@section('title', 'Catálogos - Móveis&Cia')

@section('content')
    <h3 class="uk-text-center uk-margin-large-top">Confira nossos catálogos</h3>
    <div class="uk-flex uk-flex-wrap uk-margin-large uk-flex uk-flex-around">

        <div class="app-card-catalog">
            <div class="uk-card uk-card-default">
                <div class="uk-card-media-top">
                    <img class="app-card-catalog-img" src="{{ asset('images/moveis1.jpg') }}" alt="">
                </div>
                <div class="uk-card-body">
                    <h3 class="uk-card-title">Media Top</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    <a href="#" class="uk-button uk-button-small btn-yellow">Ver detalhes</a>
                </div>
            </div>
        </div>

        <div class="app-card-catalog">
            <div class="uk-card uk-card-default">
                <div class="uk-card-media-top">
                    <img class="app-card-catalog-img" src="{{ asset('images/moveis2.jpg') }}" alt="">
                </div>
                <div class="uk-card-body">
                    <h3 class="uk-card-title">Media Top</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    <a href="#" class="uk-button uk-button-small btn-yellow">Ver detalhes</a>
                </div>
            </div>
        </div>

        <div class="app-card-catalog">
            <div class="uk-card uk-card-default">
                <div class="uk-card-media-top">
                    <img class="app-card-catalog-img" src="{{ asset('images/moveis3.jpg') }}" alt="">
                </div>
                <div class="uk-card-body">
                    <h3 class="uk-card-title">Media Top</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    <a href="#" class="uk-button uk-button-small btn-yellow">Ver detalhes</a>
                </div>
            </div>
        </div>

        <div class="app-card-catalog">
            <div class="uk-card uk-card-default">
                <div class="uk-card-media-top">
                    <img class="app-card-catalog-img" src="{{ asset('images/moveis1.jpg') }}" alt="">
                </div>
                <div class="uk-card-body">
                    <h3 class="uk-card-title">Media Top</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    <a href="#" class="uk-button uk-button-small btn-yellow">Ver detalhes</a>
                </div>
            </div>
        </div>

        <div class="app-card-catalog">
            <div class="uk-card uk-card-default">
                <div class="uk-card-media-top">
                    <img class="app-card-catalog-img" src="{{ asset('images/moveis2.jpg') }}" alt="">
                </div>
                <div class="uk-card-body">
                    <h3 class="uk-card-title">Media Top</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    <a href="#" class="uk-button uk-button-small btn-yellow">Ver detalhes</a>
                </div>
            </div>
        </div>

    </div>
@endsection

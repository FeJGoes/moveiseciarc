@extends('admin.index')

@php
$hideHeader = true;
$hideSidebar = true;
@endphp

@section('title', 'Login - Painel - Moveis&Cia')

@section('content')
    <form action="" method="POST" class="uk-form-stacked">
        @csrf
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Email</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="form-stacked-text" type="email" placeholder="digite seu email">
            </div>
        </div>

        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Senha</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="form-stacked-text" type="password" placeholder="digite sua senha">
            </div>
        </div>

        <button type="submit">Entrar</button>

    </form>
@endsection

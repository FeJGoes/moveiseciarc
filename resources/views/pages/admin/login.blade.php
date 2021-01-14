@extends('templates.admin')

@php
$hideHeader = true;
$hideSidebar = true;
@endphp

@section('title', 'Login - Painel - Moveis&Cia')

@section('content')
<section class="uk-width-1-1 uk-height-viewport uk-flex uk-flex-center uk-flex-middle">

  {{-- ALERT ERROR --}}
  @if ($errors->any())
  <div class="uk-alert-danger" uk-alert>
    <a class="uk-alert-close" uk-close></a>
    <p>{{$errors->first()}}</p>
  </div>
  @endif
  {{-- END ALERT ERROR --}}

  <form action="{{route('authenticate')}}" method="POST" class="uk-width-1-3 uk-flex uk-flex-column uk-flex-around uk-flex-middle">
    @csrf

    <div class="uk-width-1-1 uk-flex uk-flex-middle uk-flex-center">
      <label for="email">
        <span class="uk-margin-right-small">Email</span>
        <i class="fas fa-at"></i>
      </label>
      <input class="uk-input uk-form-blank uk-width-2-3 @error('email') uk-form-danger @enderror" id="email" name="email" type="email" value="{{old('email')}}">
      @error('email')
      <small class="uk-text-danger">{{$message}}</small>
      @enderror
    </div>

    <div class="uk-width-1-1 uk-flex uk-flex-middle uk-flex-center">
      <label for="password">
        <span class="uk-margin-right-small">Senha</span>
        <i class="fas fa-key"></i>
      </label>
      <input class="uk-input uk-form-blank uk-width-2-3 @error('password') uk-form-danger @enderror" id="password" name="password" type="password">
      @error('password')
      <small class="uk-text-danger">{{$message}}</small>
      @enderror
    </div>

    <button class="uk-button uk-button-small btn-yellow uk-width-2-3 uk-margin-auto" type="submit">Entrar</button>
  </form>
</section>
@endsection

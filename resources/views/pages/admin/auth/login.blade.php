@extends('templates.admin')

@section('title', 'Entrar - Área Restrita - Moveis&Cia')

@section('content')
<section class="uk-width-1-1 uk-height-viewport uk-flex uk-flex-column uk-flex-center uk-flex-middle bg-primary">

  <figure>
    <img width="125" src="{{asset('images/logo-branco.svg')}}" alt="moveis&cia">
  </figure>

  {{-- FEEDBACK --}}
  @if ($errors->any() || session()->exists('feedback'))
  <x-alert
    type="{{$errors->any() ? 'danger' : session('feedback.type')}}"
    message="{{$errors->any() ? $errors->first() : session('feedback.message')}}"
  />
  @endif
  {{-- END FEEDBACK --}}

  <form action="{{route('authenticate')}}" method="POST" class="uk-width-1-3 uk-flex uk-flex-column uk-flex-around uk-flex-middle">
    @csrf

    <div class="uk-width-5-6 uk-flex uk-flex-middle uk-flex-center uk-margin mc-bottom-line">
      <label for="email" class="uk-width-1-5 mc-text-primary">
        <i class="fas fa-at"></i>
        <span class="uk-margin-right-small">Email</span>
      </label>
      <input class="uk-input uk-form-blank uk-width-1-1 @error('email') uk-form-danger @enderror" id="email" name="email" type="email" value="{{old('email')}}">
    </div>

    <div class="uk-width-5-6 uk-flex uk-flex-middle uk-flex-center uk-margin mc-bottom-line">
      <label for="password" class="uk-width-1-5 mc-text-primary">
        <i class="fas fa-key"></i>
        <span class="uk-margin-right-small">Senha</span>
      </label>
      <input class="uk-input uk-form-blank uk-width-1-1 @error('password') uk-form-danger @enderror" id="password" name="password" type="password">
    </div>

    <button class="uk-button btn-yellow uk-width-2-3 uk-margin-top" type="submit">Entrar</button>
  </form>

</section>
@endsection

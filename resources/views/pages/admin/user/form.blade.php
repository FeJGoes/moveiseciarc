<form class="mc-form" action="{{$action}}" method="POST" enctype="{{$enctype ?? 'multipart/form-data'}}">
  {{-- CSRF PROTECTION --}}
  @csrf

  {{-- FORM SPOOFING METHOD --}}
  @if(!empty($method)) @method($method) @endif

  {{-- ALERT FEEDBACK ON SUBMIT --}}
  @if (Session::has('feedback'))
  <div class="uk-alert-{{Session::get('feedback.type')}} uk-width-1-4 uk-padding-small" uk-alert>
    <a class="uk-alert-close" uk-close></a>
    <p class="uk-margin-remove uk-text-center">
      <small>{{Session::get('feedback.message')}}</small>
    </p>
  </div>
  @endif
  {{-- END ALERT FEEDBACK ON SUBMIT --}}

  {{-- ALERT ERROR ON SUBMIT --}}
  @if ($errors->any())
  <div class="uk-alert-danger uk-width-1-4 uk-padding-small" uk-alert>
    <a class="uk-alert-close" uk-close></a>
    <p class="uk-margin-remove uk-text-center">
      <small>{{__('Ops! houve algum erro verifique os dados do formulário')}}</small>
    </p>
  </div>
  @endif
  {{-- END ALERT ERROR ON SUBMIT --}}


  {{-- FORM FIELDS --}}
  <fieldset class="uk-fieldset">
    <legend class="uk-legend">{{$legend ?? ''}} usuário</legend>

    <div class="uk-margin">
      <label for="name">Nome</label>
      <input class="uk-input" name="name" value="{{$user->name ?? ''}}" type="text" placeholder="">
    </div>

    <div class="uk-margin">
      <label for="email">Email</label>
      <input class="uk-input" name="email" value="{{$user->email ?? ''}}" type="email" placeholder="">
    </div>

    <div class="uk-margin">
      <label for="password">Senha</label>
      <input class="uk-input" name="password" type="password">
    </div>

    <div class="uk-margin">
      <label for="password">Confirmação senha</label>
      <input class="uk-input" name="password_confirmation" type="password">
    </div>

    <button class="uk-button btn-yellow uk-width-2-3 uk-margin-top" type="submit">{{$buttonText ?? 'Cadastrar'}}</button>
  </fieldset>
</form>

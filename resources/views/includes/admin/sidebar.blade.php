<aside class="sidebar">
  <figure class="uk-flex uk-flex-middle uk-flex-center uk-margin-top">
    <a href="{{route('dashboard')}}">
      <img src="{{asset('images/logo-branco.png')}}" alt="logo" width="90">
    </a>
  </figure>

  <div class="uk-flex uk-flex-column uk-flex-middle uk-flex-center uk-margin-bottom">
    <figure class="uk-flex uk-flex-middle uk-flex-center">
      <img src="#" alt="avatar" width="50" height="50">
    </figure>

    <h6 class="uk-margin-remove">Olá {{auth()->user()->name}}</h6>

    <a class="uk-margin-small-top" href="{{route('usuarios.edit',['user' => auth()->user()])}}">
      <i class="uk-margin-small-right fas fa-id-badge"></i>
      <small>Minha Conta</small>
    </a>
  </div>

  <nav class="uk-margin-large-top">
    <ul class="uk-list uk-flex uk-flex-column uk-flex-middle uk-flex-center">
      <li>
        <a href="{{route('usuarios.index')}}">
          <i class="uk-margin-small-right fas fa-users-cog"></i>
           Usuários
        </a>
      </li>

      <li>
        <a href="{{route('usuarios.index')}}">
          <i class="uk-margin-small-right fas fa-tags"></i>
           Produtos
        </a>
      </li>

      <li>
        <a href="{{route('usuarios.index')}}">
          <i class="uk-margin-small-right fab fa-leanpub"></i>
           Catálogos
        </a>
      </li>

      <li>
        <a href="{{route('logout')}}">
          <i class="uk-margin-small-right fas fa-sign-out-alt"></i>
           Sair
        </a>
      </li>
    </ul>
  </nav>
</aside>

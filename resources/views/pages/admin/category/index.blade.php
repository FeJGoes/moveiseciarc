@extends('templates.admin')

@section('title', 'Gerenciamento de Usuários - Admin - Móveis&Cia')

@section('content')

<section class="mc-table-container">

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

  <table class="uk-table uk-table-striped uk-table-hover uk-table-small uk-width-3-4">
    <thead>
      <tr>
        <th>Ativo</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Operações</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($users as $user)
      <tr>
        <td>
          <form id="user-{{$user->id}}-active-form" action="{{route('usuarios.update',['user' => $user->id])}}" method="POST">
            @method('PATCH')
            @csrf
            <input type="hidden" name="active" value="0">
            <label class="switch">
              <input type="checkbox" name="active" value="1" @if($user->active) checked @endif onchange="document.getElementById('user-{{$user->id}}-active-form').submit()">
              <span class="slider round"></span>
            </label>
          </form>
        </td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>
          <a class="uk-button uk-button-small uk-button-primary" href="{{route('usuarios.edit',['user' => $user->id])}}">
            <i class="fas fa-user-edit"></i>
          </a>

          <form action="{{route('usuarios.destroy',['user' => $user->id])}}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="uk-button uk-button-small uk-button-danger">
              <i class="fas fa-user-minus"></i>
            </button>
          </form>
        </td>
      </tr>
      @empty
      <tr>
        <td colspan="4" class="uk-alert-warning" uk-alert>
          <a class="uk-alert-close" uk-close></a>
          <p>Nenhum dado!</p>
        </td>
      </tr>
      @endforelse
    </tbody>
  </table>
</section>

@endsection

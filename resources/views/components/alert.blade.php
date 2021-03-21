<div class="uk-alert-{{$type}} uk-width-1-4 uk-padding-small" uk-alert>
  @if($dismissible)
  <a class="uk-alert-close" uk-close></a>
  @endif
  <p class="uk-margin-remove uk-text-center"><small>{{$message}}</small></p>
</div>

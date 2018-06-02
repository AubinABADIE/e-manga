@if (Auth::guard('web')->check())
  <a class="btn btn-default log-bar" href="/users/logout" role="button">Disconnect</a>
@else
  <a class="btn btn-default log-bar" href="/register" role="button">Sign up</a>
  <a class="btn btn-default log-bar" href="/login" role="button">Login</a>
@endif

@if (Auth::guest())
  <div class="btn-group">
    <button id="header-top-drop-2" type="button" class="btn dropdown-toggle btn-default btn-sm dropdown-toggle--no-caret" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-lock pr-2"></i>Ingresar</button>
    <ul class="dropdown-menu dropdown-menu-right dropdown-animation" aria-labelledby="header-top-drop-2">
      <li>
        <form class="login-form margin-clear" method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}
          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label class="control-label">Email</label>
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label class="control-label">Contraseña</label>
            <input id="password" type="password" class="form-control" name="password" required>

            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
          </div>
          <button type="submit" class="btn btn-gray btn-sm">Ingresar</button>
          <ul>
            <li><a class="btn btn-link" href="{{ route('password.request') }}">Olvide mi contraseña</a></li>
          </ul>
        </form>
      </li>
    </ul>
  </div>
@else
  <div class="btn-group">
    <button id="header-top-drop-2" type="button" class="btn dropdown-toggle btn-default btn-sm dropdown-toggle--no-caret"
    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-lock pr-2"></i>  {{ Auth::user()->name }} <span class="caret"></span></button>
    <ul class="dropdown-menu dropdown-menu-right dropdown-animation" aria-labelledby="header-top-drop-2">
      <li class="dropdown">
                  <a href="{{ route('administrator') }}">
                      Administrar
                  </a>
      </li>
      <li class="dropdown">
                  <a href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                      Salir
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>


      </li>

    </ul>
    </div>
{{-- <div class="btn-group">
  <a href="page-signup.html" class="btn btn-default btn-sm"><i class="fa fa-user pr-2"></i> Sign Up</a>
</div> --}}
@endif

<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name') }}</title>

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{{ asset('css/custom.css') }}}" rel="stylesheet">
  <link href="{{{ asset('css/admin.css') }}}" rel="stylesheet">

  <!-- Scripts -->
  <script>
      window.Laravel = {!! json_encode([
          'csrfToken' => csrf_token(),
      ]) !!};
  </script>
</head>
<body>
  <div class="main-center">
    <div class="admin-login-box">
      <img src="/image/GiztechProLogo.png" alt="Giztech Pro" />
      <h2>{{ config('app.name') }} -Admin-</h2>
      {!! Form::open(['route' => 'admin.login']) !!}
        <div class="form-wrap">
          <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
            {!! Form::input('text', 'name', old('name'), ['class' => 'form-control', 'placeholder' => 'Admin user name', 'autocomplete' => 'off']) !!}
            @if ($errors->has('name'))
              <span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
            @endif
          </div>
  
          <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
            {!! Form::input('password', 'password', null, ['class' => 'form-control', 'placeholder' => 'Your password']) !!}
            @if ($errors->has('password'))
              <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
            @endif
          </div>
        </div>

        <div class="form-group admin-login-btn">
          {!! Form::button('Login', ['type' => 'submit', 'class' => 'btn']) !!}
          <div class="forget-password-box">
            <a class="btn-forget" href="">Forget the password</a>
          </div>
        </div>
      {!! Form::close() !!}
    </div>
  </div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

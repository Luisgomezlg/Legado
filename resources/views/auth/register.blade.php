@extends('layouts.app2')

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Login</title>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
</head>
<script
src="https://code.jquery.com/jquery-3.3.1.js"></script>

  <style media="screen">
  .contenido{
    padding: 150px;
  }
  </style>
  <div class="contenido">
  <div class="container">
  <div class="row justify-content-center">
  <div class="col-md-8">
  <div class="card">
  <div class="card-header">{{ __('Register') }}</div>
  <div class="card-body">
  <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
          @csrf
          <div class="form-group row">
  <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
              <div class="col-md-6">
  <input id="nombre" type="text" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" name="nombre" value="{{ old('nombre') }}" required autofocus>
          @if ($errors->has('nombre'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('nombre') }}</strong>
              </span>
          @endif
              </div>
        </div>
        <div class="form-group row">
  <label for="apellido" class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>
              <div class="col-md-6">
  <input id="apellido" type="text" class="form-control{{ $errors->has('apellido') ? ' is-invalid' : '' }}" name="apellido" value="{{ old('apellido') }}" required autofocus>
          @if ($errors->has('apellido'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('apellido') }}</strong>
              </span>
          @endif
              </div>
        </div>
      <div class="form-group row">
  <label for="fecha_nacimiento" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de nacimiento') }}</label>
            <div class="col-md-6">
  <input id="fecha_nacimiento" type="date" class="form-control{{ $errors->has('fecha_nacimiento') ? ' is-invalid' : '' }}" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" required autofocus>
          @if ($errors->has('fecha_nacimiento'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('fecha_nacimiento') }}</strong>
              </span>
          @endif
            </div>
      </div>

        <div class="form-group row">
  <label for="tipo_identificacion" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de documento') }}</label>
            <div class="col-md-6">
  <input id="tipo_identificacion" type="text" class="form-control{{ $errors->has('tipo_identificacion') ? ' is-invalid' : '' }}" name="tipo_identificacion" value="{{ old('tipo_identificacion') }}" required autofocus>
          @if ($errors->has('tipo_identificacion'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('tipo_identificacion') }}</strong>
              </span>
          @endif
            </div>
      </div>
          <div class="form-group row">
  <label for="numero_identificacion" class="col-md-4 col-form-label text-md-right">{{ __('Numero de documento') }}</label>
              <div class="col-md-6">
  <input id="numero_identificacion" type="text" class="form-control{{ $errors->has('numero_identificacion') ? ' is-invalid' : '' }}" name="numero_identificacion" value="{{ old('numero_identificacion') }}" required autofocus>
          @if ($errors->has('numero_identificacion'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('numero_identificacion') }}</strong>
              </span>
          @endif
              </div>
          </div>
          <div class="form-group row">
  <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo electrónico') }}</label>
                <div class="col-md-6">
  <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
          @if ($errors->has('email'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
          @endif
                </div>
          </div>
            <div class="form-group row">
  <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>
                  <div class="col-md-6">
  <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
          @if ($errors->has('password'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('password') }}</strong>
              </span>
          @endif
                  </div>
            </div>
              <div class="form-group row">
  <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar contraseña') }}</label>
                  <div class="col-md-6">
  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                  </div>
              </div>
              <div class="form-group row mb-0">
                  <div class="col-md-6 offset-md-4">
      <button type="submit" class="btn btn-primary">
          {{ __('Register') }}
      </button>
                  </div>
              </div>
  </form>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>

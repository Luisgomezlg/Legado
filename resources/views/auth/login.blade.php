@extends('layouts.app2');
<head>
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
    <!-- Styles -->

    <style media="screen">
      .margen{
        margin: 10%;
      }
      .logo4 img{
        height: 25px;
      }

    </style>
    <body>
      <div class="margen">
      <div class="container">
          <div class="row">
              <div class="col-md-4 col-md-offset-4">
          <div class="panel panel-default">
              <div class="panel-heading">
                <div class="logo4">
                  <img src="img/legado4.jpg" alt="">
                </div>
  <h1 class="text-center panel-title">Inicio de sección</h1>
                  </div>
                  <div class="panel-body">
        <form method="post" action="{{route('login')}}">
              @csrf
                  <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                      <label for="email">Email</label>
                  <input type="email" placeholder="Ingrese email" value="{{old('email')}}" class="form-control" name="email"/>
                  {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                  </div>
                   <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }} " >
                       <label for="password">Contraseña</label>
                  <input  type="password" placeholder="Ingrese contraseña" class="form-control" name="password"/>
                   {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                  </div>

                  <input type="submit"  class="btn btn-primary btn-block" value="Entrar"/>

                    <a class="btn btn-link" href="{{ route('register') }}">
                    {{ __('Registrarse  ') }}
                    </a>
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('¿Has olvidado su contraseña?') }}
                    </a>
              </form>
              </div>
              </div>
          </div>
           </div>
       </div>
           </div>
    </body>

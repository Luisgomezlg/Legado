<!DOCTYPE html>
<html>
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

  <script type="text/javascript">
    $(window).on('scroll', function(){
      if ($(window).scrollTop()) {
        $('nav').addClass('black');
      }
      else{
        $('nav').removeClass('black');
      }
    })
    </script>
        <!-- Styles -->
  <style>
        body{
                margin: 0;
                  padding: 0;
                  font-family: sans-serif;
                    }
                    header{

                  position: fixed;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 80px;
                        padding: 10px 10px;
                        box-sizing: border-box;
                        transition: .5s;
                        background: #000;

                    }
                    nav{
                      position: fixed;
                      top: 0;
                      left: 0;
                      width: 100%;
                      height: 80px;
                      padding: 10px 10px;
                      box-sizing: border-box;
                      transition: .5s;
                      background: #000;
                    }
                    nav.black{
                      background: rgba(0, 0, 0, 9);
                      height: 80px;
                      padding: 10px 50px;
                    }
                    nav.black ul li a{
                      color: #fff;
                      line-height: 60px;

                    }
                    nav .logo{
                      float: left;
                      padding-right: 80px;
                    }
                    nav .logo img{
                      height: 60px;
                      transition: .5s;

                    }
                    nav .logo img .holas{
                      height: 80px;
                      transition: .5s;

                    }
                    nav.black .logo{
                      height: 60px;

                    }
                    nav ul{
                      margin: 0;
                      padding: 0;
                      display: flex;
                    }
                    .hola{
                    float: right;
                    padding-top: 15px;
                    padding-left: 300px;
                    }
                    .holas{
                      position:absolute;
                      right: 120px;
                      top:30px;


                      }
                      .holas a{
                        color: #fff;
                        float: left;
                        }
                        .holas li{
                          color: #fff;
                          float: left;
                            list-style: none;
                          }


                    nav ul li{
                      list-style: none;
                    }
                    nav ul li a {
                      line-height: 65px;
                      color: #fff;
                      padding: 10px 20px;
                      text-decoration: none;
                      text-transform: uppercase;
                      transition: .5s;
                    }
                    nav ul li a.active, nav ul li a:hover {
                      color: #fff;
                      background: #f00;
                    }
                
                    @media screen and (max-width:1400px){
                      header nav {
                      width: 80%;
                      height: 100%;
                      margin: 0;
                      position: fixed;

                      }
                      .holas{
                        display: none;

                        }
                      header nav ul  li a{
                       display: block;
                       float: none;
                     }

                       .menu_bar {
                        display: block;
                        width: 100%;
                         background: #000;
                      }

                      .menu_bar .bt-menu{
                        display: block;
                        padding: 20px;
                        background: #000;
                        color: #fff;
                        text-decoration: none;
                        font-weight: bold;
                        font-size: 25px;
                        -webkit-box-sizing:border-box;
                        -moz-box-sizing:border-box;
                        box-sizing:border-box;
                      }
                      .menu_bar span {
                        float: right;
                        font-size: 40px;
                      }
                    }
                  </style>

    <body>
      <nav class="">
          <div class="logo">
          <a href=""><img src="img/legado.jpg" alt=""></a>
          </div>
          <div class="">
              <ul>
            <li> <a href="{{ url('/') }}" class="active">Home</a></li>
            <li><a href="">Novedades</a></li>
            <li><a href="">Hombre</a></li>
            <li><a href="">Mujer</a></li>
            <div class="hola">
              <div class="col-md-12">
                <input type="search" placeholder="Buscar" class="form-control" name="" value="">
              </div>
            </div>
          </ul>
        </div>
            <div class="holas">
              @guest
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                      </li>
                  @else
                      <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="dropdown" href="dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->nombre }} <span class="caret"></span>
                            </a>
                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                  {{ __('Cerrar sección') }}
                              </a>
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                              </form>
                          </div>
                      </li>
                  @endguest
            </div>


          <!-- Authentication Links -->
          </div>
      </nav>



</body>

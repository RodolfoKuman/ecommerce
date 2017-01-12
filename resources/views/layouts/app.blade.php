<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Kuman store') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/material-fullpalette.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/ripples.min.css">

    <link href="{{ url('/css/app.css')}}" rel="stylesheet">
    <link href="{{ url('/css/font-awesome.css')}}" rel="stylesheet">
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-inverse navbar-default  navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        Librerias shakespeare
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li><a>Novedades</a></li>
                        <li><a>Categorias</a></li>
                        <li><a>Promociones</a></li>
                        <li><a>Articulos</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        <li>
                          <a class="fa fa-shopping-cart" href="{{ url('carrito') }}">

                            <span class="circle-shopping-cart" >
                              {{$productsCount}}
                            </span></a>
                        </li>
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                        <li>
                            <a href="{{ url('/logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')

    </div>

    <footer class="container-fluid">
   		<div class="col-xs-12 col-sm-6 col-md-3" id="social-media">
   			<h3>Siguenos en</h3>
   			<ul>
   				<li><i class="fa fa-facebook" aria-hidden="true"></i></li>
   				<li><i class="fa fa-twitter" aria-hidden="true"></i></li>
   				<li><i class="fa fa-youtube" aria-hidden="true"></i></li>
   			</ul>
   		</div>
   		<div class="col-xs-12 col-sm-6 col-md-3" id="sitemap">
   			<h3>Sitemap</h3>
   			<ul>
   				<li><a href=""></a>Inicio</li>
   				<li><a href=""></a>Novedades</li>
   				<li><a href=""></a>Promociones</li>
   				<li><a href=""></a>Categorias</li>
   				<li><a href=""></a>Accesorios</li>
   			</ul>
   		</div>
   		<div class="col-xs-12 col-sm-6 col-md-3" id="sucursales">
   			<h3>Sucursales</h3>
   			<ul>
   				<li>Cancún</li>
   				<li>Monterrey</li>
   				<li>Guadalajara</li>
   				<li>Acapulco</li>
   				<li>Morelia</li>
   			</ul>
   		</div>
   		<div class="col-xs-12 col-sm-3 col-md-3" id="credit-card">
   			<h3>Formas de pago</h3>
   			<ul>
   				<li><i class="fa fa-cc-mastercard" aria-hidden="true"></i></li>
   				<li><i class="fa fa-cc-visa" aria-hidden="true"></i></li>
   				<li><i class="fa fa-cc-paypal" aria-hidden="true"></i></li>
   			</ul>
   		</div>
      <div>
        <p> Librerias shakespeare  | Todos los derechos reservados 2016</p>
      </div>
   </footer>


    <!-- Scripts -->
    <script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/material.min.js"></script>
  <script>
      $.material.init();
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
    <script src="{{ url('/js/app.js')}}"></script>
</body>
</html>

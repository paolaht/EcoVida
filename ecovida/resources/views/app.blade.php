<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

<link href="{{ asset('/css/menuVertical.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

  <link href="css/font-awesome.min.css" rel="stylesheet">


	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<div class="fijo">
	<nav class="navbar navbar-default" >
		<div class="container-fluid" >
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">

					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{ url('principal') }}">EcoVida</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


				<ul class="nav navbar-nav navbar-right">

					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}">Iniciar Sesión</a></li>
						<li><a href="{{ url('/auth/register') }}">Registrarme</a></li>
					@else
					<li class="sobre"><a href="{{ url('contenidos') }}"><img src="images/note.png" alt=""> </a></li>
				<li class="usuario"><img src="images/user.png" alt=""></li>
					<li ><a href=""> {{ Auth::user()->name }}</a></li>
					<li style="background: #009797;"><a href="{{ url('/auth/logout') }}">Cerrar Sesión</a></li>


						<!--<li class="dropdown">-->
						<!--	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>-->
						<!--	<ul class="dropdown-menu" role="menu">-->

						<!--	</ul>-->
						<!--</li>-->
					@endif
				</ul>
			</div>
		</div>
	</nav>
	</div>
<div class="row">
		@if (!Auth::guest())

	@if (Auth::user()->tipo=="Admin")
	<div class="col-sm-2 vertical" >
<ul>
		<li><p>CONTENIDO DEL SITIO </p></li>
	<li><a href="{{ url('contenidos') }}">Contenidos</a></li>
	<li><a href="{{ url('contactos') }}">Contacto</a></li>
	  	<li><a href="{{ url('alianzas') }}">Alianzas</a></li>
	  	<li><p>PRODUCTOS</p></li>
  	<li><a href="">Paneles solares</a></li>
  	<li><a href="">Ahorradores de agua</a></li>
  	<li><a href="">Ventas</a></li>
  	<li><p>CONSTRUCTORA</p></li>
  	<li><a href="">Materiales</a></li>
  	<li><a href="">Modelos</a></li>

</ul>
	</div>
		@endif
	@endif
	<div class="col-md-offset-3 col-sm-8">
	@yield('content')
	</div>
</div>
	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>

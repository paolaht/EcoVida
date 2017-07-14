@section('content')


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Servicios EcoVida</title>

        <link href="{{ asset('/css/menuVertical.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

        <link href="../css/font-awesome.min.css" rel="stylesheet">


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
                        <a class="navbar-brand titulo" href="{{ url('welcome') }}">EcoVida</a>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                        <ul class="nav navbar-nav navbar-right">

                            @if (Auth::guest())
                            <li><a href="{{ url('/auth/login') }}">Iniciar Sesión</a></li>
                            <li><a href="{{ url('/auth/register') }}">Registrarme</a></li>
                            @else
                            {{--*/ $sinLeer =  0;  /*--}}



                            @foreach($mensajes as $mensaje)
                            @if(Auth::user()->tipo=="Cliente")
                            @if($mensaje->leido==0 && $mensaje->usuario==Auth::user()->email && $mensaje->tipo=="Admin")



                            {{--*/ $sinLeer = $sinLeer +1;  /*--}}


                            @endif
                            @else
                            @if($mensaje->leido==0 && $mensaje->tipo=="Cliente")



                            {{--*/ $sinLeer = $sinLeer +1;  /*--}}


                            @endif
                            @endif
                            @endforeach


                            @if($sinLeer==0)
                            <li class="sobre"><a href="{{ url('mensajes') }}"><img src="images/mensajes/mensaje0.png" alt=""> </a></li>
                            @endif
                            @if($sinLeer>=1)


                            {{--*/ $prueba =  Auth::user()->email."*".Auth::user()->tipo;  /*--}}



                            <li class="sobre">
                                {!! Form::model($mensaje, ['route' => ['mensajes.update', $prueba], 'method' => 'patch']) !!}


                                <a href="{{ url('mensajes') }}"  style="padding-bottom: 0;"><button type="submit" style="background: none;border: none;margin-top: 25%;"><img src="images/mensajes/mensaje1.png" alt=""> </button></a>



                                {!! Form::close() !!}

                            </li>


                            @endif

                            <li class="usuario"><img src="images/user.png" alt=""></li>
                            <li ><a href=""> {{ Auth::user()->name }}</a></li>
                            <li style="background: #009797;height: 54px;"><a href="URL::to('salir')">Cerrar Sesion</a></li>


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
                    <li><p> </p></li>
                    <li><p>CONTENIDO DEL SITIO </p></li>
                    <li><a href="{{ url('contenidos') }}">Contenidos</a></li>
                    <li><a href="{{ url('contactos') }}">Contacto</a></li>
                    <li><a href="{{ url('alianzas') }}">Alianzas</a></li>
                    <li><p>PRODUCTOS</p></li>
                    <li><a href="{{ url('paneles') }}">Paneles solares</a></li>
                    <li><a href="{{ url('ahorradores') }}">Ahorradores de agua</a></li>
                    <li><a href="{{ url('compras') }}">Ventas</a></li>
                    <li><a href="{{ url('mantenimientos') }}">Mantenimiento de productos</a></li>
                    <li><p>CONSTRUCTORA</p></li>
                    <li><a href="{{ url('materials') }}">Materiales</a></li>
                    <li><a href="{{ url('modelos') }}">Modelos</a></li>
                    <li><a href="{{ url('productos') }}">Productos</a></li>

                </ul>
            </div>
            @else
            <div class="col-sm-2 vertical" >
                <ul>
                    <li><p> </p></li>
                    <li><p>MODELOS DE CASA PARA CONSTRUCCIÓN </p></li>
                    <li><a href="">Cotizar modelo</a></li>
                    <li><a href="">Mis cotizaciones</a></li>
                    <li><p>PRODUCTOS</p></li>
                    <li><a href="">Productos de interes</a></li>
                    <li><a href="">Mis compras</a></li>
                    <li><a href="">Matenimientos</a></li>
                </ul>
            </div>
            @endif
            @endif
            <div class="col-sm-8">
                @yield('content')
            </div>
        </div>
        <!-- Scripts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../js/main.js"></script>
    </body>
</html>

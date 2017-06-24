<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>EcoVida </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">


  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="images/favicon.ico">
  </head><!--/head-->

  <body>

   <!--.preloader-->
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  <!--/.preloader-->

  <header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url(images/slider/1.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Bienvenido a <span>EcoVida</span></h1>
            <p class="animated fadeInRightBig">Construcción - Calentadores Solares - Ahorradores de agua </p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#EcoVida">Comenzar</a>
          </div>
        </div>
        <div class="item" style="background-image: url(images/slider/2.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">EcoVida <span>Construcciones</span></h1>
            <p class="animated fadeInRightBig">sdffg - sdfgfdg - dfgdfg - dfgdfgfdg</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#Constructora">Ir</a>
          </div>
        </div>
        <div class="item" style="background-image: url(images/slider/3.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">EcoVida <span>Calentadores Solares</span></h1>
            <p class="animated fadeInRightBig">sdffg - sdfgfdg - dfgdfg - dfgdfgfdg</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#Calentadores">Ir</a>
          </div>
        </div>
         <div class="item" style="background-image: url(images/slider/4.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">EcoVida <span>Ahorradores de agua</span></h1>
            <p class="animated fadeInRightBig">sdffg - sdfgfdg - dfgdfg - dfgdfgfdg</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#Ahorradores">Ir</a>
          </div>
        </div>
      </div>
      <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

      <a id="tohash" href="#EcoVida"><i class="fa fa-angle-down"></i></a>

    </div><!--/#home-slider-->
    <div class="main-nav">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>

          </button>
          <a class="navbar-brand" href="#home">
            <h1><img class="img-responsive" src="" alt=""></h1>
          </a>
        </div>
        <div class="menuPrin">
          <ul class="nav navbar-nav navbar-right">
            	@if (Auth::guest())
            <li class="scroll"><a href="{{ url('/auth/login') }}" style="font-weight: 600;font-size: medium;color: #fff;">INGRESAR</a></li>
            <li class="scroll"><a href="{{ url('/auth/register') }}" style="font-weight: 600;font-size: medium;">REGISTRARME</a></li>
             @else
             <li class="scroll"><a href="{{ url('/app') }}" style="font-weight: 600;font-size: medium;color: #fff;"> {{ Auth::user()->name }}</a></li>
            <li class="scroll"><a href="{{ url('/auth/logout') }}" style="font-weight: 600;font-size: medium;">CERRAR SESIÓN</a></li>
              @endif
          </ul>
        </div>
          <div class="collapse navbar-collapse menuSeg">
          <ul class="nav navbar-nav navbar-right">
            <li class="scroll"><a href="#EcoVida">SOBRE NOSOTROS</a></li>
            <li class="scroll"><a href="#Constructora">CONSTRUCTORA</a></li>
            <li class="scroll"><a href="#Calentadores">PANELES SOLARES</a></li>
            <li class="scroll"><a href="#Ahorradores">AHORRADORES DE AGUA</a></li>
            <li class="scroll"><a href="#contact">CONTACTO</a></li>
          </ul>
        </div>
    </div><!--/#main-nav-->

  </header><!--/#home-->
    <section id="EcoVida">
      <div class="container">
        <div class="heading wow fadeInUp text-center" data-wow-duration="1000ms" data-wow-delay="300ms">
          <h1 style="font-size:90px;color:#4D545D;margin-bottom: 50px;    margin-top: 90px">Eco<span style="color:#00B1B3">Vida</span></h1>
        </div>
        <div class="text-center our-services">

          <div class="row">

            <div class="col-sm-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
              <div class="service-icon">
                <i class="fa fa-globe"></i>
              </div>
              <div class="service-info">
                <h3>ECOLOGÍA</h3>
                <p class="contenido"><?=$Ecología?></p>
              </div>
            </div>
            <div class="col-sm-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
              <div class="service-icon">
                <i class="fa fa-pencil"></i>
              </div>
              <div class="service-info">
                <h3>DISEÑO</h3>
                <p class="contenido"><?=$Diseño?></p>
                </div>
            </div>
            <div class="col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="650ms">
              <div class="service-icon">
                <i class="fa fa-comments-o"></i>
              </div>
              <div class="service-info">
                <h3>SOPORTE</h3>
                <p class="contenido"><?=$Soporte?></p>
                </div>
            </div>
            <div class="col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="750ms">
              <div class="service-icon">
                <i class="fa fa-circle-o-notch"></i>
              </div>
              <div class="service-info">
                <h3>ECONOMÍA</h3>
                <p class="contenido"><?=$Economía?></p>
                </div>
            </div>

          </div>
        </div>
      </div>
    </section><!--/#services-->
    <section id="about-us" class="parallax">

      <div class="container">
        <div class="row">
          <div class="col-sm-8">
            <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
              <h1>Sobre nosotros</h1>
                <h3>Misión</h3>
                  <p class="contenido"><?=$Misión?></p>
                <h3>Visión</h3>
                  <p class="contenido"><?=$Visión?></p>


            </div>
          </div>
          <div class="col-sm-4 pedro">
            <h2>Ahorro comprobado</h2>

            <div class="our-skills wow fadeInDown " data-wow-duration="1000ms" data-wow-delay="300ms">
             <div class="single-skill wow fadeInDown " data-wow-duration="1000ms" data-wow-delay="500ms">
              <p class="lead">Energía electrica</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="90">70%</div>
              </div>
            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
              <p class="lead">Agua</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="65">65%</div>
              </div>
            </div>
        </div>
      </div>
    </div>
    </div>
  </section><!--/#about-us-->

  <section id="Constructora">
    <div class="container">
      <div class="row ">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>Construcciones</h2>

                  <p class="contenido"><?=$Construcciones?></p>

          </div>
      </div>
      <div class="catalogo">
        <div class="row">
          <div class="col-sm-6">
            <div class="catalogo wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="catalogo-construc-image">
                <img class="img-responsive" src="images/construcciones/1.jpg" alt="">
              </div>
              <div class="info">
                <h3>Modelo dgthfgh</h3>
                <h4>fdhgfh ft hfgjgh tyjtfhjghj</h4>
                <p><a href="">ver más...</a></p>
              </div>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="catalogo wow flipInY" data-wow-duration="1000ms" data-wow-delay="1100ms">
              <div class="catalogo-construc-image">
                <img class="img-responsive" src="images/construcciones/1.jpg" alt="">
              </div>
              <div class="info">
                <h3> Modelo dgthfgh</h3>
                <h4>fdhgfh ft hfgjgh tyjtfhjghj</h4>
                <p><a href="">ver más...</a></p>
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="load-more wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
        <a href="{{ url('constructora') }}" target="_blank" class="btn-loadmore"><i class="fa fa-repeat"></i> ver más</a>
      </div>
    </div>
  </section><!--/#constructora-->

  <section id="registro" class="parallax">
    <div class="container">
     <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
      <H3>Registrese con nosotros</H3>
    </div>

    <div class="row count">
      <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
        <i class="fa fa-user"></i>
        <h3 >Personalización</h3>
        <p>de usuarios</p>
      </div>
      <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
        <i class="fa fa-envelope"></i>
        <h3 >Cotizaciones</h3>
        <p> en linea</p>
      </div>
      <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="700ms">
        <i class="fa fa-circle-o-notch"></i>
        <h3 >Control</h3>
        <p>mantenimiento</p>
      </div>
      <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="900ms">
        <i class="fa fa-comment-o"></i>
        <h3>24/7</h3>
        <p>Soporte</p>
      </div>
    </div>
    <div class="item">
      <div class="caption">

        <a data-scroll class="btn btn-start animated fadeInUpBig" href="{{ url('/auth/login') }}" target="_blank">Ingresar</a>
      </div>
    </div>
  </div>
</section><!--/#features-->

<section id="Calentadores">
  <div class="container">
    <div class="row">
      <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
        <h2>Paneles Solares</h2>
        <p class="contenido"><?=$Paneles?></p>
        </div>
    </div>
    <div class="catalogos">
      <div class="row">
        <div class="col-sm-3">
          <div class="catalogo wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="catalogo-image">
              <img class="img-responsive" src="images/calentadores/1.jpg" alt="">
            </div>
            <div class="info">
              <h3>dgthfgh</h3>
              <h4>fdhgfh ft hfgjgh tyjtfhjghj</h4>
              <p><a href="vista_panel.php" target="_blank">ver más...</a></p>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="catalogo wow flipInY" data-wow-duration="1000ms" data-wow-delay="500ms">
            <div class="catalogo-image">
              <img class="img-responsive" src="images/calentadores/2.jpg" alt="">
            </div>
            <div class="info">
              <h3>dgthfgh</h3>
              <h4>fdhgfh ft hfgjgh tyjtfhjghj</h4>
              <p><a href="vista_panel.php" target="_blank">ver más...</a></p>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="catalogo wow flipInY" data-wow-duration="1000ms" data-wow-delay="800ms">
            <div class="catalogo-image">
              <img class="img-responsive" src="images/calentadores/3.jpg" alt="">
            </div>
            <div class="info">
              <h3>dgthfgh</h3>
              <h4>fdhgfh ft hfgjgh tyjtfhjghj</h4>
              <p><a href="vista_panel.php" target="_blank">ver más...</a></p>
            </div>

          </div>
        </div>

        <div class="col-sm-3">
          <div class="catalogo wow flipInY" data-wow-duration="1000ms" data-wow-delay="1100ms">
            <div class="catalogo-image">
              <img class="img-responsive" src="images/calentadores/4.jpg" alt="">
            </div>
            <div class="info">
              <h3>dgthfgh</h3>
              <h4>fdhgfh ft hfgjgh tyjtfhjghj</h4>
              <p><a href="vista_panel.php" target="_blank">ver más...</a></p>
            </div>

          </div>
        </div>
      </div>
    </div>
    <div class="load-more wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
      <a href="{{ url('paneles') }}" target="_blank" class="btn-loadmore"><i class="fa fa-repeat"></i> ver más</a>
    </div>
  </div>
</section><!--/#Calentadores-->

 <!--/ <section id="pricing">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>Pricing Table</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
        </div>
      </div>
      <div class="caracteristicas">
        <div class="row">
          <div class="col-sm-3">
            <div class="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
              <h3>Basic</h3>
              <div class="price">
                $9<span>/Month</span>
              </div>
              <ul>
                <li>Free Setup</li>
                <li>10GB Storage</li>
                <li>100GB Bandwith</li>
                <li>5 Products</li>
              </ul>
              <a href="#" class="btn btn-lg btn-primary">Sign up</a>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="500ms">
              <h3>Standard</h3>
              <div class="price">
                $19<span>/Month</span>
              </div>
              <ul>
                <li>Free Setup</li>
                <li>10GB Storage</li>
                <li>100GB Bandwith</li>
                <li>5 Products</li>
              </ul>
              <a href="#" class="btn btn-lg btn-primary">Sign up</a>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="single-table featured wow flipInY" data-wow-duration="1000ms" data-wow-delay="800ms">
              <h3>Featured</h3>
              <div class="price">
                $29<span>/Month</span>
              </div>
              <ul>
                <li>Free Setup</li>
                <li>10GB Storage</li>
                <li>100GB Bandwith</li>
                <li>5 Products</li>
              </ul>
              <a href="#" class="btn btn-lg btn-primary">Sign up</a>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="1100ms">
              <h3>Professional</h3>
              <div class="price">
                $49<span>/Month</span>
              </div>
              <ul>
                <li>Free Setup</li>
                <li>10GB Storage</li>
                <li>100GB Bandwith</li>
                <li>5 Products</li>
              </ul>
              <a href="#" class="btn btn-lg btn-primary">Sign up</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>-->

  <section id="caracteristicas" class="parallax">
    <div>
      <a class="caracteristicas-left-control" href="#caracteristicas-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="caracteristicas-right-control" href="#caracteristicas-carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <div class=" text-center">
              <i class="fa fa-heart"></i>
              <h4>Porque utilizar nuestro productos</h4>
            </div>
            <div id="caracteristicas-carousel" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="item active wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <p class="contenido"><?=$Razón1?></p>
                </div>
                <div class="item">
                  <p class="contenido"><?=$Razón2?></p>
                 </div>
                <div class="item">
                  <p class="contenido"><?=$Razón3?></p>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#caracteristicas-->

  <section id="Ahorradores">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>Ahorradores de agua</h2>

        <p class="contenido"><?=$Ahorradores?></p>
           </div>
      </div>
      <div class="catalogos">
        <div class="row">
          <div class="col-sm-3">
            <div class="catalogo wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="catalogo-image">
                <img class="img-responsive" src="images/ahorradores/1.jpg" alt="">
              </div>
              <div class="info">
                <h3>dgthfgh</h3>
                <h4>fdhgfh ft hfgjgh tyjtfhjghj</h4>
                <p><a href="">ver más...</a></p>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="catalogo wow flipInY" data-wow-duration="1000ms" data-wow-delay="500ms">
              <div class="catalogo-image">
                <img class="img-responsive" src="images/ahorradores/1.jpg" alt="">
              </div>
              <div class="info">
                <h3>dgthfgh</h3>
                <h4>fdhgfh ft hfgjgh tyjtfhjghj</h4>
                <p><a href="">ver más...</a></p>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="catalogo wow flipInY" data-wow-duration="1000ms" data-wow-delay="800ms">
              <div class="catalogo-image">
                <img class="img-responsive" src="images/ahorradores/1.jpg" alt="">
              </div>
              <div class="info">
                <h3>dgthfgh</h3>
                <h4>fdhgfh ft hfgjgh tyjtfhjghj</h4>
                <p><a href="">ver más...</a></p>
              </div>

            </div>
          </div>

          <div class="col-sm-3">
            <div class="catalogo wow flipInY" data-wow-duration="1000ms" data-wow-delay="1100ms">
              <div class="catalogo-image">
                <img class="img-responsive" src="images/ahorradores/1.jpg" alt="">
              </div>
              <div class="info">
                <h3>dgthfgh</h3>
                <h4>fdhgfh ft hfgjgh tyjtfhjghj</h4>
                <p><a href="">ver más...</a></p>
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="load-more wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
        <a href="{{ url('ahorradores') }}" class="btn-loadmore"><i class="fa fa-repeat"></i> ver más</a>
      </div>
    </div>
  </section><!--/#Ahorradores-->
  <section id="contact">
   <!--/ <div id="google-map" class="wow fadeIn" data-latitude="52.365629" data-longitude="4.871331" data-wow-duration="1000ms" data-wow-delay="400ms"></div>-->
   <div id="contact-us" class="parallax">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" style="padding-top: 35px;" data-wow-duration="1000ms" data-wow-delay="300ms">
          <h2>Contactános</h2>
         </div>
      </div>
      <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
        <div class="row">
          <div class="col-sm-6">
            <form id="main-contact-form" name="contact-form" method="post" action="#">
              <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Nombre" required="required">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Correo" required="required">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" name="subject" class="form-control" placeholder="Asunto" required="required">
              </div>
              <div class="form-group">
                <textarea name="message" id="message" class="form-control" rows="4" placeholder="Mensaje" required="required"></textarea>
              </div>
              <div class="form-group">
                <button type="submit" class="btn-submit">Enviar</button>
              </div>
            </form>
          </div>
          <div class="col-sm-6">
            <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
              <p><?=$encabezado?></p>
              <ul class="address">
                <li><i class="fa fa-map-marker"></i> <span> Dirección:</span><?=$dirección?> </li>
                <li><i class="fa fa-phone"></i> <span> Telefono:</span><?=$teléfono?></li>
                <li><i class="fa fa-envelope"></i> <span> Correo:</span><a href="mailto:paoherrera308@gmail.com"> <?=$correo?></a></li>
                <li><i class="fa fa-globe"></i> <span> Sitio web:</span> <a href="#"><?=$sitio?></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!--/#contact-->
<section id="alianzas">
  <div class="container">
      <!--<div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row">
          <div class="text-center col-sm-8 col-sm-offset-2">
            <h2>Alianzas</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
          </div>
        </div>
      </div>-->
      <div class="text-center">
        <div class="row">
          @foreach($alianzas as $alianza)
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
           <img class="imgAlianzas" src="images<?=$alianza->imagen?>" alt="">
         </div>
         @endforeach





 </div>
</div>
</div>
</section><!--/#alianzas-->



  <footer id="footer">
    <!--/<div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="container text-center">
        <div class="footer-logo">
          <a href="index.php"><img class="img-responsive" src="images/logo.png" alt=""></a>
        </div>
        <div class="social-icons">
          <ul>
            <li><a class="envelope" href="#"><i class="fa fa-envelope"></i></a></li>
            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a class="tumblr" href="#"><i class="fa fa-tumblr-square"></i></a></li>
          </ul>
        </div>
      </div>
    </div>-->
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <p>&copy; 2017 EcoVida</p>
          </div>
          <div class="col-sm-6">
            <p class="pull-right"> <a href="http://designscrazed.org/"></a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="js/wow.min.js"></script>
  <script type="text/javascript" src="js/mousescroll.js"></script>
  <script type="text/javascript" src="js/smoothscroll.js"></script>
  <script type="text/javascript" src="js/jquery.countTo.js"></script>
  <script type="text/javascript" src="js/lightbox.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>

</body>
</html>
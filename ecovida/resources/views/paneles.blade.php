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
  <link href="css/calentadores.css" rel="stylesheet">
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
      <div class="calent">
        <div class="main-nav-calentadores">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

              </button>
              <a class="navbar-brand" href="calentadores.php">
                <h1><img class="img-responsive" src="images/logo.png" alt="logo"></h1>
              </a>
            </div>
            <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav navbar-right">
                <li class=" active"><a href="#home"></a></li>
                <li ><a href="{{ url('principal') }}">Eco Vida</a></li>
                <li ><a href="#servicios">Servicios</a></li>
                <li ><a href="#Productos">Productos</a></li>
                <li ><a href="#contact">Contacto</a></li>
                <li ><a href="ingresar.php">Iniciar Sesión</a></li>
              </ul>
            </div>
          </div>
        </div><!--/#main-nav-->
        <h2 class="animated fadeInLeftBig title">Eco Vida</h2>

        <h3 class="subtitle">Calentadores Solares</h3>
        <div class="caption">
          <h2 class="animated fadeInLeftBig">Un futuro <span>con bajas </span></h2>
          <h1 class="animated fadeInLeftBig" >Emisiones</h1>
          <h3 class="animated fadeInRightBig">Un mejor planeta </h3>
          <h2 class="animated fadeInLeftBig">para nuestros hijos  </h2>
          <h3 class="distribuidor">Distruibidor de Emprosol</h3>
        </div>

        <a id="tohash" href="#inicio"><i class="fa fa-angle-down"></i></a>
      </div>
    </header><!--/#home-->
    <section id="inicio">
      <div class="container">
        <div class="blog-posts">

          <h2 class="animated fadeInLeftBig titulo-garantia"> <?=$Titulo1?></h2>
          <div class="row">

           <div class="col-sm-5 col-sm-offset-1 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
            <p class="contenido"><?=$Texto1?></p>
             </div>
           <div class="col-sm-5  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="post-thumb">
              <div id="post-carousel"  class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#post-carousel" data-slide-to="0" class="active"></li>
                  <li data-target="#post-carousel" data-slide-to="1"></li>
                  <li data-target="#post-carousel" data-slide-to="2"></li>

                  <li data-target="#post-carousel" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item active">
                    <a href=""><img class="img-responsive" src="images/calentadores/banner1.png" alt=""></a>
                  </div>
                  <div class="item">
                    <a href=""><img class="img-responsive" src="images/calentadores/banner2.png" alt=""></a>
                  </div>
                  <div class="item">
                    <a href=""><img class="img-responsive" src="images/calentadores/banner3.png" alt=""></a>
                  </div>
                  <div class="item">
                    <a href=""><img class="img-responsive" src="images/calentadores/banner4.png" alt=""></a>
                  </div>
                </div>

              </div>

             <!--  <div class="post-meta">
                <span><i class="fa fa-comments-o"></i> 3 Comments</span>
                <span><i class="fa fa-heart"></i> 0 Likes</span>
              </div> -->
             <!--  <div class="post-icon">
                <i class="fa fa-picture-o"></i>
              </div> -->
            </div>
           <!--  <div class="entry-header">
              <h3><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h3>
              <span class="date">June 26, 2014</span>
              <span class="cetagory">in <strong>Photography</strong></span>
            </div>
            <div class="entry-content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            </div> -->
          </div>

        </div>
        <div class="row">
          <div class="col-sm-10 col-sm-offset-1">
            <h3 class="titulo-garantia2"> <?=$Subtitulo1?></h3>
            <p class="contenido"><?=$Texto2?></p>
             </div>
        </div>
        <div class="row">
          <div class="col-sm-10 col-sm-offset-1">
            <h3 class="titulo-garantia2"><?=$Subtitulo2?></h3>
                       <p class="contenido"><?=$Texto3?></p>

          </div>
        </div>
       <!--  <div class="load-more wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
          <a href="#" class="btn-loadmore"><i class="fa fa-repeat"></i> Load More</a>
        </div -->
      </div>
    </div>
  </section><<!--#blog-->

  <section id="servicios" class="parallax">
   <div id="serv">
    <div class="container">
      <div class="heading wow fadeInUp text-center" data-wow-duration="1000ms" data-wow-delay="300ms">
        <h1>Servicios</h1>
      </div>
      <div class="text-center our-services">

        <div class="row">

          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
            <div class="service-icon">
            </div>
            <div class="service-info">
              <h3>ASESORÍA</h3>
              <p class="contenido"><?=$Asesoría?></p>
              </div>
          </div>
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
            <div class="service-icon">
            </div>
            <div class="service-info">
              <h3>INSTALACIÓN</h3>
          <p class="contenido"><?=$Instalación?></p>
              </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="650ms">
            <div class="service-icon">
            </div>
            <div class="service-info">
              <h3>MANTENIMIENTO</h3>
              <p class="contenido"><?=$Mantenimiento?></p>
              </div>
          </div>

        </div>

        <div class="row">

          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
            <div class="service-icon">
            </div>
            <div class="service-info">
              <h3>GRAVEDAD</h3>
              <p class="contenido"><?=$Gravedad?></p>
              </div>
          </div>
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
            <div class="service-icon">
            </div>
            <div class="service-info">
              <h3>PRESURIZADO</h3>
              <p class="contenido"><?=$Presurizado?></p>
              </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="650ms">
            <div class="service-icon">
            </div>
            <div class="service-info">
              <h3>INDUSTRIAL</h3>
              <p class="contenido"><?=$Industrial?></p>
              </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section><!--/#services-->
<section id="Productos">
 <section id="Calentadores">
  <div class="container">
    <div class="row">
      <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
        <h2>Calentadores Solares</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
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
              <p><a href="vista_panel.php">ver más...</a></p>
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
              <p><a href="vista_panel.php">ver más...</a></p>
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
              <p><a href="vista_panel.php">ver más...</a></p>
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
              <p><a href="vista_panel.php">ver más...</a></p>
            </div>

          </div>
        </div>
      </div>
    </div>
    <div class="load-more wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
      <a href="catalogo_calentadores.php" class="btn-loadmore"><i class="fa fa-repeat"></i> ver más</a>
    </div>
  </div>
</section><!--/#Calentadores-->

<section id="Paneles">
  <div class="container">
    <div class="row">
      <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
        <h2>Energia Solar Paneles Solares</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
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
              <p><a href="vista_panel.php">ver más...</a></p>
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
              <p><a href="vista_panel.php">ver más...</a></p>
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
              <p><a href="vista_panel.php">ver más...</a></p>
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
              <p><a href="vista_panel.php">ver más...</a></p>
            </div>

          </div>
        </div>
      </div>
    </div>
    <div class="load-more wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
      <a href="catalogo_paneles.php" class="btn-loadmore"><i class="fa fa-repeat"></i> ver más</a>
    </div>
  </div>
</section><!--/#paneles-->
</section>
<section id="contact">
 <!--/ <div id="google-map" class="wow fadeIn" data-latitude="52.365629" data-longitude="4.871331" data-wow-duration="1000ms" data-wow-delay="400ms"></div>-->
 <div id="contact-us" class="parallax">
  <div class="container">
    <div class="row">
      <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <h2>Contacto</h2>
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
                <li><i class="fa fa-map-marker"></i> <span><b> Dirección: </b></span><?=$dirección?> </li>
                <li><i class="fa fa-phone"></i> <span><b> Telefono: </b></span><?=$teléfono?></li>
                <li><i class="fa fa-envelope"></i> <span> <b>Correo: </b></span><a href="mailto:paoherrera308@gmail.com"> <?=$correo?></a></li>
                <li><i class="fa fa-globe"></i> <span><b> Sitio web: </b></span> <a href="#"><?=$sitio?></a></li>
               </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section><!--/#contact-->

<div class="footer-bottom">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <p>&copy; 2016 EcoVida</p>
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
<script type="text/javascript" src="js/calentadores.js"></script>

</body>
</html>





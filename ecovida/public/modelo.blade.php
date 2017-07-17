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
  <link href="css/constructora.css" rel="stylesheet">
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
      <div class="main-nav-constructora navbar-header">
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
              <li class=" active"><a href="constructora.php#home">Inicio</a></li>
              <li ><a href="constructora.php#Modelos">Modelos</a></li>
              <li ><a href="#constructora.phpcontact">Contacto</a></li>
              <li ><a href="ingresar.php">Iniciar Sesión</a></li>
            </ul>
          </div>
        </div>
      </div><!--/#main-nav-->
    </header><!--/#home-->
    <?php
    $nombre=$_GET['nombre'];
    $descripcion=$_GET['descripcion'];
    $video=$_GET['video'];
    ?>

    <section id="Constructora" class="parallax">
     <div id="const">
      <div class="container">
        <div class="heading wow fadeInUp text-center" data-wow-duration="1000ms" data-wow-delay="300ms">
          <h1><?= $nombre ?></h1>
          <h3 style="color:#6E6E6E">EcoVida</h3>
        </div>

            </div>
          </section><!--/#services-->

  <section id="vista_modelo">
    <div class="container">
      <div class="row">
      <div class="col-sm-12">
           <div class="col-sm-4 col-sm-offset-1">
                   <div class=" wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                     <p><?= $descripcion ?></p>
          </div>
            <div class="form-group">
                        <button type="submit" class="btn-submit">Cotizar</button>
                        <a href="{{ url('/auth/login') }}">INGRESAR</a>

                      </div>
           </div>
               <div class="col-sm-4 video col-sm-offset-1">
       <!--        <iframe src="https://www.youtube.com/embed/62O_AEDguog" frameborder="0" allowfullscreen></iframe>
       -->

                <iframe src="https://www.youtube.com/embed/62O_AEDguog" frameborder="0" allowfullscreen></iframe>

           </div>

<!-- <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a> -->
         </div>
   </div>
 </div>

  </section>



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
      <script type="text/javascript" src="js/calentadores.js"></script>

    </body>
    </html>





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
              <li class=" active"><a href="#home"></a></li>

              <li ><a href="{{ url('principal') }}">Eco Vida</a></li>
              <li ><a href="#Modelos">Modelos</a></li>
              <li ><a href="#contact">Contacto</a></li>
              <li ><a href="ingresar.php">Iniciar Sesión</a></li>
            </ul>
          </div>
        </div>
      </div><!--/#main-nav-->
      <section id="Constructora" class="parallax">
     <div id="const">
      <div class="container">
        <div class="heading wow fadeInUp text-center" data-wow-duration="1000ms" data-wow-delay="300ms">
          <h1>Eco Vida </h1>
          <h3 style="color:#6E6E6E">Constructora</h3>
        </div>
        <div class="text-center info-const">

          <div class="row">

            <div class="col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
              <div class="service-icon">
              </div>
              <div class="service-info">
                <h3>Vivienda eco amigable</h3>
                 <p class="contenido"><?=$Vivienda?></p>
                </div>
              </div>
              <div class="col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
                <div class="service-icon">
                </div>
                <div class="service-info">
                  <h3>Sistemas constructivos</h3>
                   <p class="contenido"><?=$Sistema?></p>
                  </div>
                </div>

              </div>

              <div class="row">

                <div class="col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
                  <div class="service-icon">
                  </div>
                  <div class="service-info">
                    <h3>Materiales de calidad</h3>
                     <p class="contenido"><?=$Materiales?></p>
                     </div>
                  </div>
                  <div class="col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
                    <div class="service-icon">
                    </div>
                    <div class="service-info">
                      <h3>Ahorro integral</h3>
                       <p class="contenido"><?=$Ahorro?></p>
                      </div>
                    </div>


                  </div>
                </div>

              </div>

        <a id="tohash" href="#Modelos"><i class="fa fa-angle-down"></i></a>
            </div>
          </section><!--/#services-->

    </header><!--/#home-->




          <section id="Modelos">
            <div class="container">
              <div class="row">
                <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
                  <h2>Modelos</h2>

                </div>
              </div>
              <div class="modelos">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="catalogo wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
                      <div class="catalogo-construc-image">
                        <img class="img-responsive" src="images/construcciones/1.jpg" alt="">
                      </div>
                      <div class="info">
                        <h3><a href="modelo.php">Modelo dgthfgh</a></h3>
                        <h5>2 dormitorios - 1 baños - Pérgola  para 1 vehículo</h5>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="catalogo wow flipInY" data-wow-duration="1000ms" data-wow-delay="1100ms">
                      <div class="catalogo-construc-image">
                        <img class="img-responsive" src="images/construcciones/1.jpg" alt="">
                      </div>
                      <div class="info">
                        <h3><a href="modelo.php">Modelo dgthfgh</a></h3>
                        <h5>2 dormitorios - 1 baños - Pérgola  para 1 vehículo</h5>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="catalogo wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
                      <div class="catalogo-construc-image">
                        <img class="img-responsive" src="images/construcciones/1.jpg" alt="">
                      </div>
                      <div class="info">
                        <h3><a href="modelo.php">Modelo dgthfgh</a></h3>
                        <h5>2 dormitorios - 1 baños - Pérgola  para 1 vehículo</h5>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="catalogo wow flipInY" data-wow-duration="1000ms" data-wow-delay="1100ms">
                      <div class="catalogo-construc-image">
                        <img class="img-responsive" src="images/construcciones/1.jpg" alt="">
                      </div>
                      <div class="info">
                        <h3><a href="modelo.php">Modelo dgthfgh</a></h3>
                        <h5>2 dormitorios - 1 baños - Pérgola  para 1 vehículo</h5>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </section><!--/#constructora-->

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
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="alianzas-image">
             <img class="img-responsive" src="images/alianzas/1.jpg" alt="">
           </div>
         </div>
         <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="850ms">
           <div class="alianzas-image">
            <img class="img-responsive" src="images/alianzas/3.jpg" alt="">
          </div>
        </div>

        <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
          <div class="alianzas-image">
            <img class="img-responsive" src="images/alianzas/2.jpg" alt="">
          </div>
        </div>
        <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="650ms">
         <div class="alianzas-image">
          <img class="img-responsive" src="images/alianzas/5.jpg" alt="">
        </div>
      </div>
      <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="750ms">
       <div class="alianzas-image">
        <img class="img-responsive" src="images/alianzas/4.jpg" alt="">
      </div>
    </div>
    <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
     <div class="alianzas-image">
       <img class="img-responsive" src="images/alianzas/6.jpg" alt="">
     </div>
   </div>
 </div>
</div>
</div>
</section><!--/#alianzas-->


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

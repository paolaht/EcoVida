<!--Seccion dedicada a la vista de los paneles en la vista-->
<!--Vista: paneles.blade.php-->
<!--@include('productos.showPaneles')  Para incluirlo en una vista-->

<!--Clase creada para pruebas-->
<?php
class Panel
{
    public $nombre;
    public $precio;
    public $imagen;
}

$panel1 = new Panel();
$panel1->nombre = 'Panel 1';
$panel1->precio = 'Precio Prueba 1';
$panel1->imagen = '1.jpg';

$panel2 = new Panel();
$panel2->nombre = 'Panel 2';
$panel2->precio = 'Precio Prueba 2';
$panel2->imagen = '2.jpg';

$panel3 = new Panel();
$panel3->nombre = 'Panel 3';
$panel3->precio = 'Precio Prueba 3';
$panel3->imagen = '3.jpg';

$panel4 = new Panel();
$panel4->nombre = 'Panel 4';
$panel4->precio = 'Precio Prueba 4';
$panel4->imagen = '4.jpg';

$paneles = array($panel1, $panel2, $panel3, $panel4);

$rutaImagen = "images/calentadores/";

?>
<!--Fin de la clase de pruebas-->

<section id="Paneles">
    <div class="container">
        <div class="row">
            <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" 
                 data-wow-duration="1200ms" 
                 data-wow-delay="300ms">
                <h2>Energia Solar Paneles Solares</h2>
                <p>Texto a definir</p>
            </div>
        </div><!--/#row-->
         
        
        <div class="catalogos">
            <div class="row">
                 
                  <?php foreach ($paneles as $panel) { ?>
                  
                  <div class="col-sm-3">
                      <div class="catalogo wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
                          <div class="catalogo-image">
                              <!--INICIO Crear la ruta de la imagen-->
                              <?php 
                              $a= $rutaImagen;  
                              $a.= $panel->imagen;
                              ?>
                              <!--FIN Crear la ruta de la imagen-->
                              <img class="img-responsive" src="<?php echo $a?>" alt="">
                          </div>
                          <div class="info">
                              <!--Cambiar para obtener info $calentador->nombre $calentador->precio--> 
                              <h3><?php echo $panel->nombre?></h3>
                              <h4><?php echo $panel->precio?></h4>
                              
                              <!--Cambiar $calentador->id-->
                              <p><a href="vista_panel.php">ver más...</a></p>
                          </div>
                      </div>
                  </div>
                  <?php } ?>
                  
            </div><!--/#row-->
        </div><!--/#catalogos-->
        <div class="load-more wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
          <a href="catalogo_calentadores.php" class="btn-loadmore"><i class="fa fa-repeat"></i> ver más</a>
        </div>
    </div><!--/#container-->
</section><!--/#Paneles-->
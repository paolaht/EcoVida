<!--Seccion dedicada a la vista de los calentadores en la vista-->
<!--Vista: paneles.blade.php-->
<!--@include('productos.showCalentadores2')  Para incluirlo en una vista-->

<!--Clase creada para pruebas-->
<?php
class Calentador
{
    public $nombre;
    public $precio;
    public $imagen;
}

$calentador1 = new Calentador();
$calentador1->nombre = 'Calentador 1';
$calentador1->precio = 'Precio Prueba 1';
$calentador1->imagen = '1.jpg';

$calentador2 = new Calentador();
$calentador2->nombre = 'Calentador 2';
$calentador2->precio = 'Precio Prueba 2';
$calentador2->imagen = '2.jpg';

$calentador3 = new Calentador();
$calentador3->nombre = 'Calentador 3';
$calentador3->precio = 'Precio Prueba 3';
$calentador3->imagen = '3.jpg';

$calentador4 = new Calentador();
$calentador4->nombre = 'Calentador 4';
$calentador4->precio = 'Precio Prueba 4';
$calentador4->imagen = '4.jpg';

$calentadores = array($calentador1, $calentador2, $calentador3, $calentador4);

$rutaImagen = "images/calentadores/";

?>
<!--Fin de la clase de pruebas-->

<section id="Calentadores">
    <div class="container">
        <div class="row">
            <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" 
                 data-wow-duration="1200ms" 
                 data-wow-delay="300ms">
                <h2>Calentadores Solares</h2>
                <p>Texto a definir</p>
            </div>
        </div><!--/#row-->
         
        
        <div class="catalogos">
            <div class="row">
                  <!--@foreach($calentadores as $calentador)-->
                  <?php foreach ($calentadores as $calentador) { ?>
                  
                  <div class="col-sm-3">
                      <div class="catalogo wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
                          <div class="catalogo-image">
                              <!--Crear la ruta de la imagen-->
                              <?php 
                              $a= $rutaImagen;  
                              $a.= $calentador->imagen;
                              ?>
                              <img class="img-responsive" src="<?php echo $a?>" alt="">
                          </div>
                          <div class="info">
                              <!--Cambiar para obtener info $calentador->nombre $calentador->precio--> 
                              <h3><?php echo $calentador->nombre?></h3>
                              <h4><?php echo $calentador->precio?></h4>
                              
                              <!--Cambiar $calentador->id-->
                              <p><a href="vista_panel.php">ver más...</a></p>
                          </div>
                      </div>
                  </div>
                  <?php } ?>
                  <!--@endforeach-->
            </div><!--/#row-->
        </div><!--/#catalogos-->
        <div class="load-more wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
          <a href="catalogo_calentadores.php" class="btn-loadmore"><i class="fa fa-repeat"></i> ver más</a>
        </div>
    </div><!--/#container-->
</section><!--/#Calentadores-->




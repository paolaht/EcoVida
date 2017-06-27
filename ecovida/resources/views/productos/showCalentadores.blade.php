<!--Seccion dedicada a la vista de los calentadores en la vista-->
<!--Vista: paneles.blade.php-->
<!--@include('productos.showCalentadores')  Para incluirlo en una vista-->
<section id="Calentadores">
    <div class="container">
        <div class="row">
            <div>
                <h2>Calentadores Solares</h2>
                <p>Texto a definir</p>
            </div>
        </div><!--/#row-->
         
        
        <div class="catalogos">
            <div class="row">
                  <!--@foreach($calentadores as $calentador)-->
                  @for ($i = 0; $i < 5; $i++)
                  
                  <div class="col-sm-3">
                      <div class="catalogo wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
                          <div class="catalogo-image">
                              <!--Cambiar para obtener imagen   $calentador->imagen-->
                              <img class="img-responsive" src="images/calentadores/1.jpg" alt="">
                          </div>
                          <div class="info">
                              <!--Cambiar para obtener info $calentador->nombre $calentador->precio--> 
                              <h3>Nombre</h3>
                              <h4>Precio</h4>
                              
                              <!--Cambiar $calentador->id-->
                              
                          </div>
                      </div>
                  </div>
                  @endfor
                  <!--@endforeach-->
            </div><!--/#row-->
        </div><!--/#catalogos-->
    </div><!--/#container-->
</section><!--/#Calentadores-->
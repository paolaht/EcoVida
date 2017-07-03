<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">



@extends('app')

@section('content')

    <div class="container" style="padding-left: 40px;padding-top:20px">

        @include('flash::message')

        <div class="row">
             <div class="encabezadoModelos"><button class="accordion">Modelos de casas para construcción</button>
 <div class="nuevoMaterial">
 <div class="row">
     <div class=col-sm-7>
         {!! Form::open(['route' => 'modelos.store']) !!}


  <input class="w-input w3-animate-input" placeholder="Nombre del modelo" name="nombre" type="text" style="width:80%">


  <input class="w-input w3-animate-input" placeholder="Describe el modelo" name="descripcion" type="text" style="width:80%">

  <input class="w-input w3-animate-input" placeholder="Agrega un precio base" name="precioBase" type="text" style="width:80%">

  <input class="w-input w3-animate-input" placeholder="Pegue aquí el enlace del video" name="video" type="text" style="width:80%"></p>





     </div>
     <div class=col-sm-4 style="margin-top: 20px;">

  <input class="fots" type="file" name="foto1" id="foto1"   />
<input class="fots" type="file" name="foto2" id="foto2"  />
<input class="fots" type="file" name="foto3" id="foto3"  />
<input  class="fots" type="file" name="foto4" id="foto4"  />
<input class="fots" type="file" name="foto5" id="foto5"  />
     </div>
 </div>


 <div class="row" style="padding: 0 20px;">
     <div class="col-sm-12"><h4>Materiales disponibles</h4></div>
     <div class="row">
     <div class="col-sm-3">
         <h5>Cielo raso</h5>
         <div class="panelMaterials">

  <div class="materiales">

  @foreach($materials as $material)

      @if($material->categoria=="Cielo raso")

<div class="row">
    <div class="col-sm-6"><p><input type="checkbox"><label>  {!! $material->nombre !!}</label></p></div>
    <div class="col-sm-6"><input class="w-input w3-animate-input" placeholder="Precio" name="video" type="text" style="width:80%"></p>
</div>
</div>


@endif
                    @endforeach

  </div>
     </div>
 </div>

   <div class="col-sm-3">
         <h5>Techo</h5>
         <div class="panelMaterials">

  <div class="materiales">

  @foreach($materials as $material)

      @if($material->categoria=="Techo")


				     <div class="row">
    <div class="col-sm-6"><p><input type="checkbox"><label>  {!! $material->nombre !!}</label></p></div>
    <div class="col-sm-6"><input class="w-input w3-animate-input" placeholder="Precio" name="video" type="text" style="width:80%"></p>
</div>
</div>

@endif
                    @endforeach

  </div>
     </div>
 </div>

   <div class="col-sm-3">
         <h5>Piso</h5>
         <div class="panelMaterials">

  <div class="materiales">

  @foreach($materials as $material)

      @if($material->categoria=="Piso")

<div class="row">
    <div class="col-sm-6"><p><input type="checkbox"><label>  {!! $material->nombre !!}</label></p></div>
    <div class="col-sm-6"><input class="w-input w3-animate-input" placeholder="Precio" name="video" type="text" style="width:80%"></p>
</div>
</div>

@endif
                    @endforeach

  </div>
     </div>
 </div>

   <div class="col-sm-3">
         <h5>Vidrio</h5>
         <div class="panelMaterials">

  <div class="materiales">

  @foreach($materials as $material)

      @if($material->categoria=="Vidrio")

<div class="row">
    <div class="col-sm-6"><p><input type="checkbox"><label>  {!! $material->nombre !!}</label></p></div>
    <div class="col-sm-6"><input class="w-input w3-animate-input" placeholder="Precio" name="video" type="text" style="width:80%"></p>
</div>
</div>

@endif
                    @endforeach

  </div>
     </div>
 </div>
 </div>
 </div>
<div class="form-group col-sm-12">
    {!! Form::submit('Agregar modelo', ['class' => 'btn btn-primary']) !!}
</div>

    {!! Form::close() !!}
      </div>


    </div>
    </div>

    </div> <!--container-->

    <script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  }
}
</script>

@endsection

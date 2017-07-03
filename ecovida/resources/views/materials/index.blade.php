@extends('app')

@section('content')

    <div class="container">


<div  style="position:fixed">
<div class="col-sm-12">
<div class="col-sm-6">
 <div class="encabezadoMaterials"><button class="accordion">Vidrios</button>
 <div class="nuevoMaterial">
        @include('common.errors')

    {!! Form::open(['route' => 'materials.store']) !!}



    {!! Form::hidden('categoria', 'Vidrio', ['class' => 'form-control']) !!}


<!--- Nombre --->
<div class=" col-sm-10" style="padding: 0;">
    <input class="inputMaterials" placeholder="Ingrese aqui el nombre del material" name="nombre" type="text"></div>


<!--- Submit --->

    <input class="botonMaterials col-sm-2" type="submit" value="Agregar">


    {!! Form::close() !!}
    </div></div>

<div class="panelMaterials">

  <div class="materiales">
  @foreach($materials as $material)

      @if( $material->categoria=="Vidrio")
      <div class="row">
          <div class="col-sm-11"><p>{!! $material->nombre !!}</p></div>
          <div class="col-sm-1"><a href="{!! route('materials.delete', [$material->id]) !!}" onclick="return confirm('¿Estas seguro que deseas eliminar este material?')"><i class="glyphicon glyphicon-remove"></i></a></div>
      </div>



@endif
                    @endforeach
     </div>
  </div>
</div>


<div class="col-sm-6">
 <div class="encabezadoMaterials"><button class="accordion">Pisos</button>
 <div class="nuevoMaterial">
        @include('common.errors')

    {!! Form::open(['route' => 'materials.store']) !!}



    {!! Form::hidden('categoria', 'Piso', ['class' => 'form-control']) !!}


<!--- Nombre --->
<div class=" col-sm-10" style="padding: 0;">
    <input class="inputMaterials" placeholder="Ingrese aqui el nombre del material" name="nombre" type="text"></div>


<!--- Submit --->

    <input class="botonMaterials col-sm-2" type="submit" value="Agregar">


    {!! Form::close() !!}
    </div></div>

<div class="panelMaterials">

  <div class="materiales">
 @foreach($materials as $material)

      @if( $material->categoria=="Piso")
					<div class="row">
          <div class="col-sm-11"><p>{!! $material->nombre !!}</p></div>
          <div class="col-sm-1"><a href="{!! route('materials.delete', [$material->id]) !!}" onclick="return confirm('¿Estas seguro que deseas eliminar este material?')"><i class="glyphicon glyphicon-remove"></i></a></div>
      </div>
@endif
                    @endforeach
     </div>
  </div>
</div>
</div>
<div class="col-sm-12">
<div class="col-sm-6">
 <div class="encabezadoMaterials"><button class="accordion">Techos</button>
 <div class="nuevoMaterial">
        @include('common.errors')

    {!! Form::open(['route' => 'materials.store']) !!}



    {!! Form::hidden('categoria', 'Techo', ['class' => 'form-control']) !!}


<!--- Nombre --->
<div class=" col-sm-10" style="padding: 0;">
    <input class="inputMaterials" placeholder="Ingrese aqui el nombre del material" name="nombre" type="text"></div>


<!--- Submit --->

    <input class="botonMaterials col-sm-2" type="submit" value="Agregar">


    {!! Form::close() !!}
    </div></div>

<div class="panelMaterials">

  <div class="materiales">
 @foreach($materials as $material)

      @if( $material->categoria=="Techo")
			<div class="row">
          <div class="col-sm-11"><p>{!! $material->nombre !!}</p></div>
          <div class="col-sm-1"><a href="{!! route('materials.delete', [$material->id]) !!}" onclick="return confirm('¿Estas seguro que deseas eliminar este material?')"><i class="glyphicon glyphicon-remove"></i></a></div>
      </div>
@endif
                    @endforeach
     </div>
  </div>
</div>
<div class="col-sm-6">
 <div class="encabezadoMaterials"><button class="accordion">Cielo rasos</button>
 <div class="nuevoMaterial">
        @include('common.errors')

    {!! Form::open(['route' => 'materials.store']) !!}



    {!! Form::hidden('categoria', 'Cielo raso', ['class' => 'form-control']) !!}


<!--- Nombre --->
<div class=" col-sm-10" style="padding: 0;">
    <input class="inputMaterials" placeholder="Ingrese aqui el nombre del material" name="nombre" type="text"></div>


<!--- Submit --->

    <input class="botonMaterials col-sm-2" type="submit" value="Agregar">


    {!! Form::close() !!}
    </div></div>

<div class="panelMaterials">

  <div class="materiales">
  @foreach($materials as $material)

      @if($material->categoria=="Cielo raso")
				<div class="row">
          <div class="col-sm-11"><p>{!! $material->nombre !!}</p></div>
          <div class="col-sm-1"><a href="{!! route('materials.delete', [$material->id]) !!}" onclick="return confirm('¿Estas seguro que deseas eliminar este material?')"><i class="glyphicon glyphicon-remove"></i></a></div>
      </div>
@endif
                    @endforeach
     </div>
  </div>
</div>
</div>
</div>



   <!--     <div class="row">-->
   <!--         <h1 class="pull-left">Materials</h1>-->
   <!--         <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('materials.create') !!}">Add New</a>-->
   <!--     </div>-->

   <!--     <div class="row">-->
   <!--         @if($materials->isEmpty())-->
   <!--             <div class="well text-center">No Materials found.</div>-->
   <!--         @else-->
   <!--             <table class="table">-->
   <!--                 <thead>-->
   <!--                 <th>Categoria</th>-->
			<!--<th>Nombre</th>-->
   <!--                 <th width="50px">Action</th>-->
   <!--                 </thead>-->
   <!--                 <tbody>-->

   <!--                 @foreach($materials as $material)-->
   <!--                     <tr>-->
   <!--                         <td>{!! $material->categoria !!}</td>-->
			<!--		<td>{!! $material->nombre !!}</td>-->
   <!--                         <td>-->
   <!--                             <a href="{!! route('materials.edit', [$material->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>-->
   <!--                             <a href="{!! route('materials.delete', [$material->id]) !!}" onclick="return confirm('Are you sure wants to delete this Material?')"><i class="glyphicon glyphicon-remove"></i></a>-->
   <!--                         </td>-->
   <!--                     </tr>-->
   <!--                 @endforeach-->
   <!--                 </tbody>-->
   <!--             </table>-->
   <!--         @endif-->
   <!--     </div>-->
    </div>

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
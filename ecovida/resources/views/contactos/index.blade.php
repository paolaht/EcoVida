<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
@extends('app')

@section('content')

    <div class="container central">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Contacto</h1>
            </div>

        <div class="row">
            @if($contactos->isEmpty())
                <div class="well text-center">Contenido no encontrado.</div>
            @else


                    @foreach($contactos as $contacto)

                        <div class="w3-panel w3-card col-sm-8 col-sm-offset-2 margen">
     <div class="row contacto">
         <div class="col-sm-12">
   <p>{!! $contacto->encabezado !!}</p>

</div>

       <div class="col-sm-12">

  	<p><b>Dirección: </b>{!! $contacto->dirección !!}</p>

</div>
 <div class="col-sm-12">

  	<p><b>Sitio web: </b>{!! $contacto->sitio !!}</p>

</div>
 <div class="col-sm-12">

  	<p><b>Correo: </b>{!! $contacto->correo !!}</p>

</div>

<div class="col-sm-12">
             <p><b>Teléfono: </b>{!! $contacto->teléfono !!}</p>
              </div>


<div class="row">
<div class="col-sm-10">

              </div>

               <div class="col-sm-2 btn-editarContacto">
    <a href="{!! route('contactos.edit', [$contacto->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>

</div>
</div>
</div>
</div>

          @endforeach

            @endif
        </div>
    </div>
@endsection
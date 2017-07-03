@extends('app')

@section('content')
<div class="container central">

    @include('common.errors')

  <div class="row titulos">
     <!--Insertar el nombre de la página-->
  <div class="col-sm-12 ">
@if($contenido->pagina == 1)
                    <h2>Página principal</h2>
                @else
                        @if($contenido->pagina == 2)
                          <h2>Constructora</h2>
                        @else

                                    @if($contenido->pagina == 3)
                                        <h2>Paneles Solares</h2>
                                    @else
                                         @if($contenido->pagina == 4)
                                            <h2>Ahorradores de Agua</h2>
                                        @endif
                                    @endif

                        @endif
                @endif

 </div>
      <!--Insertar el nombre de la sección-->
      <div class="col-sm-12 ">
 <h3 style="padding">Sección: {!! $contenido->seccion !!}</h3>
 </div>
    </div>
<div class="row">
 <!--Cargar el formulario para la edición de texto del archivo fields.blade-->
    {!! Form::model($contenido, ['route' => ['contenidos.update', $contenido->id], 'method' => 'patch']) !!}

        @include('contenidos.fields')

    {!! Form::close() !!}
</div>
</div>
@endsection

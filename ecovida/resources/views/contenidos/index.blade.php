
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
@extends('app')

@section('content')
    <div class="container central">
        @include('flash::message')


        <div class="row">
            <h1 class="pull-left">Contenidos</h1>
             </div>

        <div class="row">
            @if($contenidos->isEmpty())
                <div class="well text-center">Contenido no encontrado.</div>
            @else


                    @foreach($contenidos as $contenido)

 <div class="w3-panel w3-card col-sm-3 margen">
     <div class="row">
         <div class="col-sm-10">
   <h3>Página</h3>
    @if($contenido->pagina == 1)
                    <p>Página principal</p>
                @else
                        @if($contenido->pagina == 2)
                          <p>Constructora</p>
                        @else
                            @if($contenido->pagina == 3)
                                <p>Paneles Solares</p>
                            @else
                                    @if($contenido->pagina == 4)
                                        <p>Ahorradores de Agua</p>
                                    @endif

                                @endif
                        @endif
                @endif
</div>
<div class="row">
<div class="col-sm-10">
                <h3>Sección</h3>
                	<p>{!! $contenido->seccion !!}</p>
              </div>

               <div class="col-sm-2 btn-editar">
     <a href="{!! route('contenidos.edit', [$contenido->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
</div>
</div>
</div>
</div>








                    @endforeach

            @endif

    </div>

@endsection
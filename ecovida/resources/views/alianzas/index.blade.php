<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <div class="col-sm-10">
            <h1 class="pull-left">Alianzas</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('alianzas.create') !!}">Agregar alianza</a>
        </div>
         </div>
        <div class="row">

            @if($alianzas->isEmpty())
                <div class="well text-center">No Alianzas found.</div>
            @else


                    @foreach($alianzas as $alianza)

<div class="w3-panel w3-card col-sm-3 alianzaCard">
      <div class="col-sm-10">
 </div>

               <div class="col-sm-2 btn-Eliminar">
    <a href="{!! route('alianzas.delete', [$alianza->id]) !!}" onclick="return confirm('Estas seguro que quieres borrar esta alianza?')" style="float:right"><i class="glyphicon glyphicon-remove"></i></a>
     </div>


         <div class="col-sm-10">
    <h3>{!! $alianza->nombre !!}</h3>

  <div class="col-sm-10">
   <img class="imgAlianzas" src="images<?=$alianza->imagen?>" alt="">


</div>


</div>
</div>

                                 @endforeach

            @endif
            </div>

    </div>
@endsection
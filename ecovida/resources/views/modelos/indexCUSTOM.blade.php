@extends('app')

@section('content')

<link href="css/listaBonita.css" rel="stylesheet">

<style type="text/css">
    {margin: 0; padding: 0;}

    li:hover#foo {
        background: #eee;
        cursor: pointer;
    }
</style>


<div class="container">

    @include('flash::message')

    <div class="row" class="">
        <h1 class="" align="center">Modelos</h1>
        @if (Auth::user()->tipo=="Admin3")
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('modelos.create') !!}">Agregar Modelos</a>
        @endif
    </div>
    <?php
    $Directorio = "/ecovida/public";
    $contador = 0;
    ?>
    @if (Auth::user()->tipo=="Cliente")
    <div id="div1">
        @foreach($modelos as $modelo)
        <ul id="ul1" onclick="location.href = '{!! route('modelos.show', [$modelo->id]) !!}';">
            <li id="li1" id="foo" href="{!! route('modelos.show', [$modelo->id]) !!}">

                @foreach($fotos as $foto)
                @if ($modelo->id==$foto->modelo_ID and $contador < 1)
                <img id="img1" href="{!! route('modelos.show', [$modelo->id]) !!}" src="<?php echo $Directorio . $foto->direccion ?>" height="100" width="100">
                <?php $contador = $contador + 1; ?>
                @endif

                @endforeach
                <?php $contador = 0; ?>
                <h3 style="font: bold 20px/1.5 Helvetica, Verdana, sans-serif;">{!! $modelo->nombre !!}</h3>
                <p id="p1">{!! $modelo->descripcion !!}</p>
                <p id="p1">{!! $modelo->precio !!}</p>
            </li>

        </ul>
        @endforeach
    </div>
    @endif
    @if (Auth::user()->tipo=="Admin")
    <div class="row">
        @if($modelos->isEmpty())
        <div class="well text-center">No Modelos found.</div>
        @else
        <table class="table">
            <thead>
                @if (Auth::user()->tipo=="Admin")
            <th>Identificador</th>
            @endif
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio Base</th>
            <th>Tamaño</th>
            <th>Video</th>
            <th width="50px">Action</th>
            </thead>
            <tbody>

                @foreach($modelos as $modelo)
                <tr>
                    @if (Auth::user()->tipo=="Admin")
                    <td>{!! $modelo->id !!}</td>
                    @endif
                    <td>{!! $modelo->nombre !!}</td>
                    <td>{!! $modelo->descripcion !!}</td>
                    <td>{!! $modelo->precioBase !!}</td>
                    <td>{!! $modelo->tamaño !!}</td>
                    <td>{!! $modelo->video !!}</td>
                    <td>
                        @if (Auth::user()->tipo=="Admin")
                        <a href="{!! route('modelos.edit', [$modelo->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                        <a href="{!! route('modelos.delete', [$modelo->id]) !!}" onclick="return confirm('Are you sure wants to delete this Modelo?')"><i class="glyphicon glyphicon-remove"></i></a>

                        @else
                        <a href="{!! route('modelos.show', [$modelo->id]) !!}"><i class="glyphicon glyphicon-check"></i></a>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
    @endif

</div>
@endsection

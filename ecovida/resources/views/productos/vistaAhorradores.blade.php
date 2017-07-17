@extends('app')

@section('content')

<div class="container">

    @include('flash::message')

    <?php
    session_start();
    $_SESSION["tipo"] = "ahorrador";
    ?>

    <div class="row">
        <h1 class="pull-left">Ahorradores</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('ahorradores.create') !!}">Add New</a>
    </div>

    <div class="row">
        @if($productos->isEmpty())
        <div class="well text-center">No Productos found.</div>
        @else
        <table class="table">
            <thead>
            <th>Nombre</th>
            <th>Caracteristicas</th>
            <th>Precio</th>
            <th width="50px">Action</th>
            </thead>
            <tbody>

                @foreach($productos as $producto)
                @if ($producto->tipo == 'ahorrador')
                <tr>
                    <td class="col-md-3">{!! $producto->nombre !!}</td>
                    <td class="col-md-4">{!! $producto->caracteristicas !!}</td>
                    <td class="col-md-3">{!! $producto->precio !!}</td>
                    <td class="col-md-2">
                        <a class="col-md-4" href="{!! route('productos.show', [$producto->id]) !!}"><i class="glyphicon glyphicon-open"></i></a>
                        <a class="col-md-4" href="{!! route('productos.edit', [$producto->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                        <a class="col-md-4" href="{!! route('productos.delete', [$producto->id]) !!}" onclick="return confirm('Are you sure wants to delete this Producto?')"><i class="glyphicon glyphicon-remove"></i></a>
                    </td>
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
</div>
@endsection
@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <?php
            session_start();
            $_SESSION["tipo"] = "panel";
        ?>

        <div class="row">
            <h1 class="pull-left">Paneles</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('paneles.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($productos->isEmpty())
                <div class="well text-center">No Productos found.</div>
            @else
                <table class="table">
                    <thead>
                    <th>Tipo</th>
			<th>Nombre</th>
			<th>Casssssssssssssssssssssssssssracteristicas</th>
			<th>Precio</th>
                    <th width="50px">Action</th>
                    </thead>
                    <tbody>

                    @foreach($productos as $producto)
                      @if ($producto->tipo == 'panel')
                        <tr>
                    <td>{!! $producto->tipo !!}</td>
					<td>{!! $producto->nombre !!}</td>
					<td>{!! $producto->caracteristicas !!}</td>
					<td>{!! $producto->precio !!}</td>
                            <td>
                                <a href="{!! route('productos.show', [$producto->id]) !!}"><i class="glyphicon glyphicon-open"></i></a>
                                <a href="{!! route('productos.edit', [$producto->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                                <a href="{!! route('productos.delete', [$producto->id]) !!}" onclick="return confirm('Are you sure wants to delete this Producto?')"><i class="glyphicon glyphicon-remove"></i></a>
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
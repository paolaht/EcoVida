@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Mantenimientos</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('mantenimientos.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($mantenimientos->isEmpty())
                <div class="well text-center">No Mantenimientos found.</div>
            @else
                <table class="table">
                    <thead>
                    <th>Fecha</th>
			<th>Estado</th>
			<th>Descripcion</th>
			<th>Responsable</th>
			<th>Compra Producto Producto Id</th>
			<th>Compra Producto Compra Codigo</th>
                    <th width="50px">Action</th>
                    </thead>
                    <tbody>
                     
                    @foreach($mantenimientos as $mantenimiento)
                        <tr>
                            <td>{!! $mantenimiento->fecha !!}</td>
					<td>{!! $mantenimiento->estado !!}</td>
					<td>{!! $mantenimiento->descripcion !!}</td>
					<td>{!! $mantenimiento->responsable !!}</td>
					<td>{!! $mantenimiento->compra_producto_producto_ID !!}</td>
					<td>{!! $mantenimiento->compra_producto_compra_codigo !!}</td>
                            <td>
                                <a href="{!! route('mantenimientos.edit', [$mantenimiento->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                                <a href="{!! route('mantenimientos.delete', [$mantenimiento->id]) !!}" onclick="return confirm('Are you sure wants to delete this Mantenimiento?')"><i class="glyphicon glyphicon-remove"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
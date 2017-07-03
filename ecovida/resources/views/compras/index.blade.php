@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Compras</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('compras.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($compras->isEmpty())
                <div class="well text-center">No Compras found.</div>
            @else
                <table class="table">
                    <thead>
                    <th>Fecha</th>
			<th>Usuarios Id</th>
			<th>Cancelado</th>
                    <th width="50px">Action</th>
                    </thead>
                    <tbody>
                     
                    @foreach($compras as $compra)
                        <tr>
                            <td>{!! $compra->fecha !!}</td>
					<td>{!! $compra->usuarios_ID !!}</td>
					<td>{!! $compra->cancelado !!}</td>
                            <td>
                                <a href="{!! route('compras.edit', [$compra->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                                <a href="{!! route('compras.delete', [$compra->id]) !!}" onclick="return confirm('Are you sure wants to delete this Compra?')"><i class="glyphicon glyphicon-remove"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
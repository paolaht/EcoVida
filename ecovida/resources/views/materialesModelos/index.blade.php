@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">MaterialesModelos</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('materialesModelos.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($materialesModelos->isEmpty())
                <div class="well text-center">No MaterialesModelos found.</div>
            @else
                <table class="table">
                    <thead>
                    <th>Modelo</th>
			<th>Categoria</th>
			<th>Material</th>
			<th>Precio</th>
                    <th width="50px">Action</th>
                    </thead>
                    <tbody>
                     
                    @foreach($materialesModelos as $materialesModelo)
                        <tr>
                            <td>{!! $materialesModelo->modelo !!}</td>
					<td>{!! $materialesModelo->categoria !!}</td>
					<td>{!! $materialesModelo->material !!}</td>
					<td>{!! $materialesModelo->precio !!}</td>
                            <td>
                                <a href="{!! route('materialesModelos.edit', [$materialesModelo->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                                <a href="{!! route('materialesModelos.delete', [$materialesModelo->id]) !!}" onclick="return confirm('Are you sure wants to delete this MaterialesModelo?')"><i class="glyphicon glyphicon-remove"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
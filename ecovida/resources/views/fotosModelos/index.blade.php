@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">FotosModelos</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('fotosModelos.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($fotosModelos->isEmpty())
                <div class="well text-center">No FotosModelos found.</div>
            @else
                <table class="table">
                    <thead>
                    <th>Modelo</th>
			<th>Direccion</th>
                    <th width="50px">Action</th>
                    </thead>
                    <tbody>
                     
                    @foreach($fotosModelos as $fotosModelo)
                        <tr>
                            <td>{!! $fotosModelo->modelo !!}</td>
					<td>{!! $fotosModelo->direccion !!}</td>
                            <td>
                                <a href="{!! route('fotosModelos.edit', [$fotosModelo->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                                <a href="{!! route('fotosModelos.delete', [$fotosModelo->id]) !!}" onclick="return confirm('Are you sure wants to delete this FotosModelo?')"><i class="glyphicon glyphicon-remove"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
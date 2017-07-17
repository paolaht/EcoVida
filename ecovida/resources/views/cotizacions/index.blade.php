@extends('app')

@section('content')

<div class="container">

    @include('flash::message')

    <div class="row">
        <h1 class="pull-left">Mis cotizaciones</h1>
        <!--
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('cotizacions.create') !!}">Add New</a>
        -->
    </div>
    


    <div class="row">
        @if($cotizacions->isEmpty())
        <div class="well text-center">No Cotizaciones encontradas.</div>
        @else
        <table class="table">
            <thead>

            <th>Nombre del modelo</th>
            <th>Piso</th>
            <th>Techo</th>
            <th>Vidrio</th>
            <th>Cielo Razo</th>
            <th>Estimado</th>

            <th width="50px">Eliminar</th>
            </thead>
            <tbody>

                @foreach($cotizacions as $cotizacion)
                <tr>
                    @if (Auth::user()->id == $cotizacion->usuario_ID)

                    @foreach($modelos as $model)
                    @if($model->id == $cotizacion->modelo_ID )
                    <td>{!! $model->nombre !!}</td>
                    @endif
                    @endforeach

                    <td>{!! $cotizacion->piso !!}</td>
                    <td>{!! $cotizacion->techo !!}</td>
                    <td>{!! $cotizacion->vidrio !!}</td>
                    <td>{!! $cotizacion->cielo_razo !!}</td>
                    <td>$ {!! $cotizacion->estimado !!}</td>


                    <td>

                         <a href="{!! route('cotizacions.show', [$cotizacion->id]) !!}"><i class="glyphicon glyphicon-ok"></i></a>

                        <a href="{!! route('cotizacions.delete', [$cotizacion->id]) !!}" onclick="return confirm('Quieres eliminar esta cotizacion?')"><i class="glyphicon glyphicon-remove"></i></a>
                    </td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
</div>
@endsection
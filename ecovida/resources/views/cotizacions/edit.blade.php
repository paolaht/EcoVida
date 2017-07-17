@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($cotizacion, ['route' => ['cotizacions.update', $cotizacion->id], 'method' => 'patch']) !!}

        @include('cotizacions.fields')

    {!! Form::close() !!}
</div>
@endsection

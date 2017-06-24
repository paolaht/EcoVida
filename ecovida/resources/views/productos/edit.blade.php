@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($producto, ['route' => ['productos.update', $producto->id], 'method' => 'patch']) !!}

        @include('productos.fields')

    {!! Form::close() !!}
</div>
@endsection

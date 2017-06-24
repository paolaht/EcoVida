@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($mensaje, ['route' => ['mensajes.update', $mensaje->id], 'method' => 'patch']) !!}

        @include('mensajes.fields')

    {!! Form::close() !!}
</div>
@endsection

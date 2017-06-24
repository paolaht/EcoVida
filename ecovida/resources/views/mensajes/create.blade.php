@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'mensajes.store']) !!}

        @include('mensajes.fields')

    {!! Form::close() !!}
</div>
@endsection

@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'contenidos.store']) !!}

        @include('contenidos.fields')

    {!! Form::close() !!}
</div>
@endsection

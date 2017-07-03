@extends('app')

@section('content')
<div class="container central">

    @include('common.errors')

    {!! Form::open(['route' => 'contenidos.store']) !!}

        @include('contenidos.fields')

    {!! Form::close() !!}
</div>
@endsection

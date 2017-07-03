@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'materialesModelos.store']) !!}

        @include('materialesModelos.fields')

    {!! Form::close() !!}
</div>
@endsection

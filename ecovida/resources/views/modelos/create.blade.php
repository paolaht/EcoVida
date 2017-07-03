@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'modelos.store']) !!}

        @include('modelos.fields')

    {!! Form::close() !!}
</div>
@endsection

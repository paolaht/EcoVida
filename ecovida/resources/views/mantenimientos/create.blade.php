@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'mantenimientos.store']) !!}

        @include('mantenimientos.fields')

    {!! Form::close() !!}
</div>
@endsection

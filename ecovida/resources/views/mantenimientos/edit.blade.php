@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($mantenimiento, ['route' => ['mantenimientos.update', $mantenimiento->id], 'method' => 'patch']) !!}

        @include('mantenimientos.fields')

    {!! Form::close() !!}
</div>
@endsection

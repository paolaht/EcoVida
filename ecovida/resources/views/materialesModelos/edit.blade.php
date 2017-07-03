@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($materialesModelo, ['route' => ['materialesModelos.update', $materialesModelo->id], 'method' => 'patch']) !!}

        @include('materialesModelos.fields')

    {!! Form::close() !!}
</div>
@endsection

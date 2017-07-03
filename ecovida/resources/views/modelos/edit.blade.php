@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($modelos, ['route' => ['modelos.update', $modelos->id], 'method' => 'patch']) !!}

        @include('modelos.fields')

    {!! Form::close() !!}
</div>
@endsection

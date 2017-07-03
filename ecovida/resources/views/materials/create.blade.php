@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'materials.store']) !!}

        @include('materials.fields')

    {!! Form::close() !!}
</div>
@endsection

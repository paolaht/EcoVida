@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'compras.store']) !!}

        @include('compras.fields')

    {!! Form::close() !!}
</div>
@endsection

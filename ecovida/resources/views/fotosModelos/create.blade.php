@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'fotosModelos.store']) !!}

        @include('fotosModelos.fields')

    {!! Form::close() !!}
</div>
@endsection

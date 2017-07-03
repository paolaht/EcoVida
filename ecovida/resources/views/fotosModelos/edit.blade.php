@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($fotosModelo, ['route' => ['fotosModelos.update', $fotosModelo->id], 'method' => 'patch']) !!}

        @include('fotosModelos.fields')

    {!! Form::close() !!}
</div>
@endsection

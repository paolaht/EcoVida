
@extends('app')

@section('content')


<div class="container contacto">

    @include('common.errors')

    {!! Form::model($contacto, ['route' => ['contactos.update', $contacto->id], 'method' => 'patch']) !!}

        @include('contactos.fields')

    {!! Form::close() !!}
</div>
@endsection

@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'contactos.store']) !!}

        @include('contactos.fields')

    {!! Form::close() !!}
</div>
@endsection

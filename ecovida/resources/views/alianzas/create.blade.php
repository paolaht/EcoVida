@extends('app')

@section('content')

<div class="container central">



    @include('common.errors')

    {!! Form::open(['route' => 'alianzas.store', 'files' => true]) !!}

        @include('alianzas.fields')

    {!! Form::close() !!}
</div>
@endsection

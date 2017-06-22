@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($alianza, ['route' => ['alianzas.update', $alianza->id], 'method' => 'patch', 'files' => true]) !!}

        @include('alianzas.fields')

    {!! Form::close() !!}
</div>
@endsection

@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($compra, ['route' => ['compras.update', $compra->id], 'method' => 'patch']) !!}

        @include('compras.fields')

    {!! Form::close() !!}
</div>
@endsection

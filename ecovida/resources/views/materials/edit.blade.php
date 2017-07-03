@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($material, ['route' => ['materials.update', $material->id], 'method' => 'patch']) !!}

        @include('materials.fields')

    {!! Form::close() !!}
</div>
@endsection

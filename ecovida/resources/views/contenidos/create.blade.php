@extends('app')

@section('content')
<div class="container central">

    @include('common.errors')

 @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $er)
                        <li>{{$er}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    {!! Form::open(['route' => 'contenidos.store']) !!}

        @include('contenidos.fields')

    {!! Form::close() !!}
</div>
@endsection

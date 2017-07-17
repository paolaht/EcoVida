@extends('app')

@section('content')
<div class="container">

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

    {!! Form::open(['route' => 'materials.store']) !!}

        @include('materials.fields')

    {!! Form::close() !!}
</div>
@endsection

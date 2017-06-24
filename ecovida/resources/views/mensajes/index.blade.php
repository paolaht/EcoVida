
	<link href="{{ asset('/css/Chat.css') }}" rel="stylesheet">
@extends('app')

@section('content')

    <div class="container">





    <!--<li class="self">-->
    <!--    <div class="avatar"><img src="https://i.imgur.com/HYcn9xO.png" draggable="false"/></div>-->
    <!--  <div class="msg">-->
    <!--    <p>Hey there's a new update about this chat UI with more responsive elements! Check it now:</p>-->
    <!--    <p><a href="https://codepen.io/Varo/pen/YPmwpQ" target="parent">Chat UI 2.0</a></p>-->
    <!--    <time>18:09</time>-->
    <!--  </div>-->
    <!--</li>-->




        @include('flash::message')

<a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('mensajes.create') !!}">Agregar alianza</a>



        <div class="row">
            @if (Auth::user()->tipo=="Admin")
            <h3 class="pull-left">Mensajes</h3>
            @else

            @endif
             </div>

        <div class="row">
            @if($mensajes->isEmpty())
                <div class="well text-center">No Mensajes found.</div>
            @else

               @if (Auth::user()->tipo=="Usuario")

                    @foreach($mensajes as $mensaje)

                         @if (Auth::user()->email==$mensaje->usuario)
                            <ol class="chat">
                                 @if ($mensaje->tipo=="Usuario")

                                     <li class="self">
                                        <div class="msg">
                                        <p>{!! $mensaje->texto !!}</p>
                                        <time>{!! $mensaje->fecha !!}</time>
                                          </div>
                                            </li>
                                            @else
                                            <li class="other">
                                        <div class="msg">
                                        <p>{!! $mensaje->texto !!}</p>
                                        <time>{!! $mensaje->fecha !!}</time>
                                          </div>
                                            </li>
                                            @endif
                            </ol>
                         @endif
                    @endforeach
               @endif

            @endif
        </div>
  <div class="row">
        @include('common.errors')

    {!! Form::open(['route' => 'mensajes.store']) !!}
{{--*/ $var = 'test' /*--}}
<p>{{ $var }}</p>
     <div class="form-group col-sm-6 col-lg-4">
    {!! Form::hidden('usuario',   $var  , ['class' => 'form-control']) !!}
</div>

<!--- Tipo Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::hidden('tipo', 'Usuario', ['class' => 'form-control']) !!}
</div>

<!--- Fecha Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::hidden('fecha', '12323434', ['class' => 'form-control']) !!}
</div>

<!--- Texto Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::textArea('texto', null, ['class' => 'form-control']) !!}
</div>

<!--- Adjunto Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::hidden('adjunto', null, ['class' => 'form-control']) !!}
</div>

<!--- Tipoadjunto Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::hidden('tipoAdjunto', null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
</div>


    {!! Form::close() !!}
  </div>
    </div>
@endsection
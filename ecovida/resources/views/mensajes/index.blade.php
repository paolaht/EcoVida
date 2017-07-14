
	<link href="{{ asset('/css/Chat.css') }}" rel="stylesheet">
@extends('app')

@section('content')

    <div>
 {{--*/$fecha = new \DateTime(); /*--}}


                    {{--*/ $usuario =  Auth::user()->email  /*--}}
                  @if (Auth::user()->tipo=="Cliente")

                    <div class="contentChat  col-sm-8">
                         @if($mensajes->isEmpty())
                <div class="well text-center">No hay mensajes que mostrar</div>
                @else
                   <div class="row panelChat" id="vistaChat">
                       <div class="col-sm-10">

                        <ol class="chat">
                    @foreach($mensajes as $mensaje)

                         @if (Auth::user()->email==$mensaje->usuario)

                                 @if ($mensaje->tipo=="Cliente")

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

                         @endif

                    @endforeach
                    </ol>
                    </div>
                    </div>
@endif

                      <div class="col-sm-8  mensaje">


    {!! Form::open(['route' => 'mensajes.store']) !!}


     <div class="form-group col-sm-6 col-lg-4">
    {!! Form::hidden('usuario',   $usuario  , ['class' => 'form-control']) !!}
</div>

<!--- Tipo Field --->
 {{--*/ $tipoUsuario =  Auth::user()->tipo  /*--}}
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::hidden('tipo', $tipoUsuario, ['class' => 'form-control']) !!}
</div>

<!--- Fecha Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::hidden('fecha', $fecha->format('d-m-Y H:i'), ['class' => 'form-control']) !!}
</div>


<!--- Adjunto Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::hidden('adjunto', null, ['class' => 'form-control']) !!}
</div>

<!--- Tipoadjunto Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::hidden('tipoAdjunto', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::hidden('leido', 0, ['class' => 'form-control']) !!}
</div>

<!--- Texto Field --->
  <div class="form-group col-sm-10 col-lg-10">
                    {!! Form::textArea('texto', null, ['class' => 'form-control', 'placeholder' => 'Escribe un mensaje...']) !!}
                </div>
<!--- Submit Field --->
<div class="form-group col-sm-2">
    {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
</div>


    {!! Form::close() !!}
  </div>

               @else

<div class="row">
    <div class="col-sm-2 col-offset-sm-3 usuariosChat">
        <div class="tab" id="tabs">
            {{--*/ $numeroUsuario =  0;  /*--}}
          @foreach($usuarios as $usuario)

           @if( $usuario->tipo=="Cliente")
               {{--*/ $sinLeer =  0;  /*--}}
              @foreach($mensajes as $mensaje)
						@if($mensaje->leido==0 && $mensaje->tipo=="Cliente" && $mensaje->usuario==$usuario->email)
						{{--*/ $sinLeer = $sinLeer +1;  /*--}}
						@endif
				@endforeach
				@if($sinLeer>=1)

            {{--*/ $prueba =  $usuario->email."*".Auth::user()->tipo;  /*--}}
             {!! Form::model($mensaje, ['route' => ['mensajes.update', $prueba], 'method' => 'patch']) !!}


 {{--*/ $numeroUsuario =  $numeroUsuario + 1;  /*--}}
               <a href="#{!! $usuario->email !!}" style="color: red;">   <button type="submit" class="tablinks" onclick="verMensajes(event, '{!! $usuario->email !!}')">{!! $usuario->name !!} {!! $usuario->apellido !!}
              </button></a>


    {!! Form::close() !!}
                @endif
             @endif
          @endforeach
           @foreach($usuarios as $usuario)
           @if( $usuario->tipo=="Cliente")
               {{--*/ $sinLeer =  0;  /*--}}
              @foreach($mensajes as $mensaje)
						@if($mensaje->leido==0 && $mensaje->tipo=="Cliente" && $mensaje->usuario==$usuario->email)
						{{--*/ $sinLeer = $sinLeer +1;  /*--}}
						@endif
				@endforeach
				@if($sinLeer==0)

				 {{--*/ $numeroUsuario =  $numeroUsuario + 1;  /*--}}
				             <a href="#{!! $usuario->email !!}" style="color: black;">  <button class="tablinks" onclick="verMensajes(event, '{!! $usuario->email !!}')" >{!! $usuario->name !!} {!! $usuario->apellido !!}</button></a>
                @endif
             @endif
          @endforeach

        </div>
    </div>
          @foreach($usuarios as $usuario)
              @if( $usuario->tipo=="Cliente")
             <div id="{!! $usuario->email !!}" class="tabcontent col-sm-9">
                  {{--*/ $correo =  $usuario->email  /*--}}
                    <div class="contentChat col-sm-8">
                          @if($mensajes->isEmpty())
                <div class="well text-center">No hay mensajes que mostrar</div>
                @else
                      <div class="panelChat  col-sm-11" id="{!! $usuario->id !!}">

                       <ol class="chat">
                            @foreach($mensajes as $mensaje)

                                 @if ($correo==$mensaje->usuario)

                                     @if ($mensaje->tipo=="Admin")

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

                                 @endif

                            @endforeach
                        </ol>
                       </div>
 @endif

        <div class="mensaje col-sm-8">
            @include('common.errors')

            {!! Form::open(['route' => 'mensajes.store']) !!}

                 <div class="form-group col-sm-6 col-lg-4">
                    {!! Form::hidden('usuario',   $correo  , ['class' => 'form-control']) !!}
                </div>

                <!--- Tipo --->
     {{--*/ $tipoUsuario =  Auth::user()->tipo  /*--}}
                <div class="form-group col-sm-6 col-lg-4">
                    {!! Form::hidden('tipo', $tipoUsuario, ['class' => 'form-control']) !!}
                </div>

                <!--- Fecha  --->
                <div class="form-group col-sm-6 col-lg-4">
                    {!! Form::hidden('fecha', $fecha->format('d-m-Y H:i'), ['class' => 'form-control']) !!}
                </div>



                <!--- Adjunto  --->
                <div class="form-group col-sm-6 col-lg-4">
                    {!! Form::hidden('adjunto', null, ['class' => 'form-control']) !!}
                </div>

                <!--- Tipoadjunto  --->
                <div class="form-group col-sm-6 col-lg-4">
                    {!! Form::hidden('tipoAdjunto', null, ['class' => 'form-control']) !!}
                </div>
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::hidden('leido', 0, ['class' => 'form-control']) !!}
</div>
                <!--- Texto  --->
                <div class="form-group col-sm-10 col-lg-10">
                    {!! Form::textArea('texto', null, ['class' => 'form-control', 'placeholder' => 'Escribe un mensaje...']) !!}
                </div>

                <!--- Submit  --->
                <div class="form-group col-sm-2">
                 <a href="#{!! $usuario->email !!}" style="color: black;"> <button type="submit" class="tablinks"  >Enviar</button></a>
                </div>


            {!! Form::close() !!}
        </div>
        </div>
    </div>
     @endif
       @endforeach


</div>

            @endif
        </div>
@endsection
<script>
function verMensajes(evt, correoUsuario) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(correoUsuario).style.display = "block";
}

 onload=function(){

     var strHref = window.location.href;
 var lines = strHref.split("#");
 if(lines[1]==null){
document.getElementById("{{$usuarioMensaje}}").style.display = "block";
 } else {
       document.getElementById(lines[1]).style.display = "block";
}
for (i = 0; i < 20; i++) {
 if(window.parar)return;document.getElementById('{{i}}').scrollTop=document.getElementById('{{i}}').scrollHeight;
}
}

</script>

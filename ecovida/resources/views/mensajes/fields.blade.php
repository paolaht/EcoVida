
     <div class="form-group col-sm-6 col-lg-4">
    {!! Form::hidden('usuario',   $correo  , ['class' => 'form-control']) !!}
</div>

<!--- Tipo Field --->
 {{--*/ $tipoUsuario =  Auth::user()->tipo  /*--}}
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::hidden('tipo', $tipoUsuario, ['class' => 'form-control']) !!}
</div>

<!--- Fecha Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::hidden('fecha', '12323434', ['class' => 'form-control']) !!}
</div>

<!--- Texto Field --->
<div class="form-group col-sm-10 col-lg-8">
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


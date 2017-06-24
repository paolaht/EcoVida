<!--- Usuario Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::hidden('usuario',  {{ $var }} , ['class' => 'form-control']) !!}
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

<!--- Encabezado Field --->
<div class="form-group col-sm-10 col-lg-10">
    {!! Form::label('encabezado', 'Encabezado:') !!}
    {!! Form::textArea('encabezado', null, ['class' => 'form-control']) !!}
</div>

<!--- Dirección Field --->
<div class="form-group col-sm-10 col-lg-10">
    {!! Form::label('dirección', 'Dirección:') !!}
    {!! Form::text('dirección', null, ['class' => 'form-control']) !!}
</div>

<!--- Sitio Field --->
<div class="form-group col-sm-7 col-lg-5">
    {!! Form::label('sitio', 'Sitio:') !!}
    {!! Form::text('sitio', null, ['class' => 'form-control']) !!}
</div>

<!--- Teléfono Field --->
<div class="form-group col-sm-7 col-lg-5">
    {!! Form::label('teléfono', 'Teléfono:') !!}
    {!! Form::text('teléfono', null, ['class' => 'form-control']) !!}
</div>

<!--- Correo Field --->
<div class="form-group col-sm-7 col-lg-5">
    {!! Form::label('correo', 'Correo:') !!}
    {!! Form::text('correo', null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar cambios', ['class' => 'btn btn-primary']) !!}
</div>

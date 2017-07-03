<!--- Fecha Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('fecha', 'Fecha:') !!}
    {!! Form::text('fecha', null, ['class' => 'form-control']) !!}
</div>

<!--- Usuarios Id Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('usuarios_ID', 'Usuarios Id:') !!}
    {!! Form::text('usuarios_ID', null, ['class' => 'form-control']) !!}
</div>

<!--- Cancelado Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('cancelado', 'Cancelado:') !!}
    {!! Form::text('cancelado', null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>

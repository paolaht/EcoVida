<!--- Tipo Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('tipo', 'Tipo:') !!}
    {!! Form::text('tipo', null, ['class' => 'form-control']) !!}
</div>

<!--- Nombre Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!--- Caracteristicas Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('caracteristicas', 'Caracteristicas:') !!}
    {!! Form::text('caracteristicas', null, ['class' => 'form-control']) !!}
</div>

<!--- Precio Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('precio', 'Precio:') !!}
    {!! Form::text('precio', null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>

<!--- Nombre Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!--- Descripcion Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!--- Preciobase Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('precioBase', 'Preciobase:') !!}
    {!! Form::text('precioBase', null, ['class' => 'form-control']) !!}
</div>

<!--- Video Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('video', 'Video:') !!}
    {!! Form::text('video', null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Agregar modelo', ['class' => 'btn btn-primary']) !!}
</div>

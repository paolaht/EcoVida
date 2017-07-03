<!--- Modelo Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('modelo', 'Modelo:') !!}
    {!! Form::text('modelo', null, ['class' => 'form-control']) !!}
</div>

<!--- Categoria Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('categoria', 'Categoria:') !!}
    {!! Form::text('categoria', null, ['class' => 'form-control']) !!}
</div>

<!--- Material Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('material', 'Material:') !!}
    {!! Form::text('material', null, ['class' => 'form-control']) !!}
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

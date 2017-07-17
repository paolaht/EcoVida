<!--- Usuario Id Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('usuario_ID', 'Usuario Id:') !!}
    {!! Form::text('usuario_ID', null, ['class' => 'form-control']) !!}
</div>

<!--- Piso Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('piso', 'Piso:') !!}
    {!! Form::text('piso', null, ['class' => 'form-control']) !!}
</div>

<!--- Techo Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('techo', 'Techo:') !!}
    {!! Form::text('techo', null, ['class' => 'form-control']) !!}
</div>

<!--- Vidrio Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('vidrio', 'Vidrio:') !!}
    {!! Form::text('vidrio', null, ['class' => 'form-control']) !!}
</div>

<!--- Cielo Razo Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('cielo_razo', 'Cielo Razo:') !!}
    {!! Form::text('cielo_razo', null, ['class' => 'form-control']) !!}
</div>

<!--- Estimado Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('estimado', 'Estimado:') !!}
    {!! Form::text('estimado', null, ['class' => 'form-control']) !!}
</div>

<!--- Modelo Id Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('modelo_ID', 'Modelo Id:') !!}
    {!! Form::text('modelo_ID', null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>

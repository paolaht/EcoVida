<!--- Fecha Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('fecha', 'Fecha:') !!}
    {!! Form::text('fecha', null, ['class' => 'form-control']) !!}
</div>

<!--- Estado Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('estado', 'Estado:') !!}
    {!! Form::text('estado', null, ['class' => 'form-control']) !!}
</div>

<!--- Descripcion Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!--- Responsable Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('responsable', 'Responsable:') !!}
    {!! Form::text('responsable', null, ['class' => 'form-control']) !!}
</div>

<!--- Compra Producto Producto Id Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('compra_producto_producto_ID', 'Compra Producto Producto Id:') !!}
    {!! Form::text('compra_producto_producto_ID', null, ['class' => 'form-control']) !!}
</div>

<!--- Compra Producto Compra Codigo Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('compra_producto_compra_codigo', 'Compra Producto Compra Codigo:') !!}
    {!! Form::text('compra_producto_compra_codigo', null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>

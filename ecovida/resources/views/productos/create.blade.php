@extends('app')
<script type="text/javascript" src="../js/subirCosas.js"></script>


 <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css"/>
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"> </script>

<script type="text/javascript" src="../js/validacionBootstrap.js"></script>
<body>



@section('content')
<!--<div class="container">
{{--
    @include('common.errors')

    {!! Form::open(['route' => 'productos.store']) !!}

    @include('productos.fields')

    {!! Form::close() !!}
</div>
--}}
-->


        <?php
            session_start();
            $tipo = $_SESSION["tipo"];
        ?>





<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h1>Crear Nuevo Producto</h1>
        <hr>
        <!--   <form class="form-horizontal" action="guardarProductoYImagenes.php" method="GET" enctype="multipart/form-data" id="producto_form"> -->



        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $er)
                        <li>{{$er}}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        @if ($tipo === 'ahorrador')

               {!! Form::open(['route' => 'ahorradores.store', 'enctype'=>'multipart/form-data', 'data-toggle'=>'validator', 'id'=>'formSUPER']) !!}
       @else
            {!! Form::open(['route' => 'paneles.store', 'enctype'=>'multipart/form-data', 'data-toggle'=>'validator', 'id'=>'formSUPER']) !!}
       @endif

  {{--
  {!! Form::open(['route' => 'productos.store', 'enctype'=>'multipart/form-data']) !!}
  --}}

        <div class="form-group w-input w3-animate-input">
        <!--    <label name="tipo">Tipo:</label> -->
            <input value="<?php echo $tipo ?>" type="hidden" id="tipo" name="tipo" class="form-control">
        </div>
        <div class="form-group w-input w3-animate-input">
            <label name="nombre">Nombre:</label>
            <input id="nombre" name="nombre" class="form-control">
        </div>
        <div class="form-group w-input w3-animate-input">
            <label name="caracteristicas">Caracteristicas:</label>
            <textarea id="caracteristicas" name="caracteristicas" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group w-input w3-animate-input">
            <label name="precio">Precio:</label>
            <input id="precio" name="precio" class="form-control">
        </div>

            <div class="form-group w-input w3-animate-input">
                <h4>Fotografías</h4>
                <div>
                    <dd>
                        <div id="adjuntos">
                            <input class="form-control" name="archivos[]" placeholder="Imagen a subir" type="file"></input>
                        </div>
                    </dd>
                    <dt>
                        <a class="form-control" value="Add" onClick="addCampo()">+ Subir otra imagen</a>
                    </dt>
                </div>
            </div>
        <br/><br/>
      <!--  <span id="fooBar">&nbsp;</span> -->


        <input type="submit" value="Ingresar" class="btn btn-success btn-lg btn-block">
        <input type="hidden" name="_token" value="{{ Session::token() }}">
        <!--</form>-->
        {!! Form::close() !!}
    </div>
</div>


</body>





<!--


<form action="/upload" method="post" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
    Product name:
    <br />
    <input type="text" name="name" />
    <br /><br />
    Product photos (can attach more than one):
    <br />
    <input type="file" name="photos[]" multiple />
    <br /><br />
    <input type="submit" value="Upload" />
</form>

-->

@endsection
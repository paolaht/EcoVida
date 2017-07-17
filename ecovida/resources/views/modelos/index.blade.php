<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="css/formularioModelo.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<script type="text/javascript" src="js/subirCosas.js"></script>

@extends('app')

@section('content')

<div class="container">

    @include('flash::message')

<h1 class="text-center">
    Creacion de Modelo
</h1>

    <div class="row">


        <div class="col-md-12" style="background:#fff; margin-left:50px">
            <div class="row" >
                <div class="col-md-6">
                    @include('common.errors')

                    {!! Form::open(['route' => 'modelos.store', 'enctype'=>'multipart/form-data']) !!}

                    <input class="w-input w3-animate-input" placeholder="Nombre del modelo" name="nombre" type="text" style="width:80%">

                    <input class="w-input w3-animate-input" placeholder="Tamaño del modelo" name="tamaño" type="text" style="width:80%"></p>

                    <input class="w-input w3-animate-input" placeholder="Describe el modelo" name="descripcion" type="text" style="width:80%">

                    <input class="w-input w3-animate-input" placeholder="Agrega un precio base" name="precioBase" type="text" style="width:80%">

                    <input class="w-input w3-animate-input" placeholder="Pegue aquí el enlace del video" name="video" type="text" style="width:80%"></p>


                    <!--
                   <div class="fotografias">
                        <h4>Fotografías</h4>
                        <input class="fots" type="file" name="foto1" id="foto1"   />
                        <input class="fots" type="file" name="foto2" id="foto2"  />
                        <input class="fots" type="file" name="foto3" id="foto3"  />
                        <input  class="fots" type="file" name="foto4" id="foto4"  />
                        <input class="fots" type="file" name="foto5" id="foto5"  />
                    </div>
                    -->


                    <!--
                            </div>

                            <div class="col-sm-6" style="background:#fff; margin-left:50px">
                    -->

                </div>



                <div class="col-md-6">
                    <div class="fotografias">
                        <h4>Fotografías del modelo:</h4>
                        <div>
                            <dd>
                                <div id="adjuntos" style="margin-bottom: 20px">
                                    <input class="form-control" name="archivos[]" placeholder="Documento a subir" type="file"></input>
                                </div>
                            </dd>
                            <dt>
                                <a class="form-control" value="Add" onClick="addCampo()">+ Subir otra imagen</a>
                            </dt>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-12" style="background:#fff; margin-left:50px">
            <div class="row" >
                <div class="col-md-12"><h3 class="text-center">Materiales disponibles</h3></div>
                <div class="col-md-12"><h4 class="text-center">Seleccione los materiales disponibles para el modelo</h4></div>
                <div class="row">
                    <div class="col-md-6">
                        <h5>Cielo raso</h5>
                        <div class="panelMaterials" style="height:400px;">

                            <div class="materiales">

                                @foreach($materials as $material)

                                @if($material->categoria=="Cielo raso")

                                <div class="row">
                                    <div class="col-md-6">
                                        <p>
                                            <input  class="col-md-2" type="checkbox" name="materialesCieloRaso[]" id="{!! $material->id !!}" value="{!! $material->id !!}" >
                                            <label  class="col-md-10">  {!! $material->nombre !!}</label>
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="w-input" placeholder="Precio"  name="precioC-{!! $material->id !!}" type="text" style="width:60%;margin: 0;"></p>
                                    </div>
                                </div>

                                @endif
                                @endforeach

                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <h5 class= "alinearH5">Techo</h5>
                        <div class="panelMaterials" style="height:400px;">

                            <div class="materiales">

                                @foreach($materials as $material)

                                @if($material->categoria=="Techo")


                                <div class="row">
                                    <div class="col-md-6">
                                        <p>
                                            <input  class="col-md-2" type="checkbox" name="materialesTecho[]" id="{!! $material->id !!}" value="{!! $material->id !!}">
                                            <label  class="col-md-10" name="materialesTechos"> {!! $material->nombre !!}</label>
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="w-input" placeholder="Precio"  name="precioT-{!! $material->id !!}" type="text" style="width:60%;margin: 0;"></p>
                                    </div>
                                </div>

                                @endif
                                @endforeach

                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">

                    <div class="col-md-6">
                        <h5>Piso</h5>
                        <div class="panelMaterials" style="height:400px;">

                            <div class="materiales">

                                @foreach($materials as $material)

                                @if($material->categoria=="Piso")

                                <div class="row">
                                    <div class="col-md-6">
                                        <p>
                                            <input  class="col-md-2" type="checkbox" name="materialesPiso[]" id="{!! $material->id !!}" value="{!! $material->id !!}" >
                                            <label  class="col-md-10" name="materialesPiso"> {!! $material->nombre !!}</label>
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="w-input" placeholder="Precio" name="precioP-{!! $material->id !!}" type="text" style="width:60%;margin: 0;"></p>
                                    </div>
                                </div>

                                @endif
                                @endforeach

                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <h5>Vidrio</h5>
                        <div class="panelMaterials" style="height:400px;">

                            <div class="materiales">

                                @foreach($materials as $material)

                                @if($material->categoria=="Vidrio")
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>
                                            <input  class="col-md-2" type="checkbox" name="materialesVidrio[]" id="{!! $material->id !!}"  value="{!! $material->id !!}" >
                                            <label  class="col-md-10" name="materialesVidrio">  {!! $material->nombre !!}</label>
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="w-input" placeholder="Precio"  name="precioV-{!! $material->id !!}" type="text" style="width:60%;margin: 0;"></p>
                                    </div>
                                </div>

                                @endif
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="botonModelo">
            {!! Form::submit('Agregar modelo', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
        </div>
        </div>





    </div>
</div>
</div> <!--container-->

<style type="text/css">
    div.panelMaterials {
        max
    }
</style>

@endsection
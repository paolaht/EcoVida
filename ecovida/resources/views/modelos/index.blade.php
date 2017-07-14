<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<script type="text/javascript" src="js/subirCosas.js"></script>

@extends('app')

@section('content')

<div class="container">

    @include('flash::message')

    <div class="row">


        <div class="col-sm-6" style="background:#fff; margin-left:50px">
            @include('common.errors')
            {!! Form::open(['route' => 'modelos.store']) !!}


            <input class="w-input w3-animate-input" placeholder="Nombre del modelo" name="nombre" type="text" style="width:80%">

            <input class="w-input w3-animate-input" placeholder="Tamaño del modelo" name="tamaño" type="text" style="width:80%"></p>

            <input class="w-input w3-animate-input" placeholder="Describe el modelo" name="descripcion" type="text" style="width:80%">

            <input class="w-input w3-animate-input" placeholder="Agrega un precio base" name="precioBase" type="text" style="width:80%">

            <input class="w-input w3-animate-input" placeholder="Pegue aquí el enlace del video" name="video" type="text" style="width:80%"></p>

            <div class="fotografias">
                <h4>Fotografías</h4>
                <div>
                    <dd>
                        <div id="adjuntos">
                            <input class="fots" name="archivos[]" placeholder="Documento a subir" type="file"></input>
                        </div>
                    </dd>
                    <dt>
                        <a class="form-control" value="Add" onClick="addCampo()">+ Subir otra imagen</a>
                    </dt>
                </div>
            </div>
        <!--    <div class="fotografias">
                <h4>Fotografías</h4>
                <input class="fots" type="file" name="foto1" id="foto1"   />
                <input class="fots" type="file" name="foto2" id="foto2"  />
                <input class="fots" type="file" name="foto3" id="foto3"  />
                <input  class="fots" type="file" name="foto4" id="foto4"  />
                <input class="fots" type="file" name="foto5" id="foto5"  />
            </div>
            -->
        </div>

        {!! Form::submit('Agregar modelo', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}

    </div>




    <div class="col-sm-6">
        <div class="row" >
            <div class="col-sm-12"><h4>Materiales disponibles</h4></div>
            <div class="col-sm-12"><h6>Seleccione los materiales disponibles para el modelo</h6></div>
            <div class="row">
                <div class="col-sm-6">
                    <h5>Cielo raso</h5>
                    <div class="panelMaterials">

                        <div class="materiales">

                            @foreach($materials as $material)

                            @if($material->categoria=="Cielo raso")

                            <div class="row">
                                <div class="col-sm-6"><p><input  class="col-sm-2" type="checkbox"><label  class="col-sm-10">  {!! $material->nombre !!}</label></p></div>
                                <div class="col-sm-6"><input class="w-input" placeholder="Precio"  name="precio-{!! $material->nombre !!}" type="text" style="width:60%;margin: 0;"></p>
                                </div>
                            </div>


                            @endif
                            @endforeach

                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <h5>Techo</h5>
                    <div class="panelMaterials">

                        <div class="materiales">

                            @foreach($materials as $material)

                            @if($material->categoria=="Techo")


                            <div class="row">
                                <div class="col-sm-6"><p><input  class="col-sm-2" type="checkbox"><label  class="col-sm-10">  {!! $material->nombre !!}</label></p></div>
                                <div class="col-sm-6"><input class="w-input" placeholder="Precio"  name="precio-{!! $material->nombre !!}" type="text" style="width:60%;margin: 0;"></p>
                                </div>
                            </div>

                            @endif
                            @endforeach

                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <h5>Piso</h5>
                    <div class="panelMaterials">

                        <div class="materiales">

                            @foreach($materials as $material)

                            @if($material->categoria=="Piso")

                            <div class="row">
                                <div class="col-sm-6"><p><input  class="col-sm-2" type="checkbox"><label  class="col-sm-10">  {!! $material->nombre !!}</label></p></div>
                                <div class="col-sm-6"><input class="w-input" placeholder="Precio" name="precio-{!! $material->nombre !!}" type="text" style="width:60%;margin: 0;"></p>
                                </div>
                            </div>

                            @endif
                            @endforeach

                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <h5>Vidrio</h5>
                    <div class="panelMaterials">

                        <div class="materiales">

                            @foreach($materials as $material)

                            @if($material->categoria=="Vidrio")
                            <div class="row">
                                <div class="col-sm-6"><p><input  class="col-sm-2" type="checkbox"><label  class="col-sm-10">  {!! $material->nombre !!}</label></p></div>
                                <div class="col-sm-6"><input class="w-input" placeholder="Precio"  name="precio-{!! $material->nombre !!}" type="text" style="width:60%;margin: 0;"></p>
                                </div>
                            </div>

                            @endif
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>


</div> <!--container-->

@endsection
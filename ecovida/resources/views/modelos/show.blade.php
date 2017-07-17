@extends('app')


@section('content')
<link href="../css/lightbox.css" rel="stylesheet">
<script type="text/javascript" src="../js/lightbox.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<script>

    function decryptfun() {

        var precioBase = parseInt(document.getElementById('precioBase2').textContent);


        var cieloString = precioCielo();
        var res1 = cieloString.split(" ");
        var precioC = parseInt(res1[1]) + 0;

        var techoString = precioTecho();
        var res2 = techoString.split(" ");
        var precioT = parseInt(res2[1]) + 0;

        var pisoString = precioPiso();
        var res3 = pisoString.split(" ");
        var precioP = parseInt(res3[1]) + 0;

        var vidrioString = precioVidrio();
        var res4 = vidrioString.split(" ");
        var precioV = parseInt(res4[1]) + 0;

        var precioTotal = precioBase + precioC + precioT + precioP + precioV + 0;
        document.getElementById('label').innerHTML = "$ " + precioTotal;
        document.getElementById("estimado").value = precioTotal;
    }

    function precioCielo() {
        var valor = document.getElementsByName("cielo_razo");
        var precio;

        for (var i = 0; i < valor.length; i++) {
            if (valor[i].checked) {
                precio = document.getElementsByName("precioC-" + valor[i].id);
                //alert(" Elemento: " + valor[i].value + "\n Seleccionado: " + valor[i].checked + "\n Precio: " + precio[0].textContent);
                //document.getElementById('label').innerHTML = precio[0].textContent;
            }
        }
        return precio.item(0).textContent;
    }

    function precioTecho() {
        var valor = document.getElementsByName("techo");
        var precio;
        for (var i = 0; i < valor.length; i++) {
            if (valor[i].checked) {
                precio = document.getElementsByName("precioT-" + valor[i].id);
                //alert(" Elemento: " + valor[i].value + "\n Seleccionado: " + valor[i].checked + "\n Precio: " + precio[0].textContent);
            }
        }
        return precio.item(0).textContent;
    }

    function precioPiso() {
        var valor = document.getElementsByName("piso");
        var precio;
        for (var i = 0; i < valor.length; i++) {
            if (valor[i].checked) {
                precio = document.getElementsByName("precioP-" + valor[i].id);
                //alert(" Elemento: " + valor[i].value + "\n Seleccionado: " + valor[i].checked + "\n Precio: " + precio[0].textContent);
            }
        }
        return precio.item(0).textContent;
    }

    function precioVidrio() {
        var valor = document.getElementsByName("vidrio");
        var precio;
        for (var i = 0; i < valor.length; i++) {
            if (valor[i].checked) {
                precio = document.getElementsByName("precioV-" + valor[i].id);
                //alert(" Elemento: " + valor[i].value + "\n Seleccionado: " + valor[i].checked + "\n Precio: " + precio[0].textContent);
            }
        }
        return precio.item(0).textContent;
    }

</script>

<div class="container" >
    @include('flash::message')
    <div class="row" id="reporte">

        <h1 align="center">Cotizacion del modelo<br>{{$modelo->nombre}} <br> </h1>
        <br>

        <div class="col-md-12 col-md-offset-1">

            <h2  class="entrelineas">Fotos del Modelo</h2>
            <div class="container">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <?php
                        $contador = 0;
                        try {
                            $CodigoModelo = $modelo->id;
                            $imagenes = DB::table('fotos_modelos')->get();
                            $ImagenActual;
                            foreach ($imagenes as $imagen) {
                                if ($imagen->producto_ID = $CodigoModelo) {
                                    $ImagenActual = $imagen;
                                }
                            }
                            $imagenesActuales = DB::table('fotos_modelos')->where("modelo_ID", $CodigoModelo)->get();
                            if ($contador == 0) {

                                foreach ($imagenesActuales as &$imgNow) {
                                    $Identificador_imag = $ImagenActual->id;
                                    $ruta_imgen = 'ecovida/public' . $imgNow->direccion;
                                    if ($Identificador_imag == '') {
                                        //header("Location: consulta_incidente.php"); // aca lo que pregunto es si la lista se encuentra en blanco y no retorno ningun resultado entonces me envie a una pagina que indique que la lista esta en blanco.
                                        $BusquedaVasia = "No hay imagenes disponibles para mostrar.";
                                        echo
                                        '<tr>' .
                                        '<td>' .
                                        '<label>'
                                        . $BusquedaVasia .
                                        '</label>' .
                                        '</td>' .
                                        '</tr>';
                                    } else {
                                        if ($contador == 0) {
                                            echo
                                            '<div class="center item active">' .
                                            '<img height="200" width="500" src="/' . $ruta_imgen . '" style="margin: auto;">' .
                                            '</div>';
                                        } else
                                            echo
                                            '<div class="center item">' .
                                            '<a href="../../../' . $ruta_imgen . '" data-lightbox="roadtrip"><img height="200" width="500" src="/' . $ruta_imgen . '" style="margin: auto;"></a>' .
                                            '</div>';
                                    }



                                    $contador = 1;
                                }
                            }
                            ?>



                            <?php
                        } Catch (GlobalError $e) {
                            header("Location: pagina_error.php");
                        }
                        ?>
                    </div>

                    <!--
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="la.jpg" alt="Los Angeles" style="width:100%;">
                        </div>

                        <div class="item">
                            <img src="chicago.jpg" alt="Chicago" style="width:100%;">
                        </div>

                        <div class="item">
                            <img src="ny.jpg" alt="New york" style="width:100%;">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>


            <div class="row>">
                <div class="form-group col-md-12">
                    <h2 class="entrelineas">Descripcion</h2>
                    <p>
                    <h4>{!! $modelo->descripcion !!}</h4>
                    </p>
                </div>
            </div>

            <div class="row>">
                <div class="form-group col-md-6">
                    {{--
                    {!! Form::label('precioBase', 'Precio Base: ') !!}
                    --}}
                    <div class="raw">
                        <h2 class="precioBaseH2">Precio Base:</h2>
                    </div>

                    <font size="30" id="precioBase2" type="hidden"> {!! $modelo->precioBase !!}</font>
                    {{--
                    {!! Form::label('precioBase', $modelo->precioBase, ['class' => 'form-control' , 'readonly' => 'true', 'id'=>'precioBase2']) !!}
  --}}
                </div>
                <div class="form-group col-md-6">
                    {{--
                    {!! Form::label('Tamaño', 'Tamaño: ') !!}
                    {!! Form::label('Tamaño', $modelo->tamaño, ['class' => 'form-control' , 'readonly' => 'true']) !!}
                    --}}
                    <div class="raw">
                        <h2 class="tmn">Tamaño:</h2>
                    </div>
                    <font size="30" id="tamaño" type="hidden"> {!! $modelo->tamaño !!}</font>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h2>Costo Total </h2>
                    <font name="label" id="label" size="30">$ {!! $modelo->precioBase!!}</font>

                </div>
            </div>
            @if (Auth::user()->tipo=="Cliente")
            <div>

                <h2>Materiales Disponibles </h2>
                <div class="row">
                    {!! Form::open(['route' => 'cotizacions.store', 'enctype'=>'multipart/form-data']) !!}
                    <div class="row">
                        <div class="col-sm-6">
                            <h4>Cielo raso</h4>
                            <div class="panelMaterials">

                                <!-- Variables que no se muestran en el formulario -->
                                <input type="hidden" name="precioBas" value="{!! $modelo->precioBase !!}">
                                <input type="hidden" name="modelo_ID" value="{!! $modelo->id !!}">
                                <input type="hidden" name="usuario_ID" value="{!! Auth::user()->id !!}">
                                <input type="hidden" id="estimado" name="estimado" value ="">



                                <div class="materiales">
                                    @foreach($materialModelos as $material)
                                    @if($material->modelo==$modelo->id && $material->categoria =="Cielo raso")
                                    <div class="row">
                                        <div class="col-sm-6">
                                            @foreach($materials as $mate)
                                            @if ($mate->id==$material->material)
                                            <p>
                                                <input  class="col-sm-2" type="radio" name="cielo_razo" id="{!! $material->id !!}" value="{!! $mate->nombre !!}" onclick="decryptfun()" >
                                                <label  class="col-sm-10">  {!! $mate->nombre!!}</label>
                                            </p>
                                            @endif
                                            @endforeach


                                        </div>
                                        <div class="col-sm-6">
                                            <p>
                                                <label  class="col-sm-10 w-input" name = "precioC-{!! $material->id !!}" placeholder="Precio" style="width:60%;margin: 0;" value ="{!! $material->precio !!}" id = "{!! $material->precio !!}">$ {!! $material->precio !!}</label>
                                            </p>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <h4>Techo</h4>
                            <div class="panelMaterials">

                                <div class="materiales">
                                    @foreach($materialModelos as $material)
                                    @if($material->modelo==$modelo->id && $material->categoria =="Techo")
                                    <div class="row">
                                        <div class="col-sm-6">
                                            @foreach($materials as $mate)
                                            @if ($mate->id==$material->material)
                                            <p>
                                                <input  class="col-sm-2" type="radio" name="techo" id="{!! $material->id !!}" value="{!! $mate->nombre !!}" onclick="decryptfun()" >
                                                <label  class="col-sm-10">  {!! $mate->nombre!!}</label>
                                            </p>
                                            @endif
                                            @endforeach
                                        </div>
                                        <div class="col-sm-6">
                                            <p>
                                                <label  class="col-sm-10 w-input" name = "precioT-{!! $material->id !!}" placeholder="Precio" style="width:60%;margin: 0;" value ="{!! $material->precio !!}" id = "{!! $material->precio !!}">$ {!! $material->precio !!}</label>
                                            </p>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-sm-6">
                            <h4>Piso</h4>
                            <div class="panelMaterials">

                                <div class="materiales">
                                    @foreach($materialModelos as $material)
                                    @if($material->modelo==$modelo->id && $material->categoria =="Piso")
                                    <div class="row">
                                        <div class="col-sm-6">
                                            @foreach($materials as $mate)
                                            @if ($mate->id==$material->material)
                                            <p>
                                                <input  class="col-sm-2" type="radio" name="piso" id="{!! $material->id !!}" value="{!! $mate->nombre !!}" onclick="decryptfun()" >
                                                <label  class="col-sm-10">  {!! $mate->nombre!!}</label>
                                            </p>
                                            @endif
                                            @endforeach
                                        </div>
                                        <div class="col-sm-6">
                                            <p>
                                                <label  class="col-sm-10 w-input" name = "precioP-{!! $material->id !!}" placeholder="Precio" style="width:60%;margin: 0;" value ="{!! $material->precio !!}" id = "{!! $material->precio !!}">$ {!! $material->precio !!}</label>
                                            </p>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6">
                            <h4>Vidrio</h4>
                            <div class="panelMaterials">

                                <div class="materiales">
                                    @foreach($materialModelos as $material)
                                    @if($material->modelo==$modelo->id && $material->categoria =="Vidrio")
                                    <div class="row">
                                        <div class="col-sm-6">
                                            @foreach($materials as $mate)
                                            @if ($mate->id==$material->material)
                                            <p>
                                                <input  class="col-sm-2" type="radio" name="vidrio" id="{!! $material->id !!}" value="{!! $mate->nombre !!}" onclick="decryptfun()" >
                                                <label  class="col-sm-10">  {!! $mate->nombre!!}</label>
                                            </p>
                                            @endif
                                            @endforeach
                                        </div>
                                        <div class="col-sm-6">
                                            <p>
                                                <label  class="col-sm-10 w-input" name = "precioV-{!! $material->id !!}" placeholder="Precio" style="width:60%;margin: 0;" value ="{!! $material->precio !!}" id = "{!! $material->precio !!}">$ {!! $material->precio !!}</label>
                                            </p>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    {!! Form::submit('Guardar cotización', ['class' => 'btn btn-primary']) !!}

                    {!! Form::close() !!}
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>


@endsection



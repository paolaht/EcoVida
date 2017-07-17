@extends('app')


@section('content')
  <link href="../css/lightbox.css" rel="stylesheet">
  <script type="text/javascript" src="../js/lightbox.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<div class="container" >
    <div class="row" id="reporte">


        <h3 align="center">Revision del Producto <br>Nombre: {{$producto->nombre}} <br> </h3>
        <br>




        <h3 class="entrelineas">Fotos del Producto</h3>
        </br>
        <div class="art-contentLayout">
            <?php
            try {
                $CodigProducto = $producto->id;

                $imagenes = DB::table('imagens')->get();
                $ImagenActual;

                foreach ($imagenes as $imagen) {
                    if ($imagen->producto_ID = $CodigProducto) {
                        $ImagenActual = $imagen;
                    }
                }

          //      $queryBusqueda = "SELECT * FROM cms_imagenes WHERE ID_Incidente = '$CodigoIncidente'";

         //       $resultBusqueda = mysqli_query($connection, $queryBusqueda);
         //       $rowBusqueda = mysqli_fetch_array($resultBusqueda);

                 $imagenesActuales = DB::table('imagens')->where("producto_ID", $CodigProducto) ->get();
                ?>
                <div class="ImagenMostrar">
                    <table>
                        <tr>

                            <?php

                            foreach ($imagenesActuales as &$imgNow) {
                                 $Identificador_imag = $ImagenActual->id;
                                $ruta_imgen = 'ecovida/public' . $imgNow->imagen;
                    //            $ruta_imgen = 'images/IMG_Productos/Imagen';


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
                                    echo
                                    '<td>' .
                                    '<a href="../../../' . $ruta_imgen . '" data-lightbox="roadtrip"><img width="159" src="/' . $ruta_imgen . '"></a>' .
                                    '</td>';
                                }
                            }
                            ?>
                        </tr>

                    </table>
                </div>
                <?php
            } Catch (GlobalError $e) {
                header("Location: pagina_error.php");
            }
            ?>
        </div>


        <div class="col-md-10 col-md-offset-1">
            <div class="form-group">
                {!! Form::label('Tipo', 'Tipo: ') !!}
                {!! Form::label('Tipo', $producto->tipo, ['class' => 'form-control' , 'readonly' => 'true']) !!}
            </div>


        </div>
        <div class="col-md-10 col-md-offset-1">
            <div class="form-group">
                {!! Form::label('Caracteristicas', 'Caracteristicas: ') !!}
                {!! Form::label('Caracteristicas', $producto->caracteristicas, ['class' => 'form-control' , 'readonly' => 'true']) !!}
            </div>


        </div>
        <div class="col-md-10 col-md-offset-1">
            <div class="form-group">
                {!! Form::label('Precio', 'Precio: ') !!}
                {!! Form::label('Precio', $producto->precio, ['class' => 'form-control' , 'readonly' => 'true']) !!}
            </div>


        </div>
    </div>
    <div align="center">


    </div>

    <br>
    <br>
    <br>


    @endsection

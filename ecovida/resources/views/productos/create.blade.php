@extends('app')

<body>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script type="text/javascript" src="subirCosas.js"></script>

</head>


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


<!--ESTO ES TEMPORAL, MIENTRAS DESCUBRO COMO LLAMAR CODIGO DESDE UN ARCHIVO JS QUE NO ESTA TRABAJANDO-->
<script type="text/javascript">
var numero = 0; //Esta es una variable de control para mantener nombres
//diferentes de cada campo creado dinamicamente.
var evento = function (evt) { //esta funcion nos devuelve el tipo de evento disparado
    return (!evt) ? event : evt;
}
//Aqui se hace lamagia... jejeje, esta funcion crea dinamicamente los nuevos campos file
//addCampo = function () {
function addCampo() {
    //Creamos un nuevo div para que contenga el nuevo campo
    var nDiv = document.createElement('div');
//    nDiv.innerHTML = "<br/>";
    //con esto se establece la clase de la div
    nDiv.className = 'archivo';
    //este es el id de la div, aqui la utilidad de la variable numero
    //nos permite darle un id unico
    nDiv.id = 'file' + (++numero);
    //creamos el input para el formulario:
    var nCampo = document.createElement('input');
    //le damos un nombre, es importante que lo nombren como vector, pues todos los campos
    //compartiran el nombre en un arreglo, asi es mas facil procesar posteriormente con php
    nCampo.name = 'archivos[]';
    nCampo.className = 'form-control';
    //Establecemos el tipo de campo
    nCampo.type = 'file';
    //Ahora creamos un link para poder eliminar un campo que ya no deseemos
    var a = document.createElement('a');
    //El link debe tener el mismo nombre de la div padre, para efectos de localizarla y eliminarla
    a.name = nDiv.id;
    //Este link no debe ir a ningun lado
    a.href = '#';
    //Establecemos que dispare esta funcion en click
    a.onclick = elimCamp;
    //Con esto ponemos el texto del link
    a.innerHTML = '- Eliminar';
    //Bien es el momento de integrar lo que hemos creado al documento,
    //primero usamos la función appendChild para adicionar el campo file nuevo
    nDiv.appendChild(nCampo);
    //Adicionamos el Link
    nDiv.appendChild(a);
    //Ahora si recuerdan, en el html hay una div cuyo id es 'adjuntos', bien
    //con esta función obtenemos una referencia a ella para usar de nuevo appendChild
    //y adicionar la div que hemos creado, la cual contiene el campo file con su link de eliminación:
    var container = document.getElementById('adjuntos');
    container.appendChild(nDiv);
    //Create an input type dynamically.
    var br1 = document.createElement("br");
    var br2 = document.createElement("br");
    var br3 = document.createElement("br");
    var br4 = document.createElement("br");
    var foo = document.getElementById("fooBar");
    foo.appendChild(br1);
    foo.appendChild(br2);
    foo.appendChild(br3);
    foo.appendChild(br4);
}
//con esta función eliminamos el campo cuyo link de eliminación sea presionado
var elimCamp = function (evt) {
    evt = evento(evt);
    var nCampo = rObj(evt);
    var div = document.getElementById(nCampo.name);
    div.parentNode.removeChild(div);
}
//con esta función recuperamos una instancia del objeto que disparo el evento
var rObj = function (evt) {
    return evt.srcElement ? evt.srcElement : evt.target;
}

</script>


<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <h1>Crear Nuevo Producto</h1>
    <hr>
 <!--   <form class="form-horizontal" action="guardarProductoYImagenes.php" method="GET" enctype="multipart/form-data" id="producto_form"> -->
{!! Form::open(['route' => 'productos.store', 'enctype'=>'multipart/form-data']) !!}

      <div class="form-group">
        <label name="tipo">Tipsssso:</label>
        <input id="tipo" name="tipo" class="form-control">
      </div>
      <div class="form-group">
        <label name="nombre">Nombre:</label>
        <input id="nombre" name="nombre" class="form-control">
      </div>
      <div class="form-group">
        <label name="caracteristicas">Caracteristicas:</label>
        <textarea id="caracteristicas" name="caracteristicas" rows="10" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <label name="precio">Precio:</label>
        <input id="precio" name="precio" class="form-control">
      </div>


      <div class="form-group">
                                            <div class="inputGroupContainer form-control">
                                                <div>
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
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
                                        </div>
                                        <br/><br/><br/><br/>
                                        <span id="fooBar">&nbsp;</span>


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
@extends('app')

@section('content')

<div class="container">

    @include('flash::message')

       <div class="col-md-10 col-md-offset-1">
            <h1 align="center" >Cotizacion</h1>
        </div>


    <div class="panel-heading">
        <div class="col-md-10 col-md-offset-1">
        	<div class="row">
        		<div class="col-md-8 ">
        			<div class="panel panel-default">
        				<div class="panel-heading"><h3 class="entrelineas">Caracteristicas seleccionadas</h3></div>
        				<div class="panel-body">
        				     <div class="form-group row">
                            <div data-wow-duration="1000ms" data-wow-delay="300ms">
                    @foreach ($modelos as $model)
                         @if ($model->id == $cotizacion->modelo_ID)
                             @foreach($fotosModelos as $fotos)
                                 @if($model->nombre == $fotos->modelo)
                                       <img class="" style="width: 300px " src="/ecovida/public{!! $fotos->direccion!!}" alt="">
                                   @endif
                             @endforeach
                                <div class="form-group col-md-8">
                                        <h4>{!!$model->nombre !!}</h4>

                                                <hr noshade="noshade" />
                                    </div>
                                    <div class="form-group col-md-8">
                                        <h4>Costo del modelo</h4>
                                            <p>
                                               $ {!! $cotizacion->estimado!!}
                                            </p>
                                                <hr noshade="noshade" />
                                    </div>
                         @endif
                     @endforeach
                      </div>

                    </div>
        					<div class="form-group">
                                <h4>Tipo de Cielo Razo</h4>
                                <p>
                                    {!!$cotizacion->cielo_razo !!}
                                </p>
                                <hr noshade="noshade" />
        					</div>
        					<div class="form-group">
        					    <h4>Tipo de Techo</h4>
                                <p>
                                    {!!$cotizacion->techo !!}
                                </p>
                                <hr noshade="noshade" />
        					</div >
        					<div class="form-group">
        					    <h4>Tipo de Piso</h4>
                                <p>
                                    {!!$cotizacion->piso !!}
                                </p>
                                <hr noshade="noshade" />
        					</div>
        					<div class="form-group">
        					    <h4>Tipo de Vidrio</h4>
                                <p>
                                    {!!$cotizacion->vidrio !!}
                                </p>
                                <hr noshade="noshade" />
        					</div>

        				</div>
        			</div>
        		</div>
        	</div>
        </div>

    </div>

</div>


@endsection



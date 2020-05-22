@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col offset-m3 m6">
		<div class="card">
			<div class="row">
				<div class="col m4">
					<h1 style="text-align: center;">RFC</h1>
				</div>
				<form action="{{ route('guardar_rfc') }}" method="post">
					{!! csrf_field() !!}
				<div class="col m8">
					<p>
						<input type="text" placeholder="NÚMERO DE RFC" name="numero_rfc" value="{{$datos->id}}">
					</p>
				</div>
				<div class="col offset-m4 m8">
					<p>
						<input type="text" placeholder="INICIACIÓN" name="iniciacion" value="{{ $datos->iniciacion}}" 	>
					</p>
				</div>

			</div>
			<div class="row">
				<div class="col m6">
					<input type="text" placeholder="MOTIVO DEL CAMBIO" name="motivo_cambio" value="{{$datos->motivo_cambio}}" 	>
				</div>
				<div class="col m6">
					<input type="text" placeholder="DESCRIPCIÓN DEL CAMBIO" name="descripcion_cambio" value="{{$datos->descripcion_cambio}}"	>
				</div>
			</div>
			<div class="row">
				<div class="col m6">
					<input type="text" placeholder="CI(Atributos)" name="atributos" value="{{$datos->atributos}}"	>
				</div>
				<div class="col m6">
					<input type="text" placeholder="ANÁLISIS DE RIESGO E IMPACTO/RECURSOS" name="analisis_riesgo" value="{{$datos->analisis_riesgo}}"	>
				</div>
			</div>
			<div class="row">
				<div class="col m6">
					<input type="text" placeholder="PRIORIDAD Y URGENCIA" name="prioridad" value="{{$datos->prioridad}}"	>
				</div>
				<div class="col m6">
					<input type="text" placeholder="FECHA Y HORA DE IMPLEMENTACIÓN" name="fecha_implementacion" value="{{$datos->fecha_implementacion}}"	>
				</div>
			</div>
			<div class="row">
				<div class="col m6">
					<input type="text" placeholder="RECOMENDACIÓN DEL CAB" name="recomendacion" value="{{$datos->recomendacion}}"	>
				</div>
				<div class="col m6">
					<input type="text" placeholder="IMPLEMENTACIÓN PROLONGADA" name="implementacion_prolongada" value="{{$datos->implementacion_prolongada}}"	>
				</div>
			</div>
			<div class="row">
				<div class="col m6">
					<input type="text" placeholder="IMPLEMENTACIÓN DEL CAMBIO" name="implementacion_cambio" value="{{$datos->implementacion_cambio}}"	>
				</div>
				<div class="col m6">
					<input type="text" placeholder="RESULTADOS DEL CAMBIO" name="resultados_cambio" value="{{$datos->resultados_cambio}}"	>
				</div>
			</div>
			<div class="row">
				<div class="col m6">
					<input type="text" placeholder="RESULTADO DE LAS PRUEBAS" name="resultados_pruebas" value="{{$datos->resultados_pruebas}}"	>
				</div>
				<div class="col m6">
					<input type="text" placeholder="AUTORIZADO POR" name="autorizado" value="{{$datos->autorizado}}"	>
				</div>
			</div>
			<div class="row">
				<div class="col m6">
					<input type="text" placeholder="FECHA Y HORA DE APROBACIÓN" name="fecha_aprobacion" value="{{$datos->fecha_aprobacion}}"	>
				</div>
				<div class="col m6">
					<input type="text" placeholder="REVISIÓN POST-IMPLEMENTACIÓN" name="revision_post_implementacion" value="{{$datos->revision_post_implementacion}}"	>
				</div>
			</div>
			
			<div class="row">
				<div class="col m6">
					<input type="submit" class="btn color-cut btn-block " value="guardar">
				</div>
				<div class="col m6">
					<a href="{{ route('pdf',$datos->id)}}" class="btn btn-primary btn-block">PDF</a>
				</div>
			</div>
		</div>
	</div>
				</form>
</div>
@endsection


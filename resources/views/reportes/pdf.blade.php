<style>
	body{
		font-family: 
	}
</style>
<h1 style="text-align: center;">Reporte del RFC</h1>
<center>

<table border="1">
		<tr>
			<td>NÚMERO DE RFC</td>
			<td>{{$datos->id}}</td>
		</tr>
		<tr>
			<td>INICIACIÓN</td>
			<td>{{ $datos->iniciacion}}</td>
		</tr>
		<tr>
			<td>MOTIVO DEL CAMBIO</td>
			<td>{{$datos->motivo_cambio}}</td>
		</tr>
		<tr>
			<td>DESCRIPCIÓN DEL CAMBIO</td>
			<td>{{$datos->descripcion_cambio}}</td>
		</tr>
		<tr>
			<td>CI(Atributos)</td>
			<td>{{$datos->atributos}}</td>
		</tr>
		<tr>
			<td>ANÁLISIS DE RIESGO E IMPACTO/RECURSOS</td>
			<td>{{$datos->analisis_riesgo}}</td>
		</tr>
		<tr>
			<td>PRIORIDAD Y URGENCIA</td>
			<td>{{$datos->prioridad}}</td>
		</tr>
		<tr>
			<td>FECHA Y HORA DE IMPLEMENTACIÓN</td>
			<td>{{$datos->fecha_implementacion}}</td>
		</tr>
		<tr>
			<td>RECOMENDACIÓN DEL CAB</td>
			<td>{{$datos->recomendacion}}</td>
		</tr>

		<tr>
			<td>IMPLEMENTACIÓN PROLONGADA</td>
			<td>{{$datos->implementacion_prolongada}}</td>
		</tr>
		<tr>
			<td>IMPLEMENTACIÓN DEL CAMBIO</td>
			<td>{{$datos->implementacion_cambio}}</td>
		</tr>
		<tr>
			<td>RESULTADOS DEL CAMBIO</td>
			<td>{{$datos->resultados_cambio}}</td>
		</tr>
		<tr>
			<td>RESULTADO DE LAS PRUEBAS</td>
			<td>{{$datos->resultados_pruebas}}</td>
		</tr>

		<tr>
			<td>AUTORIZADO POR</td>
			<td>{{$datos->autorizado}}</td>
		</tr>
		<tr>
			<td>FECHA Y HORA DE APROBACIÓN</td>
			<td>{{$datos->fecha_aprobacion}}</td>
		</tr>
		<tr>
			<td>REVISIÓN POST-IMPLEMENTACIÓN</td>
			<td>{{$datos->revision_post_implementacion}}</td>
		</tr>
	




</table>
</center>
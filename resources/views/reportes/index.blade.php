@extends('layouts.app')

@section('content')

@if ($message = Session::get('success'))
<div class="color-cut">
  <h5 class="center white-text" style="margin-top: 0 !important;padding: 1em;"><strong>{{ $message }}</strong></h5>
</div>

@endif

	<div class="row">
		<div class="col offset-m3 m6">
			<div class="card">
				<h4 class="center-align">Bienvenido CUTrouble</h4>
				<p style="text-align: justify;padding: 1em;">Durante el desarrollo del actual manual de usuario te capacitaremos para que seas capaz de hacer uso de todas las herramientas que te brindamos, realizar tus reportes de incidencia sin ningún problema y utilizar de manera correcta nuestro servicio de soporte y asistencia técnica. Para cualquier malentendido u problema con el contenido, favor de acudir o comunicarse a CTA</p>
				<form action="{{ route('enviar_correo')}}" method="post">
					{{ csrf_field() }}

				<div class="p5">

					<div class="input-field col offset-m3 m6">
			          <input id="email" name="email" type="text" class="validate" required>
			          <label for="email">Correo electrónico</label>
			        </div>

				<input type="submit" name="primero" class="btn btn-block color-cut margin-bottom-5" value="	El equipo no encience">
				<input type="submit" name="primero" class="btn btn-block color-cut margin-bottom-5" value="	El equipo se traba">
				<input type="submit" name="primero" class="btn btn-block color-cut margin-bottom-5" value="	El equipo se apaga">
				<input type="submit" name="primero" class="btn btn-block color-cut margin-bottom-5" value="	El equipo no tiene mouse">
				<input type="submit" name="primero" class="btn btn-block color-cut margin-bottom-5" value="	El equipo no tiene teclado">
				<input type="submit" name="primero" class="btn btn-block color-cut margin-bottom-5" value="	No funciona algún periférico">
				<input type="submit" name="primero" class="btn btn-block color-cut margin-bottom-5" value="	El equipo no cuenta con monitor">
				<input type="submit" name="primero" class="btn btn-block color-cut margin-bottom-5" value="	El monitor no enciende">
				<input type="submit" name="primero" class="btn btn-block color-cut margin-bottom-5" value="	No tengo conexión a internet">

			
				<p class="center-align">En caso de tener otro incidente, descríbelo aquí</p>
				<textarea name="otro" id="" cols="30" rows="10" placeholder="otro incidente"></textarea>

				</div>

				<input type="submit" name="primero" class="btn btn-block color-cut margin-bottom-5" value="enviar">
				
				</form>
				
			</div>
		</div>
	</div>
@endsection


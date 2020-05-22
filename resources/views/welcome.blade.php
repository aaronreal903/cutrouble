  @extends('layouts.app')
<script
  src="https://code.jquery.com/jquery-3.4.0.js"
  integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo="
  crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
    $('.parallax').parallax();
  });
      
    </script>

  @section('content')
  <div class="parallax-container">
      <div class="parallax"><img src="https://support.apple.com/content/dam/edam/applecare/images/en_US/homepage/hero-banner-homepage.image.large_2x.jpg" width="100"></div>
        <strong>
            
        <h4 class="valign-wrapper" style="margin-top:5em;margin-left: 7em;font-style: bold;">Te damos la bienvenida a nuestra página de reportes</h4>
        </strong>
    </div>
    <div class="section white">
      <div class="row container">
        <p class="grey-text text-darken-3 lighten-3 fontx10">Porque sabemos que los estudiantes son lo más importante de nuestro Centro Universitario, queremos que la experiencia al momento de hacer uso de los laboratorios sea la mejor, así que siéntete libre de hacernos saber tus inconvenientes.</p>
        <p class="fontx10">La presente plataforma es donde podrás comunicarnos sobre tus incidentes u posibles problemas  surgidos dentro de los laboratorios de cómputo de nuestro Centro Universitario.
Trabajamos para resolver cualquier duda tuya durante tu estadía en el CUT.
Agradecemos tu valiosa cooperación para la mejora la experiencia en los laboratorios.
CUTrouble es un espacio en donde estamos para ayudarte.</p>
        <a href="{{ route('reporte')}}" class="btn btn-block color-cut">Iniciar reporte</a>
      </div>
    </div>
    <div class="parallax-container">
      <div class="parallax"><img src="https://i.pinimg.com/originals/34/c4/f0/34c4f083ad420ac446f4f90448d8856c.jpg"></div>
    </div>
    @endsection
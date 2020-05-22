@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col m12">
            <div class="card">
                <h1 class="center-align">Problemas</h1>
                <table>
        <thead>
          <tr>
              <th>Folio</th>
              <th>Descripción</th>
              <th>Usuario</th>
              <th>Fecha del problema</th>
          </tr>
        </thead>

        <tbody>
            @foreach($incidentes as $incidente)
          <tr>
             <td><a href="{{route('rfc',$incidente->id)}}"> {{$incidente->id}}</a></td>
            <td>{{$incidente->descripcion}}</td>
            <td>{{$incidente->email}}</td>
            <td>{{$incidente->created_at}}</td>
          </tr>
            @endforeach
        </tbody>
      </table>
            
            </div>
        </div>
    </div>
</div>
@endsection

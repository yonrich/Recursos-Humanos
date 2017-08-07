 @extends('layouts.public')

@section('content')
<div class="container">
    @include('alerts.success')
</div>
<div class="container">
  <div class="row"> 
    <div class="col-md-12">
      <h4>Listado de Personal del Instituto</h4>
      <p></p>
        <nav class="navbar navbar">
          <a class="btn btn-default btn-sm" aria-label="Center" href="{{ route('empleados.create') }}">Nuevo Registro</a>
          <a class="btn btn-default btn-sm" href="empleados">Actualizar Listado</a>
          <a class="btn btn-default btn-sm" href="home">Terminar Tarea</a>
        </nav>
    </div>
  </div>

  </div>   
        @include('empleados.partials.table')
@endsection

 @extends('layouts.public')

@section('content')
<div class="container">
    @include('alerts.success')
</div>
<div class="container">
  <div class="row"> 
    <div class="col-md-12">
      <h4>Administración de Permisos</h4>
        <nav class="navbar navbar">
          <a class="btn btn-default btn-sm" aria-label="Left Align" href="{{ route('permisos.create') }}">Nuevo Permiso</a>
          <a class="btn btn-default btn-sm" href="permisos">Actualizar</a>
          <a class="btn btn-default btn-sm" href="home">Terminar Tarea</a>
        </nav>
    </div>
  </div>
</div>   
        @include('permisos.partials.table')
@endsection

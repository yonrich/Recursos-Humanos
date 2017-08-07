 @extends('layouts.public')

@section('content')
<div class="container">
    @include('alerts.success')
</div>
<div class="container">
  <div class="row"> 
    <div class="col-md-12">
      <h4>Administración de Roles y Permisos</h4>
        <nav class="navbar">
          <a class="btn btn-default btn-sm" href="{{ route('permisos.index') }}">Agregar Permiso</a>
          <a class="btn btn-default btn-sm" href="roles">Actualizar</a>
          <a class="btn btn-default btn-sm" href="home">Terminar Tarea</a>
        </nav>
    </div>
  </div>
</div>   
        @include('roles.partials.table')
@endsection

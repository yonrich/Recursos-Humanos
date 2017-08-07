 @extends('layouts.public')

@section('content')
<div class="container">
  <div class="row"> 
    <div class="col-md-12">
    <h4>Listado de Usuarios Activos</h4>
        <nav class="navbar navbar">
          <a class="btn btn-default btn-sm" aria-label="Left Align" href="{{ route('usuarios.create') }}"> Nuevo Registro</a>
          <a class="btn btn-default btn-sm" href="usuarios"> Actualizar Listado</a>
          <a class="btn btn-default btn-sm" href="home"> Terminar Tarea</a>
        </nav>
    </div>
  </div>
</div>   
        @include('usuarios.partials.table')
@endsection

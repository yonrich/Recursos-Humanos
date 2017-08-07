 @extends('layouts.public')

@section('content')
<div class="container">
  <div class="row"> 
    <div class="col-md-12">
    <h4>Catalogo de Niveles de Tabulador</h4>
        <nav class="navbar navbar">
          <a class="btn btn-default btn-sm" aria-label="Left Align" href="{{ route('tipoUsuarios.create') }}"> Agregar Nivel</a>
          <a class="btn btn-default btn-sm" href="catalogos"> Volver al Menú de Catálogos</a>
        </nav>
    </div>
  </div>

</div>   
        @include('catalogos.TipoUsuarios.partials.table')
@endsection

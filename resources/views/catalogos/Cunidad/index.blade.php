 @extends('layouts.public')

@section('content')
<div class="container">
  <div class="row"> 
    <div class="col-md-12">
    <h4>Catalogo de Unidades de Adscripción</h4>
        <nav class="navbar navbar">
          <a class="btn btn-default btn-sm" aria-label="Left Align" href="{{ route('Unidad.create') }}">Agregar Unidad</a>
          <a class="btn btn-default btn-sm" href="catalogos">Volver al Menú de Catálogos</a>
        </nav>
    </div>
  </div>

</div>   
        @include('catalogos.Cunidad.partials.table')
                 
@endsection

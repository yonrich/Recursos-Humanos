 @extends('layouts.public')

@section('content')
<div class="container">
  <div class="row"> 
    <div class="col-md-12">
    <center>
      <h4>Menú de Catalogos - Creación y Modificación de Registros</h4>
    <p>Seleccione Alguna de las Opciones</p>
    </center>
    
        

        <nav class="navbar navbar" style="background-color:rgb(232, 232, 232);">
          <center>
          <p></p>
            <a class="btn btn-default" aria-label="Left Align" href="{{ route('tipoUsuarios.index')}}"> Nivel</a>
          <a class="btn btn-default" aria-label="Left Align" href="{{ route('Rpuestos.index')}}"> Codigo y Puesto</a>
          <!--<a class="btn btn-default" aria-label="Left Align" href="{{ route('Departamentos.index')}}"> Departamento</a>-->
          <a class="btn btn-default" aria-label="Left Align" href="{{ route('Unidad.index')}}"> Unidad de Adscripción</a>
          <a class="btn btn-default" href="home"> Terminar Tarea</a>
        <p></p>
          </center>
          
</nav>
       
                            <center>
                                <img src="img/home.png" border=0 style="width: 45%">
                            </center>  
       

  </div>
  </div>
</div>  
@endsection

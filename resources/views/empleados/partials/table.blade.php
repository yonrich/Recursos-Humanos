<div class="container">
  <div class="row"> 
  <div class="col-md-12">  
  <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css ">         
    <table id="se-table" class="table table-bordered table-striped display" style="font-size:11px">  
       <thead>
          <tr  class="info" align="center">
           <th>No. de Empleado</th>
           <th>Nombre(s)</th>
           <th>Apellido Paterno</th>
           <th>Apellido Materno</th>
           <th>CURP</th>
           <th>Correo Institucional</th>
           <th>Nivel</th>
           <th>Código Puesto</th>
           <th>Unidad de Adscripción</th>
           <th>Acciones</th>
          </tr>
       </thead>
       <tbody> 
           @foreach($empleados as $empleado)
              
               <tr>
                    <td>{{$empleado->numeroE}}</td>
                    <td>{{$empleado->nombre}}</td>
                    <td>{{$empleado->Apaterno}}</td>
                    <td>{{$empleado->Amaterno}}</td>
                    <td>{{$empleado->curp}}</td>
                    <td>{{$empleado->correo}}</td>
                    <td>{{$empleado->nivel}}</td>
                    <td>{{$empleado->cod_puesto}}</td>
                    <td>{{$empleado->unidad}}</td>
                    <td>

                        <div class="btn-group">
                          <button type="button" class="btn btn-default btn-sm"
                                  data-toggle="dropdown">
                            Opciones
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu">
                            <li><a href="{{ route('empleados.edit', $empleado->id)}}" >Editar</a></li>
                            <li><a href="{{ route('eliminar-Empleado', $empleado->id)}}">Eliminar</a></li>
                          </ul>
                        </div>
                    </td>
               </tr>
           @endforeach
        </tbody>  
    </table>
    <script type="http://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function(){
    $('#se-table').DataTable();
});
    </script>
</div>
</div>
</div>
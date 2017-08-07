<div class="container">
  <div class="row"> 
  <div class="col-md-12">    
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/dataTables.jqueryui.min.css">    
    <table id="se-table" class="table table-bordered table-striped display" style="font-size:12px"> 
       <thead>
          <tr  class="info" align="center">
          <th width="20">No.</th>
           <th width="60">Nivel de Tabulador</th>
           <th width="280">Descripción</th>
           <th width="20">Acciones</th>
          </tr>
       </thead>
       <tbody>
           @foreach($tusuarios as $tipo)
              
               <tr>
                    <td>{{$tipo->id}}</td>
                    <td>{{$tipo->codigo}}</td>
                    <td>{{$tipo->descripcion}}</td>
                    
                    <td>
                        <center>
                          
                        <div class="btn-group">
                          <button type="button" class="btn btn-default btn-sm"
                                  data-toggle="dropdown">
                            Opciones
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu">
                            <li><a href="{{ route('tipoUsuarios.edit', $tipo->id)}}" >Editar</a></li>
                            <li><a href="{{ route('eliminar-nivel', $tipo->id)}}" >Eliminar</a></li>
                          </ul>
                        </div>

                     </center>


                     
                        
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
<div class="container">
  <div class="row"> 
  <div class="col-md-12">
    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css ">             
    <table id="se-table" class="table table-bordered table-striped display" style="font-size:12px"> 
       <thead>
          <tr  class="info" align="center">
          <th>Id</th>
           <th>Código</th>
           <th>Departamento</th>
           <th>Acciones</th>
          </tr>
       </thead>
       <tbody>
           @foreach($depas as $depa)
              
               <tr>
                    <td>{{$depa->id}}</td>
                    <td>{{$depa->codigo}}</td>
                    <td>{{$depa->descripcion}}</td>
                    
                    <td>
                        <a href="{{ route('Departamentos.edit', $depa->id)}}">Editar</a>
                        <a href="{{ route('eliminar-departamento', $depa->id)}}">Eliminar</a>
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
<div class="container">
  <div class="row"> 
  <div class="col-md-12">          
    <table id="se-table" class="table table-bordered table-striped display" style="font-size:12px"> 
       <thead>
          <tr  class="info" align="center">
           <th>Id </th>
           <th>Nombre</th>
           <th>Slug</th>
           <th>Descripción</th>
           <th>Acciones</th>
          </tr>
       </thead>
       <tbody> 
           @foreach($permisos as $permiso)
              
               <tr>
                    <td>{{$permiso->id}}</td>
                    <td>{{$permiso->name}}</td>
                    <td>{{$permiso->slug}}</td>
                    <td>{{$permiso->description}}</td>
                    <td>
                        <div class="btn-group">
                          <button type="button" class="btn btn-default btn-sm"
                                  data-toggle="dropdown">
                            Opciones
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu">
                        <li><a href="{{ route('permisos.edit', $permiso->id)}}">Editar</a></li>
                        <li><a href="{{ route('permisos.destroy', $permiso->id)}}">Eliminar</a></li>
                        </ul>
                        </div>
                    </td>
               </tr>
           @endforeach
        </tbody>  
    </table>
</div>
</div>
</div>
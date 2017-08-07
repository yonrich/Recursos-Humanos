<div class="container">
  <div class="row"> 
  <div class="col-md-12">          
    <table id="se-table" class="table table-bordered table-striped display" style="font-size:12px"> 
       <thead>
          <tr  class="info" align="center">
           <th>Rol</th>
           <th>Permisos</th>
           <th>Acciones</th>
          </tr>
       </thead>
       <tbody>

         @foreach($roles as $rol)
              
               <tr>
                    <td>{{$rol->name}}</td>
                    <td>
                    @foreach ($rol->permisos as $permiso)
                      <label>{{$permiso->slug}}</label><br>
                    @endforeach
                    </td>
                    <td>
                    <div class="btn-group">
                          <button type="button" class="btn btn-default btn-sm"
                                  data-toggle="dropdown">
                            Opciones
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu">
                        <li><a href="{{ route('roles.edit', $rol->id) }}">Editar</a></li>
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
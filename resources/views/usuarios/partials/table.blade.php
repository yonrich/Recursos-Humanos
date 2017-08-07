<div class="container">
  <div class="row"> 
  <div class="col-md-12">          
    <table id="se-table" class="table table-bordered table-striped display" style="font-size:12px"> 
       <thead>
          <tr  class="info" align="center">
           <th>Usuario</th>
           <th>Email</th>
           <th>Rol</th>
           <th>Acciones</th>
          </tr>
       </thead>
       <tbody>
           @foreach($usuarios as $user)
              
               <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    @foreach ($user->roles as $role)
                      <td>{{$role->slug}}</td>
                    @endforeach
                    
                    <td>
                        <center>
                          
                        <div class="btn-group">
                          <button type="button" class="btn btn-default btn-sm"
                                  data-toggle="dropdown">
                            Opciones
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu">
                            <li><a href="{{ route('usuarios.edit', $user->id) }}">Editar</a></li>
                            <li><a href="{{ route('usuarios.destroy', $user->id) }}">Eliminar</a></li>
                          </ul>
                        </div>

                        </center>
                        
                    </td>
               

                    


               </tr>
           @endforeach
        </tbody>  
    </table>
</div>
</div>
</div>
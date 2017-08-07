<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::post('mandarCorreo',['as'=>'mandarCorreo','uses'=>'ControlVehicular\BitacoraController@mandarCorreo']);

Route::resource("usuarios","Usuarios\UsuarioController");
Route::post('eliminarUsuario',['as'=>'eliminarUsuario','uses'=>'Usuarios\UsuarioController@destroy']);
Route::resource("empleados","Usuarios\EmpleadoController");
Route::resource("roles","Roles\RolController");
Route::post("agregarRol",['as'=>'agregarRol','uses'=>'Roles\RolController@update']);
Route::post("eliminarPermisoRol",['as'=>'eliminarPermisoRol','uses'=>'Roles\RolController@eliminarPermisoRol']);
Route::post("agregarPermiso",['as'=>'agregarPermiso','uses'=>'Roles\RolController@update']);
Route::resource("permisos","Permisos\PermisoController");

//para buscar datos de otras tablas
Route::get('/buscarEmail/{userId?}',['as' => 'buscarEmail', 'uses' => 'Usuarios\UsuarioController@buscarEmail']);


//editar 
Route::post('ConfirmarEmpleado',['as'=>'modificarEmpleado','uses'=>'Usuarios\EmpleadoController@update']);
Route::post('modificartipo',['as'=>'modificartipo','uses'=>'Catalogos\TipoUsuariosController@update']);

Route::post('modificarpuesto',['as'=>'modificarpuesto','uses'=>'Catalogos\PuestosController@update']);
Route::post('modificardepa',['as'=>'modificardepa','uses'=>'Catalogos\DepartamentoController@update']);

Route::post('modificarPermiso',['as'=>'modificarPermiso','uses'=>'Permisos\PermisoController@update']);
Route::post('modificar.Usuario',['as'=>'modificarUsuario','uses'=>'Usuarios\UsuarioController@update']);







//Catalogos
Route::resource('catalogos', 'Catalogos\CatalogosController');
Route::resource('tipoUsuarios', 'Catalogos\TipoUsuariosController');
Route::resource('catalogo-vehiculos', 'Catalogos\CatalogosVController'); 

Route::resource('Rpuestos', 'Catalogos\PuestosController');
Route::resource('Departamentos', 'Catalogos\DepartamentoController');
Route::resource('Unidad', 'Catalogos\UnidadController');


Route::resource("empleados1","Usuarios\EmpleadoController");

//Filtros de busqueda

Route::post('buscar_empleado', 'Usuarios\EmpleadoController@buscar_empleado');

Route::post('buscar_tipo', 'Catalogos\TipoUsuariosController@buscar_tipo');
Route::post('buscar_puesto', 'Catalogos\PuestosController@buscar_puesto');
Route::post('buscar_depa', 'Catalogos\DepartamentoController@buscar_depa');


//solicitud

Route::post('modificar.solicitud',['as'=>'modificar-solicitud','uses'=>'Solicitud\SolicitudController@update']);
Route::resource("solicitud","Solicitud\SolicitudController");
Route::GET('eliminar.Solicitud/{id}',['as'=>'eliminar-Solicitud','uses'=>'Solicitud\SolicitudController@destroy']);
//autocomplete
Route::get('solicitud/search/autocomplete', 'Solicitud\SolicitudController@autocomplete');



Route::GET('empleados1/{empleados1}/edit',['as'=>'empleados1.edit','uses'=>'Usuarios\EmpleadoController@edit']);
Route::GET('empleados/{empleados}/edit',['as'=>'empleados.edit','uses'=>'Usuarios\EmpleadoController@edit']);

//eliminar

Route::GET('eliminar.nivel/{id}',['as'=>'eliminar-nivel','uses'=>'Catalogos\TipoUsuariosController@destroy']);

Route::GET('eliminar.departamento/{id}',['as'=>'eliminar-departamento','uses'=>'Catalogos\DepartamentoController@destroy']);
Route::GET('eliminar.Puesto/{id}',['as'=>'eliminar-Puesto','uses'=>'Catalogos\PuestosController@destroy']);
Route::GET('eliminar.Empleado/{id}',['as'=>'eliminar-Empleado','uses'=>'Usuarios\EmpleadoController@destroy']);

Route::get('menu','HomeController@menu');


// datatable

route::get('api/empleados', function(){
     return Datatables::eloquent(App\Empleados::query())->make(true);

 });
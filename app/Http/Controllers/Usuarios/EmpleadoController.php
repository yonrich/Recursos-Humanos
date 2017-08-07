<?php

namespace App\Http\Controllers\Usuarios;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Empleado;
Use App\ModPuesto;
Use App\Munidad;
Use App\TipoUsuario;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleado::where('status',1)->get();
        return view('empleados.index',compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Unidad= Munidad::pluck('descripcion','descripcion');        
        $puestos= ModPuesto::pluck('codigo','codigo');
        $nivel= TipoUsuario::pluck('codigo','codigo');
        $option= ['1' => 'Si', '0' => 'No'];
        return view('empleados.create',compact('Unidad','puestos','nivel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empleado = new Empleado();
        $empleado->numeroE = $request->numeroE;
        $empleado->nombre = $request->nombre;
        $empleado->Apaterno = $request->Apaterno;
        $empleado->Amaterno = $request->Amaterno;
        $empleado->curp = $request->curp;
        $empleado->correo = $request->correo;
        $empleado->nivel = $request->nivel;
        $empleado->cod_puesto = $request->cod_puesto;
        $empleado->unidad = $request->unidad;
        
        $empleado->status = 1;
        $empleado->save();

        return redirect()->route('empleados.index')->with('success','Empleado registrado correctamente');
    }

    public function show($id)
    {
        //
    }

        public function edit($id)
    {
        $empleados = Empleado::where('id',$id)->first();
        $num= Munidad::pluck('codigo','codigo');
        $Unidad= Munidad::pluck('descripcion','id');        
        $puestos= ModPuesto::pluck('descripcion','id');
        $nivel= TipoUsuario::pluck('descripcion','id');
        return view('empleados.edit',compact('num','Unidad','puestos','nivel', 'empleados'));
    }

    
    public function update(Request $request)
    {
        ($request);
        $empleado = Empleado::where('id',$request->id)->first();
        $empleado->numeroE = $request->numeroE;
        $empleado->nombre = $request->nombre;
        $empleado->Apaterno = $request->Apaterno;
        $empleado->Amaterno = $request->Amaterno;
        $empleado->curp = $request->curp;
        $empleado->correo = $request->correo;
        $empleado->nivel = $request->nivel;
        $empleado->cod_puesto = $request->cod_puesto;
        $empleado->unidad = $request->unidad;
        $empleado->save();
        return redirect()->route('empleados.index');
    }

   
    public function destroy($id){ 
        $empleado = Empleado::find($id);
        $empleado->status = 0;
        $empleado->save();
        return redirect()->route('empleados.index')->with('Danger','El Empleado ha sido Eliminado');
     }


    public function buscar_empleado(Request $request){
        $dato=$request->input("dato_buscado");
        $empleados=Empleado::where('id',$dato)->get();
        return view('empleados.index',compact('empleados'));
    }
}

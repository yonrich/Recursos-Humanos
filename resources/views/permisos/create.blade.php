@extends('layouts.public')

@section('content')
 
<div class="container">
    <div class="row">
        <div class="col-md-12">            
            <div class="row">
            <div class="col-md-12">
            {{ Form::open(array('route' => 'permisos.store')) }} 
              <h4>Modulo para el Registro de Permiso</h4> 
              <hr> 

               <div class="row well"> 
                  <div class="col-sm-4 col-md-4">
                      <div class="input-group">
                          {!! Form::Label('Nombre', 'Nombre:') !!}
                          {!! Form::text('nombre',null,['placeholder'=>'nombre','class'=>'form-control','required'=>'required']) !!}
                      </div>
                  </div>
                  <div class="col-sm-4 col-md-4">
                      <div class="input-group">
                          {!! Form::Label('Slug', 'Slug:') !!}
                          {!! Form::text('slug',null,['placeholder'=>'slug','class'=>'form-control','required'=>'required']) !!}
                      </div>
                  </div>
                  <div class="col-sm-4 col-md-4">
                      <div class="input-group">
                          {!! Form::Label('Descripcion', 'Descripción:') !!}
                          {!! Form::text('descripcion',null,['placeholder'=>'descripcion','class'=>'form-control','required'=>'required']) !!}
                      </div>
                  </div>
               </div> 
                <div class="row">
                    <a class="btn btn-info" href="{{ route('permisos.index') }}"> Regresar</a>
                    {!! Form::submit('Registrar Permiso',['class'=>'btn btn-success']) !!}
                    {!! Form::close() !!}
                </div>
                
            </div>
        </div>
    </div>
</div> 
</div>

@endsection


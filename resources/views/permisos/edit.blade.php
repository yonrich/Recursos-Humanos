@extends('layouts.public')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">            
            <div class="row">
            <div class="col-md-12">
            {!! Form::model($permiso, ['route' => ['modificarPermiso',$permiso->id]]) !!}
              <h4>Modulo para Modificar Permiso</h4> 
              <hr> 

               <div class="row well"> 
                  <div class="col-sm-4 col-md-4">
                      <div class="input-group">
                          {!! Form::Label('Nombre', 'Nombre:') !!}
                          {!! Form::text('name',null,['placeholder'=>'nombre','class'=>'form-control','required'=>'required']) !!}
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
                          {!! Form::text('description',null,['placeholder'=>'descripcion','class'=>'form-control','required'=>'required']) !!}
                      </div>
                  </div>
               </div> 
                <div class="row">
                    {!! Form::hidden('id',$permiso->id) !!}
                    <a class="btn btn-info" href="{{ route('permisos.index') }}">Regresar</a>
                    {!! Form::submit('Confirmar Cambios',['class'=>'btn btn-success']) !!}
                    {!! Form::close() !!}
                </div>
                
            </div>
        </div>
    </div>
</div> 
</div>
@endsection
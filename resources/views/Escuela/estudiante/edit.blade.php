@extends('layouts.principal')
@section('content')
    {!!Form::model($estudiante,['route'=>['estudiantes.update', $estudiante->id], 'method'=>'PUT', 'files'=>true])!!}
        
            <div class="container col-xs-12">
            <h3 class="title" selected="selected">Estudiantes</h3>
            <div class="form-grup">
                {!!Form::label('Nombre:')!!}
                {!!Form::text('nombre_estudiante',null,['class'=>'form-control','placeholder'=>'Ingrese Nombre estudiante','required'])!!}
            </div><br>
            <div class="form-grup">
                {!!Form::label('Apellido:')!!}
                {!!Form::text('apellido_estudiante',null,['class'=>'form-control','placeholder'=>'Ingrese Apellido estudiante','required'])!!}
            </div><br>
            <div class="form-grup">
                {!!Form::label('Fecha de Nacimiento:')!!}
                {!!Form::date('fecha_nacimiento',null,['class'=>'form-control','placeholder'=>'Ingrese Fecha de Nacimiento','required'])!!}
            </div><br>
            <div class="form-grup">
                {!!Form::label('Dirección:')!!}
                {!!Form::text('direccion',null,['class'=>'form-control','placeholder'=>'Ingrese Direccion','required'])!!}
            </div><br>
            <div class="form-grup">
                {!!Form::label('Correo Electrónico:')!!}
                {!!Form::email('correo',null,['class'=>'form-control','placeholder'=>'Ingrese Correo Electrónico','required'])!!}
            </div><br>
            <div class="form-grup">
                {!!Form::label('Género:')!!}
                {!!Form::select('genero_id', array('1'=>'Femenino','2'=>'Masculino'),null,['class'=>'form-control'])!!}
            </div><br>
            <div class="form-grup">
                {!!Form::label('Teléfono:')!!}
                {!!Form::text('numero_telefono',$telefono->numero_telefono,['class'=>'form-control','placeholder'=>'Ingrese Teléfono','required'])!!}
            </div><br>
            <div class="form-grup">
                {!!Form::label('Seleccione foto de perfil:')!!}
                {!!Form::file('path')!!}
            </div><br>
        <div class="form-btn">
        {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
        </div>
    {!!form::close()!!}
    {!!Form::open(['route'=>['estudiantes.destroy', $estudiante->id], 'method'=>'DELETE'])!!}
        {!!Form::submit('Inhabilitar Estudiante',['class'=>'btn btn-danger'])!!}
    {!!form::close()!!}
    </div>
@stop

@extends('layouts.principal')
@section('content')
    {!!Form::open(['route'=>'compra.store', 'method'=>'POST'])!!}
        <h3>Compras</h3>
        <div class="container col-xs-12">
            <div class="form-grup">
        		{!!Form::label('Fecha:')!!}
        		{!!Form::date('fecha',null,['class'=>'form-control','placeholder'=>'Ingrese fecha', 'required'])!!}
        	</div><br>
        	<div class="form-grup">
        	<!--	{!!Form::label('Sub Total:')!!}-->
        		{!!Form::hidden('subTotal',0,['class'=>'form-control','placeholder'=>'Ingrese Sub Total', 'required'])!!}
        	</div><br>
        	<div class="form-grup">
        		<!--{!!Form::label('Descuento:')!!}-->
        		{!!Form::hidden('descuento',0,['class'=>'form-control','placeholder'=>'Ingrese Descuento', 'hidden'])!!}
        	</div><br>
            <div class="form-grup">
        <!--        {!!Form::label('Total:')!!}-->
                {!!Form::hidden('total',0,['class'=>'form-control','placeholder'=>'Ingrese Total', 'hidden'])!!}
            </div><br>
            <div class="form-grup">
                {!!Form::label('Proveedor:')!!}
                {!!Form::select('proveedores_id', $opcionproveedor,['class'=>'form-control','placeholder'=>'Ingrese Proveedor', 'required'])!!}
            </div>

        	{!!Form::submit('Guardar',['class'=>'btn btn-primary'])!!}
            </div>
        </div>
    {!!form::close()!!} 
@stop
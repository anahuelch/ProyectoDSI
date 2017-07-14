@extends('admin.template.main')

@section('content')

	<h1 align="center">Edición de Coordinadores</h1>
	<br>
	@include('flash::message')
	{!! Form::open(['route' => ['admin.coordinadores.update', $coordinador], 'method' => 'PUT']) !!}

		<div class="form-group">
			{!! Form::label('rut_coordinador','Rut Coordinador') !!}
			{!! Form::text('rut_coordinador',$coordinador->rut_coordinador, ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('nombre_coordinador','Nombre Coordinador') !!}
			{!! Form::text('nombre_coordinador',$coordinador->nombre_coordinador, ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('sexo_coordinador','Sexo Coordinador') !!}
			{!! Form::text('sexo_coordinador',$coordinador->sexo_coordinador, ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('fono_coordinador','Fono Coordinador') !!}
			{!! Form::text('fono_coordinador',$coordinador->fono_coordinador, ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('correo_coordinador','Correo Coordinador') !!}
			{!! Form::text('correo_coordinador',$coordinador->correo_coordinador, ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
				{!! Form::submit('Modificar', ["class" => "btn btn-success btn-block"]) !!}
		</div>

		{!! Form::close() !!}

@endsection
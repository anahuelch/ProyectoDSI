@extends('admin.template.main')

@section('content')

	<h1 align="center">Registro de Coordinadores</h1>
	<br>
	@include('flash::message')
	{!! Form::open(['route' => 'admin.coordinadores.store', 'method' => 'POST']) !!}

		<div class="form-group">
			{!! Form::label('rut_coordinador','Rut Coordinador') !!}
			{!! Form::text('rut_coordinador',null, ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('nombre_coordinador','Nombre Coordinador') !!}
			{!! Form::text('nombre_coordinador',null, ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('sexo_coordinador','Sexo Coordinador') !!}
			{!! Form::text('sexo_coordinador',null, ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('fono_coordinador','Teléfono Coordinador') !!}
			{!! Form::text('fono_coordinador',null, ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('correo_coordinador','Correo Coordinador') !!}
			{!! Form::text('correo_coordinador',null, ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
				{!! Form::submit('Registrar', ["class" => "btn btn-success btn-block"]) !!}
		</div>

		{!! Form::close() !!}

@endsection
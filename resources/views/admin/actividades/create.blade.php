@extends('admin.template.main')

@section('content')

	<h1 align="center">Registro de Actividades</h1>
	<br>
	@include('flash::message')
	{!! Form::open(['route' => 'admin.actividades.store', 'method' => 'POST']) !!}

		<div class="form-group">
			{!! Form::label('nombre_actividad','Nombre Actividad') !!}
			{!! Form::text('nombre_actividad',null, ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('fecha_inicio_actividad','Fecha Inicio') !!}
			{!! Form::text('fecha_inicio_actividad',null, ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('fecha_termino_actividad','Fecha Termino') !!}
			{!! Form::text('fecha_termino_actividad',null, ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('estado_actividad','Estado Actividad') !!}
			{!! Form::text('estado_actividad',null, ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('descripcion_actividad','Descripción Actividad') !!}
			{!! Form::text('descripcion_actividad',null, ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
				{!! Form::submit('Registrar', ["class" => "btn btn-success btn-block"]) !!}
		</div>

		{!! Form::close() !!}

@endsection
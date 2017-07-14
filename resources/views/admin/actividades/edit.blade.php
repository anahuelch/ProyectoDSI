@extends('admin.template.main')

@section('content')

	<h1 align="center">Registro de Actividades</h1>
	<br>
	@include('flash::message')
	{!! Form::open(['route' => ['admin.actividades.update', $actividad], 'method' => 'PUT']) !!}

		<div class="form-group">
			{!! Form::label('nombre_actividad','Nombre Actividad') !!}
			{!! Form::text('nombre_actividad',$actividad->nombre_actividad, ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('fecha_inicio_actividad','Fecha Inicio') !!}
			{!! Form::text('fecha_inicio_actividad',$actividad->fecha_inicio_actividad, ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('fecha_termino_actividad','Fecha Termino') !!}
			{!! Form::text('fecha_termino_actividad',$actividad->fecha_termino_actividad, ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('estado_actividad','Estado Actividad') !!}
			{!! Form::text('estado_actividad',$actividad->estado_actividad, ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('descripcion_actividad','Descripción Actividad') !!}
			{!! Form::text('descripcion_actividad',$actividad->descripcion_actividad, ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
				{!! Form::submit('Modificar', ["class" => "btn btn-success btn-block"]) !!}
		</div>

		{!! Form::close() !!}

@endsection
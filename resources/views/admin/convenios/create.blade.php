@extends('admin.template.main')

@section('content')

	<h1 align="center">Registro de Convenios</h1>
	<br>
	@include('flash::message')
	{!! Form::open(['route' => 'admin.convenios.store', 'method' => 'POST']) !!}

		<div class="form-group">
			{!! Form::label('nombre_convenio','Nombre Convenio') !!}
			{!! Form::text('nombre_convenio',null, ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('id_tipo','Tipo de Convenio') !!}
			{!! Form::text('id_tipo',null, ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('id_estado','Estado del Convenio') !!}
			{!! Form::text('id_estado',null, ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('id_area','Area del Convenio') !!}
			{!! Form::text('id_area',null, ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('id_coordinador','Coordinador del Convenio') !!}
			{!! Form::text('id_coordinador',null, ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('fecha_inicio','Fecha inicio Convenio') !!}
			{!! Form::date('fecha_inicio',null, ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('fecha_termino','Fecha termino Convenio') !!}
			{!! Form::date('fecha_termino',null, ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('descripcion_convenio','Descripción del Convenio') !!}
			{!! Form::text('descripcion_convenio',null, ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
				{!! Form::submit('Registrar', ["class" => "btn btn-success btn-block"]) !!}
		</div>

		{!! Form::close() !!}

@endsection
@extends('admin.template.main')

@section('content')

	<h1 align="center">Registro de Instituciones</h1>
	<br>
	@include('flash::message')
	{!! Form::open(['route' => 'admin.instituciones.store', 'method' => 'POST']) !!}

		<div class="form-group">
			{!! Form::label('nombre_institucion','Nombre Institucion') !!}
			{!! Form::text('nombre_institucion',null, ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('pais_institucion','Pais Institucion') !!}
			{!! Form::text('pais_institucion',null, ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('direccion_institucion','Direccion Institucion') !!}
			{!! Form::text('direccion_institucion',null, ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('fono_institucion','Teléfono Institucion') !!}
			{!! Form::text('fono_institucion',null, ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('descripcion_institucion','Descripción Institucion') !!}
			{!! Form::text('descripcion_institucion',null, ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
				{!! Form::submit('Registrar', ["class" => "btn btn-success btn-block"]) !!}
		</div>

		{!! Form::close() !!}

@endsection
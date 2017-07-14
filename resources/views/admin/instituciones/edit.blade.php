@extends('admin.template.main')

@section('content')

	<h1 align="center">Edición de Instituciones</h1>
	<br>
	@include('flash::message')
	{!! Form::open(['route' => ['admin.instituciones.update', $institucion], 'method' => 'PUT']) !!}

		<div class="form-group">
			{!! Form::label('nombre_institucion','Nombre Institucion') !!}
			{!! Form::text('nombre_institucion',$institucion->nombre_institucion, ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('pais_institucion','Pais Institucion') !!}
			{!! Form::text('pais_institucion',$institucion->pais_institucion, ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('direccion_institucion','Direccion Institucion') !!}
			{!! Form::text('direccion_institucion',$institucion->direccion_institucion, ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('fono_institucion','Teléfono Institucion') !!}
			{!! Form::text('fono_institucion',$institucion->fono_institucion, ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('descripcion_institucion','Descripción Institucion') !!}
			{!! Form::text('descripcion_institucion',$institucion->descripcion_institucion, ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
				{!! Form::submit('Modificar', ["class" => "btn btn-success btn-block"]) !!}
		</div>

		{!! Form::close() !!}

@endsection
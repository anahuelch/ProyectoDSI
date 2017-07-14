@extends('admin.template.main')

@section('content')

	<h1 align="center">Edición de Areas</h1>
	<br>
	@include('flash::message')
	{!! Form::open(['route' => ['admin.areas.update', $area], 'method' => 'PUT']) !!}

		<div class="form-group">
			{!! Form::label('nombre_area','Nombre Area') !!}
			{!! Form::text('nombre_area',$area->nombre_area, ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('descripcion_area','Descripcion Area') !!}
			{!! Form::text('descripcion_area',$area->descripcion_area, ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
				{!! Form::submit('Modificar', ["class" => "btn btn-success btn-block"]) !!}
		</div>

		{!! Form::close() !!}

@endsection
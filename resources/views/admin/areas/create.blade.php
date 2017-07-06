@extends('admin.template.main')

@section('content')

	<h1 align="center">Registro de Areas</h1>
	<br>
	@include('flash::message')
	{!! Form::open(['route' => 'admin.areas.store', 'method' => 'POST']) !!}

		<div class="form-group">
			{!! Form::label('nombre_area','Nombre Area') !!}
			{!! Form::text('nombre_area',null, ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('descripcion_area','Descripcion Area') !!}
			{!! Form::text('descripcion_area',null, ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
				{!! Form::submit('Registrar', ["class" => "btn btn-success btn-block"]) !!}
		</div>

		{!! Form::close() !!}

@endsection
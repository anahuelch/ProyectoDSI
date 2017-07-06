@extends('admin.template.main')

@section('content')

	<h1 align="center">Registro Objetivos</h1>
	<br>
	@include('flash::message')
	{!! Form::open(['route' => 'admin.objetivos.store', 'method' => 'POST']) !!}

	
		<div class="form-group">
			{!! Form::label('objetivo','Objetivo') !!}
			{!! Form::text('objetivo',null, ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('descripcion_objetivo','Descripción Objetivo') !!}
			{!! Form::text('descripcion_objetivo',null, ['class' => 'form-control', 'required']) !!}
		</div>
		
		<div class="form-group">
				{!! Form::submit('Registrar', ["class" => "btn btn-success btn-block"]) !!}
		</div>

		{!! Form::close() !!}

@endsection
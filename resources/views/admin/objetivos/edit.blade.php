@extends('admin.template.main')

@section('content')

	<h1 align="center">Edición Objetivos</h1>
	<br>
	@include('flash::message')
	{!! Form::open(['route' => ['admin.objetivos.update', $objetivos], 'method' => 'PUT']) !!}

		<div class="form-group">
			{!! Form::label('objetivo','Objetivo') !!}
			{!! Form::text('objetivo',$objetivos->objetivo, ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('descripcion_objetivo','Descripción Objetivo') !!}
			{!! Form::text('descripcion_objetivo',$objetivos->descripcion_objetivo, ['class' => 'form-control', 'required']) !!}
		</div>
		
		<div class="form-group">
				{!! Form::submit('Modificar', ["class" => "btn btn-success btn-block"]) !!}
		</div>

		{!! Form::close() !!}

@endsection
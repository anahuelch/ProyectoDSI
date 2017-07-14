@extends('admin.template.main')

@section('content')

	<h1 align="center">Edición de Estados</h1>
	<br>
	@include('flash::message')
	{!! Form::open(['route' => ['admin.estados.update', $area], 'method' => 'PUT']) !!}

		<div class="form-group">
			{!! Form::label('estados','Estado') !!}
			{!! Form::text('estado',$estado->estado, ['class' => 'form-control', 'required']) !!}
		</div>
		
		<div class="form-group">
				{!! Form::submit('Modificar', ["class" => "btn btn-success btn-block"]) !!}
		</div>

		{!! Form::close() !!}

@endsection
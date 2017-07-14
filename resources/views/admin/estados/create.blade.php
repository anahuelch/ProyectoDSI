@extends('admin.template.main')

@section('content')

	<h1 align="center">Registro de Estados</h1>
	<br>
	@include('flash::message')
	{!! Form::open(['route' => 'admin.estados.store', 'method' => 'POST']) !!}

		<div class="form-group">
			{!! Form::label('estado','Estado') !!}
			{!! Form::text('estado',null, ['class' => 'form-control', 'required']) !!}
		</div>
		
		<div class="form-group">
				{!! Form::submit('Registrar', ["class" => "btn btn-success btn-block"]) !!}
		</div>

		{!! Form::close() !!}

@endsection
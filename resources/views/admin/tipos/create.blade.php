@extends('admin.template.main')

@section('content')

	<h1 align="center">Registro de Tipos de Convenio</h1>
	<br>
	@include('flash::message')
	{!! Form::open(['route' => 'admin.tipos.store', 'method' => 'POST']) !!}

		<div class="form-group">
			{!! Form::label('tipo_convenio','Tipo de Convenio') !!}
			{!! Form::text('tipo_convenio',null, ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
				{!! Form::submit('Registrar', ["class" => "btn btn-success btn-block"]) !!}
		</div>

		{!! Form::close() !!}

@endsection
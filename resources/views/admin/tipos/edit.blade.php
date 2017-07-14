@extends('admin.template.main')

@section('content')

	<h1 align="center">Edición de Tipos de Convenio</h1>
	<br>
	@include('flash::message')
	{!! Form::open(['route' => ['admin.tipos.update', $tipo], 'method' => 'PUT']) !!}

		<div class="form-group">
			{!! Form::label('tipo_convenio','Tipo Convenio') !!}
			{!! Form::text('tipo_convenio',$tipo->tipo_convenio, ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
				{!! Form::submit('Modificar', ["class" => "btn btn-success btn-block"]) !!}
		</div>

		{!! Form::close() !!}

@endsection
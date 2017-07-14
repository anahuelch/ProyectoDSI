@extends('admin.template.main')

@section('content')
	<h1 align="center">Listado de Objetivos</h1>
	<br>
	<a href="{{ url('/admin/objetivos/create') }}" class="btn btn-success btn-block">Registrar Nuevo Objetivo</a>
	<br>
	@include('flash::message')
	<table class="table">
		<thead>
			<th>Objetivo</th>
			<th>Descripción</th>
			<th></th>
			<th></th>
		</thead>
	<tbody>
		@foreach($objetivos as $objetivo)
			<tr>
				<td>{{ $objetivo->objetivo }}</td>
				<td>{{ $objetivo->descripcion_objetivo}}</td>
				<td><a href="{{ route('admin.objetivos.edit', $objetivo->id) }}" class="btn btn-warning glyphicon glyphicon-pencil"> Modificar</a></td>
				<td><a onclick="return confirm('¿Está seguro que desea eliminar?')" href="{{ route('admin.objetivos.destroy', $objetivo->id) }}" class="btn btn-danger glyphicon glyphicon-trash"> Eliminar</a></td>
			</tr>
		@endforeach
	</tbody>
	</table>

	{!! $objetivos->render() !!}
@endsection
@extends('admin.template.main')

@section('content')
	<h1 align="center">Listado de Actividades</h1>
	<br>
	<a href="{{ url('/admin/actividades/create') }}" class="btn btn-success btn-block">Registrar nueva Actividad</a>
	<br>
	@include('flash::message')
	<table class="table">
		<thead>
			<th>Actividad</th>
			<th>Fecha Inicio</th>
			<th>Fecha Termino</th>
			<th>Estado</th>
			<th>Descripción</th>
			<th></th>
			<th></th>
		</thead>
	<tbody>
		@foreach($actividades as $actividad)
			<tr>
				<td>{{ $actividad->nombre_actividad }}</td>
				<td>{{ $actividad->fecha_inicio_actividad }}</td>
				<td>{{ $actividad->fecha_termino_actividad }}</td>
				<td>{{ $actividad->estado_actividad }}</td>
				<td>{{ $actividad->descripcion_actividad }}</td>
				<td><a href="{{ route('admin.actividades.edit', $actividad->id) }}" class="btn btn-warning glyphicon glyphicon-pencil"> Modificar</a></td>
				<td><a onclick="return confirm('¿Está se guro que desea eliminar la actividad?')" href="{{ route('admin.actividades.destroy', $actividad->id) }}" class="btn btn-danger glyphicon glyphicon-trash"> Eliminar</a></td>
		@endforeach
	</tbody>
	</table>

	{!! $actividades->render() !!}
@endsection
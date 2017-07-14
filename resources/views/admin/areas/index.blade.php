@extends('admin.template.main')

@section('content')
	<h1 align="center">Listado de Areas</h1>
	<br>
	<a href="{{ url('/admin/areas/create') }}" class="btn btn-success btn-block">Registrar nueva Area</a>
	<br>
	@include('flash::message')
	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Descripcion</th>
			<th></th>
			<th></th>
		</thead>
	<tbody>
		@foreach($areas as $area)
			<tr>
				<td>{{ $area->nombre_area }}</td>
				<td>{{ $area->descripcion_area }}</td>
				<td><a href="{{ route('admin.areas.edit', $area->id) }}" class="btn btn-warning glyphicon glyphicon-pencil"> Modificar</a></td>
				<td><a onclick="return confirm('¿Está se guro que desea eliminar el area?')" href="{{ route('admin.areas.destroy', $area->id) }}" class="btn btn-danger glyphicon glyphicon-trash"> Eliminar</a></td>
			</tr>
		@endforeach
	</tbody>
	</table>

	{!! $areas->render() !!}
@endsection
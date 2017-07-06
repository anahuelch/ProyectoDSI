@extends('admin.template.main')

@section('content')
	<h1 align="center">Listado de Instituciones</h1>
	<br>
	<a href="{{ url('/admin/instituciones/create') }}" class="btn btn-success btn-block">Registrar nueva Institución</a>
	<br>
	@include('flash::message')
	<table class="table">
		<thead>
			<th>Institución</th>
			<th>Pais</th>
			<th>Dirección</th>
			<th>Teléfono</th>
			<th>Descripción</th>
			<th></th>
			<th></th>
		</thead>
	<tbody>
		@foreach($instituciones as $institucion)
			<tr>
				<td>{{ $institucion->nombre_institucion }}</td>
				<td>{{ $institucion->pais_institucion }}</td>
				<td>{{ $institucion->direccion_institucion }}</td>
				<td>{{ $institucion->fono_institucion }}</td>
				<td>{{ $institucion->descripcion_institucion }}</td>
				<td><a href="{{ route('admin.instituciones.edit', $institucion->id) }}" class="btn btn-warning glyphicon glyphicon-pencil"> Modificar</a></td>
				<td><a onclick="return confirm('¿Está se guro que desea eliminar la institución?')" href="{{ route('admin.instituciones.destroy', $institucion->id) }}" class="btn btn-danger glyphicon glyphicon-trash"> Eliminar</a></td>
			</tr>
		@endforeach
	</tbody>
	</table>

	{!! $instituciones->render() !!}
@endsection
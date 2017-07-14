@extends('admin.template.main')

@section('content')
	<h1 align="center">Listado de Coordinadores</h1>
	<br>
	<a href="{{ url('/admin/coordinadores/create') }}" class="btn btn-success btn-block">Registrar nuevo Coordinador</a>
	<br>
	@include('flash::message')
	<table class="table">
		<thead>
			<th>Rut</th>
			<th>Nombre</th>
			<th>Sexo</th>
			<th>Teléfono</th>
			<th>Correo</th>
			<th></th>
			<th></th>
		</thead>
	<tbody>
		@foreach($coordinadores as $coordinador)
			<tr>
				<td>{{ $coordinador->rut_coordinador }}</td>
				<td>{{ $coordinador->nombre_coordinador }}</td>
				<td>{{ $coordinador->sexo_coordinador }}</td>
				<td>{{ $coordinador->fono_coordinador }}</td>
				<td>{{ $coordinador->correo_coordinador }}</td>
				<td><a href="{{ route('admin.coordinadores.edit', $coordinador->id) }}" class="btn btn-warning glyphicon glyphicon-pencil"> Modificar</a></td>
				<td><a onclick="return confirm('¿Está seguro que desea eliminar al coordinador?')" href="{{ route('admin.coordinadores.destroy', $coordinador->id) }}" class="btn btn-danger glyphicon glyphicon-trash"> Eliminar</a></td>
			</tr>
		@endforeach
	</tbody>
	</table>

	{!! $coordinadores->render() !!}
@endsection
@extends('admin.template.main')

@section('content')
	<h1 align="center">Listado de Estados</h1>
	<br>
	<a href="{{ url('/admin/estados/create') }}" class="btn btn-success btn-block">Registrar nuevo Estado</a>
	<br>
	@include('flash::message')
	<table class="table">
		<thead>
			<th>Estado</th>
			<th></th>
			<th></th>
		</thead>
	<tbody>
		@foreach($estados as $estado)
			<tr>
				<td>{{ $estado->estado }}</td>
				<td><a href="{{ route('admin.estados.edit', $estado->id) }}" class="btn btn-warning glyphicon glyphicon-pencil"> Modificar</a></td>
				<td><a onclick="return confirm('¿Está se guro que desea eliminar el estado?')" href="{{ route('admin.estados.destroy', $estado->id) }}" class="btn btn-danger glyphicon glyphicon-trash"> Eliminar</a></td>
			</tr>
		@endforeach
	</tbody>
	</table>

	{!! $estados->render() !!}
@endsection
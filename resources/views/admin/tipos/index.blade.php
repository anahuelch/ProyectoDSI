@extends('admin.template.main')

@section('content')
	<h1 align="center">Listado de Instituciones</h1>
	<br>
	<a href="{{ url('/admin/tipos/create') }}" class="btn btn-success btn-block">Registrar nueva Institución</a>
	<br>
	@include('flash::message')
	<table class="table">
		<thead>
			<th>Nombre Tipo Covenio</th>
			<th></th>
			<th></th>
		</thead>
	<tbody>
		@foreach($tipos as $tipo)
			<tr>
				<td>{{ $tipo->tipo_convenio }}</td>
				<td><a href="{{ route('admin.tipos.edit', $tipo->id) }}" class="btn btn-warning glyphicon glyphicon-pencil"> Modificar</a></td>
				<td><a onclick="return confirm('¿Está se guro que desea eliminar el tipo de convenio?')" href="{{ route('admin.tipos.destroy', $tipo->id) }}" class="btn btn-danger glyphicon glyphicon-trash"> Eliminar</a></td>
			</tr>
		@endforeach
	</tbody>
	</table>

	{!! $tipos->render() !!}
@endsection
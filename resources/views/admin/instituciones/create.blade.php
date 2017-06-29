@extends('admin.template.main')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading"> <h1 align="center">Registro de Instituciones</h1>
						<br>
						<br>
						{!! Form::open(['route' => 'admin.instituciones.store', 'method' => 'POST']) !!}

						<div class="form-group">
							{!! Form::label('nombre_institucion','Nombre Institucion') !!}
							{!! Form::text('nombre_institucion',null, ['class' => 'form-control', 'required']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('pais_institucion','Pais Institucion') !!}
							{!! Form::text('pais_institucion',null, ['class' => 'form-control', 'required']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('direccion_institucion','Direccion Institucion') !!}
							{!! Form::text('direccion_institucion',null, ['class' => 'form-control', 'required']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('fono_institucion','Teléfono Institucion') !!}
							{!! Form::text('fono_institucion',null, ['class' => 'form-control', 'required']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('descripcion_institucion','Descripción Institucion') !!}
							{!! Form::text('descripcion_institucion',null, ['class' => 'form-control', 'required']) !!}
						</div>
						<div class="form-group">
								{!! Form::submit('Registrar', ["class" => "btn btn-success btn-block", "onclick" => " return confirm(' ¿ Desea crear la asignatura ? ')"]) !!}
						</div>

						{!! Form::close() !!}

					</div>
				</div>
			</div>
		</div>
	</div>

@endsection
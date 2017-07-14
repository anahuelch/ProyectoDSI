<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
	@include('admin.template.partials.nav')
	<section>
		<!--<div class="container">-->
		<div class="row">

			<div class="col-md-3">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="list-group">
							  <a href="#" class="list-group-item active">
							    Gestión de Convenios
							  </a>



							  <a href="{{url('/admin/instituciones/')}}" class="list-group-item">Instituciones</a>
							  <a href="#" class="list-group-item">Convenios</a>
							  <a href="#" class="list-group-item">Coordinadores</a>
							  <a href="#" class="list-group-item">Actividades</a>
							  <a href="{{url('/admin/estados/')}}" class="list-group-item">Estados</a>
							  <a href="{{url('/admin/areas/')}}" class="list-group-item">Areas</a>


							  <a href="#" class="list-group-item">Instituciones</a>
							  <a href="#" class="list-group-item">Convenios</a>
							  <a href="#" class="list-group-item">Coordinadores</a>
							  <a href="#" class="list-group-item">Actividades</a>

							</div>
					</div>
				</div>
			</div>
			<div class="col-md-9">
				<div class="panel panel-default">
					<div class="panel-heading">
						@yield('content')
					</div>
				</div>
			</div>
		</div>
	<!--</div>-->
		
	</section>

	<footer class="footer">
      <div class="container">
        <span align="center" class="text-muted">Place sticky footer content here.</span>
      </div>
    </footer>

	<script scr="{{ asset('plugins/jquery/js/jquery-3.2.1.js') }}"></script>
	<script scr="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>

</body>
</html>
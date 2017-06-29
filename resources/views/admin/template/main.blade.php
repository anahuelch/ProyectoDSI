<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
</head>
<body>
	@include('admin.template.partials.nav')
	<section>
		@yield('content')
	</section>

	<script scr="{{ asset('plugins/jquery/js/jquery-3.2.1.js') }}"></script>
	<script scr="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
</body>
</html>
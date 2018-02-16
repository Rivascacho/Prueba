<!DOCTYPE html>
<html>
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>@yield('titulo', 'Default') | HELPDESK</title>

		<!-- Styles -->

    	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
    	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/mio/mystyle.css') }}">

	</head>
	<body>
	
		@include('template.partials.navbar')
	
		<header id="header">

			<div class="container">

				@yield('titulo_pagina')
					
			</div>			

		</header>

		<div class="container">
		
			<div class="col-lg-3 col-md-3">

				@include('template.partials.menu')
				
			</div>

			<div class="col-lg-9 col-md-9">

				@include('flash::message')
				@include('template.partials.errors')
				
				@yield('contenido')
				
			</div>

		</div>
		
		<!-- Scripts -->

		<script src="{{ asset('js/app.js') }}"></script>		
		<link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap/js/bootstrap.js') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('plugins/mio/myscript.js') }}">
		@yield('scripts')

	</body>

</html>
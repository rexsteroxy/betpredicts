<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Pacash</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
		
		<link rel="stylesheet" type="text/css" href="/css/app.css"></link>
		<link href="{{ asset('/css/fontawesome-all.min.css') }}" rel="stylesheet">
		<link href="{{ asset('/css/linearicons.css') }}" rel="stylesheet">
		<link href="{{ asset('/css/magnific-popup.css') }}" rel="stylesheet">
		<link href="{{ asset('/css/nice-select.css') }}" rel="stylesheet">
		<link href="{{ asset('/css/animate.min.css') }}" rel="stylesheet">
		<link href="{{ asset('/css/owl.carousel.css') }}" rel="stylesheet">
		<link href="{{ asset('/css/main.css') }}" rel="stylesheet">
		<link href="{{ asset('/css/animate.min.css') }}" rel="stylesheet">
		<!--<link rel="stylesheet"  href="/css/bootsrap.css"></link>
			<script src="/js/bootstrap.js"></script>-->
		<script src="/js/app.js"></script>
	</head>
	<body>
		<div>
			@include('include.header')
			@if(Request::is('/'))
			@include('include.showcase')
			@endif
		</div>
		<div class="container">
			
		<div class="row">
			<div class="col-md-6 col-lg-6 col-sm-6">
				@include('include.messages')
				@yield('content')
			</div>
			
			<div class="col-md-5 col-lg-6 col-sm-3">
				@include('include.sidebar')
			</div>
		</div>

	</div>
	<footer id="footer" class="text-center">
		<p>powered by Rexsteroxy @ copyright 2018</p>
		<p>Phone-Number-> 09037096290</p>
	</footer>
	</body>


</html>
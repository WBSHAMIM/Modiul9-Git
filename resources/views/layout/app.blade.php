<!doctype html>
<html lang="en">


<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Shamim Ahmad</title>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{ asset('assets/css') }}/all.css">	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css') }}/bootstrap.min.css">
	<!-- Owl Carousel CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css') }}/owl.carousel.min.css">
	<link rel="stylesheet" href="{{ asset('assets/css') }}/owl.theme.default.css">
	<!-- google font -->
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900' type='text/css'>
	<!--  progress stylesheet -->
	<link rel="stylesheet" href="{{ asset('assets/css') }}/progress.css">
	<!--  Main stylesheet -->
	<link rel="stylesheet" href="{{ asset('assets/css') }}/style.css">
	<!--  responsive stylesheet -->
	<link rel="stylesheet" href="{{ asset('assets/css') }}/responsive.css">
</head>
<body>



  @include('component.nav')


  @yield('content')

  @include('component.contact')


<footer>
	<div class="container">
		<span>All Right Reserved By &#64; Wb Shamim</span>
	</div>
</footer>




	<!-- Webshamim JavaScript files -->
	<script src="{{ asset('assets/js') }}/jquery.min.js"></script>
	<script src="{{ asset('assets/js') }}/popper.min.js"></script>
	<script src="{{ asset('assets/js') }}/bootstrap.min.js"></script>
	<script src="{{ asset('assets/js') }}/jquery.sticky.js"></script>
	<script src="{{ asset('assets/js') }}/typed.min.js"></script>
	<script src="{{ asset('assets/js') }}/smooth-scroll.js"></script>
	<script src="{{ asset('assets/js') }}/active.js"></script>
	<script src="{{ asset('assets/js') }}/owl.carousel.min.js"></script>
	<script src="{{ asset('assets/js') }}/custom.js"></script>
</body>
</html>

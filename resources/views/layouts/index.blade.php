<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ asset('lib/realCSS/css/bootstrap.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('lib/realCSS/style.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('lib/realCSS/css/swiper.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('lib/realCSS/css/dark.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('lib/realCSS/css/font-icons.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('lib/realCSS/css/animate.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('lib/realCSS/css/magnific-popup.css') }}" type="text/css" />

	<link rel="stylesheet" href="{{ asset('lib/realCSS/css/responsive.css') }}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


	<!-- Document Title
	============================================= -->
	<title>{{$styles[0]->page_title}}</title>


@stack('styles')
@yield('style')
</head>

<body>


@yield('content')

@yield('footer')



<div id="gotoTop" class="icon-angle-up"></div>


<!-- Required JavaScript Libraries -->
<script src="{{ asset('lib/realCSS/js/jquery.js') }}"></script>
<script src="{{ asset('lib/realCSS/js/plugins.js') }}"></script>


@stack('scripts')
@yield('script')
<!-- FUCNTIONS -->
<script src="{{ asset('lib/realCSS/js/functions.js') }}"></script>

</body>
</html>

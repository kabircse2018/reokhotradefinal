<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- SEO TAGS -->
	<title>Reokho | @yield('title')</title>
	<meta name="description" content="@yield('meta_description')">
	<meta name="keywords" content="@yield('meta_meta_keyword')">
	<meta name="author" content="@yield('author')">


	<link rel="icon" href="{{asset('public/frontend')}}/image/favicon.png" type="image/png" sizes="16x16">
	<link rel="stylesheet" type="text/css" href="{{asset('public/frontend')}}/css/vendor.bundle.css">
	<link id="style-css" rel="stylesheet" type="text/css" href="{{asset('public/frontend')}}/css/style.css?ver=1.1">   
	  <!-- include summernote css -->
	  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">


</head>
<!-- <style>
	#color-switch {
  display: none;
}
</style> -->
<body class="site-body style-v1">

    @include('frontend.navbar')

	@yield('content')

	@include('frontend.footer')
	
	<!-- Preloader !active please if you want -->
	<!-- <div id="preloader"><div id="status">&nbsp;</div></div> -->
	<!-- Preloader End -->

	<!-- JavaScript Bundle -->
	<script src="{{asset('public/frontend')}}/js/jquery.bundle.js"></script>
	<!-- Theme Script init() -->
	<script src="{{asset('public/frontend')}}/js/script.js"></script>
	<!-- End script -->

	<!-- include summernote css/js -->
	<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
	<script>
	$(document).ready(function() {
		$('.summernote2').summernote2({
			airMode: true
			});
	});
	
	
	</script>


</body>
</html>
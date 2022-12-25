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

<style media="screen">
	.popup{
		background-color: #ffffff;
		width: 420px;
	/*    padding: 30px 40px;*/
		position: absolute;
		transform: translate(-50%,-50%);
		left: 50%;
		top: 50%;
		border-radius: 8px;
		font-family: "Poppins",sans-serif;
		display: none;
		text-align: center;
		box-shadow: 5px 5px 30px rgba(0,0,0,.2);
		z-index: 999;
	}
	
	.popup button{
		display: block;
		 position: absolute;
	  top: 0;
	  right: 0;
		margin: 5px 5px auto;
		background-color: transparent;
		font-size: 11px;
		color: #ffffff;
		background: #03549a;
		border-radius: 100%;
		width: 20px;
		height: 20px;
		border: none;
		outline: none;
		cursor: pointer;
	}
		</style>


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
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
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
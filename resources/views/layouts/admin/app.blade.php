<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">

	<!-- Title -->
    <title>@yield('title')</title>
	<!-- Favicon -->
	<link href="{{ URL::asset('/img/logo.png') }}" rel="icon" type="image/png">
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800" rel="stylesheet">
	<!-- Icons -->
	<link href="{{asset('/css/icons.css')}}" rel="stylesheet">
	<!--Bootstrap.min css-->
	<link rel="stylesheet" href="{{asset('/plugins/bootstrap/css/bootstrap.min.css')}}">
	<!-- Adon CSS -->
	<link href="{{asset('/css/dashboard.css')}}" rel="stylesheet" type="text/css">
	<!-- Custom CSS -->
	<link href="{{asset('/css/custom.css')}}" rel="stylesheet" type="text/css">
	
	@yield('css')
</head>
{{-- <body class="app sidebar-mini rtl" > --}}
<body class="@yield('body_class')">
	@yield('content')

	<!-- Adon Scripts -->
	<!-- Core -->
	<script src="{{asset('/plugins/jquery/dist/jquery.min.js')}}"></script>
	<script src="{{asset('/js/popper.js')}}"></script>
	<script src="{{asset('/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
	@yield('js')
</body>

</html>
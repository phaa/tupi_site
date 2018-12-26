<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>@yield('title')</title>
		<!-- Meta files -->
		<meta charset="UTF-8">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--===============================================================================================-->
		<link rel="icon" type="image/png" href="{{ asset('images/icons/favicon.png') }}"/>
		<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/vendor.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('fonts/themify/themify-icons.css') }}">

	</head>
	<body class="animsition">
		<!-- Header -->
		@include('snippets/header')

		<!-- Sidebar -->
		@include('snippets/sidebar')

		<!-- Page Content -->
		@yield('page_content')

		<!-- Footer -->
		@include('snippets/footer')

		<!-- Back to top -->
		<!-- Back to top -->
		<div class="btn-back-to-top bg0-hov" id="myBtn">
		    <span class="symbol-btn-back-to-top">
		        <i class="fa fa-angle-double-up" aria-hidden="true"></i>
		    </span>
		</div>

		<!-- Javascript files -->
		<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/vendor.js') }}"></script>
		<script type="text/javascript" src="{{ asset('vendor/slick/slick.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('vendor/daterangepicker/moment.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('vendor/daterangepicker/daterangepicker.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/slick-custom.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
		<!-- Additional Scripts-->
		@yield('additional_scripts')
	</body>
</html>

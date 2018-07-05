<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>@yield('title')</title>
		<!-- Meta files -->
		@include('snippets/meta-files')
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
		@include('snippets/back-to-top')

		<!-- Javascript files -->
		@include('snippets/script-files')

		<!-- Additional Scripts-->
		@yield('additional_scripts')

	</body>
</html>
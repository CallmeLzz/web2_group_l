<!DOCTYPE html>
<html>
	<head>
		<title> @yield('title') </title>
		@include('front.layout.head')
	</head>

	<body>
		@include('front.layout.header')
		
		@yield('content')

		@include('front.layout.footer')
	</body>
</html>
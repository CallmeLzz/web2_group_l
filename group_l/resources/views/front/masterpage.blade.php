<!DOCTYPE html>
<html>
	<head>
		<title> @yield('title') </title>
		@include('front.layout.head')
		@yield('script')
	</head>

	<body>
		@include('front.layout.header')
		
		@yield('content')

		@include('front.layout.footer')
	</body>
</html>
<!DOCTYPE html>
<html>
	<head>
		<title> @yield('title') </title>
		@include('front.masterpage.head')
	</head>

	<body>
		@include('front.masterpage.header')
		
		@yield('content')

		@include('front.masterpage.footer')
	</body>
</html>
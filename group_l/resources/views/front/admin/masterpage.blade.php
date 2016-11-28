<!DOCTYPE html>
<html>
<head>
    @include('front.admin.layout.head')
    <title> @yield('title') </title>

</head>

<body>

    @include('front.admin.layout.menu')

    <div class="col-md-3 block-left">
        @include('front.admin.layout.left_menu')
    </div>

    <div class="col-md-6">
        @yield('main-content')
    </div>

    <div class="col-md-3 block-right">
        @include('front.admin.layout.right_menu')
    </div>

</body>
</html>
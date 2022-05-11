<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('content')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    @include('Layout.menu')
    @yield('content')
    @include('Layout.footer')
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</body>
</html>
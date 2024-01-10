<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body class="dark-sidenav">
    <div id="header">
        @include('includes.header')
    </div>

    <div id="main">
        @yield('content')
    </div>

    <div id="footer">
        @include('includes.footer')
    </div>

</body>
</html>
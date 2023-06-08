<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.headStyle')
    @yield('stylei')
</head>

<body>

    @yield('header')
    @yield('headerTeam')

    @yield('carouselHome')
    @yield('carouselTeam')

    @yield('main')

    @include('layout.footer')

    @include('layout.footScript')

    @yield('scriptIndex')
</body>

</html>
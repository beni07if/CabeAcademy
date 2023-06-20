<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.headStyle')
    @yield('stylei')
</head>

<body>
    @yield('bodyStart')
    @yield('header')
    @yield('headerTeam')

    @yield('carouselHome')
    @yield('carouselTeam')

    @yield('main')

    @include('layout.footer')

    @include('layout.footScript')

    @yield('scriptIndex')
    @yield('bodyEnd')
</body>

</html>
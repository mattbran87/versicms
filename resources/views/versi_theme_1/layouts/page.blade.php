<!doctype html>
<html>
<head>
    @include('versi_theme_1.includes.head')
</head>
<body>
<div class="container">

    <header class="row">
        @include('versi_theme_1.includes.header')
    </header>

    <div id="main" class="row">

            @yield('content')

    </div>

    <footer class="row">
        @include('versi_theme_1.includes.footer')
    </footer>

</div>
</body>
</html>

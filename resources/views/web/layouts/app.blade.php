<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home - Amr Cut</title>

    @include('web.layouts.styles')

</head>

<body>

    @include('web.layouts.topbar')

    <!-- navigation bar area start -->
    @include('web.layouts.header')
    <!-- navigation bar area end -->

    @yield('web-content')

    <!-- footer area start -->
    @include('web.layouts.footer')
    <!-- footer area end -->

    <div class="go-top"><i class="fas fa-level-up-alt"></i></div>

    <!-- Link of JS files -->
    @include('web.layouts.scripts')
</body>

</html>

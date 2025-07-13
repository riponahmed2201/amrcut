<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home - Amr Cut</title>

    @include('frontend.layouts.styles')

</head>
<body>

@include('frontend.layouts.topbar')

<!-- navigation bar area start -->
@include('frontend.layouts.header')
<!-- navigation bar area end -->

@yield('content')

<!-- footer area start -->
@include('frontend.layouts.footer')
<!-- footer area end -->

<div class="go-top"><i class="fas fa-level-up-alt"></i></div>

<!-- Link of JS files -->
@include('frontend')
</body>
</html>

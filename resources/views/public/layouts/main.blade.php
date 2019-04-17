<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Hami - Web Hosting HTML Template</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.png">

    <!-- Stylesheet -->
    {!!Html::style('assets/public/style.css')!!}

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Header Area Start -->
    @include('public.layouts.nav')
    <!-- Header Area End -->

    @yield('content')

    <!-- Footer Area Start -->
    @include('public.layouts.footer')
    <!-- Footer Area End -->

    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    {!!Html::script('assets/public/js/jquery.min.js')!!}
    <!-- Popper -->
    {!!Html::script('assets/public/js/popper.min.js')!!}
    <!-- Bootstrap -->
    {!!Html::script('assets/public/js/bootstrap.min.js')!!}
    <!-- All Plugins -->
    {!!Html::script('assets/public/js/hami.bundle.js')!!}
    <!-- Active -->
    {!!Html::script('assets/public/js/default-assets/active.js')!!}
  

</body>

</html>
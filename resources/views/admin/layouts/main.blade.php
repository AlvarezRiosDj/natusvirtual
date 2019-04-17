<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
  
    <title>
      ADMIN
    </title>
    {!!Html::style('assets/admin/css/bootstrap.min.css')!!}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    @yield('style')
    
  </head>
  <body>
    @include('admin.layouts.nav')
    <div class="container-fluid">
      @yield('content')
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    {!!Html::script('assets/admin/js/jquery-3.4.0.min.js')!!}
    {!!Html::script('assets/admin/js/bootstrap.min.js')!!}  

    {!!Html::script('https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js')!!}
    <script>
    $(document).ready(function () {
      bsCustomFileInput.init()
    })</script> 

    @yield('script')
  </body>
</html>
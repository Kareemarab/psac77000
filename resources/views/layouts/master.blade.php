<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Footer-with-social-icons.css">
    <!--css-->
    <link rel="stylesheet" href="{{ URL::to('./css/main.css?ver=2.0') }}">
    <style> .indented { padding-left: 50pt; padding-right: 50pt; } </style>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  </head>
  <!-- Add a class to flag when the page is fully loaded -->
  <body>

    <div id="wrapper">
      @include('includes.header')
      @include('includes.messages')
      @yield('content')
      @include('includes.footer')
    </div>

    <!--js-->
  <script src="/js/jquery.min.js"></script>
  <script src="/js/typed.js"></script>
  <script src="/js/jquery.scrolly.min.js"></script>
  <script src="/js/jquery.scrollex.min.js"></script>
  <script src="/js/skel.min.js"></script>
  <script src="/js/util.js"></script>
  <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
  <script src="/js/main.js"></script>
  <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
    CKEDITOR.replace( 'article-ckeditor' );
  </script>

  </body>
</html>

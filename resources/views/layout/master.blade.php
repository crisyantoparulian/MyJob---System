
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Moderna - Bootstrap 3 flat corporate template</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <!-- css -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/fancybox/jquery.fancybox.css') }}">
  <link rel="stylesheet" href="{{ asset('css/jcarousel.css') }}">
  <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
   <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
   <link rel="stylesheet" href="{{ asset('css/custom-fonts.css') }}">
   <link rel="stylesheet" href="{{ asset('css/bootstrap/glyphicon.css') }}">
   
  <!-- <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
  <link href="css/jcarousel.css" rel="stylesheet" />
  <link href="css/flexslider.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" /> -->

  <!-- Theme skin -->
  <link rel="stylesheet" href="{{ asset('css/default.css') }}">

  <!-- =======================================================
    Theme Name: Moderna
    Theme URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->

</head>

<body>
  <div id="wrapper">
    @include('layout.head_nav')
     <div class="container">
    <div class="row">     
        <div class="col-sm-12 blog-main">

          <div class="blog-post">
      @if (Session::has('error'))
      <div class="session-flash alert-danger">
      {{Session::get('error')}}
      </div>
      @endif
      @if (Session::has('notice'))
      <div class="session-flash alert-info">
      {{Session::get('notice')}}
      </div>
      @endif

      @yield("content")   
    </div>
  </div>
 </div>
  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="{{ asset('js/jquery/jquery.js') }}"></script>
  <script src="{{ asset('js/jquery/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/jquery/jquery.fancybox.pack.js') }}"></script>
  <script src="{{ asset('js/jquery/jquery.fancybox-media.js') }}"></script>
  <script src="{{ asset('js/google/prettify.js') }}"></script>
  <script src="{{ asset('js/portfolio/jquery.quicksand.js') }}"></script>
  <script src="{{ asset('js/portfolio/setting.js') }}"></script>
  <script src="{{ asset('js/jquery.flexslider.js') }}"></script>
  <script src="{{ asset('js/animate.js') }}"></script>
  <script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>

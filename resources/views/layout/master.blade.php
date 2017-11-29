
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>My Job Application</title>
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
  <link rel="stylesheet" href="{{ asset('css/default.css') }}">
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
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
  <script>
    function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
  $(document).ready(function(){
    var date_input=$('input[name="date_of_birth"]'); //our date input has the name "date"
    var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
    date_input.datepicker({
      format: 'yyyy/mm/dd',
      container: container,
      todayHighlight: false,
      autoclose: true,
    })
  })

  // Show a post
        $(document).on('click', '.show-modal', function() {
            $('.modal-title').text('Profile User');
            $('#name_show').val($(this).data('name'));
            $('#birth_show').val($(this).data('birth'));
            $('#education_show').val($(this).data('education'));
            $('#skills_show').val($(this).data('skills'));
            $('#address_show').val($(this).data('address'));
            $('#phone_show').val($(this).data('phone'));
            $('#other_show').val($(this).data('other'));
            $('#showModal').modal('show');
        });
</script>

</body>

</html>

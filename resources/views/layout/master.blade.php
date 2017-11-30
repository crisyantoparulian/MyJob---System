
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>My Job Application</title>
  <meta name="_token" content="{{ csrf_token() }}"/>
 <!--  <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
  <meta name="date_of_birth" content="" />
  <meta name="_token" content="{{ csrf_token() }}"/>
  <!-- css -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/fancybox/jquery.fancybox.css') }}">
  <link rel="stylesheet" href="{{ asset('css/jcarousel.css') }}">
  <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
   <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
   <link rel="stylesheet" href="{{ asset('css/custom-fonts.css') }}">
   <link rel="stylesheet" href="{{ asset('css/bootstrap/glyphicon.css') }}">
   <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
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
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/vue.resource/0.9.3/vue-resource.min.js"></script>

  <script type="text/javascript" src="{{ URL::asset('/js/item.js') }}"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <script>
    $.ajaxSetup({
         headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});
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

        // Edit a post
        $(document).on('click', '.edit-modal', function() {
            $('.modal-title').text('Edit Profile');
            $('#user_id_edit').val($(this).data('user_id'));
            $('#full_name_edit').val($(this).data('full_name'));
            $('#photo_edit').val($(this).data('photo'));
            $('#place_of_birth_edit').val($(this).data('place_of_birth'));
            $('#last_education_edit').val($(this).data('last_education'));
            $('#skills_edit').val($(this).data('skills'));
            $('#address_edit').val($(this).data('address'));
            $('#file_cv_edit').val($(this).data('file_cv'));
            $('#phone_number_edit').val($(this).data('phone_number'));
            $('#other_information_edit').val($(this).data('other_information'));
            id = $('#user_id_edit').val();
            $('#editModal').modal('show');
        });
        $('.modal-footer').on('click', '.edit', function() {
            $.ajax({
                type: 'PUT',
                url: 'details/' + id,
                data: {
                    '_token': $('input[name=_token]').val(),
                    'user_id': $("#user_id_edit").val(),
                    'full_name': $('#full_name_edit').val(),
                    'photo': $('#photo_edit').val(),
                    'place_of_birth': $('#place_of_birth_edit').val(),
                    'last_education': $('#last_education_edit').val(),
                    'skills': $('#skills_edit').val(),
                    'address': $('#address_edit').val(),
                    'file_cv': $('#file_cv_edit').val(),
                    'phone_number': $('#phone_number_edit').val(),
                    'other_information': $('#other_information_edit').val()
                },
                success: function(data) {
                    $('.errorName').addClass('hidden');
                    $('.errorPhoto').addClass('hidden');
                    $('.errorPlace').addClass('hidden');
                    $('.errorEducation').addClass('hidden');
                    $('.errorSkills').addClass('hidden');
                    $('.errorAddress').addClass('hidden');
                    $('.errorFile').addClass('hidden');
                    $('.errorPhone').addClass('hidden');
                    $('.errorOther').addClass('hidden');
  
                    if ((data.errors)) {
                        setTimeout(function () {
                            $('#editModal').modal('show');
                            toastr.error('Validation error!', 'Error Alert', {timeOut: 5000});
                        }, 500);

                        if (data.errors.full_name) {
                            $('.errorName').removeClass('hidden');
                            $('.errorName').text(data.errors.full_name);
                        }
                        if (data.errors.photo) {
                            $('.errorPhoto').removeClass('hidden');
                            $('.errorPhoto').text(data.errors.photo);
                        }
                        if (data.errors.place_of_birth) {
                            $('.errorPlace').removeClass('hidden');
                            $('.errorPlace').text(data.errors.place_of_birth);
                        }
                        if (data.errors.last_education) {
                            $('.errorEducation').removeClass('hidden');
                            $('.errorEducation').text(data.errors.last_education);
                        }
                        if (data.errors.skills) {
                            $('.errorSkills').removeClass('hidden');
                            $('.errorSkills').text(data.errors.skills);
                        }
                        if (data.errors.address) {
                            $('.errorAddress').removeClass('hidden');
                            $('.errorAddress').text(data.errors.address);
                        }
                        if (data.errors.file_cv) {
                            $('.errorFile').removeClass('hidden');
                            $('.errorFile').text(data.errors.file_cv);
                        }
                        if (data.errors.phone_number) {
                            $('.errorPhone').removeClass('hidden');
                            $('.errorPhone').text(data.errors.phone_number);
                        }
                        if (data.errors.other_information) {
                            $('.errorOther').removeClass('hidden');
                            $('.errorOther').text(data.errors.other_information);
                        }
                    } else {
                        toastr.success('Successfully updated Profile!', 'Success Alert', {timeOut: 5000});
                                            }
                }
            });
        });
</script>

</body>

</html>

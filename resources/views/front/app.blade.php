<!DOCTYPE html>
<html lang="en">
<head>
  <title>Homeu</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="description" content="big-deal">
  <meta name="keywords" content="big-deal">
  <meta name="author" content="big-deal">
  <link rel="icon" href="{{ asset('assets/images/favicon/favicon.ico') }}" type="image/x-icon">
  <link rel="shortcut icon" href="{{ asset('assets/images/favicon/favicon.ico') }}" type="image/x-icon">

  <!--Google font-->
  <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">

  <!--icon css-->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/themify.css') }}">

  <!--Slick slider css-->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick-theme.css') }}">

  <!--Animate css-->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
  <!-- Bootstrap css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">

  <!-- Theme css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color1.css') }}" media="screen" id="color">

  <!-- latest jquery-->
  <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>

  <!-- slick js-->
  <script src="{{ asset('assets/js/slick.js') }}"></script>

  <!-- popper js-->
  <script src="{{ asset('assets/js/popper.min.js') }}" ></script>

  <!-- Timer js-->
  <script src="{{ asset('assets/js/menu.js') }}"></script>

  <!-- Bootstrap js-->
  <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
  <script src="{{ asset('/assets/js/jquery.elevatezoom.js') }}"></script>

  <!-- elevatezoom js-->
  <script src="{{ asset('/assets/js/jquery.elevatezoom.js') }}"></script>

  <!-- Bootstrap js-->
  <script src="{{ asset('assets/js/bootstrap-notify.min.js') }}"></script>

  <!-- Theme js-->
  <script src="{{ asset('assets/js/slider-animat-three.js') }}"></script>
  
  <script src="{{ asset('assets/js/modal.js') }}"></script>

</head>
<body class="bg-light ">

@yield('content')

<script src="{{ asset('assets/js/script.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

<script>
  
  $(document).ready(function(){

    $("#login_button").click(function(){
      var error = 0;
      if($("#login_form input[name=email]").val() == "")
      {
        error = 1;
        var html = "";
        html += "<span class='invalid-feedback' role='alert'>";
        html += "<strong>Please fill up the email.</strong>";
        html += "</span>";

        $("#login_form input[name=email]").addClass("is-invalid").next("span").remove();
        $("#login_form input[name=email]").after(html);
      }

      if($("#login_form input[name=password]").val() == "")
      {
        error = 1;
        var html = "";
        html += "<span class='invalid-feedback' role='alert'>";
        html += "<strong>Please fill up the password.</strong>";
        html += "</span>";

        $("#login_form input[name=password]").addClass("is-invalid").next("span").remove();
        $("#login_form input[name=password]").after(html);
      }

      if(error == 1)
      {
        return;
      }

      $("#login_form input[name=password], #login_form input[name=email]").removeClass("is-invalid").children("span").remove();

      var html = "<i class='fa fa-circle-o-notch fa-spin'></i>";
      $(this).html(html);

      $.post("{{ route('login') }}", $("#login_form").serialize(), function(data){

        if(data.error == 1)
        {
          $("#login_button").html("Login");

          var html = "";
          html += "<span class='invalid-feedback' role='alert'>";
          html += "<strong>Email or password is wrong, please try again.</strong>";
          html += "</span>";
          $("#login_form input[name=password]").addClass("is-invalid").next("span").remove();
          $("#login_form input[name=password]").after(html);
          return;
        }
        else
        {
          location.reload();
        }

      }).fail(function(){

        $("#login_button").html("Login");

        var html = "";
        html += "<span class='invalid-feedback' role='alert'>";
        html += "<strong>Email or password is wrong, please try again.</strong>";
        html += "</span>";
        $("#login_form input[name=password]").addClass("is-invalid").next("span").remove();
        $("#login_form input[name=password]").after(html);
      });
    });

    $("#logout_btn").click(function(){
      $("#logout_form").submit();
    });

  });

</script>

</body>
</html>
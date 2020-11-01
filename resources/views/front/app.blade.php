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

  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/front_style.css') }}" media="screen" id="">

  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/icheck/all.css') }}">

  <link rel="stylesheet" type="text/css" href="{{ asset('assets/datatables/css/datatables.min.css') }}">

  <!-- owl carousel -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/owlCarousel/owl.carousel.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/owlCarousel/owl.theme.default.css') }}">

  <!-- jquery datepicker -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery-ui-git.css') }}">

  <!-- latest jquery-->
  <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>

  <!-- slick js-->
  <script src="{{ asset('assets/js/slick.js') }}"></script>

  <!-- popper js-->
  <script src="{{ asset('assets/js/popper.min.js') }}" ></script>

  <!-- Timer js-->
  <script src="{{ asset('assets/js/menu.js') }}"></script>

  <!-- Bootstrap js-->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="{{ asset('/assets/js/jquery.elevatezoom.js') }}"></script>

  <!-- elevatezoom js-->
  <script src="{{ asset('/assets/js/jquery.elevatezoom.js') }}"></script>

  <!-- Bootstrap js-->
  <script src="{{ asset('assets/js/bootstrap-notify.min.js') }}"></script>

  <!-- Theme js-->
  <script src="{{ asset('assets/js/slider-animat-three.js') }}"></script>
  
  <script src="{{ asset('assets/js/modal.js') }}"></script>

  <script src="{{ asset('assets/js/front.js') }}"></script>

  <script src="{{ asset('assets/js/icheck/icheck.js') }}"></script>

  <script src="{{ asset('assets/datatables/js/datatables.min.js') }}"></script>

  <!-- owl carousel -->
  <script src="{{ asset('assets/owlCarousel/owl.carousel.js') }}"></script>

  <!-- jquery datepicker -->
  <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>

  <script type="text/javascript">
    window.FontAwesomeConfig = { autoReplaceSvg: false }
  </script>

</head>
<body class="bg-light ">

@yield('content')

<script src="{{ asset('assets/js/script.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

<script>
  
  var logged_user = "{{ $logged_user }}";

  $(document).ready(function(){

    $(window).keydown(function(event){

      var clickedID = event.target.id;

      if(event.keyCode == 13) 
      {
        if(clickedID != "login_password" && clickedID != "mobileSearchItem" && clickedID != "searchItem")
        {
          event.preventDefault();
          return false;
        }
      }
    });

    $("#login_password").on('keypress',function(e) {
      if(e.which == 13) {
        $("#login_button").click();
      }
    });

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

      var html = "<i class='fas fa-spinner fa-spin'></i>";
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

  });

  function logout_now()
  {
    $("#logout_form").submit();
  }

  function addToCart(product_id)
  {
    if(logged_user == "")
    {
      $("#loginPromptText").html("Please login before add item to cart");
      $("#loginPrompt").modal('show');
      return;
    }

    $(".cart-block").removeClass("active");
    var route = "{{ route('addItemToCart') }}"; 

    $.post(route, { "_token": "{{ csrf_token() }}", "product_id" : product_id, "quantity" : 1 }, function(response){

      if(response.error == 0)
      {
        var cart_list = response.cart_list;
        var cart_html = "";
        var sum_cart = 0;
        for(var a = 0; a < cart_list.length; a++)
        {
          var cart_detail = cart_list[a];
          cart_html += '<li>';
          cart_html += '<div class="media">';
          cart_html += '<a href="#">';
          var cart_img = '../assets/images/layout-1/product/1.jpg';
          if(cart_detail.path != null)
          {
            cart_img = "{{ Storage::url(':path') }}";
            cart_img = cart_img.replace(':path', cart_detail.path);
          }

          cart_html += '<img alt="" class="mr-3" src='+cart_img+' />';
          cart_html += '</a>';
          cart_html += '<div class="media-body">';
          cart_html += '<a href="#">';
          cart_html += '<h4>'+cart_detail.product_name+'</h4>';
          cart_html += '</a>';
          cart_html += '<h4>';
          if(cart_detail.promo_price === null)
          {
            cart_html += '<span>'+cart_detail.quantity+' x RM '+parseFloat(cart_detail.price).toFixed(2)+'</span>';
          }
          else
          {
            cart_html += '<span>'+cart_detail.quantity+' x RM '+parseFloat(cart_detail.promo_price).toFixed(2)+'</span>';
          }

          cart_html += '</h4>';
          cart_html += '</div>';
          cart_html += '</div>';
          cart_html += '<div class="close-circle">';
          cart_html += '<a href="#" class="removeCart" data-toggle="modal" data-target="#removeCartDetail" cart_id="'+cart_detail.id+'">';
          cart_html += '<i class="ti-trash" aria-hidden="true"></i>';
          cart_html += '</a>';
          cart_html += '</div>';
          cart_html += '</li>';

          if(cart_detail.promo_price === null)
          {
            sum_cart += cart_detail.quantity * cart_detail.price;
          }
          else
          {
            sum_cart += cart_detail.quantity * cart_detail.promo_price;
          }
        }
        $("#footer_cart").html(cart_html);
        $("#sum_cart").html(parseFloat(sum_cart).toFixed(2));

        $("#cart_count").html(response.cart_count);

        $("a.removeCart").click(function(){
          var cart_id = $(this).attr("cart_id");
          $("#removeCartID").val(cart_id);
        });

        toastBox("success", "Added Successful", response.message);
        $(".cart-block").addClass("active");
      }
      else
      {
        alert(response.message);
      }
    });
  }

</script>

</body>
</html>
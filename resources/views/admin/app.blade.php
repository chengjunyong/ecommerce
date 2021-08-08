<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Homeu is a online grocer store, make your order and get our driver send product to your home.">
    <meta name="keywords" content="homeu, ecommerce, shopping, grocer, market, delivery">
    <meta name="author" content="Homeu Admin">
    <link rel="icon" href="{{ asset('assets/images/favicon/favicon.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon/favicon.ico') }}" type="image/x-icon">
    <title>Homeu</title>

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">
    
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flag-icon.css') }}">

    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/icofont.css') }}">

    <!-- Prism css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/prism.css') }}">

    <!-- Chartist css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chartist.css') }}">

    <!-- vector map css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vector-map.css') }}">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/admin.css') }}">

     <!-- jsgrid css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jsgrid.css') }}">

     <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/themify-icons.css') }}">

    <!-- owlcarousel css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owlcarousel.css') }}">

    <!-- Rating css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/rating.css') }}">

    <!-- Datatables css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/datatables/css/datatables.min.css') }}">

    <!-- latest jquery-->
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>

    <!-- Font Awesome-->
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css') }}" />
    <script src="{{ asset('assets/fontawesome/js/all.min.js') }}"></script>

    <!-- ICheck -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/icheck/all.css') }}">

    <!-- bootstrap date range picker -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <!-- datatable -->
    <script src="{{ asset('assets/datatables/js/datatables.min.js') }}"></script>
    <!-- ICheck -->
    <script src="{{ asset('assets/js/icheck/icheck.js') }}"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


</head>

<body>

<!-- page-wrapper Start-->
<div class="page-wrapper">

  @yield('content')

</div>

<!-- Sidebar jquery-->
<script src="{{ asset('assets/js/sidebar-menu.js') }}"></script>

<!-- feather icon js-->
<script src="{{ asset('assets/js/icons/feather-icon/feather.min.js') }}"></script>
<script src="{{ asset('assets/js/icons/feather-icon/feather-icon.js') }}"></script>

<!-- Bootstrap js-->
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.js') }}"></script>
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

<!-- bootstrap date range picker -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

<!--Full Screen -->
<script>
var elem = document.documentElement;
function openFullscreen() {
  if (!document.fullscreenElement && !document.mozFullScreenElement && !document.webkitFullscreenElement && !document.msFullscreenElement) {
    if (elem.requestFullscreen) {
      elem.requestFullscreen();
    } else if (elem.webkitRequestFullscreen) { /* Safari */
      elem.webkitRequestFullscreen();
    } else if (elem.msRequestFullscreen) { /* IE11 */
      elem.msRequestFullscreen();
    }
  }else{
    if (document.exitFullscreen) {
      document.exitFullscreen();
    } else if (document.msExitFullscreen) {
      document.msExitFullscreen();
    } else if (document.mozCancelFullScreen) {
      document.mozCancelFullScreen();
    } else if (document.webkitExitFullscreen) {
      document.webkitExitFullscreen();
    }
  }
}
</script>
</body>
</html>
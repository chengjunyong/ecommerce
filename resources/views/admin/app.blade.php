<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bigdeal admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Bigdeal admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
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
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables.css') }}">
</head>

<body>

<!-- page-wrapper Start-->
<div class="page-wrapper">

  @yield('content')

</div>

<!-- latest jquery-->
<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>

<!-- Bootstrap js-->
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.js') }}"></script>

<!-- feather icon js-->
<script src="{{ asset('assets/js/icons/feather-icon/feather.min.js') }}"></script>
<script src="{{ asset('assets/js/icons/feather-icon/feather-icon.js') }}"></script>

<!-- Sidebar jquery-->
<script src="{{ asset('assets/js/sidebar-menu.js') }}"></script>

<!--chartist js-->
<script src="{{ asset('assets/js/chart/chartist/chartist.js') }}"></script>


<!-- lazyload js-->
<script src="{{ asset('assets/js/lazysizes.min.js') }}"></script>

<!--copycode js-->
<script src="{{ asset('assets/js/prism/prism.min.js') }}"></script>
<script src="{{ asset('assets/js/clipboard/clipboard.min.js') }}"></script>
<script src="{{ asset('assets/js/custom-card/custom-card.js') }}"></script>

<!--counter js-->
<script src="{{ asset('assets/js/counter/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assets/js/counter/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('assets/js/counter/counter-custom.js') }}"></script>

<!--Customizer admin-->
<script src="{{ asset('assets/js/admin-customizer.js') }}"></script>

<!--map js-->
<script src="{{ asset('assets/js/vector-map/jquery-jvectormap-2.0.2.min.js') }}"></script>
<script src="{{ asset('assets/js/vector-map/map/jquery-jvectormap-world-mill-en.js') }}"></script>

<!--apex chart js-->
<script src="{{ asset('assets/js/chart/apex-chart/apex-chart.js') }}"></script>
<script src="{{ asset('assets/js/chart/apex-chart/stock-prices.js') }}"></script>

<!--chartjs js-->
<script src="{{ asset('assets/js/chart/flot-chart/excanvas.js') }}"></script>
<script src="{{ asset('assets/js/chart/flot-chart/jquery.flot.js') }}"></script>
<script src="{{ asset('assets/js/chart/flot-chart/jquery.flot.time.js') }}"></script>
<script src="{{ asset('assets/js/chart/flot-chart/jquery.flot.categories.js') }}"></script>
<script src="{{ asset('assets/js/chart/flot-chart/jquery.flot.stack.js') }}"></script>
<script src="{{ asset('assets/js/chart/flot-chart/jquery.flot.pie.js') }}"></script>

<!--dashboard custom js-->
<script src="{{ asset('assets/js/dashboard/default.js') }}"></script>

<!--right sidebar js-->
<script src="{{ asset('assets/js/chat-menu.js') }}"></script>

<!--height equal js-->
<script src="{{ asset('assets/js/equal-height.js') }}"></script>

<!--script admin-->
<script src="{{ asset('assets/js/admin-script.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

<!-- Jsgrid js-->
<script src="{{ asset('assets/js/jsgrid/jsgrid.min.js') }}"></script>
<script src="{{ asset('assets/js/jsgrid/griddata-manage-product.js') }}"></script>
<script src="{{ asset('assets/js/jsgrid/jsgrid-manage-product.js') }}"></script>

<!--right sidebar js-->
<script src="{{ asset('assets/js/chat-menu.js') }}"></script>

<!-- Touchspin Js-->
<script src="{{ asset('assets/js/touchspin/vendors.min.js') }}"></script>
<script src="{{ asset('assets/js/touchspin/touchspin.js') }}"></script>
<script src="{{ asset('assets/js/touchspin/input-groups.min.js') }}"></script>

<!-- Rating Js-->
<script src="{{ asset('assets/js/rating/jquery.barrating.js') }}"></script>
<script src="{{ asset('assets/js/rating/rating-script.js') }}"></script>

<!-- Owlcarousel js-->
<script src="{{ asset('assets/js/owlcarousel/owl.carousel.js') }}"></script>
<script src="{{ asset('assets/js/dashboard/product-carousel.js') }}"></script>

<!-- Datatable js-->
<script src="{{ asset('assets/js/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/js/datatables/custom-basic.js') }}"></script>

</body>
</html>
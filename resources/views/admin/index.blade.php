@extends('admin.layout')

@section('layout')
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<div class="page-body">
  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-lg-6">
          <div class="page-header-left">
            <h3>Dashboard
              <small>Homeu Dashboard Panel</small>
            </h3>
          </div>
        </div>
        <div class="col-lg-6">
          <ol class="breadcrumb pull-right">
            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid Ends-->

  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-3 col-md-6 xl-50">
        <div class="card o-hidden  widget-cards">
          <div class="bg-secondary card-body">
            <div class="media static-top-widget">
              <div class="media-body"><span class="m-0">Monthly Sales</span>
                <h3 class="mb-0">Rm <span class="counter">{{number_format($monthly_sales->sum('total'),2)}}</span><small> This Month</small></h3>
              </div>
              <div class="icons-widgets">
                <i data-feather="box"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6 xl-50">
        <div class="card o-hidden widget-cards">
          <div class="bg-primary card-body">
            <div class="media static-top-widget">
              <div class="media-body"><span class="m-0">Order</span>
                <h3 class="mb-0"><span class="counter">{{count($monthly_sales)}}</span><small> This Month</small></h3>
              </div>
              <div class="icons-widgets">
                <i data-feather="message-square"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6 xl-50">
        <div class="card o-hidden widget-cards">
          <div class="bg-warning card-body">
            <div class="media static-top-widget">
              <div class="media-body"><span class="m-0">Weekly Sales</span>
                <h3 class="mb-0">Rm <span class="counter">{{number_format($weekly_sales->sum('total',2))}}</span><small> This Week</small></h3>
              </div>
              <div class="icons-widgets">
                <i data-feather="navigation"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6 xl-50">
        <div class="card o-hidden widget-cards">
          <div class="bg-success card-body">
            <div class="media static-top-widget">
              <div class="media-body"><span class="m-0">New Users</span>
                <h3 class="mb-0"> <span class="counter">{{count($new_user)}}</span><small> This Month</small></h3>
              </div>
              <div class="icons-widgets">
                <i data-feather="users"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 xl-100">
        <div class="card height-equal">
          <div class="card-header">
            <h5>Order Activity</h5>
          </div>
          <div class="card-body">
            <div class="order-timeline">
              @foreach($order_activity as $result)
              <div class="media">
                <div class="timeline-line"></div>
                <div class="timeline-icon-primary" style="background-color: #3afe03;">
                  <i data-feather="shopping-cart"></i>
                </div>
                <div class="media-body">
                  <span class="font-primary">{{$result->fname}} {{$result->lname}}</span>
                  <p>{{date('M-d h:i:s A',strtotime($result->created_at))}}</p>
                </div>
                <span class="pull-right text-muted">{{number_format($result->final_total,2)}}</span>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-8 xl-100">
        <div class="card btn-months">
          <div class="card-header">
            <h5>Monthly Sales</h5>
          </div>
          <div class="card-body">
            <div class="revenue-chart"></div>
          </div>
        </div>
      </div>
      <div class="col-xl-6 xl-100">
        <div class="card">
          <div class="card-header">
            <h5>Category Sales (This Month)</h5>
          </div>
          <div class="card-body">
            <div class="category-sales"></div>
          </div>
        </div>
      </div>
      <div class="col-xl-6 xl-100">
        <div class="card">
          <div class="card-header">
            <h5>Last 5 Completed Orders</h5>
          </div>
          <div class="card-body">
            <div class="user-status table-responsive latest-order-table">
              <table class="table table-bordernone">
                <thead>
                  <tr>
                    <th scope="col">Order ID</th>
                    <th scope="col">Order Total</th>
                    <th scope="col">Payment Method</th>
                    <th scope="col">Delivered Time</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($order_status as $result)
                    <tr>
                      <td>{{$result->id}}</td>
                      <td class="digits">Rm {{number_format($result->final_total,2)}}</td>
                      <td class="font-danger">Cash On Delivery</td>
                      <td class="digits">{{date("M-d h:i:s A",strtotime($result->updated_at))}}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              <a href="{{route('getOrders')}}" class="btn btn-primary">View All Orders</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 xl-50">
        <div class="card customers-card">
          <div class="card-header">
            <h5>All Order Status</h5>
          </div>
          <div class="card-body p-0">
            <div class="apex-chart-container">
              <div id="order-status"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-8 xl-50">
        <div class="card height-equal">
          <div class="card-header">
            <h5>Top 5 Product</h5>
          </div>
          <div class="card-body">
            <div class="user-status table-responsive products-table">
              <table class="table table-bordernone mb-0">
                <thead>
                  <tr>
                    <th scope="col">Barcode</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Sales Quantity</th>
                    <th scope="col">Total Amount</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($top_5 as $result)
                    <tr>
                      <td class="bd-t-none u-s-tb">
                        <div class="d-inline-block">
                          <h6>{{$result->sku}}</span></h6>
                        </div>
                      </td>
                      <td>{{$result->product_name}}</td>
                      <td>{{$result->total_qty}}</td>
                      <td class="digits">Rm {{number_format($result->total,2)}}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid Ends-->

</div>

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

<!--chartist js-->
<script src="{{ asset('assets/js/chart/chartist/chartist.js') }}"></script>

<!--counter js-->
<script src="{{ asset('assets/js/counter/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assets/js/counter/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('assets/js/counter/counter-custom.js') }}"></script>

<!--dashboard custom js-->
<script>
  // Monthly Revenue
  var monthly_revenue_options = {
    chart: {
      type: 'bar',
      height: 350,
    },
    series: [{
      name: 'Sales',
      data: {{$monthly_income}},
    }],
    plotOptions:{
      bar:{ 
        dataLabels:{
          position: 'top',
        },
      },
      enabled:true,
    },
    dataLabels: {
      enabled: true,
      formatter: function (val) {
        return "Rm "+val.toFixed(2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
      },
      offsetY: -25,
      style: {
        fontSize: '12px',
        colors: ["#304758"]
      },
    },
    xaxis: {
      categories: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec']
    }
  }
  var monthly_revenue = new ApexCharts(document.querySelector(".revenue-chart"), monthly_revenue_options);
  monthly_revenue.render();

  //Category Sales
  var category_sales_options = {
      series: [{
      data:{{$category_sales}}
    }],
      chart: {
      type: 'bar',
      height: 350,
    },
    plotOptions: {
      bar: {
        borderRadius: 4,
        horizontal: true,
      }
    },
    xaxis: {
      categories:{!!$category!!},
    },
  };

  var category_sales = new ApexCharts(document.querySelector(".category-sales"), category_sales_options);
  category_sales.render();

  //All order
  var options = {
    series: {!!$different_type_status!!},
    chart: {
    width: 450,
    type: 'pie',
  },
  labels: ['Pending','Comfirmed','Shipped','Delivered'],
  responsive: [{
    breakpoint: 480,
    options: {
      chart: {
        width: 250
      },
      legend: {
        position: 'bottom'
      }
    }
  }]
  };

  var chart = new ApexCharts(document.querySelector("#order-status"), options);
  chart.render();

</script>

@endsection







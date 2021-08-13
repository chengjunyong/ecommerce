@extends('admin.layout')

@section('layout')
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<style>
  .user-status,.confirmed-order{
    overflow-y: auto;
    max-height: 350px;
    scrollbar-width: thin;
    scrollbar-color: blue orange;
  }

  .order-chart{
    overflow-x: auto;
    scrollbar-width: thin;
    scrollbar-color: blue orange;
  }

  /* Works on Chrome, Edge, and Safari */
  .user-status::-webkit-scrollbar {
    width: 12px;
  }

  .user-status::-webkit-scrollbar-thumb {
    background-color: #9ae252;
    border-radius: 20px;
    border: 3px solid white;
  }

  .confirmed-order::-webkit-scrollbar {
    width: 12px;
  }

  .confirmed-order::-webkit-scrollbar-thumb {
    background-color: #9ae252;
    border-radius: 20px;
    border: 3px solid white;
  }

  .order-chart::-webkit-scrollbar {
    width: 12px;
  }

  .order-chart::-webkit-scrollbar-thumb {
    background-color: #9ae252;
    border-radius: 20px;
    border: 3px solid white;
  }

</style>
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
      <div class="col-xl-4 xl-100">
        <div class="card height-equal">
          <div class="card-header">
            <h5>Order Shipped Activity</h5>
          </div>
          <div class="card-body confirmed-order">
            <div class="order-timeline">
              @foreach($order_activity as $result)
              <div class="media">
                <div class="timeline-line"></div>
                <div class="timeline-icon-primary" style="background-color: #3afe03;">
                  <i data-feather="shopping-cart"></i>
                </div>
                <div class="media-body">
                  <span class="font-primary">{{$result->fname}} {{$result->lname}}</span>
                  <p>Last Update - {{date('h:i:s A',strtotime($result->updated_at))}}</p>
                  <p>
                    @if($result->payment_type == "cash_on_delivery")
                      <strong>Cash On Delivery</strong>
                    @endif
                  
                  </p>
                </div>
                <span class="pull-right text-muted">Rm {{number_format($result->final_total,2)}}</span>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 xl-50">
        <div class="card customers-card">
          <div class="card-header">
            <h5>All Order Status</h5>
          </div>
          <div class="card-body p-0 order-chart">
            <div class="apex-chart-container">
              <div id="order-status"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-md-4 xl-50">
        <div class="card o-hidden">
          <div class="bg-secondary card-body" style="height:452px">
            <div class="media static-top-widget">
              <div class="media-body"><h5><span class="m-0">Order Delivered Today</span></h5>
                <h3 class="mb-0" style="font-size:6rem"><span class="counter">500</span><small></small></h3>
              </div>
              <div class="icons-widgets">
                <i data-feather="truck"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-12 xl-100">
        <div class="card">
          <div class="card-header">
            <h5>Pending Shipped Orders</h5>
          </div>
          <div class="card-body">
            <div class="user-status table-responsive latest-order-table" style="margin-bottom: 25px;">
              <table class="table table-bordernone">
                <thead>
                  <tr>
                    <th scope="col">Order ID</th>
                    <th scope="col">Order Total</th>
                    <th scope="col">Payment Method</th>
                    <th scope="col">Order Updated Time</th>
                    <th scope="col">Order Created Time</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($transaction as $result)
                    <tr>
                      <td>#{{$result->id}}</td>
                      <td>{{number_format($result->final_total,2)}}</td>
                      <td>
                        @if($result->payment_type == "cash_on_delivery")
                          Cash On Delivery
                        @else
                          Not Available
                        @endif
                      </td>
                      <td>{{date("h:i:s A",strtotime($result->updated_at))}}</td>
                      <td>{{date("(M-d) h:i:s A",strtotime($result->created_at))}}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <a href="{{route('awb')}}" target="_blank" class="btn btn-primary">Print AWB</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid Ends-->

</div>
<!--counter js-->
<script src="{{ asset('assets/js/counter/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assets/js/counter/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('assets/js/counter/counter-custom.js') }}"></script>
<script>
//All order
  var options = {
    series: {!! $status !!},
    chart: {
    width: 400,
    type: 'pie',
  },
  labels: ['Confirmed','Shipped','Delivered'],
  responsive: [{
    breakpoint: 480,
    options: {
      chart: {
        width: 150
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







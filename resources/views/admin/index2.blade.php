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
      <div class="col-xl-12 xl-100">
        <div class="card">
          <div class="card-header">
            <h5>Pending Confirmed Orders</h5>
          </div>
          <div class="card-body">
            <div class="user-status table-responsive latest-order-table">
              <table class="table table-bordernone">
                <thead>
                  <tr>
                    <th scope="col">Order ID</th>
                    <th scope="col">Order Total</th>
                    <th scope="col">Payment Method</th>
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
                      <td>{{date("h:i:s A",strtotime($result->created_at))}}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <a href="{{route('getOrders')}}" class="btn btn-primary">View All Orders</a>
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
      <div class="col-xl-8 xl-100">
        <div class="card height-equal">
          <div class="card-header">
            <h5>Order Confirmed Activity</h5>
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
    </div>
  </div>
  <!-- Container-fluid Ends-->

</div>
<script>
//All order
  var options = {
    series: {!! $status !!},
    chart: {
    width: 400,
    type: 'pie',
  },
  labels: ['Pending','Confirmed','Shipped','Delivered'],
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







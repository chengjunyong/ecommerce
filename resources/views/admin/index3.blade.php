@extends('admin.layout')

@section('layout')
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<style>
  .user-status,.confirmed-order{
    overflow-y: auto;
    max-height: 500px;
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
      <div class="col-xl-8 xl-100 packing">
        <div class="card">
          <div class="card-header">
            <h5>Pending Packing Orders</h5>
          </div>
          <div class="card-body">
            <div class="user-status table-responsive latest-order-table">
              <table class="table table-bordernone">
                <thead>
                  <tr>
                    <th scope="col">Order ID</th>
                    <th scope="col">Order Total</th>
                    <th scope="col">Payment Method</th>
                    <th scope="col">Last Updated Time</th>
                    <th></th>
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
                      <td><button class="btn btn-success" type="button" onclick=window.open("{{route('orderDetail')}}?order_id={{$result->id}}")>Check</button></td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 xl-50">
        <div class="card customers-card" style="height:650px;">
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
  labels: ['Confirmed','Delivered'],
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







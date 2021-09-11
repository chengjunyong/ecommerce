@extends('admin.layout')
@section('layout')
<div class="page-body">
  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-lg-6">
          <div class="page-header-left">
            <h3>User List
              <small>Homeu Admin panel</small>
            </h3>
          </div>
        </div>
        <div class="col-lg-6">
         <ol class="breadcrumb pull-right">
          <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item">Customer List</li>
          <li class="breadcrumb-item active">Customer Purchase List</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!-- Container-fluid Ends-->
<!-- Container-fluid starts-->
<div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <h5>Customer Purchase List</h5>
    </div>
    <div class="card-body">
      <table class="table table-striped" style="width:100%">
        <thead>
          <tr>
            <td>No</td>
            <td style="text-align: center;">Transaction Id</td>
            <td>Amount</td>
            <td>Payment Method</td>
            <td>Status</td>
            <td>Last Updated</td>
          </tr>
        </thead>
        <tbody>
          @foreach($transaction as $key => $result)
            <tr>
              <td>{{$key + 1}}</td>
              <td style="text-align: center"><a href="{{route('getTransactionDetail',$result->id)}}">{{$result->id}}</a></td>
              <td>Rm {{number_format($result->final_total,2)}}</td>
              @if($result->payment_type == 'cash_on_delivery')
                <td>Cash On Delivery</td>
              @else
                <td>Not Available</td>
              @endif
            
              @if($result->status == 1)
                <td>Pending</td>
              @elseif($result->status == 2)
                <td>Confirmed</td>
              @elseif($result->status == 3)
                <td>Shipped</td>
              @elseif($result->status == 4)
                <td>Delivered</td>
              @elseif($result->status == -1)
                <td>Cancel</td>
              @endif
              <td>{{date('d-M-Y h:i:s A',strtotime($result->updated_at))}}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<!-- Container-fluid Ends-->
</div>
<script>
  $("#customer_list").DataTable();
</script>

@endsection



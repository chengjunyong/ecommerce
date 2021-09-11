@extends('admin.layout')
@section('layout')
<style>
  .col-lg-3{
    margin-top: 10px;
  }

  .table td{
    border: none;
  }

  table thead tr td{
    font-weight: bold;
  }

  .total td{
    font-weight: bold;
  }
</style>

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
          <li class="breadcrumb-item">Customer Purchase List</li>
          <li class="breadcrumb-item active">Transaction Detail</li>
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
      <h5>Transaction Detail</h5>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-lg-3" style="display:grid;align-items: center;">
          Transaction Id
        </div>
        <div class="col-lg-3">
          <input class="form-control" type="text" readonly value="{{$transaction->id}}">
        </div>
        <div class="col-lg-3" style="display:grid;align-items: center;">
          Total Amount
        </div>
        <div class="col-lg-3">
          <input class="form-control" type="text" readonly value="Rm {{number_format($transaction->final_total,2)}}">
        </div>
        <div class="col-lg-3" style="display:grid;align-items: center;">
          Payment Method
        </div>
        <div class="col-lg-3">
          <input class="form-control" type="text" readonly value="Cash On Delivery">
        </div>
        <div class="col-lg-3" style="display:grid;align-items: center;">
          Last Update
        </div>
        <div class="col-lg-3">
          <input class="form-control" type="text" readonly value="{{date('d-M-Y h:i:s A',strtotime($transaction->updated_at))}}">
        </div>
      </div><hr/><br/>
      <h5>Purchase Details</h5>
      <table class="table table-striped" style="width:100%;margin-top: 15px;">
        <thead>
          <tr>
            <td>No</td>
            <td>Product Name</td>
            <td>Price</td>
            <td>Quantity</td>
            <td>Sub Total</td>
          </tr>
          <tbody>
            @foreach($transaction_detail as $key => $result)
              <tr>
                <td>{{$key+1}}</td>
                <td>{{$result->product_name}}</td>
                <td>Rm {{number_format($result->product_price,2)}}</td>
                <td>{{$result->quantity}}</td>
                <td>Rm {{number_format($result->total,2)}}</td>
              </tr>
            @endforeach
            <tr class="total">
              <td style="text-align: center;" colspan="3">Total</td>
              <td>{{$transaction_detail->sum('quantity')}}</td>
              <td>Rm {{number_format($transaction_detail->sum('total'),2)}}</td>
            </tr>
          </tbody>
        </thead>
      </table>
    </div>
  </div>
</div>

</div>
<!-- Container-fluid Ends-->
</div>
<script>

</script>

@endsection



@extends('admin.layout')

@section('layout')

<div class="page-body">

  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-lg-6">
          <div class="page-header-left">
            <h3>Orders
              <small>Homeu Admin panel</small>
            </h3>
          </div>
        </div>
        <div class="col-lg-6">
          <ol class="breadcrumb pull-right">
            <li class="breadcrumb-item"><a href="{{ route('getIndex') }}"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item">Sales</li>
            <li class="breadcrumb-item active">Orders</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid Ends-->

  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h5>Order Detail</h5>
          </div>
          <div class="card-body" style="font-size:17px">
           <div class="row">
            <div class="col-sm-6">
             <lable><b>Customer Name</b><br/>{{ $orderdetail[0]->fname }} {{ $orderdetail[0]->lname }}</lable>
           </div>
           <div class="col-sm-4" style="float-right">
             <lable><b>Delivery Address</b><br/>{!! $orderdetail[0]->delivery_address !!}</lable>
           </div>
           <div class="col-sm-6" style="margin-top:10px">
             <lable><b>Contact Number</b><br/>{{ $orderdetail[0]->phone_number }}</lable>
           </div>
           <div class="col-sm-6" style="margin-top:10px">
             <lable><b>Date Order</b><br/>{{ $orderdetail[0]->created_at }}</lable>
           </div>
           <div class="col-sm-12">
             <label><b><br/>List Product</b></label>
             <table style="width:50%">
               @foreach($orderdetail as $result)
               <tr style="border: 1px solid;">
                 <td>
                  <img src="{{ Storage::url($result->path) }}" width=150 height=150 style="border-right:1px solid;">
                </td>
                <td style="padding-left:10%;">
                  <div><label><b>Product Name : {{ $result->product_name }}</b></label></div>
                  <div><label><b>Quantity : {{ $result->quantity }}</b></label></div>
                  <div><label><b>SKU : {{ $result->sku }}</b></label></div>
                </td>
              </tr>	
              @endforeach
            </table>
          </div>
          <div class="col-sm-12" style="margin-top:30px">
           <table style="text-align:right">
            <tr>
             <td><b>Sub Total :&emsp;Rm {{ $orderdetail[0]->sub_total }}</b></td>
           </tr>
           <tr>
             <td><b>Discount Total :&emsp;Rm {{ $orderdetail[0]->discount_total }}</b></td>
           </tr>
           <tr>
             <td><b>Total :&emsp;Rm {{ $orderdetail[0]->total }}</b></td>
           </tr>
         </table>
       </div>
       <div class="col-sm-12" style="margin-top:30px">
         <select id="change_status" class="form-control" style="width:200px" sign="{{ $orderdetail[0]->id }}">
           <option value="1" {{($orderdetail[0]->status == 1 ? 'selected' : '')}}>Pending</option>
           <option value="2" {{($orderdetail[0]->status == 2 ? 'selected' : '')}}>Confirmed</option>
           <option value="3" {{($orderdetail[0]->status == 3 ? 'selected' : '')}}>Shipped</option>
           <option value="4" {{($orderdetail[0]->status == 4 ? 'selected' : '')}}>Delivered</option>
           <option value="-1" {{($orderdetail[0]->status == -1 ? 'selected' : '')}}>Cancel</option>
         </select>
       </div>
       <div class="col-sm-12" style="text-align:center">
         <button class="btn btn-primary" onclick="window.location.assign('{{ route('getOrders') }}')">Back</button>
       </div>
     </div>
   </div>
 </div>
</div>
</div>
</div>
<!-- Container-fluid Ends-->
</div>
@csrf
<script>
  $(document).ready(function(){
   $("#change_status").change(function(){
    if(confirm("Confirm to make change ?")){
     let id = $(this).attr("sign");
     let status = $(this).val();
     let token = $("input[name=_token]").val();
     $.post("{{ route('alterOrderStatus') }}",
     {
      _token:token,
      id:id,
      status:status
    },function(data){
      alert("Update Succesful");
      location.reload();
    },"html");
   }
 });
 });
</script>
@endsection
@extends('admin.layout')

@section('layout')
<style>
    .table td{
        vertical-align: baseline;
    }
</style>
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
                                <h5>Manage Order</h5>
                            </div>
                            <label style="margin-left: 26px"><b>Bulk Selector</b></label>
                            <form action="{{ route('searchOrder')}}" method="post">
                                
                                <select id="bulkChange" class="form-control" style="float-right;margin-left:25px;width:130px;display:inline">
                                    <option value="" selected>None</option>
                                    <option value="1">Pending</option>
                                    <option value="2">Confirmed</option>
                                    <option value="3">Shipped</option>
                                    <option value="4">Delivered</option>
                                    <option value="-1">Cancel</option>
                                </select>
                                @csrf
                                <input class="form-control" type="text" name="order_id" placeholder="Order Id" style="width:20%;float:right;margin-right:3vw">
                                <button class="btn btn-primary" style="float:right;margin-right:4px"><i class="fas fa-search"></i></button>
                            </form>
                            <div class="card-body order-datatable"> 
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                          <th scope="col"><input id="all" type="checkbox"> All</th>
                                          <th scope="col">Order Id</th>
                                          <th scope="col">Payment Method</th>
                                          <th scope="col">Order Status</th>
                                          <th scope="col">Order Last Update</th>
                                          <th scope="col">Order Create Date</th>
                                          <th scope="col">Change Status</th>
                                          <th scope="col">View</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($transaction as $result)
                                            <tr>
                                                <td style="min-width:70px width:70px"><input class="all" type="checkbox" value="{{ $result->id}}"></td>
                                                <td style="min-width:140px width:140px">#{{ $result->id }}</td>
                                                <td style="min-width:140px">Cash On Delivery</td>
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
                                                <td style="min-width:140px">{{ $result->updated_at }}</td>
                                                <td style="min-width:140px">{{ $result->created_at }}</td>
                                                <td style="min-width:140px !important">
                                                    <select class="form-control change_status" sign="{{ $result->id }}">
                                                        @if($result->status == 1)   
                                                            <option value="1" selected>Pending</option>
                                                        @else
                                                            <option value="1">Pending</option>
                                                        @endif

                                                        @if($result->status == 2)   
                                                            <option value="2" selected>Confirmed</option>
                                                        @else
                                                            <option value="2">Confirmed</option>
                                                        @endif

                                                        @if($result->status == 3)   
                                                            <option value="3" selected>Shipped</option>
                                                        @else
                                                            <option value="3">Shipped</option>
                                                        @endif

                                                        @if($result->status == 4)   
                                                            <option value="4" selected>Delivered</option>
                                                        @else
                                                            <option value="4">Delivered</option>
                                                        @endif

                                                        @if($result->status == -1)   
                                                            <option value="-1" selected>Cancel</option>
                                                        @else
                                                            <option value="-1">Cancel</option>
                                                        @endif                                                           
                                                        
                                                    </select>
                                                </td>
                                                <td><a href="{{route('orderDetail')}}?order_id={{ $result->id }}"><i class="fas fa-search"></i></a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="jsgrid-pager" style="float:right;margin-right:10px">
                                    {{ $transaction->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

        </div>
<script>
$(document).ready(function(){
    $(".change_status").change(function(){
        let id = $(this).attr("sign");
        let status = $(this).val();
        let token = $("input[name=_token]").val();
        if(status != ""){
            $.post("{{ route('changeOrderStatus') }}",
            {
                _token : token,
                id : id,
                status : status

            },function(data){
                alert("Update Successful");
                location.reload();
            },"html").fail(function(){ alert("Update unsuccessful, Please contact IT services") });
        }

    });

    $("#all").change(function(){
        if($("#all").prop("checked") == true){
            $(".all").prop("checked",true);
        }else{
            $(".all").prop("checked",false);
        }
    })

    $(".all").change(function(){
        if($(this).prop("checked") == false){
            $("#all").prop("checked",false)
        }
    })

    $("#bulkChange").change(function(){
        if($(this).val() != ""){
            let status = $(this).val();
            let token = $("input[name=_token]").val();
            if(confirm("Are you sure to change these order status ?")){
                let order_id = [];
                $(".all:checked").each(function(){
                    order_id.push($(this).val());
                });
                $.post("{{ route('bulkChangeStatus') }}",
                    {
                        _token:token,
                        status:status,
                        order_id:order_id

                    },function(data){
                        alert("Update Successful");
                        location.reload();
                    },"html").fali(function(){
                        alert("Update unsuccessful");
                    });
                
            }
        }
    });
});
</script>
@endsection
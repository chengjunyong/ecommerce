@extends('admin.layout')

@section('layout')
<style>
    /* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
  margin-bottom: 0px;
}

/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}

</style>
<div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>List Coupons
                                    <small>Homeu Admin Panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="{{ route('getIndex') }}"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item active">Coupons List</li>
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
                                <h5>Coupon List</h5>
                            </div>
                            <div>
                                <form action="{{ route('searchCoupon')}}" method="post">
                                    @csrf
                                    <input class="form-control" type="text" name="result" placeholder="Title or Coupon Code" style="width:20%;float:right;margin-right:3vw">
                                    <button class="btn btn-primary" style="float:right;margin-right:4px"><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                            <div class="card-body">
                                <div id="batchDelete" class="category-table order-table jsgrid" style="position: relative; height: auto; width: 100%;">
                                    <div class="jsgrid-grid-header jsgrid-header-scrollbar">
                                        <table class="jsgrid-table">
                                            <tr class="jsgrid-header-row">
                                                <th class="jsgrid-header-cell" style="width: 35px;">Id</th>
                                                <th class="jsgrid-header-cell jsgrid-align-right" style="width: 100px;">Title</th>
                                                <th class="jsgrid-header-cell jsgrid-align-right" style="width: 100px;">Code</th>
                                                <th class="jsgrid-header-cell jsgrid-align-right" style="width: 70px;">Discount</th>
                                                <th class="jsgrid-header-cell jsgrid-align-right" style="width: 70px;">Minimum Spend</th>
                                                <th class="jsgrid-header-cell jsgrid-align-right" style="width: 100px;">Date Created</th>
                                                <th class="jsgrid-header-cell" style="width: 70px;">Status</th>
                                                <th class="jsgrid-header-cell" style="width: 50px;">Tools</th>
                                            </tr>
                                            @foreach($coupon_list as $result)
                                                <tr class="jsgrid-row">
                                                    <td class="jsgrid-cell jsgrid-align-center" style="width: 35px;">{{ $result->id }}</td>
                                                    <td class="jsgrid-cell" style="width: 100px;">{{ $result->name }}</td>
                                                    <td class="jsgrid-cell jsgrid-align-right" style="width: 70px;">{{ $result->code }}</td>
                                                    <td class="jsgrid-cell jsgrid-align-right" style="width: 70px;">
                                                        @if($result->amount)
                                                            Rm {{ $result->amount }}
                                                        @else
                                                            {{ $result->percent  }}%
                                                        @endif
                                                    </td>
                                                    <td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm {{ $result->minimum_spend }}</td>
                                                    <td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">{{ $result->created_at }}</td>
                                                    <td class="jsgrid-cell" style="width: 70px;">
                                                        @if($result->active == 1)
                                                            <label class="switch">
                                                                <input class="status" type="checkbox" checked>
                                                                <span class="slider round"></span>
                                                            </label>                                                      
                                                        @else
                                                            <label class="switch">
                                                                <input class="status" type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        @endif
                                                    </td>
                                                    <td class="jsgrid-cell" style="width: 50px;text-align: center">
                                                        <input class="jsgrid-button jsgrid-edit-button edit" type="button" title="Edit">
                                                        <input class="jsgrid-button jsgrid-delete-button delete" type="button" title="Delete">
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </table>
                                        <div class="jsgrid-pager-container" >
                                            <div class="jsgrid-pager" style="float:right;margin-right:10px">Pages 
                                                {{ $coupon_list->links() }}
                                            </div>
                                        </div>
                                    </div>
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
    $(".status").change(function(){
        let id = $(this).parents().eq(1).siblings().eq(0).html();
        let token = $("input[name=_token]").val();
        if($(this).prop("checked") == true){
            var status = 1;
        }else{
            var status = 0;
        }

        $.post("{{ route('changeStatus') }}",
        {
            _token : token,
            id     : id,
            status : status

        },function(data){

        },"html");

    });

    $(".delete").click(function(){
        if(confirm("Are you sure to delete")){
            let id = $(this).parents().eq(0).siblings().eq(0).html();
            let token = $("input[name=_token]").val();
            $.post("{{ route('deleteCoupon') }}",
            {
                _token : token,
                id     : id

            },function(data){
                alert("Delete Successful");
                location.reload();
            },"html").fail(function(){
                alert("Delete Unsuccessful, Please contact IT services");
            });
        }
    });


});
</script>
@endsection
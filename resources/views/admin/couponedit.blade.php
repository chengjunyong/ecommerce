@extends('admin.layout')

@section('layout')
<style>
  .out{
    animation: fadeout 2.5s;
    opacity: 0;
  }


  @keyframes fadeout{
    from{opacity: 1;}
    to{opacity: 0;}
  }
</style>
<div class="page-body">
  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-lg-6">
          <div class="page-header-left">
            <h3>Edit Coupon
              <small>Homeu Admin panel</small>
            </h3>
          </div>
        </div>
        <div class="col-lg-6">
          <ol class="breadcrumb pull-right">
            <li class="breadcrumb-item"><a href="{{ route('getIndex') }}l"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item">Coupons</li>
            <li class="breadcrumb-item active">Edit Coupon</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid Ends-->
  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="card tab2-card">
      <div class="card-header">
        <h5>Discount Coupon Details</h5>
      </div>
      <div class="card-body">
        <ul class="nav nav-tabs tab-coupon" id="myTab" role="tablist">
          <li class="nav-item"><a class="nav-link active show" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="true" data-original-title="" title="">General</a></li>                        
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade active show" id="general" role="tabpanel" aria-labelledby="general-tab">
            <form class="needs-validation" action="{{ route('alterCoupon') }}" method="post">
              @csrf
              <input type="text" hidden name="coupon_id" value="{{ $coupon_detail[0]->id }}">
              <h4>Settings</h4>
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group row">
                    <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span> Coupan Title</label>
                    <input class="form-control col-md-7" id="validationCustom0" type="text" required="" name="coupon_name" value="{{ $coupon_detail[0]->name }}">
                  </div>
                  <div class="form-group row">
                    <label for="validationCustom1" class="col-xl-3 col-md-4"><span>*</span>Coupan Code</label>
                    <input class="form-control col-md-7" id="validationCustom1" type="text" required="" name="coupon_code" value="{{ $coupon_detail[0]->code }}">
                    <div class="valid-feedback">Please Provide a Valid Coupon Code.</div>
                  </div>
                  <div class="form-group row">
                    <label class="col-xl-3 col-md-4">Start Date</label>
                    <input id="date_start" class="datepicker-here form-control digits col-md-7" type="date" data-language="en" name="date_start" required="" value="{{ $coupon_detail[0]->date_start }}" max="{{ $coupon_detail[0]->date_end }}">
                  </div>
                  <div class="form-group row">
                    <label class="col-xl-3 col-md-4">End Date</label>
                    <input id="date_end" class="datepicker-here form-control digits col-md-7" type="date" data-language="en" name="date_end" required="" value="{{ $coupon_detail[0]->date_end }}" min="{{ $coupon_detail[0]->date_start }}">
                  </div>

                  @if($coupon_detail[0]->quantity == -1)
                  <div class="form-group row">
                    <label class="col-xl-3 col-md-4">Coupon Type</label>
                    <input class="radio_animated" type="radio" required="" name="coupon_type" value="1" checked id="unlimited">
                    <label style="margin-right:10px">Unlimited</label>
                    <input class="radio_animated" type="radio" required="" name="coupon_type" value="0" id="limited">
                    <label>Limited</label>
                  </div> 

                  <div class="form-group row">
                    <label class="col-xl-3 col-md-4">Coupons Quantity</label>
                    <input id="coupon_quantity" name="coupon_quantity" class="form-control col-md-7" type="number" required="" readonly>
                  </div>
                  @else
                  <div class="form-group row">
                    <label class="col-xl-3 col-md-4">Coupon Type</label>
                    <input class="radio_animated" type="radio" required="" name="coupon_type" value="1" id="unlimited">
                    <label style="margin-right:10px">Unlimited</label>
                    <input class="radio_animated" type="radio" required="" name="coupon_type" value="0" id="limited" checked>
                    <label>Limited</label>
                  </div> 

                  <div class="form-group row">
                    <label class="col-xl-3 col-md-4">Coupons Quantity</label>
                    <input id="coupon_quantity" name="coupon_quantity" class="form-control col-md-7" type="number" required="" value="{{ $coupon_detail[0]->quantity }}">
                  </div>
                  @endif

                  @if($coupon_detail[0]->amount == null)
                  <div class="form-group row">
                    <label class="col-xl-3 col-md-4">Discount Type</label>
                    <select class="custom-select col-md-7" required="" name="discount_type" id="discount_type">
                      <option value="">--Select--</option>
                      <option value="1" selected>Percent</option>
                      <option value="2">Fixed</option>
                    </select>
                  </div>
                  <div class="form-group row">
                    <label class="col-xl-3 col-md-4">Value Discount</label>
                    <input id="discount_value" name="discount_value" class="form-control col-md-7" type="number" required="" max="100" step="0.01" placeholder="Please put a number in precent (0-100)" value="{{ $coupon_detail[0]->percent }}">
                  </div>
                  @else
                  <div class="form-group row">
                    <label class="col-xl-3 col-md-4">Discount Type</label>
                    <select class="custom-select col-md-7" required="" name="discount_type" id="discount_type">
                      <option value="">--Select--</option>
                      <option value="1">Percent</option>
                      <option value="2" selected>Fixed</option>
                    </select>
                  </div>
                  <div class="form-group row">
                    <label class="col-xl-3 col-md-4">Value Discount</label>
                    <input id="discount_value" name="discount_value" class="form-control col-md-7" type="number" required="" step="0.01" placeholder="Please put a number in fixed value" value="{{ $coupon_detail[0]->amount }}">
                  </div>
                  @endif

                  <div class="form-group row">
                    <label class="col-xl-3 col-md-4">Status</label>
                    <div class="checkbox checkbox-primary col-md-7">
                      <input id="checkbox-primary-2" type="checkbox" data-original-title="" title="" name="coupon_status" @if($coupon_detail[0]->active == 1)checked @endif>
                      <label for="checkbox-primary-2">Enable the Coupon</label>
                    </div>
                  </div>
                  <h4><br/>Restriction</h4>
                  <div class="form-group row">
                    <label class="col-xl-3 col-md-4">Selected Category</label>
                    <select class="custom-select col-md-7" name="category">
                      <option value="" @if($coupon_detail[0]->category_id == null)selected @endif>All Product</option>
                      @foreach($category_list as $result)
                      @if($coupon_detail[0]->category_id == $result->category_id)
                      <option value="{{ $result->category_id }}" selected>{{ $result->category_name }}</option>
                      @else
                      <option value="{{ $result->category_id }}">{{ $result->category_name }}</option>
                      @endif
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group row">
                    <label for="validationCustom4" class="col-xl-3 col-md-4">Minimum Spend</label>
                    <input class="form-control col-md-7" id="validationCustom4" type="number" step="0.01" min="0.01" name="min_spend" required value="{{ $coupon_detail[0]->minimum_spend }}">
                  </div>
                  <div class="form-group row">
                    <label class="col-xl-3 col-md-4">Existing Customer</label>
                    <div class="checkbox checkbox-primary col-md-7">
                      @if($coupon_detail[0]->user_exist == 1)
                      <input type="checkbox" name="exist_customer" id="exist_customer" checked>
                      <label for="exist_customer" id="lbl_exist">Yes</label>
                      @else
                      <input type="checkbox" name="exist_customer" id="exist_customer">
                      <label for="exist_customer" id="lbl_exist">No</label>
                      @endif
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="validationCustom4" class="col-xl-3 col-md-4">Max Cap</label>
                    @if($coupon_detail[0]->percent == null)
                    <input disabled id="max_cap" class="form-control col-md-7" type="number" step="0.01" min="0.01" name="max_cap">
                    @else
                    <input id="max_cap" class="form-control col-md-7" type="number" step="0.01" min="0.01" name="max_cap" value="{{ $coupon_detail[0]->maxcap }}">
                    @endif
                  </div>
                  <h4><br/>Usage Limits</h4>
                  @if($coupon_detail[0]->per_customer == -1)
                  <div class="form-group row">
                    <label class="col-xl-3 col-md-4">Usage Type</label>
                    <input class="radio_animated" type="radio" required="" name="usage_type" value="1" checked id="u_unlimited">
                    <label style="margin-right:10px">Unlimited</label>
                    <input class="radio_animated" type="radio" required="" name="usage_type" value="0" id="u_limited">
                    <label>Limited</label>
                  </div>    
                  <div class="form-group row">
                    <label for="validationCustom7" class="col-xl-3 col-md-4">Usage Per Customer</label>
                    <input class="form-control col-md-7" name="per_customer" id="per_customer" type="number" min="1" readonly>
                  </div>
                  @else
                  <div class="form-group row">
                    <label class="col-xl-3 col-md-4">Usage Type</label>
                    <input class="radio_animated" type="radio" required="" name="usage_type" value="1" id="u_unlimited">
                    <label style="margin-right:10px">Unlimited</label>
                    <input class="radio_animated" type="radio" required="" name="usage_type" value="0" checked id="u_limited">
                    <label>Limited</label>
                  </div>    
                  <div class="form-group row">
                    <label for="validationCustom7" class="col-xl-3 col-md-4">Usage Per Customer</label>
                    <input class="form-control col-md-7" name="per_customer" id="per_customer" type="number" min="1" value="{{ $coupon_detail[0]->per_customer }}" required>
                  </div>
                  @endif
                </div>
              </div>
            </div>
            <div class="pull-right">
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Container-fluid Ends-->

    @if(session()->has('success'))
    <div class="out" style="position:fixed;left:50%;top:15%;padding:5px 60px 5px 60px;background-color:#bfbfd6;border-radius: 20px;">
      <lable><b>{{ session()->get('success') }}</b></lable>
    </div>
    @endif

  </div>
<script>
  $(document).ready(function(){
    $("#unlimited").click(function(){
      $("#coupon_quantity").val("");
      $("#coupon_quantity").attr("readonly",true);
    });

    $("#limited").click(function(){
      $("#coupon_quantity").attr("readonly",false);
    });

    $("#discount_type").change(function(){
      $("#discount_value").attr("readonly",false);
      if($("#discount_type").val() == 1){
        $("#discount_value").attr("placeholder","Please put a number in precent (0-100)");
        $("#discount_value").attr("max",100);
        $("#discount_value").attr("min",0.01);
        $("#max_cap").prop("disabled",false);
        $("#max_cap").prop("required",true);
      }else if($("#discount_type").val() == 2){
        $("#discount_value").attr("placeholder","Please put a number in fixed value");
        $("#discount_value").attr("min",0.01);
        $("#discount_value").attr("max","");
        $("#max_cap").prop("disabled",true);
      }else{
        $("#discount_value").attr("placeholder","Please select option");
        $("#discount_value").attr("readonly",true);
        $("#max_cap").prop("disabled",true);
      }
    });

    $("#u_unlimited").click(function(){
      $("#per_customer").val("");
      $("#per_customer").attr("readonly",true);
      $("#per_customer").prop("required",false);
    });

    $("#u_limited").click(function(){
      $("#per_customer").attr("readonly",false);
      $("#per_customer").prop("required",true);
    });

    $("#exist_customer").change(function(){
      if($("#exist_customer").prop("checked") == 1){
        $("#lbl_exist").text("Yes");
      }else{
        $("#lbl_exist").text("No");
      }
    });

    $("#date_start").change(function(){
      let a = $(this).val();
      $("#date_end").attr('min',a);
    });

    $("#date_end").change(function(){
      let b = $(this).val();
      $("#date_start").attr('max',b);
    });

  });
</script>
@endsection
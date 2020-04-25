@extends('admin.layout')

@section('layout')

<div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Create Coupon
                                    <small>Homeu Admin panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="{{ route('getIndex') }}l"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Coupons </li>
                                <li class="breadcrumb-item active">Create Coupon</li>
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
                                <form class="needs-validation" action="google.com" method="post">
                                    <h4>Settings</h4>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group row">
                                                <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span> Coupan Title</label>
                                                <input class="form-control col-md-7" id="validationCustom0" type="text" required="" name="coupon_name">
                                            </div>
                                            <div class="form-group row">
                                                <label for="validationCustom1" class="col-xl-3 col-md-4"><span>*</span>Coupan Code</label>
                                                <input class="form-control col-md-7" id="validationCustom1" type="text" required="" name="coupon_code">
                                                <div class="valid-feedback">Please Provide a Valid Coupon Code.</div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-md-4">Start Date</label>
                                                <input class="datepicker-here form-control digits col-md-7" type="date" data-language="en" name="start_date" required="">
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-md-4">End Date</label>
                                                <input class="datepicker-here form-control digits col-md-7" type="date" data-language="en" name="end_date" required="">
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-md-4">Coupon Type</label>
                                                <input class="radio_animated" type="radio" required="" name="type" value="1" checked id="unlimited">
                                                <label style="margin-right:10px">Unlimited</label>
                                                <input class="radio_animated" type="radio" required="" name="type" value="0" id="limited">
                                                <label>Limited</label>
                                            </div>                                          
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-md-4">Coupons Quantity</label>
                                                <input id="coupon_quantity" name="coupon_quantity" class="form-control col-md-7" type="number" required="" readonly>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-md-4">Discount Type</label>
                                                <select class="custom-select col-md-7" required="" name="discount_type" id="discount_type">
                                                    <option value="">--Select--</option>
                                                    <option value="1">Percent</option>
                                                    <option value="2">Fixed</option>
                                                </select>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-md-4">Value Discount</label>
                                                <input id="discount_value" name="discount_value" class="form-control col-md-7" type="number" required="" readonly step="0.01" placeholder="">
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-md-4">Status</label>
                                                <div class="checkbox checkbox-primary col-md-7">
                                                    <input id="checkbox-primary-2" type="checkbox" data-original-title="" title="" name="coupon_status">
                                                    <label for="checkbox-primary-2">Enable the Coupon</label>
                                                </div>
                                            </div>
                                            <h4><br/>Restriction</h4>
                                            <!-- <div class="form-group row">
                                                <label for="validationCustom3" class="col-xl-3 col-md-4">Products</label>
                                                <input class="form-control col-md-7" id="validationCustom3" type="text" required="" >
                                                <div class="valid-feedback">Please Provide a Product Name.</div>
                                            </div> -->
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-md-4">Category</label>
                                                <select class="custom-select col-md-7" required="" name="category">
                                                    @foreach($category_list as $result)
                                                    <option value="{{ $result->category_id }}">{{ $result->category_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group row">
                                                <label for="validationCustom4" class="col-xl-3 col-md-4">Minimum Spend</label>
                                                <input class="form-control col-md-7" id="validationCustom4" type="number" step="0.01" min="0.01" name="min_spend">
                                            </div>
                                             <div class="form-group row">
                                                <label class="col-xl-3 col-md-4">Existing Customer</label>
                                                <div class="checkbox checkbox-primary col-md-7">
                                                    <input type="checkbox" name="exist_customer" id="exist_customer" checked>
                                                    <label for="exist_customer" id="lbl_exist">Yes</label>
                                                </div>
                                            </div>
                                            <h4><br/>Usage Limits</h4>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-md-4">Usage Type</label>
                                                <input class="radio_animated" type="radio" required="" name="type2" value="1" checked id="u_unlimited">
                                                <label style="margin-right:10px">Unlimited</label>
                                                <input class="radio_animated" type="radio" required="" name="type2" value="0" id="u_limited">
                                                <label>Limited</label>
                                            </div>    
                                            <div class="form-group row">
                                                <label for="validationCustom7" class="col-xl-3 col-md-4">Per Customer</label>
                                                <input class="form-control col-md-7" name="usage" id="usage" type="number" min="1" readonly>
                                            </div>
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
        console.log(0);
        $("#discount_value").attr("readonly",false);
        if($("#discount_type").val() == 1){
            $("#discount_value").attr("placeholder","Please put a number in precent (0-100)");
            $("#discount_value").attr("max",100);
            $("#discount_value").attr("min",0.01);
        }else if($("#discount_type").val() == 2){
            $("#discount_value").attr("placeholder","Please put a number in fixed value");
            $("#discount_value").attr("min",0.01);
            $("#discount_value").attr("max","");
        }else{
            $("#discount_value").attr("placeholder","Please select option");
            $("#discount_value").attr("readonly",true);
        }
    });

    $("#u_unlimited").click(function(){
        $("#usage").val("");
        $("#usage").attr("readonly",true);
    });

    $("#u_limited").click(function(){
        $("#usage").attr("readonly",false);
    });

    $("#exist_customer").change(function(){
        if($("#exist_customer").prop("checked") == 1){
            $("#lbl_exist").text("Yes");
        }else{
            $("#lbl_exist").text("No");
        }
    });

});
</script>
@endsection
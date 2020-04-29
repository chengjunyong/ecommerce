@extends('front.layout')

@section('layout')

<style>
  
  .is-invalid { border-color: #dc3545 !important; }

</style>

<!-- breadcrumb start -->
<div class="breadcrumb-main ">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumb-contain">
                    <div>
                        <h2>checkout</h2>
                        <ul>
                            <li><a href="#">home</a></li>
                            <li><i class="fa fa-angle-double-right"></i></li>
                            <li><a href="#">checkout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->

<!-- section start -->
<section class="section-big-py-space bg-light">
  <div class="custom-container">
    <div class="checkout-page contact-page">
      <div class="checkout-form">
        <form method="POST" action="{{ route('submitPayment') }}">
          @csrf
          <div class="row">
            <div class="col-lg-6 col-sm-12 col-xs-12">
              <div class="checkout-title">
                <h3>Billing Details</h3>
              </div>
              <div class="theme-form">
                <div class="row check-out ">
                  <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <label>First Name</label>
                    <input type="text" name="field-name" value="" placeholder="">
                  </div>
                  <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <label>Last Name</label>
                    <input type="text" name="field-name" value="" placeholder="">
                  </div>
                  <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <label class="field-label">Phone</label>
                    <input type="text" name="field-name" value="" placeholder="">
                  </div>
                  <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <label class="field-label">Email Address</label>
                    <input type="text" name="field-name" value="" placeholder="">
                  </div>
                  <div class="form-group col-md-12 col-sm-12 col-xs-12">
                    <label class="field-label">Country</label>
                    <select>
                      <option>India</option>
                      <option>South Africa</option>
                      <option>United State</option>
                      <option>Australia</option>
                    </select>
                  </div>
                  <div class="form-group col-md-12 col-sm-12 col-xs-12">
                    <label class="field-label">Address</label>
                    <input type="text" name="field-name" value="" placeholder="Street address">
                  </div>
                  <div class="form-group col-md-12 col-sm-12 col-xs-12">
                    <label class="field-label">Town/City</label>
                    <input type="text" name="field-name" value="" placeholder="">
                  </div>
                  <div class="form-group col-md-12 col-sm-6 col-xs-12">
                    <label class="field-label">State / County</label>
                    <input type="text" name="field-name" value="" placeholder="">
                  </div>
                  <div class="form-group col-md-12 col-sm-6 col-xs-12">
                    <label class="field-label">Postal Code</label>
                    <input type="text" name="field-name" value="" placeholder="">
                  </div>
                  <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <input type="checkbox" name="shipping-option" id="account-option"> &ensp;
                    <label for="account-option">Create An Account?</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-xs-12">
              <div class="checkout-details theme-form  section-big-mt-space">
                <div class="order-box">
                  <div class="title-box">
                    <div>Product <span>Total</span></div>
                  </div>
                  <ul class="qty">
                    @foreach($cart_list as $cart_detail)
                      <li>{{ $cart_detail->product_name}} × {{ $cart_detail->quantity }} <span> RM {{ number_format( ($cart_detail->quantity * $cart_detail->product_price ),2) }}</span></li>
                    @endforeach
                  </ul>
                  <ul class="sub-total">
                    <li>Subtotal <span class="count" id="checkout_page_sum">RM 0.00</span></li>
                    <li>Coupon code
                      <div class="">
                        <div style="width: calc(65% - 25px); display: inline-block; margin-right: 20px;">
                          <input type="text" class="form-control" name="coupon_code" />
                        </div>
                        <div style="display: inline-block; float: right; width: 35%; line-height: 40px;">
                          <button class="btn btn-success" type="button" id="submit_coupon_code">Submit</button>
                        </div>
                      </div>
                    </li>
                    <li>Shipping
                      <div class="shipping">
                        <div class="shopping-option">
                          <input type="checkbox" name="free-shipping" id="free-shipping">
                          <label for="free-shipping">Free Shipping</label>
                        </div>
                        <div class="shopping-option">
                          <input type="checkbox" name="local-pickup" id="local-pickup">
                          <label for="local-pickup">Local Pickup</label>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <ul class="total">
                    <li style="display: none;" id="checkout_page_discount">Coupon discount <span style="margin-right: 10px;" class="count">RM 0.00</span></li>
                    <li>Total <span class="count" id="checkout_page_total">RM 0.00</span></li>
                  </ul>
                </div>
                <div class="payment-box">
                  <div class="upper-box">
                    <div class="payment-options">
                      <ul>
                        <li>
                          <div class="radio-option">
                            <input type="radio" name="payment-group" id="payment-1" checked="checked">
                            <label for="payment-1">Check Payments<span class="small-text">Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</span></label>
                          </div>
                        </li>
                        <li>
                          <div class="radio-option">
                            <input type="radio" name="payment-group" id="payment-2">
                            <label for="payment-2">Cash On Delivery<span class="small-text">Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</span></label>
                          </div>
                        </li>
                        <li>
                          <div class="radio-option paypal">
                            <input type="radio" name="payment-group" id="payment-3">
                            <label for="payment-3">PayPal<span class="image"><img src="assets/images/paypal.png" alt=""></span></label>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="text-right">
                    <button class="btn-normal btn" type="submit">Place Order</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- section end -->

<script>

  var cart_list = @json($cart_list);
  if(Object.keys(cart_list).length > 0)
  {
    var sum_cart = 0;
    for(var a = 0; a < Object.keys(cart_list).length; a++)
    {
      sum_cart += (cart_list[a].quantity * cart_list[a].product_price);
    }

    $("#checkout_page_total").html("RM "+sum_cart);
  }

  $("input[name=coupon_code]").on('keypress',function(e) {
    if(e.which == 13) {
      $("#submit_coupon_code").click();
    }
  });
  
  $("#submit_coupon_code").click(function(){

    var coupon_code = $("input[name=coupon_code]").val();
    if(coupon_code == "")
    {
      var html = "";
      html += "<span class='invalid-feedback' role='alert'>Please key in coupon code.</span>";
      $("input[name=coupon_code]").addClass("is-invalid").next("span").remove();
      $("input[name=coupon_code]").after(html);
      return;
    }

    $("input[name=coupon_code]").removeClass("is-invalid").next("span").remove();

    $.post("{{ route('submitCouponcode') }}", { "_token" : "{{ csrf_token() }}", "coupon_code" : coupon_code }, function(response){

      if(response.error == 0)
      {
        if(response.valid == 0)
        {
          var html = "";
          html += "<span class='invalid-feedback' role='alert'>";
          html += "<strong>"+response.message+"</strong>";
          html += "</span>";
          $("input[name=coupon_code]").addClass("is-invalid");
          $("input[name=coupon_code]").after(html);
          return;
        }
        else if(response.valid == 1)
        {
          $("#checkout_page_discount").show().children("span").html("- RM "+response.discount_amount);
          $("#checkout_page_total").html("RM "+response.price_after_discount);
        }
      }
      else
      {
        alert(response.message);
      }
    }).fail(function(){
      alert("Error");
    });
  });

</script>

@include('front.footer')

@endsection

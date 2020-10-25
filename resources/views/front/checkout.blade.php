@extends('front.layout')

@section('layout')

<!-- breadcrumb start -->
<div class="breadcrumb-main ">
  <div class="custom-container">
    <div class="row" style="padding-left: calc(10px + 1em);">
      <div class="col">
        <div class="breadcrumb-contain">
          <div>
            <ul>
              @foreach($breadcrumb as $key => $value)
                <li><a href="{{ $value['route'] }}">{{ $value['name'] }}</a></li>
                @if(($key + 1) < count($breadcrumb))
                  <li><i class="fa fa-angle-double-right"></i></li>
                @endif
              @endforeach
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
                <h3>Order detail</h3>
              </div>
              <div class="theme-form">
                <div class="row check-out ">
                  <div class="col-lg-12">
                    @foreach($cart_list as $cart_detail)
                      <div class="item_summary">
                        @if($cart_detail->path)
                          <img src="{{ Storage::url($cart_detail->path) }}" />
                        @else
                          <img src="../assets/images/layout-3/product/1.jpg" />
                        @endif
                        
                        <div class="item_description">
                          <label>{{ $cart_detail->product_name }}</label>
                          <span>{{ $cart_detail->description }}</span>
                        </div>
                        <div class="item_price">
                          @if($cart_detail->promo_price === null)
                            RM {{ $cart_detail->quantity * $cart_detail->price }}
                          @else
                            RM {{ $cart_detail->quantity * $cart_detail->promo_price }}
                          @endif
                        </div>
                        <div class="item_qty">
                          Qty : {{ $cart_detail->quantity }}
                        </div>

                        <div class="checkbox icheck_checkbox">
                          <label>
                            <input class="icheck cart_detail_checkbox" type="checkbox" name="cart_detail_id[]" value="{{ $cart_detail->id }}" checked />
                          </label>
                        </div>

                      </div>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-xs-12">
              <div class="checkout-details theme-form section-big-mt-space">
                <div>
                  <label>Shipping address</label>
                  <div class="">
                    @if($address_book)
                      <span>{{ $address_book->address }}</span>
                      <span>{{ $address_book->city }} {{ $address_book->state }}</span>
                      <span>{{ $address_book->postal_code }}</span>
                    @else
                      <span>No default address.</span>
                    @endif
                  </div>
                </div>
                <hr />
                <div class="order-box">
                  <ul class="sub-total">
                    <li>Subtotal <span class="count" id="checkout_page_sum">RM 0.00</span></li>
                    <li>Coupon code
                      <div style="margin-top: 15px;">
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
                    <li style="display: none;" id="checkout_page_discount"><label></label> <span style="margin-right: 10px;" class="count">RM 0.00</span></li>
                    <li>Total <span class="count" id="checkout_page_total">RM 0.00</span></li>
                  </ul>
                </div>
                <div class="payment-box">
                  <div class="upper-box">
                    <div class="payment-options">
                      <ul>
                        <li>
                          <div class="radio-option">
                            <input type="radio" name="payment-group" id="payment-2" checked>
                            <label for="payment-2">Cash On Delivery<span class="small-text">Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</span></label>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="text-right">
                    @if(count($cart_list) > 0)
                      <button class="btn-normal btn" type="submit" id="place_order">Place Order</button>
                    @else
                      <button class="btn-normal btn" type="button" disabled id="place_order">Place Order</button>
                    @endif
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

<div class="title1 section-my-space">
  <h4>Recommend Products</h4>
</div>

<section class="product section-big-pb-space">
  <div class="custom-container">
    <div class="row ">
      <div class="col pr-0">
        <div class="product-slide-6 no-arrow mb--10">
          <div id="recommend_product_list" class="owl-carousel owl-theme">
            @foreach($recommend_product_list as $recommend_product)
              <div class="item">
                <div class="product-box">
                  <div class="product-imgbox">
                    <div class="product-front">
                      @if($recommend_product->path)
                        <img src="{{ Storage::url($recommend_product->path) }}" class="img-fluid" alt="product">
                      @else
                        <img src="{{ asset('/assets/images/layout-1/product/1.jpg') }}" class="img-fluid" alt="product">
                      @endif
                    </div>
                    <div class="product-icon">
                      <button onclick="openCart()" type="button" >
                        <i class="ti-bag"></i>
                      </button>
                      <!-- <a href="javascript:void(0)" title="Add to Wishlist">
                        <i class="ti-heart" aria-hidden="true"></i>
                      </a> -->
                    </div>
                    <!-- <div class="new-label">
                      <div>new</div>
                    </div>
                    <div class="on-sale">
                      on sale
                    </div> -->
                  </div>
                  <div class="product-detail">
                    <div class="detail-title">
                      <div class="detail-left">
                        <a href="">
                          <h6 class="price-title">
                            {{ $recommend_product->name }}
                          </h6>
                        </a>
                      </div>
                      <div class="detail-right">
                        @if($recommend_product->promo_price)
                          <div class="check-price">
                            Rm {{ $recommend_product->price }}
                          </div>
                          <div class="price">
                            <div class="price">
                              Rm {{ $recommend_product->promo_price}}
                            </div>
                          </div>
                        @else
                          <div class="price">
                            <div class="price">
                              Rm {{ $recommend_product->price }}
                            </div>
                          </div>
                        @endif
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>

  $("#recommend_product_list").owlCarousel({
    loop:false,
    margin:10,
    nav:false,
    dots:false,
    responsive:{
      0:{
        items:2
      },
      600:{
        items:4
      },
      1000:{
        items:6
      }
    }
  });

  var cart_list = @json($cart_list);
  if(Object.keys(cart_list).length > 0)
  {
    var sum_cart = 0;
    for(var a = 0; a < Object.keys(cart_list).length; a++)
    {
      if(cart_list[a].promo_price === null)
      {
        sum_cart += (cart_list[a].quantity * cart_list[a].price);
      }
      else
      {
        sum_cart += (cart_list[a].quantity * cart_list[a].promo_price);
      }
    }

    $("#checkout_page_total").html("RM "+parseFloat(sum_cart).toFixed(2));
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

    var post_data = "_token={{ csrf_token() }}&coupon_code="+coupon_code;
    
    $(".cart_detail_checkbox").each(function(){
      if($(this).is(":checked"))
      {
        post_data += "&cart_detail_id[]="+$(this).val();
      }
    });

    $("input[name=coupon_code]").removeClass("is-invalid").next("span").remove();

    $.post("{{ route('submitCouponcode') }}", post_data, function(response){

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

          $("input[name=coupon_code]").val("");
          $("#checkout_page_discount").hide();

          sum_cart = 0;
          for(var a = 0; a < Object.keys(cart_list).length; a++)
          {
            if($(".cart_detail_checkbox[value="+cart_list[a].id+"]").is(":checked"))
            {
              if(cart_list[a].promo_price === null)
              {
                sum_cart += (cart_list[a].quantity * cart_list[a].price);
              }
              else
              {
                sum_cart += (cart_list[a].quantity * cart_list[a].promo_price);
              }
            }
          }

          $("#checkout_page_total").html("RM "+parseFloat(sum_cart).toFixed(2));
        }
        else if(response.valid == 1)
        {
          $("#checkout_page_discount").show();
          $("#checkout_page_discount").children("label").html(response.coupon_name);
          $("#checkout_page_discount").children("span").html("- RM "+response.discount_amount);
          $("#checkout_page_total").html("RM "+parseFloat(response.price_after_discount).toFixed(2));

          toastBox("success", "Apply Successful", "Coupon "+response.coupon_name+" apply successful.");
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

  $(".cart_detail_checkbox").on("ifChanged", function(){

    var coupon_code = $("input[name=coupon_code]").val();
    var post_data = "_token={{ csrf_token() }}&coupon_code="+coupon_code;
    
    $(".cart_detail_checkbox").each(function(){
      if($(this).is(":checked"))
      {
        post_data += "&cart_detail_id[]="+$(this).val();
      }
    });

    $.post("{{ route('selectedItemCheckout') }}", post_data, function(response){

      if(response.error == 0)
      {
        if(response.coupon_code != null)
        {
          if(response.coupon_valid == 0)
          {
            var html = "";
            html += "<span class='invalid-feedback' role='alert'>";
            html += "<strong>"+response.coupon_message+"</strong>";
            html += "</span>";
            $("input[name=coupon_code]").addClass("is-invalid");
            $("input[name=coupon_code]").after(html);

            $("input[name=coupon_code]").val("");
            $("#checkout_page_discount").hide();
          }
          else if(response.coupon_valid == 1)
          {
            $("#checkout_page_discount").show();
            $("#checkout_page_discount").children("label").html(response.coupon_name);
            $("#checkout_page_discount").children("span").html("- RM "+response.discount_amount);
            
          }
        }
        
        $("#checkout_page_sum").html("RM "+parseFloat(response.sub_total).toFixed(2));
        $("#checkout_page_total").html("RM "+parseFloat(response.total).toFixed(2));

        if($(".cart_detail_checkbox:checked").length == 0)
        {
          $("#place_order").attr("disabled", true);
        }
        else
        {
          $("#place_order").attr("disabled", false);
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

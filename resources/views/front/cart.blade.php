@extends('front.layout')

@section('layout')

<!-- breadcrumb start -->
<div class="breadcrumb-main ">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumb-contain">
                    <div>
                        <h2>cart</h2>
                        <ul>
                            <li><a href="#">home</a></li>
                            <li><i class="fa fa-angle-double-right"></i></li>
                            <li><a href="#">cart</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->


<!--section start-->
<section class="cart-section section-big-py-space bg-light">
    <div class="custom-container">
        <div class="row">
            <div class="col-sm-12">
                <table class="table cart-table table-responsive-xs">
                    <thead>
                    <tr class="table-head">
                        <th scope="col">image</th>
                        <th scope="col">product name</th>
                        <th scope="col">price</th>
                        <th scope="col">quantity</th>
                        <th scope="col">action</th>
                        <th scope="col">total</th>
                    </tr>
                    </thead>
                    <tbody>
                      
                      @if(count($cart_list) > 0)
                        @foreach($cart_list as $cart_detail)
                          <tr>
                            <td>
                              <a href="#"><img src="{{ $cart_detail->path ? Storage::url($cart_detail->path) : '../assets/images/layout-3/product/1.jpg' }}" alt="cart"  class=" "></a>
                            </td>
                            <td><a href="#">{{ $cart_detail->product_name }}</a>
                              <div class="mobile-cart-content row">
                                <div class="col-xs-3">
                                  <div class="qty-box">
                                    <div class="input-group">
                                      <input type="text" name="quantity" class="form-control input-number" value="{{ $cart_detail->quantity }}">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-xs-3">
                                  <h2 class="td-color">RM {{ number_format($cart_detail->product_price, 2) }}</h2></div>
                                <div class="col-xs-3">
                                  <h2 class="td-color"><a href="#" class="icon"><i class="ti-close"></i></a></h2>
                                </div>
                              </div>
                            </td>
                            <td>
                              <h2>RM {{ number_format($cart_detail->product_price, 2) }}</h2></td>
                            <td>
                              <div class="qty-box">
                                <div class="input-group">
                                  <input type="number" name="quantity" class="form-control input-number" value="{{ $cart_detail->quantity }}">
                                </div>
                              </div>
                            </td>
                            <td><a href="#" class="icon"><i class="ti-close"></i></a></td>
                            <td>
                              <h2 class="td-color">RM {{ number_format($cart_detail->quantity * $cart_detail->product_price, 2) }}</h2>
                            </td>
                          </tr>
                        @endforeach
                      @else
                        <tr>
                          <td colspan="6">Your cart is empty.</td>
                        </tr>
                      @endif
                        
                    </tbody>
                </table>
                <table class="table cart-table table-responsive-md">
                    <tfoot>
                    <tr>
                        <td>total price :</td>
                        <td>
                          <h2 id="cart_page_sum">RM 0.00</h2>
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="row cart-buttons">
            <div class="col-12"><a href="#" class="btn btn-normal">continue shopping</a> <a href="{{ route('getCheckoutIndex') }}" class="btn btn-normal ml-3">check out</a></div>
        </div>
    </div>
</section>

<script>
  


</script>
<!--section end-->

@include('front.footer')

@endsection

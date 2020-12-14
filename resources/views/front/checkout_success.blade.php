@extends('front.layout')

@section('layout')

<!-- thank-you section start -->
<section class="section-big-py-space light-layout" style="margin-top: 210px;">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="success-text">
          <i class="fa fa-check-circle" aria-hidden="true" style="font-size: 30px; color: #28a745; margin-bottom: 15px;"></i>
          <h2>thank you</h2>
          <p>Your order current status is <strong>{{ $transaction->status_text }}</strong></p>
          <p>Transaction ID: {{ $transaction->id }}</p>

          <h4 style="margin-top: 15px;">
            <a href="{{ route('getOrderReceipt', ['id' => $transaction->id]) }}" target="_blank">Receipt</a>
          </h4>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section ends -->


<!-- order-detail section start -->
<section class="section-big-py-space mt--5 bg-light">
    <div class="custom-container">
        <div class="row">
            <div class="col-lg-6">
                <div class="product-order">
                    <h3>your order details</h3>
                    <div class="row product-order-detail">
                      <div class="col-4 order_detail">
                        <div>
                          <h4>product name</h4>
                        </div>
                      </div>
                      <div class="col-4 order_detail">
                        <div>
                          <h4>quantity</h4>
                        </div>
                      </div>
                      <div class="col-4 order_detail">
                        <div>
                          <h4>price</h4>
                        </div>
                      </div>

                      @if($transaction)
                        @foreach($transaction->detail as $transaction_detail)
                          <div class="col-4 order_detail">
                            <div>
                              <h5>{{ $transaction_detail->product_name }}</h5>
                            </div>
                          </div>
                          <div class="col-4 order_detail">
                            <div>
                              <h5>{{ $transaction_detail->quantity }}</h5>
                            </div>
                          </div>
                          <div class="col-4 order_detail">
                            <div>
                              <h5>RM {{ number_format(($transaction_detail->quantity * $transaction_detail->product_price), 2) }}</h5>
                            </div>
                          </div>
                        @endforeach
                      @else
                        <div class="col-12 order_detail">
                          <h4>Transaction not found.</h4>
                        </div>
                      @endif  
                    </div>
                    <div class="total-sec">
                      <ul>
                        <li>subtotal <span>RM {{ number_format($transaction->sub_total, 2) }}</span></li>
                        <li>discount <span>RM {{ number_format($transaction->discount_total, 2) }}</span></li>
                      </ul>
                    </div>
                    <div class="final-total">
                        <h3>total <span>RM {{ number_format($transaction->total, 2) }}</span></h3></div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row order-success-sec">
                    <div class="col-sm-6">
                        <h4>summery</h4>
                        <ul class="order-detail">
                            <li>order ID: {{ $transaction->id }}</li>
                            <li>Order Date: {{ date('d M Y H:i:s', strtotime($transaction->created_at)) }}</li>
                            <li>Order Total: RM {{ number_format($transaction->total, 2) }}</li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <h4>shipping address</h4>
                        <ul class="order-detail">
                          <li>{!! $transaction->delivery_address !!}</li>
                        </ul>
                    </div>
                    <div class="col-sm-12 payment-mode" style="margin-top: 10px;">
                        <h4>payment method</h4>
                        <p>
                          @if($transaction->payment_type == "cash_on_delivery")
                            Cash on delivery (COD)
                          @endif
                        </p>
                    </div>
                    <div class="col-md-12">
                        <div class="delivery-sec">
                          <h3>expected date of delivery</h3>
                          <h2>
                            @if($transaction->delivery_time)
                              {{ date('d M Y h:i:s A', strtotime($transaction->delivery_time)) }}
                            @endif
                          </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section ends -->

<!--footer start-->
@include('front.footer')
<!--footer end-->

@endsection

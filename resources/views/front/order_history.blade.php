@extends('front.layout')

@section('layout')

<style>
  
  .collapse_box { box-shadow: 1px 1px 5px 2px #ccc; margin: 15px; margin-bottom: 0px; padding: 10px; background: #fff; }
  .collapse_box img { max-width: 100px; }

</style>

<!-- breadcrumb start -->
<div class="breadcrumb-main">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="breadcrumb-contain">
          <div>
            <h2>order-history</h2>
            <ul>
              <li><a href="#">home</a></li>
              <li><i class="fa fa-angle-double-right"></i></li>
              <li><a href="#">order-history</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- breadcrumb End -->

<!--section start-->
<section class="cart-section order-history section-big-py-space">
  <div class="custom-container">
    <div class="row">
      <div class="col-sm-12">
        <div class="row">
          <div class="col-6">
            <label>PRODUCT</label>
          </div>
          <div class="col-2">
            <label>TOTAL PRICE</label>
          </div>
          <div class="col-2">
            <label>QUANTITY</label>
          </div>
          <div class="col-2">
            <label>STATUS</label>
          </div>
        </div>

        <div id="accordion">
          <div class="card">
            @foreach($transaction_list as $transaction)
              <div class="card-header">
                <div class="row" class="collapsed" data-toggle="collapse" data-target="#collapse{{ $transaction->id }}" aria-expanded="true" aria-controls="collapse{{ $transaction->id }}">
                  <div class="col-9">
                    <label style="font-weight: bold;">Order ID : {{ $transaction->id }}</label>
                    <br>
                    <label> ( {{ date('d M Y', strtotime($transaction->created_at )) }} )</label>
                  </div>
                  <div class="col-3" style="text-align: center;">
                    {{ $transaction->status_text }}
                  </div>
                </div>
              </div>

              <div id="collapse{{ $transaction->id }}" class="collapse" data-parent="#accordion" style="background: #eee; padding-bottom: 15px;">
                @foreach($transaction->item as $item)
                  <div class="row">
                    <div class="col-12">
                      <div class="collapse_box">
                        <div class="row">
                          <div class="col-3">
                            <a href="#">
                              @if($item->path)
                              <img src="{{ Storage::url($item->path) }}" alt="product" class="img-fluid  ">
                              @else
                              <img src="../assets/images/product-sidebar/001.jpg" alt="product" class="img-fluid  ">
                              @endif
                            </a>
                          </div>
                          <div class="col-3">
                            {{ $item->product_name }}
                          </div>
                          <div class="col-2">
                            RM {{ $item->total }}
                          </div>
                          <div class="col-2">
                            {{ $item->quantity }}
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--section end-->

@include('front.footer')

@endsection
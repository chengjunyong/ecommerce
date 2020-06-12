@extends('front.layout')

@section('layout')

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
        <div class="table_box" style="max-height: 500px; overflow: auto;">
          <table class="table cart-table table-responsive-xs">
            <thead>
              <tr class="table-head">
                <th scope="col" colspan="2">product</th>
                <th scope="col">total price</th>
                <th scope="col">quantity</th>
                <th scope="col">status</th>
              </tr>
            </thead>
            <tbody>

              @foreach($transaction_list as $transaction)
              <tr style="background-color: #fff;">
                <td colspan="4">Order ID : {{ $transaction->id }}</td>
                <td>{{ $transaction->status_text }}</td>
              </tr>

              @foreach($transaction->item as $item)
              <tr>
                <td>
                  <a href="#">
                    @if($item->path)
                    <img src="{{ Storage::url($item->path) }}" alt="product" class="img-fluid  ">
                    @else
                    <img src="../assets/images/product-sidebar/001.jpg" alt="product" class="img-fluid  ">
                    @endif
                  </a>
                </td>
                <td>{{ $item->product_name }}</td>
                <td>RM {{ $item->total }}</td>
                <td>{{ $item->quantity }}</td>
                <td></td>
              </tr>
              @endforeach

              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
        <!-- <div class="row cart-buttons">
            <div class="col-12 pull-right"><a href="#" class="btn btn-normal btn-sm">show all orders</a></div>
          </div> -->
  </div>
</section>
<!--section end-->

@include('front.footer')

@endsection
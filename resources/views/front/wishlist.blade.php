@extends('front.layout')

@section('layout')

<!-- breadcrumb start -->
<div class="breadcrumb-main ">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumb-contain">
                    <div>
                        <h2>wishlist</h2>
                        <ul>
                            <li><a href="#">home</a></li>
                            <li><i class="fa fa-angle-double-right"></i></li>
                            <li><a href="#">wishlist</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->

<!--section start-->
<section class="wishlist-section section-big-py-space bg-light">
    <div class="custom-container">
        <div class="row">
            <div class="col-sm-12">
                <table class="table cart-table table-responsive-xs">
                    <thead>
                    <tr class="table-head">
                        <th scope="col">image</th>
                        <th scope="col">product name</th>
                        <th scope="col">price</th>
                        <th scope="col">availability</th>
                        <th scope="col">action</th>
                    </tr>
                    </thead>
                    <tbody>
                      @if(count($wishlist_list) > 0)
                        @foreach($wishlist_list as $wishlist)
                          <tr>
                            <td>
                              <a href="#"><img src="{{ $wishlist->image ? Storage::url($wishlist->image->path) : '../assets/images/layout-2/product/1.jpg' }}" alt="product" class="img-fluid"></a>
                            </td>
                            <td><a href="#">{{ $wishlist->product_name }}</a>
                              <div class="mobile-cart-content row">
                                <div class="col-xs-3">
                                  <p>
                                    @if($wishlist->stock == 0)
                                      Out of stock
                                    @else
                                      In stock
                                    @endif
                                  </p>
                                </div>
                                <div class="col-xs-3">
                                  <h2 class="td-color">{{ $wishlist->quantity }} x RM {{ number_format($wishlist->product_price, 2) }}</h2></div>
                                <div class="col-xs-3">
                                  <h2 class="td-color"><a href="#" class="icon mr-1"><i class="ti-close"></i> </a><a href="#" class="cart"><i class="ti-shopping-cart"></i></a></h2></div>
                              </div>
                            </td>
                            <td>
                              <h2>{{ $wishlist->quantity}} x RM {{ number_format($wishlist->product_price, 2) }}</h2></td>
                            <td>
                              <p>
                                @if($wishlist->stock == 0)
                                  Out of stock
                                @else
                                  In stock
                                @endif
                              </p>
                            </td>
                            <td><a href="#" class="icon mr-3"><i class="ti-close"></i> </a><a href="#" class="cart"><i class="ti-shopping-cart"></i></a></td>
                          </tr>
                        @endforeach
                        
                      @else
                        <tr>
                          <td colspan="5"> Your wishlist is empty </td>
                        </tr>
                      @endif
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row wishlist-buttons">
            <div class="col-12"><a href="#" class="btn btn-normal">continue shopping</a> <a href="#" class="btn btn-normal">check out</a></div>
        </div>
    </div>
</section>
<!--section end-->

@include('front.footer')

@endsection
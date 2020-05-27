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
        <form method="POST" action="{{ route('updateWishlist') }}" id="updateWishlistForm">
          @csrf
          <table class="table cart-table table-responsive-xs">
            <thead>
              <tr class="table-head">
                <th scope="col">image</th>
                <th scope="col">product name</th>
                <th scope="col">price</th>
                <th scope="col">quantity</th>
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
                      <h2 class="td-color">{{ $wishlist->quantity }} x RM {{ number_format($wishlist->product_price, 2) }}</h2>
                    </div>
                    <div class="col-xs-3">
                      <h2 class="td-color">
                        <a href="#" class="icon mr-1">
                          <i class="ti-close"></i> 
                        </a>
                        <a href="#" class="cart">
                          <i class="ti-shopping-cart"></i>
                        </a>
                      </h2>
                    </div>
                  </div>
                </td>
                <td>
                  <h2>{{ $wishlist->quantity}} x RM {{ number_format($wishlist->product_price, 2) }}</h2>
                </td>
                <td align="center">
                  <input type="number" class="form-control input-number" value="{{ $wishlist->quantity }}" style="max-width: 100px; margin: auto;" name="quantity_{{ $wishlist->id }}" />
                  <input type="hidden" name="wishlist_detail_id[]" value="{{ $wishlist->id }}" />
                </td>
                <td>
                  <p>
                    @if($wishlist->stock == 0 && $wishlist->stock !== null)
                      Out of stock
                    @else
                      In stock
                    @endif
                  </p>
                </td>
                <td>
                  <a href="#" class="icon mr-3 removeWishlist" data-toggle="modal" data-target="#removeWishlistDetail" wishlist_id="{{ $wishlist->id }}">
                    <i class="ti-close"></i> 
                  </a>
                  @if($wishlist->stock !== 0 || $wishlist->stock === null)
                    <a href="#" class="cart" id="updateWishlistToCart" wishlist_id="{{ $wishlist->id }}">
                      <i class="ti-shopping-cart"></i>
                    </a>
                  @endif
                </td>
              </tr>
              @endforeach

              @else
              <tr>
                <td colspan="6"> Your wishlist is empty </td>
              </tr>
              @endif
            </tbody>
          </table>
        </form>
      </div>
    </div>
    <div class="row wishlist-buttons">
      <div class="col-12">
        @if(count($wishlist_list) > 0)
        <a href="#" class="btn btn-normal pull-left" id="updateWishlist">Update</a>
        @endif
        <a href="{{ route('getFrontIndex') }}" class="btn btn-normal">continue shopping</a>
      </div>
    </div>
  </div>
</section>
<!--section end-->

<div class="modal fade" style="z-index: 9999;" id="removeWishlistDetail" tabindex="-1" role="dialog" aria-labelledby="removeWishlistLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Remove item</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Do you want to remove this item ?
      </div>
      <div class="modal-footer">
        <form method="POST" action="{{ route('removeWishlistDetail') }}" id="removeWishlistForm"> 
          @csrf
          <input type="hidden" id="removeWishlistID" name="wishlist_id" value="" />
        </form>
        
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="removeWishlist">Yes</button>
      </div>
    </div>
  </div>
</div>

<form method="POST" action="{{ route('updateWishlistToCart') }}" id="updateWishlistToCartForm">
  @csrf
  <input type="hidden" name="wishlist_id" value="" id="updateWishlistToCartID" />
</form>

<script>
  
  $("a.removeWishlist").click(function(){
    var wishlist_id = $(this).attr("wishlist_id");
    $("#removeWishlistID").val(wishlist_id);
  });

  $("#removeWishlist").click(function(){
    $("#removeWishlistForm").submit();
  });

  $("#updateWishlist").click(function(){
    $("#updateWishlistForm").submit();
  });

  $("#updateWishlistToCart").click(function(){
    var wishlist_id = $(this).attr("wishlist_id");
    $("#updateWishlistToCartID").val(wishlist_id);
    $("#updateWishlistToCartForm").submit();
  });

</script>

@include('front.footer')

@endsection
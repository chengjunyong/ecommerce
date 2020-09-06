@extends('front.layout')

@section('layout')

<style>

  /*.item_img { height: 400px; object-fit: cover; max-width: none; }*/

</style>

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
<section class="section-big-pt-space bg-light">
  <div class="collection-wrapper">
    <div class="custom-container">
      <div class="row">
        <div class="col-lg-3 col-sm-10 col-xs-12">
          <div class="product-right-slick">
            @if(count($product_detail->image) > 0)
            @foreach($product_detail->image as $image)
            <div><img src="{{ Storage::url($image->path) }}" alt="" class="img-fluid image_zoom_cls-0" style="height: 300px; object-fit: cover; max-width: none;"></div>
            @endforeach
            @else
            <div><img src="../assets/images/product-sidebar/001.jpg" alt="" class="img-fluid image_zoom_cls-0" style="height: 300px; object-fit: cover; max-width: none;"></div>
            <div><img src="../assets/images/product-sidebar/002.jpg" alt="" class="img-fluid image_zoom_cls-1" style="height: 300px; object-fit: cover; max-width: none;"></div>
            <div><img src="../assets/images/product-sidebar/003.jpg" alt="" class="img-fluid image_zoom_cls-2" style="height: 300px; object-fit: cover; max-width: none;"></div>
            <div><img src="../assets/images/product-sidebar/004.jpg" alt="" class="img-fluid image_zoom_cls-3" style="height: 300px; object-fit: cover; max-width: none;"></div>
            @endif
          </div>
        </div>
        <div class="col-lg-1 col-sm-2 col-xs-12">
          <div class="row">
            <div class="col-12 p-0">
              <div class="slider-right-nav">
                @if(count($product_detail->image) > 0)
                @foreach($product_detail->image as $image)
                <div><img src="{{ Storage::url($image->path) }}" alt="" class="img-fluid  image_zoom_cls-0"></div>
                @endforeach
                @else
                <div><img src="../assets/images/product-sidebar/001.jpg" alt="" class="img-fluid  image_zoom_cls-0"></div>
                <div><img src="../assets/images/product-sidebar/002.jpg" alt="" class="img-fluid  image_zoom_cls-1"></div>
                <div><img src="../assets/images/product-sidebar/003.jpg" alt="" class="img-fluid  image_zoom_cls-2"></div>
                <div><img src="../assets/images/product-sidebar/004.jpg" alt="" class="img-fluid  image_zoom_cls-3"></div>
                @endif
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="product-right product-description-box">
            <h2>{{ $product_detail->name }}</h2>
            <div class="border-product">
              <h6 class="product-title">product details</h6>
              <p>{{ $product_detail->description }}</p>
            </div>
            <div class="border-product">
              @if($product_detail->promo_price === null)
                <h3 style="margin: 0px; color: #ff914b;">RM {{ $product_detail->price }}</h3>
              @else
                <h3 style="margin: 0px; color: #ff914b;">RM {{ $product_detail->promo_price }}</h3>
                <h4><del>RM {{ $product_detail->price }}</del>
                  @if($product_detail->promo_type == "percentage")
                    <span>{{ $product_detail->promo_amount }}% OFF</span>
                  @elseif($product_detail->promo_type == "fixed")
                    <span>RM{{ $product_detail->promo_amount }} OFF</span>
                  @endif
                </h4>
              @endif
            </div>
            <div class="border-product">
              <h6 class="product-title">quantity</h6>
              <div class="qty-box">
                <div class="input-group">
                  <span class="input-group-prepend">
                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                      <i class="ti-angle-left"></i>
                    </button>
                  </span>
                  <input type="text" name="quantity" class="form-control input-number" value="1" id="item_quantity"> 
                  <span class="input-group-prepend">
                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                      <i class="ti-angle-right"></i>
                    </button>
                  </span>
                </div>
              </div>
            </div>
            <div class="single-product-tables border-product detail-section">
              <table>
                <tbody>
                  <tr>
                    <td>Variance:</td>
                    <td>Sample Variance</td>
                  </tr>
                  <tr>
                    <td>Variance:</td>
                    <td>Sample Variance</td>
                  </tr>
                  <tr>
                    <td>Variance:</td>
                    <td>Sample Variance</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="border-product">
              <div class="product-icon">
                <ul class="product-social">
                  <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
                <!-- <form class="d-inline-block">
                  <button class="wishlist-btn" product_id="{{ $product_detail->id }}" type="button"><i class="fa fa-heart"></i><span class="title-font">Add To WishList</span></button>
                </form> -->
              </div>
              <div style="margin: 10px 0;">
                <div class="product-buttons" product_id="{{ $product_detail->id }}" type="button"><a class="btn btn-normal">add to cart</a> <a href="#" class="btn btn-normal">buy now</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="product-right product-form-box">
            @if($user)
            <div class="border-product" style="text-align: left;">
              <h6 class="product-title">Delivery option</h6>

              <div style="margin-top: 10px;">
                @if($address_book)
                <span>{{ $address_book->address }}</span>
                <span>{{ $address_book->city }} {{ $address_book->state }}</span>
                <span>{{ $address_book->postal_code }}</span>
                @else
                <span>No default address.</span>
                @endif
              </div>

            </div>
            @endif
            <div class="product-description border-product" style="border-bottom: 1px solid #ddd;">
              <h6 class="product-title">Time Reminder</h6>
              <div class="timer">
                <p id="demo"><span>25 <span class="padding-l">:</span> <span class="timer-cal">Days</span> </span><span>22 <span class="padding-l">:</span> <span class="timer-cal">Hrs</span> </span><span>13 <span class="padding-l">:</span> <span class="timer-cal">Min</span> </span><span>57 <span class="timer-cal">Sec</span></span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section ends -->

<!-- product-tab starts -->
<section class="tab-product tab-exes  ">
  <div class="custom-container">
    <div class="row">
      <div class="col-sm-12 col-lg-12">
        <div class="creative-card creative-inner">
          <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
            <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-toggle="tab" href="#top-home" role="tab" aria-selected="true">Description</a>
              <div class="material-border"></div>
            </li>
            <li class="nav-item"><a class="nav-link" id="profile-top-tab" data-toggle="tab" href="#top-profile" role="tab" aria-selected="false">Variance Details</a>
              <div class="material-border"></div>
            </li>
          <!-- <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-toggle="tab" href="#top-contact" role="tab" aria-selected="false">Video</a>
              <div class="material-border"></div>
          </li>
          <li class="nav-item"><a class="nav-link" id="review-top-tab" data-toggle="tab" href="#top-review" role="tab" aria-selected="false">Write Review</a>
              <div class="material-border"></div>
            </li> -->
          </ul>
          <div class="tab-content nav-material" id="top-tabContent">
            <div class="tab-pane fade show active" id="top-home" role="tabpanel" aria-labelledby="top-home-tab">
              <p>{{ $product_detail->description }}</p>
            </div>
            <div class="tab-pane fade" id="top-profile" role="tabpanel" aria-labelledby="profile-top-tab">
              <!-- <p>{{ $product_detail->description }}</p> -->
              <div class="single-product-tables">
                <table>
                  <tbody>
                    <tr>
                      <td>Variance</td>
                      <td>Sample Variance</td>
                    </tr>
                    <tr>
                      <td>Variance</td>
                      <td>Sample Variance</td>
                    </tr>
                    <tr>
                      <td>Variance</td>
                      <td>Sample Variance</td>
                    </tr>
                  </tbody>
                </table>
                <table>
                  <tbody>
                    <tr>
                      <td>Variance</td>
                      <td>Sample Variance</td>
                    </tr>
                    <tr>
                      <td>Variance</td>
                      <td>Sample Variance</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">
              <div class="mt-4 text-center">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/BUWzX78Ye_8" allow="autoplay; encrypted-media" allowfullscreen></iframe>
              </div>
            </div>
            <div class="tab-pane fade" id="top-review" role="tabpanel" aria-labelledby="review-top-tab">
              <form class="theme-form">
                <div class="form-row">
                  <div class="col-md-12">
                    <div class="media">
                      <label>Rating</label>
                      <div class="media-body ml-3">
                        <div class="rating three-star"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter Your name" required>
                  </div>
                  <div class="col-md-6">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="Email" required>
                  </div>
                  <div class="col-md-12">
                    <label for="review">Review Title</label>
                    <input type="text" class="form-control" id="review" placeholder="Enter your Review Subjects" required>
                  </div>
                  <div class="col-md-12">
                    <label for="review">Review Title</label>
                    <textarea class="form-control" placeholder="Wrire Your Testimonial Here" id="exampleFormControlTextarea1" rows="6"></textarea>
                  </div>
                  <div class="col-md-12">
                    <button class="btn btn-normal" type="submit">Submit YOur Review</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- product-tab ends -->


<!-- related products -->
<section class="section-big-py-space  ratio_asos bg-light">
  <div class="custom-container">
    <div class="row">
      <div class="col-12 product-related">
        <h2>related products</h2>
      </div>
    </div>
    <div class="row ">
      <div class="col-12 product">
        <div class="product-slide no-arrow">
          <div>
            <div class="product-box">
              <div class="product-imgbox">
                <div class="product-front">
                  <img src="../assets/images/layout-1/product/1.jpg" class="img-fluid  " alt="product">
                </div>
                <div class="product-back">
                  <img src="../assets/images/layout-1/product/a1.jpg" class="img-fluid  " alt="product">
                </div>
              </div>
              <div class="product-detail detail-center ">
                <div class="detail-title">
                  <div class="detail-left">
                    <a href="">
                      <h6 class="price-title">
                        Description.
                      </h6>
                    </a>
                  </div>
                  <div class="detail-right">
                    <div class="check-price">
                      RM 10.00
                    </div>
                    <div class="price">
                      <div class="price">
                        RM 10.00
                      </div>
                    </div>
                  </div>
                </div>

                <div class="icon-detail">
                  <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                    <i class="ti-bag" ></i>
                  </button>
                  <a href="javascript:void(0)" title="Add to Wishlist">
                    <i class="ti-heart" aria-hidden="true"></i>
                  </a>
                  <a href="#" class="show_product_detail" data-toggle="modal" data-target="#quick-view" title="Quick View">
                    <i class="ti-search" aria-hidden="true"></i>
                  </a>
                </div>

              </div>
            </div>
          </div>
          <div>
            <div class="product-box">
              <div class="product-imgbox">
                <div class="product-front">
                  <img src="../assets/images/layout-1/product/2.jpg" class="img-fluid  " alt="product">
                </div>
                <div class="product-back">
                  <img src="../assets/images/layout-1/product/a2.jpg" class="img-fluid  " alt="product">
                </div>
              </div>
              <div class="product-detail detail-center ">
                <div class="detail-title">
                  <div class="detail-left">
                    <a href="">
                      <h6 class="price-title">
                        Description.
                      </h6>
                    </a>
                  </div>
                  <div class="detail-right">
                    <div class="check-price">
                      RM 10.00
                    </div>
                    <div class="price">
                      <div class="price">
                        RM 10.00
                      </div>
                    </div>
                  </div>
                </div>

                <div class="icon-detail">
                  <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                    <i class="ti-bag" ></i>
                  </button>
                  <a href="javascript:void(0)" title="Add to Wishlist">
                    <i class="ti-heart" aria-hidden="true"></i>
                  </a>
                  <a href="#" class="show_product_detail" data-toggle="modal" data-target="#quick-view" title="Quick View">
                    <i class="ti-search" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="product-box">
              <div class="product-imgbox">
                <div class="product-front">
                  <img src="../assets/images/layout-1/product/3.jpg" class="img-fluid  " alt="product">
                </div>
                <div class="product-back">
                  <img src="../assets/images/layout-1/product/a3.jpg" class="img-fluid  " alt="product">
                </div>
              </div>
              <div class="product-detail detail-center ">
                <div class="detail-title">
                  <div class="detail-left">
                    <a href="">
                      <h6 class="price-title">
                        Description.
                      </h6>
                    </a>
                  </div>
                  <div class="detail-right">
                    <div class="check-price">
                      RM 10.00
                    </div>
                    <div class="price">
                      <div class="price">
                        RM 10.00
                      </div>
                    </div>
                  </div>
                </div>

                <div class="icon-detail">
                  <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                    <i class="ti-bag" ></i>
                  </button>
                  <a href="javascript:void(0)" title="Add to Wishlist">
                    <i class="ti-heart" aria-hidden="true"></i>
                  </a>
                  <a href="#" class="show_product_detail" data-toggle="modal" data-target="#quick-view" title="Quick View">
                    <i class="ti-search" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="product-box">
              <div class="product-imgbox">
                <div class="product-front">
                  <img src="../assets/images/layout-1/product/4.jpg" class="img-fluid  " alt="product">
                </div>
                <div class="product-back">
                  <img src="../assets/images/layout-1/product/a4.jpg" class="img-fluid  " alt="product">
                </div>
              </div>
              <div class="product-detail detail-center ">
                <div class="detail-title">
                  <div class="detail-left">
                    <a href="">
                      <h6 class="price-title">
                        Description.
                      </h6>
                    </a>
                  </div>
                  <div class="detail-right">
                    <div class="check-price">
                      RM 10.00
                    </div>
                    <div class="price">
                      <div class="price">
                        RM 10.00
                      </div>
                    </div>
                  </div>
                </div>

                <div class="icon-detail">
                  <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                    <i class="ti-bag" ></i>
                  </button>
                  <a href="javascript:void(0)" title="Add to Wishlist">
                    <i class="ti-heart" aria-hidden="true"></i>
                  </a>
                  <a href="#" class="show_product_detail" data-toggle="modal" data-target="#quick-view" title="Quick View">
                    <i class="ti-search" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="product-box">
              <div class="product-imgbox">
                <div class="product-front">
                  <img src="../assets/images/layout-1/product/5.jpg" class="img-fluid  " alt="product">
                </div>
                <div class="product-back">
                  <img src="../assets/images/layout-1/product/a5.jpg" class="img-fluid  " alt="product">
                </div>
              </div>
              <div class="product-detail detail-center ">
                <div class="detail-title">
                  <div class="detail-left">
                    <a href="">
                      <h6 class="price-title">
                        Description.
                      </h6>
                    </a>
                  </div>
                  <div class="detail-right">
                    <div class="check-price">
                      RM 10.00
                    </div>
                    <div class="price">
                      <div class="price">
                        RM 10.00
                      </div>
                    </div>
                  </div>
                </div>

                <div class="icon-detail">
                  <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                    <i class="ti-bag" ></i>
                  </button>
                  <a href="javascript:void(0)" title="Add to Wishlist">
                    <i class="ti-heart" aria-hidden="true"></i>
                  </a>
                  <a href="#" class="show_product_detail" data-toggle="modal" data-target="#quick-view" title="Quick View">
                    <i class="ti-search" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="product-box">
              <div class="product-imgbox">
                <div class="product-front">
                  <img src="../assets/images/layout-1/product/6.jpg" class="img-fluid  " alt="product">
                </div>
                <div class="product-back">
                  <img src="../assets/images/layout-1/product/a6.jpg" class="img-fluid  " alt="product">
                </div>
              </div>
              <div class="product-detail detail-center ">
                <div class="detail-title">
                  <div class="detail-left">
                    <a href="">
                      <h6 class="price-title">
                        Description.
                      </h6>
                    </a>
                  </div>
                  <div class="detail-right">
                    <div class="check-price">
                      RM 10.00
                    </div>
                    <div class="price">
                      <div class="price">
                        RM 10.00
                      </div>
                    </div>
                  </div>
                </div>

                <div class="icon-detail">
                  <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                    <i class="ti-bag" ></i>
                  </button>
                  <a href="javascript:void(0)" title="Add to Wishlist">
                    <i class="ti-heart" aria-hidden="true"></i>
                  </a>
                  <a href="#" class="show_product_detail" data-toggle="modal" data-target="#quick-view" title="Quick View">
                    <i class="ti-search" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="product-box">
              <div class="product-imgbox">
                <div class="product-front">
                  <img src="../assets/images/layout-1/product/7.jpg" class="img-fluid  " alt="product">
                </div>
                <div class="product-back">
                  <img src="../assets/images/layout-1/product/a7.jpg" class="img-fluid  " alt="product">
                </div>
              </div>
              <div class="product-detail detail-center ">
                <div class="detail-title">
                  <div class="detail-left">
                    <a href="">
                      <h6 class="price-title">
                        Description.
                      </h6>
                    </a>
                  </div>
                  <div class="detail-right">
                    <div class="check-price">
                      RM 10.00
                    </div>
                    <div class="price">
                      <div class="price">
                        RM 10.00
                      </div>
                    </div>
                  </div>
                </div>

                <div class="icon-detail">
                  <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                    <i class="ti-bag" ></i>
                  </button>
                  <a href="javascript:void(0)" title="Add to Wishlist">
                    <i class="ti-heart" aria-hidden="true"></i>
                  </a>
                  <a href="#" class="show_product_detail" data-toggle="modal" data-target="#quick-view" title="Quick View">
                    <i class="ti-search" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- related products -->

<script>
  
  var logged_user = "{{ $logged_user }}";
  
  $(".wishlist-btn, .product-buttons").click(function(){
    if(logged_user == "")
    {
      $("#loginPromptText").html("Please login before add item to cart");
      $("#loginPrompt").modal('show');
      return;
    }
    var product_id = $(this).attr("product_id");
    var quantity = $("#item_quantity").val();

    var route = "";
    var type = 0;
    if($(this).hasClass("wishlist-btn") == true)
    {
      route = "{{ route('addItemToWishlist') }}";
      type = 1;
    }
    else if($(this).hasClass("product-buttons") == true)
    {
      route = "{{ route('addItemToCart') }}";
      type = 2;
    }

    if(route == "")
    {
      alert("Something wrong.")
      return;
    }

    $.post(route, { "_token": "{{ csrf_token() }}", "product_id" : product_id, "quantity" : quantity }, function(response){

      if(response.error == 0)
      {
        if(type == 1)
        {
          $("#wishlist_count").html(response.wishlist_count);
        }
        else
        {
          var cart_list = response.cart_list;

          var cart_html = "";
          var sum_cart = 0;
          for(var a = 0; a < cart_list.length; a++)
          {
            var cart_detail = cart_list[a];
            cart_html += '<li>';
            cart_html += '<div class="media">';
            cart_html += '<a href="#">';
            var cart_img = '../assets/images/layout-1/product/1.jpg';
            if(cart_detail.path != null)
            {
              cart_img = "{{ Storage::url(':path') }}";
              cart_img = cart_img.replace(':path', cart_detail.path);
            }

            cart_html += '<img alt="" class="mr-3" src='+cart_img+' />';
            cart_html += '</a>';
            cart_html += '<div class="media-body">';
            cart_html += '<a href="#">';
            cart_html += '<h4>'+cart_detail.product_name+'</h4>';
            cart_html += '</a>';
            cart_html += '<h4>';
            if(cart_detail.promo_price === null)
            {
              cart_html += '<span>'+cart_detail.quantity+' x RM '+parseFloat(cart_detail.price).toFixed(2)+'</span>';
            }
            else
            {
              cart_html += '<span>'+cart_detail.quantity+' x RM '+parseFloat(cart_detail.promo_price).toFixed(2)+'</span>';
            }

            cart_html += '</h4>';
            cart_html += '</div>';
            cart_html += '</div>';
            cart_html += '<div class="close-circle">';
            cart_html += '<a href="#" class="removeCart" data-toggle="modal" data-target="#removeCartDetail" cart_id="'+cart_detail.id+'">';
            cart_html += '<i class="ti-trash" aria-hidden="true"></i>';
            cart_html += '</a>';
            cart_html += '</div>';
            cart_html += '</li>';

            if(cart_detail.promo_price === null)
            {
              sum_cart += cart_detail.quantity * cart_detail.price;
            }
            else
            {
              sum_cart += cart_detail.quantity * cart_detail.promo_price;
            }
          }
          $("#footer_cart").html(cart_html);
          $("#sum_cart").html(parseFloat(sum_cart).toFixed(2));

          $("#cart_count").html(response.cart_count);

          $("a.removeCart").click(function(){
            var cart_id = $(this).attr("cart_id");
            $("#removeCartID").val(cart_id);
          });
          
        }

        toastBox("success", "Added Successful", response.message);
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

@include('front.footer');

@endsection

<!--footer start-->
<style>
.google {
  background-color: #dd4b39;
  color: white;
  width: 100%;
  margin-bottom:10px;
}

.fb {
  background-color: #3B5998;
  color: white;
  width: 100%;
}

.google:hover,.fb:hover{
  color:#ccc;
}
</style>
<footer>
    <div class="footer-1 section-mb-space">
        <div class="container">
            <div class="footer-box">
                <div class="row">
                    <div class="col-md-8 pr-md-0">
                        <div class="footer-link">
                            <div class="row">
                                <div class="col-md-12 ">
                                    <div class="footer-sub-box account">
                                        <div class="footer-title">
                                            <h5>my account</h5>
                                        </div>
                                        <div class="footer-contant">
                                            <ul>
                                                <li><a href="#">about us</a></li>
                                                <li><a href="{{ route('getContactUsPage') }}">contact us</a></li>
                                                <li><a href="#">terms & conditions</a></li>
                                                <li><a href="#">returns & exchanges</a></li>
                                                <li><a href="#">shipping & delivery</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="footer-sub-box">
                                        <div class="footer-title">
                                            <h5>quick link</h5>
                                        </div>
                                        <div class="footer-contant">
                                            <ul>
                                                <li><a href="#">store location</a></li>
                                                <li><a href="#"> my account</a></li>
                                                <li><a href="{{ route('getOrderTracking') }}"> orders tracking</a></li>
                                                <li><a href="{{ route('getFAQ') }}">FAQ </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4  pl-md-0">
                        <div class="footer-sub-box footer-contant-box">
                            <div>
                                <div class="footer-title">
                                    <h5>contact us</h5>
                                </div>
                                <div class="footer-contant">
                                    <ul class="contact-list">
                                        <li><i class="fa fa-map-marker"></i>Demo Store Homeu</li>
                                        <li><i class="fa fa-phone"></i>Contact Us: <span>09-xxxxxxx</span></li>
                                        <li><i class="fa fa-envelope-o"></i>Email Us: support@homeu.com.my</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-1 section-mb-space">
        <div class="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-8 col-sm-12">
                        <div class="footer-end">
                            <p><span>2020</span> Copyright & Powered by Homeu</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-4 col-sm-12">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- tap to top -->
<div class="tap-top">
    <div>
        <i class="fa fa-angle-double-up"></i>
    </div>
</div>
<!-- tap to top End -->

<!-- Add to cart bar -->
<div id="cart_side" class=" add_to_cart bottom ">
    <a href="javascript:void(0)" class="overlay" onclick="closeCart()"></a>
    <div class="cart-inner">
        <div class="cart_top">
            <h3>my cart</h3>
            <div class="close-cart">
                <a href="javascript:void(0)" onclick="closeCart()">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <div class="cart_media">
            <ul class="cart_product">
              @if(count($global_cart_list) > 0)
                @foreach($global_cart_list as $cart_detail)
                  <li>
                    <div class="media">
                      <a href="#">
                        <img alt="" class="mr-3" src="{{ $cart_detail->image ? Storage::url($cart_detail->image->path) : '../assets/images/layout-1/product/1.jpg' }}">
                      </a>
                      <div class="media-body">
                        <a href="#">
                          <h4>{{ $cart_detail->product_name }}</h4>
                        </a>
                        <h4>
                          <span>{{ $cart_detail->quantity }} x RM {{ number_format($cart_detail->product_price, 2) }}</span>
                        </h4>
                      </div>
                    </div>
                    <div class="close-circle">
                      <a href="#">
                        <i class="ti-trash" aria-hidden="true"></i>
                      </a>
                    </div>
                  </li>
                @endforeach
              @else
                <li>
                  <div class="media">
                    <span>Cart is empty.</span>
                  </div>
                </li>
              @endif
            </ul>
            <ul class="cart_total">
                <li>
                    <div class="total">
                        <h5>subtotal : 
                          <span id="sum_cart">RM 0.00</span></h5>
                    </div>
                </li>
                <li>
                    <div class="buttons">
                        <a href="{{ route('getCartIndex') }}" class="btn btn-normal btn-xs view-cart">view cart</a>
                        <a href="{{ route('getCheckoutIndex') }}" class="btn btn-normal btn-xs checkout">checkout</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Add to cart bar end-->


<!--Newsletter modal popup start-->
<div class="modal fade bd-example-modal-lg theme-modal" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="news-latter">
                    <div class="modal-bg">
                        <div class="offer-content">
                            <div>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <h2>newsletter</h2>
                                <p>Subscribe to our website mailling list <br> and get a Offer, Just for you!</p>
                                <form action="https://pixelstrap.us19.list-manage.com/subscribe/post?u=5a128856334b598b395f1fc9b&amp;id=082f74cbda" class="auth-form needs-validation" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank">
                                    <div class="form-group mx-sm-3">
                                        <input type="email" class="form-control" name="EMAIL" id="mce-EMAIL" placeholder="Enter your email" required="required">
                                        <button type="submit" class="btn btn-theme btn-normal btn-sm " id="mc-submit">subscribe</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Newsletter Modal popup end-->


<!-- Quick-view modal popup start-->
<div class="modal fade bd-example-modal-lg theme-modal" id="quick-view" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content quick-view-modal">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="row">
                    <div class="col-lg-6 col-xs-12">
                        <div class="quick-view-img"><img src="../assets/images/layout-1/product/a4.jpg" alt="quick" class="img-fluid "></div>
                    </div>
                    <div class="col-lg-6 rtl-text">
                        <div class="product-right">
                            <h2>Women Pink Shirt</h2>
                            <h3>$32.96</h3>
                            <ul class="color-variant">
                                <li class="bg-light0"></li>
                                <li class="bg-light1"></li>
                                <li class="bg-light2"></li>
                            </ul>
                            <div class="border-product">
                                <h6 class="product-title">product details</h6>
                                <p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
                            </div>
                            <div class="product-description border-product">
                                <div class="size-box">
                                    <ul>
                                        <li class="active"><a href="#">s</a></li>
                                        <li><a href="#">m</a></li>
                                        <li><a href="#">l</a></li>
                                        <li><a href="#">xl</a></li>
                                    </ul>
                                </div>
                                <h6 class="product-title">quantity</h6>
                                <div class="qty-box">
                                    <div class="input-group"><span class="input-group-prepend"><button type="button" class="btn quantity-left-minus" data-type="minus" data-field=""><i class="ti-angle-left"></i></button> </span>
                                        <input type="text" name="quantity" class="form-control input-number" value="1"> <span class="input-group-prepend"><button type="button" class="btn quantity-right-plus" data-type="plus" data-field=""><i class="ti-angle-right"></i></button></span></div>
                                </div>
                            </div>
                            <div class="product-buttons"><a href="#" class="btn btn-normal">add to cart</a> <a href="#" id="view_product_detail" class="btn btn-normal">view detail</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quick-view modal popup end-->


<!-- My account bar start-->
<div id="myAccount" class="add_to_cart right account-bar">
    <a href="javascript:void(0)" class="overlay" onclick="closeAccount()"></a>
    <div class="cart-inner">
        <div class="cart_top">
            <h3>my account</h3>
            <div class="close-cart">
                <a href="javascript:void(0)" onclick="closeAccount()">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <form class="theme-form" id="login_form">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" placeholder="Email" name="email" required>
            </div>
            <div class="form-group">
                <label for="review">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter your password" id="login_password" required>
            </div>
            <div class="form-group">
                <button type="button" id="login_button" class="btn btn-rounded btn-block ">Login</button>
            </div>
            <div>
              <a href="{{ route('login_with_google') }}" class="google btn">
                <i class="fa fa-google fa-fw"></i> Login with Google
              </a>
            </div>
            <div>
              <a href="{{ route('login_with_facebook') }}" class="fb btn">
                <i class="fa fa-facebook fa-fw"></i> Login with Facebook
              </a>
            </div>
            <div>
                <h5 class="forget-class"><a href="{{ route('getForgotPassword') }}" class="d-block">forget password?</a></h5>
                <h6 class="forget-class"><a href="{{ route('getRegisterPage') }}" class="d-block">new to store? Signup now</a></h6>
            </div>
        </form>
    </div>
</div>
<!-- Add to account bar end-->

<!-- Add to wishlist bar -->
<div id="wishlist_side" class="add_to_cart right">
    <a href="javascript:void(0)" class="overlay" onclick="closeWishlist()"></a>
    <div class="cart-inner">
        <div class="cart_top">
            <h3>my wishlist</h3>
            <div class="close-cart">
                <a href="javascript:void(0)" onclick="closeWishlist()">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <div class="cart_media">
            <ul class="cart_product">
                <li>
                    <div class="media">
                        <a href="#">
                            <img alt="" class="mr-3" src="../assets/images/layout-1/media-banner/1.jpg">
                        </a>
                        <div class="media-body">
                            <a href="#">
                                <h4>item name</h4>
                            </a>
                            <h4>
                                <span>sm</span>
                                <span>, blue</span>
                            </h4>
                            <h4>
                                <span>$ 299.00</span>
                            </h4>
                        </div>
                    </div>
                    <div class="close-circle">
                        <a href="#">
                            <i class="ti-trash" aria-hidden="true"></i>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="media">
                        <a href="#">
                            <img alt="" class="mr-3" src="../assets/images/layout-1/media-banner/2.jpg">
                        </a>
                        <div class="media-body">
                            <a href="#">
                                <h4>item name</h4>
                            </a>
                            <h4>
                                <span>sm</span>
                                <span>, blue</span>
                            </h4>
                            <h4>
                                <span>$ 299.00</span>
                            </h4>
                        </div>
                    </div>
                    <div class="close-circle">
                        <a href="#">
                            <i class="ti-trash" aria-hidden="true"></i>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="media">
                        <a href="#"><img alt="" class="mr-3" src="../assets/images/layout-1/media-banner/3.jpg"></a>
                        <div class="media-body">
                            <a href="#"><h4>item name</h4></a>
                            <h4>
                                <span>sm</span>
                                <span>, blue</span>
                            </h4>
                            <h4><span>$ 299.00</span></h4>
                        </div>
                    </div>
                    <div class="close-circle">
                        <a href="#">
                            <i class="ti-trash" aria-hidden="true"></i>
                        </a>
                    </div>
                </li>
            </ul>
            <ul class="cart_total">
                <li>
                    <div class="total">
                        <h5>subtotal : <span>$299.00</span></h5>
                    </div>
                </li>
                <li>
                    <div class="buttons">
                        <a href="{{ route('getWishList') }}" class="btn btn-normal btn-block  view-cart">view wislist</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Add to wishlist bar end-->

<!-- add to  setting bar  start-->
<div id="mySetting" class="add_to_cart right">
    <a href="javascript:void(0)" class="overlay" onclick="closeSetting()"></a>
    <div class="cart-inner">
        <div class="cart_top">
            <h3>my setting</h3>
            <div class="close-cart">
                <a href="javascript:void(0)" onclick="closeSetting()">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <div class="setting-block">
            <div >
                <h5>language</h5>
                <ul>
                    <li><a href="#">english</a></li>
                </ul>
                <h5>currency</h5>
                <ul>
                    <li><a href="#">uro</a></li>
                    <li><a href="#">rupees</a></li>
                    <li><a href="#">pound</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Add to setting bar end-->


 <!-- notification product -->
  <div class="product-notification" id="dismiss">
    <span  onclick="dismiss();" class="close" aria-hidden="true">×</span>
    <div class="media">
      <img class="mr-2" src="../assets/images/layout-1/product/5.jpg" alt="Generic placeholder image">
      <div class="media-body">
        <h5 class="mt-0 mb-1">Latest trending</h5>
        Your Ads.
      </div>
    </div>
  </div>
  <!-- notification product -->
<script>
  
  var global_cart_list = @json($global_cart_list);
  if(Object.keys(global_cart_list).length > 0)
  {
    var sum_cart = 0;
    for(var a = 0; a < Object.keys(global_cart_list).length; a++)
    {
      sum_cart += (global_cart_list[a].quantity * global_cart_list[a].product_price);
    }

    $("#sum_cart, #cart_page_sum, #checkout_page_sum").html("RM "+parseFloat(sum_cart).toFixed(2));
  }


</script>
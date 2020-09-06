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
                    <li><i class="fa fa-map-marker"></i> Demo Store Homeu</li>
                    <li><i class="fa fa-phone"></i> Contact Us: <span>09-xxxxxxx</span></li>
                    <li><i class="fa fa-envelope-o"></i> Email Us: support@homeu.com.my</li>
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
<!-- <div class="tap-top">
  <div>
    <i class="fa fa-angle-double-up"></i>
  </div>
</div> -->
<!-- tap to top End -->

<div class="floating_btn" onclick="openFloating()">
  <div style="margin-top: 4px;">
    <i class="fas fa-bars"></i>
  </div>
</div>

<div id="floating_container" class="floating_container">
  <!-- <a href="javascript:void(0)" class="overlay" onclick="closeFloating()"></a> -->
  @if(!$logged_user)
    <div class="login_alert">
      <div class="floating_close" onclick="closeFloating()">
        <i class="fas fa-times"></i>
      </div>
      <div>
        <h4>Required login.</h4>
        <button class="btn btn-info" onclick="floatingLoginNow()">Log in now</button>
      </div>
    </div>
  @endif
  <div class="floating_box">
    <div class="floating_close" onclick="closeFloating()">
      <i class="fas fa-times"></i>
    </div>
    <div class="title-box box-title">
      <div class="active" type="cart" onclick="openFloatingContent(this)">Cart</div>
      <div type="memo" onclick="openFloatingContent(this)">Memo</div>
    </div>
    <div id="floating_cart" class="content">
      <div class="floating_cart_box">
        @if(count($global_cart_list) > 0)
          @foreach($global_cart_list as $cart_detail)
            <div class="item_summary">
              @if($cart_detail->image)
                <img src="{{ Storage::url($cart_detail->image->path) }}" />
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

            </div>
          @endforeach
        @else
          <h4>Cart is empty.</h4>
        @endif
      </div>
    </div>
    <div id="floating_memo" class="content" style="display: none;">
      <div id="memo_list">
        @foreach($memo_list as $memo)
          @if(!$memo->completed)
            <div class="memo">
              <div class="checkbox icheck_checkbox">
                <label>
                  <input class="icheck memo cart_detail_checkbox" type="checkbox" memo_id="{{ $memo->id }}" />
                </label>
              </div>
              <label onclick="memoClick(this, '{{ $memo->id }}')">{{ $memo->memo }}</label>
              <input type='text' class='memo-input' value='{{ $memo->memo }}' style="display: none;" />
              <div class="option remove" onclick="undoMemo(this)">
                <i class="fas fa-times"></i>
              </div>
              <div class="option remove trash" onclick="removeMemo(this, {{ $memo->id }} )">
                <i class="far fa-trash-alt"></i>
              </div>
              <div class="option save" onclick="saveMemo(this, {{ $memo->id }} )">
                <i class="fas fa-check"></i>
              </div>
            </div>
          @endif
        @endforeach
      </div>
      <div class="memo add">
        <i class="fas fa-plus"></i>
        <label>List item</label>
      </div>
      <hr>
      <div>
        <div class="memo expand">
          <i class="fas fa-chevron-down"></i>
          <label><span id="memo_completed_count">{{ $completed_memo_count }} </span> Completed items</label>
        </div>

        <div id="completed_memo">
          @foreach($memo_list as $memo)
            @if($memo->completed == 1)
              <div class="memo">
                <div class="checkbox icheck_checkbox">
                  <label>
                    <input class="icheck memo cart_detail_checkbox" type="checkbox" checked memo_id="{{ $memo->id }}"  />
                  </label>
                </div>
                <label onclick="memoClick(this, '{{ $memo->id }}')" class="completed">{{ $memo->memo }}</label>
                <input type='text' class='memo-input' value='{{ $memo->memo }}' style="display: none;" />
                <div class="option remove" onclick="undoMemo(this)">
                  <i class="fas fa-times"></i>
                </div>
                <div class="option remove trash" onclick="removeMemo(this, {{ $memo->id }} )">
                  <i class="far fa-trash-alt"></i>
                </div>
                <div class="option save" onclick="saveMemo(this, {{ $memo->id }} )">
                  <i class="fas fa-check"></i>
                </div>
              </div>
            @endif
          @endforeach
        </div>
      </div>
    </div>

    <div class="title-box box-footer">
      <div id="floating_view_cart">
        <a href="{{ route('getCartIndex') }}">View Cart</a>
      </div>
      <div id="floating_checkout">
        <a href="{{ route('getCheckoutIndex') }}">Checkout</a>
      </div>
      <div class="pull-right" onclick="closeFloating()">
        <a>Close</a>
      </div>
    </div>

  </div>
</div>

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
      <ul class="cart_product" id="footer_cart">
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
                <span>{{ $cart_detail->quantity }} x 
                  @if($cart_detail->promo_price === null)
                    RM {{ number_format($cart_detail->price, 2) }}
                  @else
                    RM {{ number_format($cart_detail->promo_price, 2) }}
                  @endif
                </span>
              </h4>
            </div>
          </div>
          <div class="close-circle">
            <a href="#" class='removeCart' data-toggle="modal" data-target="#removeCartDetail" cart_id="{{ $cart_detail->id }}">
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
              <span id="sum_cart">RM 0.00</span>
            </h5>
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
                  <div class="input-group">
                    <span class="input-group-prepend">
                      <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                        <i class="ti-angle-left"></i>
                      </button>
                    </span>
                    <input type="text" name="quantity" class="form-control input-number" value="1"> 
                    <span class="input-group-prepend">
                      <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                        <i class="ti-angle-right"></i>
                      </button>
                    </span>
                  </div>
                </div>
              </div>
              <div class="product-buttons">
                <a href="#" class="btn btn-normal">add to cart</a> 
                <a href="#" id="view_product_detail" class="btn btn-normal">view detail</a>
              </div>
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
          <i class="fab fa-google fa-fw"></i> Login with Google
        </a>
      </div>
      <div>
        <a href="{{ route('login_with_facebook') }}" class="fb btn">
          <i class="fab fa-facebook fa-fw"></i> Login with Facebook
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

<div class="modal fade" style="z-index: 9999;" id="removeCartDetail" tabindex="-1" role="dialog" aria-labelledby="removeCartDetailLabel" aria-hidden="true">
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
        <form method="POST" action="{{ route('removeCartDetail') }}" id="removeCartForm"> 
          @csrf
          <input type="hidden" id="removeCartID" name="cart_id" value="" />
        </form>
        
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="removeCart">Yes</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" style="z-index: 9999;" id="loginPrompt" tabindex="-1" role="dialog" aria-labelledby="loginPromptLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Login Required.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p id="loginPromptText"></p>
      </div>
    </div>
  </div>
</div>

<div aria-live="polite" aria-atomic="true" style="position: relative; height: 0px; z-index: 100;">
  <!-- Position it -->
  <div style="position: fixed; top: 10px; right: 10px;" id="toastBox">
  </div>
</div>


<script>

  var remove = 0;
  var global_cart_list = @json($global_cart_list);
  if(Object.keys(global_cart_list).length > 0)
  {
    var sum_cart = 0;
    for(var a = 0; a < Object.keys(global_cart_list).length; a++)
    {
      if(global_cart_list[a].promo_price === null)
      {
        sum_cart += (global_cart_list[a].quantity * global_cart_list[a].price);
      }
      else
      {
        sum_cart += (global_cart_list[a].quantity * global_cart_list[a].promo_price);
      }
    }

    $("#sum_cart, #cart_page_sum, #checkout_page_sum").html("RM "+parseFloat(sum_cart).toFixed(2));
  }

  $("a.removeCart").click(function(){
    var cart_id = $(this).attr("cart_id");
    $("#removeCartID").val(cart_id);
  });

  $("#removeCart").click(function(){
    $("#removeCartForm").submit();
  });

  $(".icheck.memo").on("ifChanged", function(){
    var memo_id = $(this).attr("memo_id");
    var checked = $(this).is(":checked");

    updateMemo(this, checked, memo_id);
  });

  $(".memo.add").click(function(){
    var html = "";
    html += '<div class="memo">';
    html += '<div class="checkbox icheck_checkbox">';
    html += '<label>';
    html += '<input class="icheck memo cart_detail_checkbox" type="checkbox" memo_id="0" />';
    html += '</label>';
    html += '</div>';
    html += "<label style='display: none;'></label>";
    html += '<input type="text" class="memo-input" />';
    html += '<div class="option remove" onclick="undoMemo(this)">';
    html += '<i class="fas fa-times"></i>';
    html += '</div>';
    html += '<div class="option remove trash" style="display: block;" onclick="removeMemo(this, 0)">';
    html += '<i class="far fa-trash-alt"></i>';
    html += '</div>';
    html += '<div class="option save" style="display: block;" onclick="saveMemo(this, 0)">';
    html += '<i class="fas fa-check"></i>';
    html += '</div>';
    html += '</div>';

    $("#memo_list").prepend(html);

    $(".icheck").iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });

    $(".icheck.memo").on("ifChanged", function(){
      var memo_id = $(this).attr("memo_id");
      var checked = $(this).is(":checked");

      updateMemo(this, checked, memo_id);
    });

    $("#memo_list .memo:first-child").find("input").focus();

  });

  $(".memo.expand").click(function(){
    if($("#completed_memo").css("display") == "none")
    {
      $(".memo.expand svg").removeClass("fa-chevron-down").addClass("fa-chevron-up");
    }
    else
    {
      $(".memo.expand svg").removeClass("fa-chevron-up").addClass("fa-chevron-down");
    }

    $("#completed_memo").slideToggle();
  });

  function saveMemo(_this, id)
  {
    var memo = $(_this).siblings('input').val();
    var checked = $(_this).siblings(".checkbox").find("input[type='checkbox']").is(":checked");

    if(memo == "")
    {
      $(_this).siblings('input').addClass("is-invalid").focus();
      return;
    }

    $.post("{{ route('saveMemo') }}", {'_token' : "{{ csrf_token() }}", 'memo' : memo, 'id' : id, 'completed' : checked }, function(response){
      if(response.error == 0)
      {
        $(_this).attr("onclick", "saveMemo(this, "+response.memo_id+")");
        $(_this).siblings("label").html(memo).attr("onclick", "memoClick(this, "+response.memo_id+")").show();
        $(_this).siblings("input, .option").hide();
        $(_this).siblings(".option.remove.trash").attr("onclick", "removeMemo(this, "+response.memo_id+")");
        $(_this).siblings(".checkbox").find("input[type='checkbox']").attr("memo_id", response.memo_id);
        $(_this).siblings("input").val(memo);
        $(_this).hide();

        if(response.completed == 1 && id == 0)
        {
          $(_this).siblings("div.checkbox").children("label").html("<input class='icheck memo cart_detail_checkbox' type='checkbox' memo_id='"+response.memo_id+"' checked>");

          $(_this).siblings("label").addClass("completed");
          var memo_html = $(_this).parent(".memo").get(0).outerHTML;
          $(_this).parent(".memo").remove();

          $("#completed_memo").prepend(memo_html);
          $("#completed_memo .memo:first-child").children("input").val(memo);

          var memo_count = $("#memo_completed_count").html();
          var count = parseInt(memo_count) + 1;
          $("#memo_completed_count").html(count);

          $(".icheck").iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
          });

          $(".icheck.memo").on("ifChanged", function(){
            var memo_id = $(this).attr("memo_id");
            var checked = $(this).is(":checked");

            updateMemo(this, checked, memo_id);
          });

        }
      }
      else
      {
        alert("Error");
      }
    }).fail(function(){
      alert("Error");
    });
  }

  function memoClick(_this, id)
  {
    var memo = $(_this).html();
    $(_this).siblings(".option").show();
    $(_this).siblings("input").show().focus();
    $(_this).hide();
  }

  function removeMemo(_this, id)
  {
    $(_this).parent(".memo").remove();

    if(id != 0)
    {
      $.post("{{ route('removeMemo') }}", { '_token' : '{{ csrf_token() }}', 'id' : id }, function(response){
        $("#memo_completed_count").html(response.count);
      }).fail(function(){
        alert("Error");
      })
    }
  }

  function undoMemo(_this)
  {
    $(_this).siblings("input, .option").hide();
    $(_this).siblings("label").show();

    var memo = $(_this).siblings("label").html();
    $(_this).siblings("input").val(memo);
    $(_this).hide();
  }

  function updateMemo(_this, checked, id)
  {
    if(id != 0)
    {
      $.post("{{ route('updateMemo') }}", {"_token": "{{ csrf_token() }}", "id" : id, "completed" : checked }, function(response){
        var parent = $(_this).parent().parent().parent().parent();

        var icheck = "";
        if(checked == true)
        {
          icheck = "checked";
        }

        parent.children("div.checkbox").children("label").html("<input class='icheck memo cart_detail_checkbox' type='checkbox' memo_id='"+id+"' "+icheck+">");

        var memo = parent.children("label").html();
        if(checked == true)
        {
          parent.children("label").addClass("completed");
        }
        else
        {
          parent.children("label").removeClass("completed");
        }
        var memo_html = parent.get(0).outerHTML;
        parent.remove();

        if(checked == true)
        {
          $("#completed_memo").prepend(memo_html);
          $("#completed_memo .memo:first-child").children("input").val(memo);
        }
        else
        {
          $(_this).iCheck("uncheck");
          $("#memo_list").prepend(memo_html);
          $("#memo_list .memo:first-child").children("input").val(memo);
        }

        $("#memo_completed_count").html(response.count);

        $(".icheck").iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' /* optional */
        });

        $(".icheck.memo").on("ifChanged", function(){
          var memo_id = $(this).attr("memo_id");
          var checked = $(this).is(":checked");

          updateMemo(this, checked, memo_id);
        });

      }).fail(function(){
        alert("Error");
      });
      
    }
  }

</script>
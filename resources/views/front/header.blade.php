<style>

  .nav-left { overflow: visible !important; }
  .my_dropdown { position: relative; padding: 0px 0px 20px 0px !important; } 
  .my_dropdown > li { padding: 20px 20px 0 20px; }
  .category_tab { display: none; position: absolute; background-color: #fff; padding-bottom: 20px; min-width: 250px; left: 100%; top: 0%; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); z-index: 1; }
  .category_tab li { padding: 20px 30px 10px 20px !important; white-space: nowrap; }
  .category_tab li:hover > a { color: #ff6000; }
  .my_dropdown li:hover > .category_tab { display: block; }
  li a { cursor: pointer; }

  .layout-header1 .main-menu-block .menu-left .sm-nav-block .nav-slide>li:last-child a { color: #333; }

  .my_dropdown_2 .dropdown_2_list i { font-size: 20px; margin-left: 10px; float: right; }
  .my_dropdown_2 li:hover > div a { color: #ff6000 !important; }
  .dropdown_2_list ul { display: none; }
  ul.active { display: block; }

</style>


<header>
  <div class="mobile-fix-option"></div>
  <div class="top-header">
    <div class="custom-container">
      <div class="row">
        <div class="col-xl-5 col-md-7 col-sm-6">
          <div class="top-header-left">
            <div class="shpping-order">
              <h6>free shipping on order over Rm 199 </h6>
            </div>
          </div>
        </div>
        <div class="col-xl-7 col-md-5 col-sm-6">
          <div class="top-header-right">
            <div class="top-menu-block">
              <ul>
                <li><a href="#">help & contact</a></li>
                <li><a href="#">track order</a></li>
                <li><a href="#">shipping </a></li>
                <li><a href="#">easy returns</a></li>
              </ul>
            </div>
            <div class="language-block">
              <div class="language-dropdown">
                <span  class="language-dropdown-click">
                  english <i class="fa fa-angle-down" aria-hidden="true"></i>
                </span>
                <ul class="language-dropdown-open">
                  <li><a href="#">English</a></li>
                  <li><a href="#">Malay</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
<div class="layout-header1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="main-menu-block">
          <div class="menu-left">
            <div class="sm-nav-block">
              <span class="sm-nav-btn"><i class="fa fa-bars"></i></span>
              <ul class="nav-slide my_dropdown_2">
                <li>
                  <div class="nav-sm-back">
                    back <i class="fa fa-angle-right pl-2"></i>
                  </div>
                </li>

                @if(count($main_category) <= 7)
                  @foreach($main_category as $main)
                    <li class="dropdown_2_list"> <div><a>{{ $main->name }} <i class="fa fa-angle-down pro-down"></i> </a> </div>
                      @if(count($main->category) > 0)
                        <ul>
                          @foreach($main->category as $category)
                            <li><div> <a>{{ $category->category_name }} <i class="fa fa-angle-down pro-down"></i> </a> </div>
                              @if(count($category->subcategory) > 0)
                                <ul>
                                  @foreach($category->subcategory as $subcategory)
                                    <li> <div> <a style="width: 100%;" href="{{ route('getCategoryPage', ['id' => $subcategory->subcategory_id]) }}">{{ $subcategory->subcategory_name }}</a> </div> </li> 
                                  @endforeach
                                </ul>
                              @endif
                            </li>
                          @endforeach
                        </ul>
                      @endif
                    </li>
                  @endforeach
                @else
                  @for ($i = 0; $i < 7; $i++)
                    <li class="dropdown_2_list"> <div><a>{{ $main_category[$i]->name }} <i class="fa fa-angle-down pro-down"></i> </a> </div>
                      @if(count($main_category[$i]->category) > 0)
                        <ul>
                          @foreach($main_category[$i]->category as $category)
                            <li><div> <a>{{ $category->category_name }} <i class="fa fa-angle-down pro-down"></i> </a> </div>
                              @if(count($category->subcategory) > 0)
                                <ul>
                                  @foreach($category->subcategory as $subcategory)
                                    <li> <div> <a style="width: 100%;" href="{{ route('getCategoryPage', ['id' => $subcategory->subcategory_id]) }}">{{ $subcategory->subcategory_name }}</a> </div> </li> 
                                  @endforeach
                                </ul>
                              @endif
                            </li>
                          @endforeach
                        </ul>
                      @endif
                    </li>

                  @endfor

                  <li class="mor-slide-open">
                    <ul>
                      @for($b = 7; $b < count($main_category); $b++)
                        <li> <div><a>{{ $main_category[$b]->name }} <i class="fa fa-angle-down pro-down"></i> </a> </div>
                          @if(count($main_category[$b]->category) > 0)
                            <ul>
                              @foreach($main_category[$b]->category as $category)
                                <li><div> <a>{{ $category->category_name }} <i class="fa fa-angle-down pro-down"></i> </a> </div>
                                  @if(count($category->subcategory) > 0)
                                    <ul>
                                      @foreach($category->subcategory as $subcategory)
                                        <li> <div> <a style="width: 100%;" href="{{ route('getCategoryPage', ['id' => $subcategory->subcategory_id]) }}">{{ $subcategory->subcategory_name }}</a> </div> </li> 
                                      @endforeach
                                    </ul>
                                  @endif
                                </li>
                              @endforeach
                            </ul>
                          @endif
                        </li>
                      @endfor
                    </ul>
                  </li>

                  <li> <a class="mor-slide-click">more category <i class="fa fa-angle-down pro-down"></i><i class="fa fa-angle-up pro-up"></i></a></li>
                @endif
              </ul>
            </div>
            <div class="brand-logo">
              <a href="{{ route('getFrontIndex') }}">
                <img src="{{ asset('/assets/images/layout-2/logo/logo2.png') }}" width="200" height="60" class="img-fluid  " alt="logo-header">
              </a>
          	</div>
      		</div>
          <div class="menu-right">
            
            <div>
              <div class="icon-nav">
                <ul>
                  @if(Auth::check())
                    <li class="mobile-user onhover-dropdown icon_dropdown"><a href="#"><i class="icon-user" style="color: orange;"></i></a>
                      <ul>
                        <li><a href="{{ route('getUserProfile') }}">My profile</a></li>
                        <li><a href="#" onclick="logout_now()">Logout</a></li>
                      </ul>
                    </li>
                  @else
                    <li class="mobile-user onhover-dropdown" onclick="openAccount()"><a href="#"><i class="icon-user"></i></a>
                    </li>
                  @endif
                  <!-- <li class="mobile-wishlist" onclick="openWishlist()"> -->
                  <li class="mobile-wishlist">
                    <a href="{{ route('getWishList') }}">
                      <i class="icon-heart"></i>
                      <div class="cart-item">
                        <div>
                          <div id="wishlist_count" style="display: inline-block;">
                            @if($wishlist_count)
                              {{ $wishlist_count }}
                            @else
                              0
                            @endif
                          </div> 
                          item<span>wishlist</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="mobile-search"><a href="#"><i class="icon-search"></i></a>
                    <div class ="search-overlay">
                      <div>
                        <span class="close-mobile-search">×</span>
                        <div class="overlay-content">
                          <div class="container">
                            <div class="row">
                              <div class="col-xl-12">
                                <form>
                                  <div class="form-group"><input type="text" class="form-control" id="exampleInputPassword1" placeholder="Search a Product"></div>
                                  <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="mobile-setting mobile-setting-hover" onclick="openSetting()"><a href="#"><i class="icon-settings"></i></a>
                  </li>
                </ul>
                <div class="cart-block mobile-cart cart-hover-div" onclick="openCart()">
                  <a href="#"><span class="cart-product" id="cart_count">
                    @if(count($global_cart_list))
                      {{ count($global_cart_list) }}
                    @else
                      0
                    @endif
                  </span><i class="icon-shopping-cart"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="category-header">
  <div class="custom-container">
      <div class="row">
        <div class="col">
          <div class="navbar-menu">
            <div class="category-left">
              <div class="nav-block">
                <div class="nav-left">
                  <nav class="navbar" data-toggle="collapse" data-target="#navbarToggleExternalContent">
                    <button class="navbar-toggler" type="button">
                      <span class="navbar-icon"><i class="fa fa-arrow-down"></i></span>
                    </button>
                    <h5 class="mb-0 ml-3 text-white title-font">Shop by category</h5>
                  </nav>
                  <div class="collapse nav-desk" id="navbarToggleExternalContent">
                    <ul class="nav-cat title-font my_dropdown">

                      @if(count($main_category) <= 7)
                        @foreach($main_category as $main)
                          <li> <img src="{{ asset('/assets/images/layout-1/nav-img/01.png') }}" alt="catergory-product">
                            <a>{{ $main->name }}</a>
                            @if(count($main->category) > 0)
                              <ul class="category_tab">
                                @foreach($main->category as $category)
                                  <li>
                                    <a>{{ $category->category_name }}</a>
                                    @if(count($category->subcategory) > 0)
                                      <ul class="category_tab">
                                        @foreach($category->subcategory as $subcategory)
                                          <li><a href="{{ route('getCategoryPage', ['id' => $subcategory->subcategory_id]) }}">{{ $subcategory->subcategory_name }}</a></li>
                                        @endforeach
                                      </ul>
                                    @endif
                                  </li>
                                @endforeach
                              </ul>
                            @endif
                          </li>
                        @endforeach
                      @else
                        @for ($i = 0; $i < 7; $i++)
                          <li> <img src="{{ asset('/assets/images/layout-1/nav-img/01.png') }}" alt="catergory-product">
                            <a>{{ $main_category[$i]->name }}</a>
                            @if(count($main_category[$i]->category) > 0)
                              <ul class="category_tab">
                                @foreach($main_category[$i]->category as $category)
                                  <li>
                                    <a>{{ $category->category_name }}</a>
                                    @if(count($category->subcategory) > 0)
                                      <ul class="category_tab">
                                        @foreach($category->subcategory as $subcategory)
                                          <li><a href="{{ route('getCategoryPage', ['id' => $subcategory->subcategory_id]) }}">{{ $subcategory->subcategory_name }}</a></li>
                                        @endforeach
                                      </ul>
                                    @endif
                                  </li>
                                @endforeach
                              </ul>
                            @endif
                          </li>

                        @endfor

                        <li class="mor-slide-open">
                          <ul>
                            @for($b = 7; $b < count($main_category); $b++)
                              <li> <img src="{{ asset('/assets/images/layout-1/nav-img/08.png') }}" alt="catergory-product">
                                <a>{{ $main_category[$b]->name }}</a>
                                @if(count($main_category[$b]->category) > 0)
                                  <ul class="category_tab">
                                    @foreach($main_category[$b]->category as $category)
                                      <li>
                                        <a>{{ $category->category_name }}</a>
                                        @if(count($category->subcategory) > 0)
                                          <ul class="category_tab">
                                            @foreach($category->subcategory as $subcategory)
                                              <li><a href="{{ route('getCategoryPage', ['id' => $subcategory->subcategory_id]) }}">{{ $subcategory->subcategory_name }}</a></li>
                                            @endforeach
                                          </ul>
                                        @endif
                                      </li>
                                    @endforeach
                                  </ul>
                                @endif
                              </li> 
                            @endfor
                          </ul>
                        </li>

                        <li> <a class="mor-slide-click">more category <i class="fa fa-angle-down pro-down"></i><i class="fa fa-angle-up pro-up"></i></a></li>
                      @endif
                    </ul>
                  </div>
                </div>
              </div>
              <div class="input-block">
                <div class="input-box">
                  <form class="big-deal-form">
                    <div class="input-group ">
                      <div class="input-group-prepend">
                        <span class="search"><i class="fa fa-search"></i></span>
                      </div>
                      <input type="text" class="form-control" placeholder="Search a Product" >
                        
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="category-right">
              <div class="contact-block">
                <div>
                  <i class="fa fa-volume-control-phone"></i>
                  <span>call us<span>(09-xxxxxxx)</span></span>
                </div>
              </div>
              <div class="btn-group">
                <div  class="gift-block" data-toggle="dropdown" >
                  <div class="grif-icon">
                    <i class="icon-gift"></i>
                  </div>
                  <div class="gift-offer">
                    <p>Get It</p>
                    <span>Promotion Offer</span>
                  </div>
                </div>
                
              <!-- <div class="dropdown-menu gift-dropdown">
                <div class="media">
                  <div  class="mr-3">
                    <img src="{{ asset('/assets/images/icon/1.png') }}" alt="Generic placeholder image">
                  </div>
                  <div class="media-body">
                    <h5 class="mt-0">Billion Days</h5>
                    <p><img src="{{ asset('/assets/images/icon/currency.png') }}" class="cash" alt="gift-block"> Flat Rs. 270 Rewards</p>
                  </div>
                </div>
                  <div class="media">
                    <div  class="mr-3">
                      <img src="{{ asset('/assets/images/icon/2.png') }}" alt="Generic placeholder image">
                    </div>
                    <div class="media-body">
                      <h5 class="mt-0">Fashion Discount</h5>
                      <p><img src="{{ asset('/assets/images/icon/fire.png') }}"  class="fire" alt="gift-block">Extra 10% off (upto Rs. 10,000*) </p>
                    </div>
                  </div>
                  <div class="media">
                    <div  class="mr-3">
                      <img src="{{ asset('/assets/images/icon/3.png') }}" alt="Generic placeholder image">
                    </div>
                    <div class="media-body">
                      <h5 class="mt-0">75% off Store</h5>
                      <p>No coupon code is required.</p>
                    </div>
                  </div>
                  <div class="media">
                    <div  class="mr-3">
                      <img src="{{ asset('/assets/images/icon/6.png') }}" alt="Generic placeholder image">
                    </div>
                    <div class="media-body">
                      <h5 class="mt-0">Upto 50% off</h5>
                      <p>Buy popular phones under Rs.20.</p>
                    </div>
                  </div>
                  <div class="media">
                    <div  class="mr-3">
                      <img src="{{ asset('/assets/images/icon/5.png') }}" alt="Generic placeholder image">
                    </div>
                    <div class="media-body">
                      <h5 class="mt-0">Beauty store</h5>
                      <p><img src="{{ asset('/assets/images/icon/currency.png') }}" class="cash" alt="curancy"> Flat Rs. 270 Rewards</p>
                    </div>
                  </div>
                </div>
              </div> -->

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<script>
  
  $(".my_dropdown_2 li div").click(function(){
    $(this).siblings("ul").toggleClass("active");
  });

</script>
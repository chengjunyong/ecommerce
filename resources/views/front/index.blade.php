@extends('front.layout')

@section('layout')

<style>

  .hot-deal { border: 7px solid #ff914b; border-radius: 5px; padding: 10px; position: relative; }
  .hot-deal .hot-deal-box .hot-deal-icon { position: absolute; left: -20px; bottom: -20px; z-index: 2; }
  .hot-deal .hot-deal-box .hot-deal-icon img { width: 120px; }
  .hot-deal .hot-deal-box .promo-title { width: 100%; font-weight: bold; font-size: 20px; text-align: center; color: #333; }
  .hot-deal .hot-deal-box { display: inline-block; width: 100%; }
  .hot-deal .hot-deal-contain1 .hot-deal-subcontain .hot-deal-center .timer span>span { color: #212529 !important; }
  .hot-deal .hot-deal-contain1 .hot-deal-subcontain .hot-deal-center .price span:last-child { color: #6c757d; }
  .media-banner .media-banner-box .media .media-body .media-contant h6 span { color: #6c757d; } 

  .on-sales { position: relative; border: 5px solid #dc3545; border-radius: 5px; padding: 10px; }
  .on-sales .on-sales-left-box { height: 30px; z-index: 1; position: absolute; width: 100%; }
  .on-sales .on-sales-left-box .promo-title { font-weight: bold; font-size: 20px; text-align: center; color: #333; }
  .on-sales .on-sales-left-box .on-sales-icon { position: absolute; left: -70px; top: -50px; }
  .on-sales .on-sales-left-box .on-sales-icon img { width: 130px; }
  .on-sales-box { margin-top: 30px; }

  .main_product_tab { justify-content: center; }
  .main_product_tab .nav-item a { transition: none !important; }
  .main_product_tab .nav-item a:hover, .main_product_tab .nav-item a:focus { border: none; }
  .main_product_tab .nav-item a.active { border: none; color: #ff914b; }
  .main_product_tab .nav-item a.active:before { position: absolute; top: 0; left: 0; height: 5px; background-color: #ff6000; width: 100%; content: ''; }

  .product-detail { display: inline-block; }

</style>

<section class="theme-slider section-pt-space" style="padding-top: 0px;">
  <div class="custom-container">
    <div class="row">
      <div class="col-xl-8 col-lg-9 offset-xl-2 px-abjust">
        <div class="banner_category" style="position: fixed; top: 162px; z-index: 2;">
          <a href="https://recipes.homeu.com.my" style="margin-left: 10px; margin-bottom: 2px;">Recipes</a>
          <a href="{{ route('getCategoryPage', ['id' => 0, 'type' => 4, 'type_detail' => 'offers' ]) }}" style="margin-bottom: 2px;">Offers</a>
          <a href="{{ route('getEventPage') }}" style="margin-bottom: 2px;">Event</a>
          <a href="{{ route('getWhatNewsPage') }}" style="margin-bottom: 2px;">Whats New</a>
        </div>
        <div class="slide-1 no-arrow" style="margin-top: 210px;">
          @foreach($banner_list as $key => $banner)
            <div>
              <a href="{{ $banner->target_url }}">
                <div class="slider-banner">
                  <div class="slider-img">
                    <ul class="{{ $banner->dummy == 1 ? 'layout2-slide-1' : 'layout2-slide-0'}}">
                      <li id="{{ $banner->dummy == 1 ? 'img-1' : ''}}" style="width: 100%;"><img src="{{ asset($banner->img_path) }}" class="img-fluid" alt="slider" style="{{ $banner->dummy == 1 ? "" : 'height: 455px;width:100%' }}"></li>
                    </ul>
                  </div>
                  <div class="slider-banner-contain">
                    <div>
                      <h4>{{ $banner->title1 }}</h4>
                      <h1>{{ $banner->title2 }}</h1>
                      <h2>{{ $banner->description }}</h2>
                      <!-- <a class="btn btn-rounded" href="{{ $banner->target_url }}">
                        More
                      </a> -->
                    </div>
                  </div>
                </div>
              </a>
            </div>
          @endforeach
          
        </div>
      </div>
    </div>
  </div>
</section>
<!--slider end-->

<!--services start-->
<!-- <section class="services">
  <div class="container">
    <div class="row service-block">
      <div class="col-lg-3 col-md-6  col-sm-12">
        <div class="media">
          <svg height="679pt" viewBox="0 -117 679.99892 679" width="679pt" xmlns="http://www.w3.org/2000/svg"><path d="m12.347656 378.382812h37.390625c4.371094 37.714844 36.316407 66.164063 74.277344 66.164063 37.96875 0 69.90625-28.449219 74.28125-66.164063h241.789063c4.382812 37.714844 36.316406 66.164063 74.277343 66.164063 37.96875 0 69.902344-28.449219 74.285157-66.164063h78.890624c6.882813 0 12.460938-5.578124 12.460938-12.460937v-352.957031c0-6.882813-5.578125-12.464844-12.460938-12.464844h-432.476562c-6.875 0-12.457031 5.582031-12.457031 12.464844v69.914062h-105.570313c-4.074218.011719-7.890625 2.007813-10.21875 5.363282l-68.171875 97.582031-26.667969 37.390625-9.722656 13.835937c-1.457031 2.082031-2.2421872 4.558594-2.24999975 7.101563v121.398437c-.09765625 3.34375 1.15624975 6.589844 3.47656275 9.003907 2.320312 2.417968 5.519531 3.796874 8.867187 3.828124zm111.417969 37.386719c-27.527344 0-49.851563-22.320312-49.851563-49.847656 0-27.535156 22.324219-49.855469 49.851563-49.855469 27.535156 0 49.855469 22.320313 49.855469 49.855469 0 27.632813-22.21875 50.132813-49.855469 50.472656zm390.347656 0c-27.53125 0-49.855469-22.320312-49.855469-49.847656 0-27.535156 22.324219-49.855469 49.855469-49.855469 27.539063 0 49.855469 22.320313 49.855469 49.855469.003906 27.632813-22.21875 50.132813-49.855469 50.472656zm140.710938-390.34375v223.34375h-338.375c-6.882813 0-12.464844 5.578125-12.464844 12.460938 0 6.882812 5.582031 12.464843 12.464844 12.464843h338.375v79.761719h-66.421875c-4.382813-37.710937-36.320313-66.15625-74.289063-66.15625-37.960937 0-69.898437 28.445313-74.277343 66.15625h-192.308594v-271.324219h89.980468c6.882813 0 12.464844-5.582031 12.464844-12.464843 0-6.882813-5.582031-12.464844-12.464844-12.464844h-89.980468v-31.777344zm-531.304688 82.382813h99.703125v245.648437h-24.925781c-4.375-37.710937-36.3125-66.15625-74.28125-66.15625-37.960937 0-69.90625 28.445313-74.277344 66.15625h-24.929687v-105.316406l3.738281-5.359375h152.054687c6.882813 0 12.460938-5.574219 12.460938-12.457031v-92.226563c0-6.882812-5.578125-12.464844-12.460938-12.464844h-69.796874zm-30.160156 43h74.777344v67.296875h-122.265625zm0 0"/></svg>
          <div class="media-body">
            <h5>free shipping</h5>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6  col-sm-12">
        <div class="media">
          <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
          viewBox="0 0 417.12 417.12" style="enable-background:new 0 0 417.12 417.12;" xml:space="preserve">
          <g>
            <g>
              <path d="M409.12,200.741c-4.418,0-8,3.582-8,8c-0.06,106.525-86.464,192.831-192.988,192.772
              C101.607,401.453,15.3,315.049,15.36,208.524C15.42,102,101.824,15.693,208.348,15.753c51.36,0.029,100.587,20.54,136.772,56.988
              l-17.84-0.72c-4.418,0-8,3.582-8,8s3.582,8,8,8l36.72,1.52c1.013,0.003,2.018-0.188,2.96-0.56l0.88-0.56
              c1.381-0.859,2.534-2.039,3.36-3.44c0.034-0.426,0.034-0.854,0-1.28c0.183-0.492,0.317-1.001,0.4-1.52l3.2-36.72
              c0.376-4.418-2.902-8.304-7.32-8.68s-8.304,2.902-8.68,7.32l-1.6,18.16c-80.799-82.092-212.848-83.14-294.939-2.341
              s-83.14,212.848-2.341,294.939s212.848,83.14,294.939,2.341c39.786-39.159,62.212-92.635,62.261-148.459
              C417.12,204.323,413.538,200.741,409.12,200.741z"/>
            </g>
          </g>
          <g>
            <g>
              <path d="M200.4,256.341c-3.716-2.516-8.162-3.726-12.64-3.44h-56c1.564-2.442,3.302-4.768,5.2-6.96
              c6.727-7.402,14.088-14.201,22-20.32c10.667-8.747,18.293-15.147,22.88-19.2c5.252-4.976,9.752-10.689,13.36-16.96
              c4.377-7.234,6.649-15.545,6.56-24c-0.009-11.177-4.27-21.931-11.92-30.08c-3.725-3.941-8.181-7.12-13.12-9.36
              c-8.709-3.645-18.08-5.443-27.52-5.28c-8.048-0.163-16.055,1.194-23.6,4c-6.2,2.328-11.862,5.894-16.64,10.48
              c-4.219,4.117-7.565,9.042-9.84,14.48c-2.098,4.853-3.213,10.074-3.28,15.36c-0.192,3.547,1.081,7.018,3.52,9.6
              c2.345,2.352,5.56,3.626,8.88,3.52c3.499,0.231,6.903-1.19,9.2-3.84c2.503-3.303,4.424-7.01,5.68-10.96
              c0.939-3.008,2.144-5.926,3.6-8.72c4.562-7.738,12.94-12.416,21.92-12.24c4.114,0.077,8.149,1.147,11.76,3.12
              c3.625,1.82,6.693,4.583,8.88,8c2.194,3.673,3.329,7.882,3.28,12.16c-0.067,4.437-1.105,8.806-3.04,12.8
              c-2.129,4.829-5.019,9.286-8.56,13.2c-4.419,4.617-9.298,8.772-14.56,12.4c-5.616,4.247-10.96,8.843-16,13.76
              c-7.787,7.04-16.453,15.467-26,25.28c-2.638,2.966-4.773,6.344-6.32,10c-1.632,3.159-2.612,6.614-2.88,10.16
              c-0.018,3.939,1.605,7.707,4.48,10.4c3.393,3.096,7.896,4.684,12.48,4.4h78.4c3.842,0.312,7.641-0.993,10.48-3.6
              c2.291-2.379,3.53-5.579,3.44-8.88C204.691,262.051,203.173,258.598,200.4,256.341z"/>
            </g>
          </g>
          <g>
            <g>
              <path d="M333.76,222.901c-4.254-1.637-8.809-2.346-13.36-2.08h-4.56v-82.48c0-12.373-5.333-18.56-16-18.56
              c-3.185-0.052-6.261,1.155-8.56,3.36c-3.331,3.343-6.382,6.956-9.12,10.8l-56.48,75.6l-3.92,5.2c-1.067,1.44-2.107,2.907-3.12,4.4
              c-0.916,1.374-1.668,2.851-2.24,4.4c-0.475,1.308-0.718,2.689-0.72,4.08c-0.237,4.699,1.607,9.263,5.04,12.48
              c4.323,3.358,9.742,4.984,15.2,4.56h53.52v20.08c-0.273,4.252,1.006,8.459,3.6,11.84c5.276,5.346,13.887,5.403,19.233,0.127
              c0.043-0.042,0.085-0.084,0.127-0.127c2.587-3.384,3.866-7.589,3.6-11.84v-20h6.48c4.242,0.298,8.476-0.677,12.16-2.8
              c2.877-2.141,4.425-5.63,4.08-9.2C339.301,228.744,337.319,224.811,333.76,222.901z M289.36,220.581h-45.84l45.84-61.92V220.581z"
              />
            </g>
          </g>
        </svg>
        <div class="media-body">
          <h5>24X7 SERVICE</h5>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6  col-sm-12 ">
      <div class="media">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 295.82 295.82" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 295.82 295.82">
          <g>
            <g>
              <path d="m269.719,43.503h-243.617c-13.921,0-26.102,12.181-26.102,26.102v156.611c0,13.921 12.181,26.102 26.102,26.102h243.617c13.921,0 26.102-12.181 26.102-26.102v-156.611c-0.001-13.921-12.182-26.102-26.102-26.102zm-243.617,17.401h243.617c5.22,0 8.701,3.48 8.701,8.701v13.921h-261.019v-13.921c-1.06581e-14-5.22 3.481-8.701 8.701-8.701zm252.317,40.023v13.921h-261.018v-13.921h261.018zm-8.7,133.989h-243.617c-5.22,0-8.701-3.48-8.701-8.701v-93.966h261.018v93.966c0,5.221-3.48,8.701-8.7,8.701z"/>
              <path d="m45.243,172.272h45.243c5.22,0 8.701-3.48 8.701-8.701 0-5.22-3.48-8.701-8.701-8.701h-45.243c-5.22,0-8.701,3.48-8.701,8.701 0.001,5.221 3.481,8.701 8.701,8.701z"/>
              <path d="m151.391,191.413h-106.148c-5.22,0-8.701,3.48-8.701,8.701s3.48,8.701 8.701,8.701h106.147c3.48,0 8.701-3.48 8.701-8.701s-3.48-8.701-8.7-8.701z"/>
            </g>
          </g>
        </svg>
        <div class="media-body">
          <h5>CASH ON DELIVERY</h5>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6  col-sm-12 ">
      <div class="media">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        viewBox="0 0 448 448" style="enable-background:new 0 0 448 448;" xml:space="preserve">
        <g>
          <g>
            <g>
              <path d="M384,172.4C384,83.6,312.4,12,224,12S64,83.6,64,172c0,0,0,0,0,0.4C28.4,174.4,0,204,0,240v8c0,37.6,30.4,68,68,68h3.6
              l28.4,45.2c20,32,54,50.8,91.6,50.8h5.6c3.6,13.6,16,24,30.8,24c17.6,0,32-14.4,32-32c0-17.6-14.4-32-32-32
              c-14.8,0-27.2,10.4-30.8,24h-5.6c-32,0-61.2-16.4-78-43.6L90.4,316H96c8.8,0,16-7.2,16-16V188c0-8.8-7.2-16-16-16H80
              c0-79.6,64.4-144,144-144s144,64.4,144,144h-16c-8.8,0-16,7.2-16,16v112c0,8.8,7.2,16,16,16h28c37.6,0,68-30.4,68-68v-8
              C448,204,419.6,174.4,384,172.4z M228,388c8.8,0,16,7.2,16,16s-7.2,16-16,16s-16-7.2-16-16S219.2,388,228,388z M96,188v112H68
              c-28.8,0-52-23.2-52-52v-8c0-28.8,23.2-52,52-52H96z M432,248c0,28.8-23.2,52-52,52h-28V188h28c28.8,0,52,23.2,52,52V248z"/>
              <path d="M290.4,72.4c-0.8-0.4-2-1.2-3.2-2c-1.2-0.8-2.4-1.6-3.2-2c-3.6-2.4-8.8-1.2-10.8,2.8S272,79.6,276,82
              c0.8,0.4,2,1.2,3.2,2s2.4,1.6,3.6,2c1.2,0.8,2.8,1.2,4,1.2c2.8,0,5.2-1.2,6.8-4C295.6,79.6,294.4,74.8,290.4,72.4z"/>
              <path d="M224,52c-34,0-66,14.8-88,40.4c-2.8,3.2-2.4,8.4,0.8,11.2c1.6,1.2,3.2,2,5.2,2c2.4,0,4.4-0.8,6-2.8
              c19.2-22,46.8-34.8,76-34.8c7.2,0,14.4,0.8,21.6,2.4c4.4,0.8,8.4-2,9.6-6s-2-8.4-6-9.6C240.8,52.8,232.4,52,224,52z"/>
            </g>
          </g>
        </g>
      </svg>
      <div class="media-body">
        <h5>CUSTOMER SERVICE</h5>
      </div>
    </div>
  </div>
</div>
</div>
</section> -->
<!--services end-->

<!--media banner start-->
<section class=" b-g-white section-big-pt-space">
  <div class="container">
    <div class="row hot-1 justify-content-md-center">
      @if(count($on_sales_list) > 0)
        <!-- <div class="col-lg-6 col-sm-12 col-12">
          <div class="on-sales">
            <div class="on-sales-left-box">
              <div class="promo-title">On Sales Products</div>
            </div>
            <div class='on-sales-box'>
              <div class="slide-1 no-arrow" style="background-color: #fff4e8;">
                <div>
                  <div class="media-banner" style="height: 350px; overflow-x: auto;">
                    @foreach($on_sales_list as $key => $on_sales)
                      <div class="media-banner-box">
                        <a href="{{ route('getItemDetail', ['id' => $on_sales->id]) }}" class="media" style="color: #777; align-items: flex-end; flex: 1;">
                          @if($on_sales->path)
                            <img src="{{ Storage::url($on_sales->path) }}" class="img-fluid" alt="banner" style="width: 84px; height: 84px;" />
                          @else
                            <img src="{{ asset('/assets/images/layout-1/media-banner/1.jpg') }}" class="img-fluid" alt="banner" />
                          @endif
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <p>{{ $on_sales->name }}</p>
                                <h6 style="font-size: 20px;">RM {{ number_format($on_sales->on_sales_price, 2) }}</h6>
                                <span style="text-decoration: line-through;">RM {{ number_format($on_sales->price, 2) }}</span>
                                @if($on_sales->on_sales_type == "percentage")
                                  <span class="discount_amount"> -{{ $on_sales->on_sales_amount }}% </span>
                                @elseif($on_sales->on_sales_type == "fixed")
                                  <span class="discount_amount"> -RM {{ number_format($on_sales->on_sales_amount, 2) }} </span>
                                @endif
                              </div>
                            </div>
                          </div>
                          <div class="media-banner-box" style="padding-bottom: 10px;">
                            <div class="media-view" style="text-align: right;">
                              <a href="{{ route('getItemDetail', ['id' => $on_sales->id ])}}">
                                <h5>Get now</h5>
                              </a>
                            </div>
                          </div>
                        </a>
                      </div>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> -->
      @endif

      @if(count($on_sales_list) > 0)
        <div class="col-lg-6 col-sm-12 col-12">
          <div class="hot-deal" style="border: 7px solid #dc3545;">
            <div class="hot-deal-box">
              <!-- <div class="hot-deal-icon">
                <img src="{{ asset('/assets/images/front/today_deal.png') }}" class="img-fluid" alt="banner" />
              </div> -->
              <label class="promo-title">On Sales Products</label>
              <div class="slide-1">
                @foreach($on_sales_list as $on_sales)
                  <div>
                    <div class="hot-deal-contain1 hot-deal-banner-1" style="height: 250px;">
                      <div class="row hot-deal-subcontain">
                        <div class="col-lg-4 col-sm-4 col-12">
                          <div class="hotdeal-right-slick-1 no-arrow">
                            <div class="right-slick-img">
                              @if($on_sales->path)
                                <img src="{{ Storage::url($on_sales->path) }}" class="img-fluid" alt="hot-deal" style="width: 150px; height: 150px;" />
                              @else
                                <img src="{{ asset('/assets/images/layout-1/hot-deal/1.jpg') }}" class="img-fluid" alt="banner" />
                              @endif
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                          <div class="hot-deal-center">
                            <div>   
                              <div>
                                <h5>{{ $on_sales->name }}</h5>
                              </div>
                              <div>
                                <div class="price">
                                  <span style="font-size: 20px;">RM {{ number_format($on_sales->on_sales_price, 2) }}</span>
                                  <br>
                                  <span style="text-decoration: line-through; color: #777; font-weight: 1;">RM {{ number_format($on_sales->price, 2) }}</span>
                                  @if($on_sales->on_sales_type == "percentage")
                                    <label class="discount_amount"> -{{ $on_sales->on_sales_amount }}% OFF</label>
                                  @elseif($on_sales->on_sales_type == "fixed")
                                    <label class="discount_amount"> -RM {{ number_format($on_sales->on_sales_amount, 2) }} OFF</label>
                                  @endif
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="media-view">
                            <a href="{{ route('getItemDetail', ['id' => $on_sales->id ])}}" style="color: #ff6000;">
                              <h4 style="text-align: right;">Get now</h4>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      @endif

      @if(count($today_deal_list) > 0)
        <div class="col-lg-6 col-sm-12 col-12" style='padding-left: {{ count($on_sales_list) > 0 ? "30px" : "0px" }};'>
          <div class="hot-deal">
            <div class="hot-deal-box">
              <!-- <div class="hot-deal-icon">
                <img src="{{ asset('/assets/images/front/today_deal.png') }}" class="img-fluid" alt="banner" />
              </div> -->
              <label class="promo-title">Today Hot Deals</label>
              <div class="slide-1">
                @foreach($today_deal_list as $today_deal)
                  <div>
                    <div class="hot-deal-contain1 hot-deal-banner-1" style="height: 250px;">
                      <div class="row hot-deal-subcontain">
                        <div class="col-lg-4 col-sm-4 col-12">
                          <div class="hotdeal-right-slick-1 no-arrow">
                            <div class="right-slick-img">
                              @if($today_deal->path)
                                <img src="{{ Storage::url($today_deal->path) }}" class="img-fluid" alt="hot-deal" style="width: 150px; height: 150px;" />
                              @else
                                <img src="{{ asset('/assets/images/layout-1/hot-deal/1.jpg') }}" class="img-fluid" alt="banner" />
                              @endif
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                          <div class="hot-deal-center">
                            <div>   
                              <div class="timer" id="timer_{{ $today_deal->id }}">
                                <p class="demo">
                                  <span class="hour">
                                    0
                                    <span>hrs</span>
                                  </span>
                                  <span>:</span>
                                  <span class="minute">
                                    0
                                    <span>min</span>
                                  </span>
                                  <span>:</span>
                                  <span class="second">
                                    0
                                    <span>sec</span>
                                  </span>
                                </p>
                              </div>

                              <div>
                                <h5>{{ $today_deal->name }}</h5>
                              </div>
                              <div>
                                <!-- <p>
                                  {{ $today_deal->description }}
                                </p> -->
                                <div class="price">
                                  <span style="font-size: 20px;">RM {{ number_format($today_deal->today_deal_price, 2) }}</span>
                                  <br>
                                  <span style="text-decoration: line-through; color: #777; font-weight: 1;">RM {{ number_format($today_deal->price, 2) }}</span>
                                  @if($today_deal->today_deal_type == "percentage")
                                    <label class="discount_amount"> -{{ $today_deal->today_deal_amount }}% OFF</label>
                                  @elseif($today_deal->today_deal_type == "fixed")
                                    <label class="discount_amount"> -RM {{ number_format($today_deal->today_deal_amount, 2) }} OFF</label>
                                  @endif
                                  
                                </div>

                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="media-view">
                            <a href="{{ route('getItemDetail', ['id' => $today_deal->id ])}}" style="color: #ff6000;">
                              <h4 style="text-align: right;">Get now</h4>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      @endif
    </div>
  </div>
</section>
<!--media banner end-->

<!--discount banner start-->
<!-- <section class="discount-banner">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="discount-banner-contain">
          <h2>Special discout Offer for you</h2>
          <h1>every <span> discount </span> we <span> offer is the best in market!</span></h1>
          <div class="rounded-contain">
            <div class="rounded-subcontain">
              don't just scroll, your friends have already started buying!
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->
<!--discount banner end-->

<!--collection banner start-->
<!-- <section class="collection-banner section-pt-space">
  <div class="container-fluid">
    <div class="row collection2">
      <div class="col-md-4">
        <div class="collection-banner-main p-left">
          <div class="collection-img">
            <img src="{{ asset('/assets/images/layout-1/collection-banner/3.jpg') }}" class="img-fluid bg-img " alt="banner">
          </div>
          <div class="collection-banner-contain">
            <div>
              <h3>Random</h3>
              <h4>Category</h4>
              <div class="shop">
                <a>
                  shop now
                  <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="collection-banner-main p-left">
          <div class="collection-img">
            <img src="{{ asset('/assets/images/layout-1/collection-banner/4.jpg') }}" class="img-fluid bg-img " alt="banner">
          </div>
          <div class="collection-banner-contain">
            <div>
              <h3>Random</h3>
              <h4>Category</h4>
              <div class="shop">
                <a>
                  shop now
                  <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="collection-banner-main p-left">
          <div class="collection-img">
            <img src="{{ asset('/assets/images/layout-1/collection-banner/5.jpg') }}" class="img-fluid bg-img  " alt="banner">
          </div>
          <div class="collection-banner-contain">
            <div>
              <h3>Random</h3>
              <h4>Category</h4>
              <div class="shop">
                <a>
                  shop now
                  <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->
<!--collection banner end-->

<!--top brand panel start-->
<!-- <section class="brand-panel section-pt-space">
  <div class="brand-panel-box">
    <div class="brand_box">
      <div class="owl-carousel" id="brand_list">
        @foreach($brand_list as $brand)
          <div class='item'>
            <a href="{{ route('getFrontBrandList', ['id' => $brand->id]) }}">
              <div class="brand">
                <img src="{{ Storage::url($brand->path) }}" />
              </div>
            </a>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</section> -->
<!--top brand panel end-->

<!-- media tab start -->
<section class="section-big-pb-space ratio_40 pb-10">
  <!--tab product-->
  <section class="section-py-space">
    <div class="tab-product-main">
      <div class="tab-prodcut-contain">
        <ul class="nav nav-tabs main_product_tab" role="tablist">
          @foreach($main_category_product as $key => $main)
            @if(count($main->product_list) > 0)
              <li class="nav-item">
                <a class="nav-link {{ $key == 0 ? 'active' : '' }}" data-toggle="tab" href="#main_tab_{{ $key }}" role="tab" aria-controls="home" aria-selected="true">{{ $main->name }}</a>
              </li>
            @endif
          @endforeach
        </ul>
      </div>
    </div>
  </section>
  <!--tab product-->
  <div class="custom-container product">
    <div class="row">
      <div class="col pr-0">
        <div class="theme-tab product tab-abjust">
          <div class="tab-content">
            @foreach($main_category_product as $key => $main)
              @if(count($main->product_list) > 0)
                <div id="main_tab_{{ $key }}" class="tab-pane fade {{ $key == 0 ? 'active show' : '' }}">
                  <div class="owl-carousel owl-theme main_product_list">
                    @foreach($main->product_list as $main_product)
                      <div class="item product_item" item_id="{{ $main_product->id }}" style="cursor: pointer;">
                        <div class="product-box">
                          <div class="product-imgbox">
                            <a href="{{ route('getItemDetail', ['id' => $main_product->id]) }}" class="product-front clickable">
                              @if($main_product->path)
                                <img src="{{ Storage::url($main_product->path) }}" class="img-fluid" alt="product">
                              @else
                                <img src="{{ asset('/assets/images/layout-1/product/1.jpg') }}" class="img-fluid" alt="product">
                              @endif
                            </a>
                            <div class="product-icon">
                              <button onclick="addToCart({{ $main_product->id }} )" type="button" >
                                <i class="ti-bag"></i>
                              </button>
                              <!-- <a href="javascript:void(0)" title="Add to Wishlist">
                                <i class="ti-heart" aria-hidden="true"></i>
                              </a> -->
                            </div>
                            <!-- <div class="new-label">
                              <div>new</div>
                            </div>
                            <div class="on-sale">
                              on sale
                            </div> -->
                          </div>
                          <div class="product-detail">
                            <div class="detail-title">
                              <div class="detail-left">
                                <a href="">
                                  <h6 class="price-title">
                                    {{ $main_product->name }}
                                  </h6>
                                </a>
                              </div>
                              <div class="detail-right">
                                @if($main_product->promo_price === null)
                                  <div class="price">
                                    <div class="price">
                                      Rm {{ number_format($main_product->price, 2) }}
                                    </div>
                                  </div>
                                @else
                                  <div class="check-price">
                                    Rm {{ number_format($main_product->price, 2) }}
                                  </div>
                                  <div class="price">
                                    <div class="price">
                                      Rm {{ number_format($main_product->promo_price, 2) }}
                                    </div>
                                  </div>
                                @endif
                                
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    @endforeach
                  </div>
                </div>
              @endif
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- media tab end -->

@foreach($special_product_list as $special_product)
  @if(count($special_product->items) > 0)
    <!--title start-->
    <div class="title1 section-my-space">
      <h4>{{ $special_product->name }}</h4>
    </div>

    <section class="product section-big-pb-space">
      <div class="custom-container">
        <div class="row">
          <div class="col pr-0">
            <div class="product-slide-6 no-arrow mb--10">
              <div class="special_product_list owl-carousel owl-theme">
                @foreach($special_product->items as $special_product_detail)
                  <div class="item product_item" item_id="{{ $special_product_detail->id }}" style="cursor: pointer;">
                    <div class="product-box">
                      <div class="product-imgbox">
                        <div class="product-front">
                          @if($special_product_detail->path)
                            <img src="{{ Storage::url($special_product_detail->path) }}" class="img-fluid" alt="product">
                          @else
                            <img src="{{ asset('/assets/images/layout-1/product/1.jpg') }}" class="img-fluid" alt="product">
                          @endif
                        </div>
                        <div class="product-icon">
                          <button onclick="addToCart({{ $special_product_detail->id }} )" type="button" >
                            <i class="ti-bag"></i>
                          </button>
                          <!-- <a href="javascript:void(0)" title="Add to Wishlist">
                            <i class="ti-heart" aria-hidden="true"></i>
                          </a> -->
                        </div>
                        <!-- <div class="new-label">
                          <div>new</div>
                        </div>
                        <div class="on-sale">
                          on sale
                        </div> -->
                      </div>
                      <div class="product-detail">
                        <div class="detail-title">
                          <div class="detail-left">
                            <a href="">
                              <h6 class="price-title">
                                {{ $special_product_detail->name }}
                              </h6>
                            </a>
                          </div>
                          <div class="detail-right">
                            @if($special_product_detail->promo_price === null)
                              <div class="price">
                                <div class="price">
                                  Rm {{ number_format($special_product_detail->price, 2) }}
                                </div>
                              </div>
                            @else
                              <div class="check-price">
                                Rm {{ number_format($special_product_detail->price, 2) }}
                              </div>
                              <div class="price">
                                <div class="price">
                                  Rm {{ number_format($special_product_detail->promo_price, 2) }}
                                </div>
                              </div>
                            @endif
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- media tab end -->
  @endif
@endforeach

<!--newsleatter start-->
<section >
  <div class="newsletter bg-transparent">
    <div class="news-leble">
      <svg  viewBox="-28 0 480 480"  xmlns="http://www.w3.org/2000/svg"><path d="m320.007812 64v-16h40c4.417969 0 8-3.582031 8-8v-32c0-4.417969-3.582031-8-8-8h-80c-4.417968 0-8 3.582031-8 8v56h-152c-39.746093.042969-71.957031 32.253906-72 72v8h-40c-.976562.015625-1.941406.210938-2.847656.574219-.273437.125-.542968.261719-.800781.417969-.574219.292968-1.109375.652343-1.597656 1.070312-.257813.21875-.496094.457031-.714844.714844-.402344.46875-.746094.984375-1.03125 1.535156-.171875.292969-.324219.597656-.457031.910156-.046875.136719-.152344.25-.191406.394532-.179688.644531-.2773442 1.3125-.289063 1.984374 0 .132813-.078125.253907-.078125.398438v160c0 4.417969 3.582031 8 8 8h160.007812v152c0 4.417969 3.582032 8 8 8h80c4.417969 0 8-3.582031 8-8v-152h152c4.417969 0 8-3.582031 8-8v-240c0-4.417969-3.582031-8-8-8zm0-48h32v16h-32zm-36 139.351562c2.46875-1.425781 3.996094-4.058593 4-6.910156v-132.441406h16v132.441406c.007813 2.851563 1.53125 5.484375 4 6.910156 7.421876 4.222657 12.003907 12.109376 12 20.648438 0 13.253906-10.746093 24-24 24-13.253906 0-24-10.746094-24-24-.003906-8.539062 4.578126-16.425781 12-20.648438zm-220-19.351562c.035157-30.914062 25.085938-55.964844 56-56h16c30.914063.035156 55.964844 25.085938 56 56v8h-128zm126.398438 24-35.917969 24.863281c-.503906-.605469-.945312-1.261719-1.511719-1.832031-4.488281-4.515625-10.601562-7.050781-16.96875-7.03125h-2.742187c-6.371094-.011719-12.480469 2.519531-16.976563 7.03125l-5.65625 5.65625-5.65625-5.65625c-4.488281-4.515625-10.601562-7.050781-16.96875-7.03125h-2.742187c-6.371094-.011719-12.480469 2.519531-16.976563 7.03125-.191406.191406-.320312.425781-.503906.617188l-34.175781-23.648438zm-46.398438 40c.007813 2.121094-.839843 4.160156-2.34375 5.65625l-31.03125 31.03125-31.03125-31.03125c-2.289062-2.289062-2.972656-5.730469-1.734374-8.722656 1.242187-2.988282 4.160156-4.9375 7.398437-4.933594h2.742187c2.121094.007812 4.152344.847656 5.65625 2.34375l11.3125 11.3125c3.125 3.121094 8.1875 3.121094 11.3125 0l11.304688-11.304688c1.5-1.507812 3.542969-2.351562 5.671875-2.351562h2.742187c2.121094.007812 4.152344.847656 5.65625 2.34375 1.503907 1.496094 2.351563 3.535156 2.34375 5.65625zm-128-32.726562 45.390626 31.421874c-.417969 6.796876 2.089843 13.445313 6.890624 18.273438l36.6875 36.6875c3.125 3.121094 8.1875 3.121094 11.3125 0l36.6875-36.6875c4.367188-4.367188 6.871094-10.257812 6.976563-16.433594l32.054687-22.183594v93.648438h-176zm0 136.726562v-16h176v16zm200 160h-32v-144h32zm32 0h-16v-144h16zm160-160h-200v-16h200zm0-32h-200v-136c-.003906-21.769531-9.878906-42.363281-26.847656-56h90.847656v64.167969c-13.773437 10.332031-19.390624 28.316406-13.945312 44.648437 5.441406 16.335938 20.726562 27.351563 37.945312 27.351563s32.503907-11.015625 37.949219-27.351563c5.441407-16.332031-.175781-34.316406-13.949219-44.648437v-64.167969h88zm0 0"/><path d="m289 231.566406c-7.398438-.914062-14.535156-3.3125-20.984375-7.054687-3.808594-2.050781-8.554687-.703125-10.71875 3.042969-2.164063 3.746093-.957031 8.53125 2.71875 10.804687 8.304687 4.8125 17.492187 7.902344 27.015625 9.082031.332031.042969.667969.066406 1 .0625 4.21875-.011718 7.699219-3.296875 7.960938-7.507812.257812-4.207032-2.792969-7.894532-6.976563-8.429688zm0 0"/><path d="m352.007812 176c.0625 22.84375-13.804687 43.417969-35 51.9375-2.738281 1.007812-4.707031 3.429688-5.140624 6.3125-.4375 2.886719.734374 5.777344 3.054687 7.550781 2.316406 1.769531 5.417969 2.136719 8.085937.960938 21.660157-8.757813 37.726563-27.476563 43.09375-50.21875 5.367188-22.738281-.632812-46.667969-16.09375-64.183594-2.925781-3.3125-7.980468-3.628906-11.296874-.703125-3.3125 2.925781-3.628907 7.980469-.703126 11.296875 9.035157 10.222656 14.015626 23.402344 14 37.046875zm0 0"/></svg>
      <span class="news-text">
        our
        <span>newsletter</span>
      </span>
    </div>
    <div class="subscribe-block">
      <div class="input-group ">
        <div class="input-group-prepend">
          <span class="input-group-text" style="border: 2px solid #ff914b; border-right-width: 0px;"><i class="icon-email"></i></span>
        </div>
        <input type="text" class="form-control" placeholder="ENTER YOUR EMAIL...." style="border: 2px solid #ff914b; border-top-right-radius: 0px; border-bottom-right-radius: 0px; height: 50px; border-right-width: 0px;" >
      </div>
      <a class="btn-normal">subscribe</a>
    </div>
  </div>
</section>
<!--newsleatter end-->

<!--contact banner start-->
<section class="contact-banner">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="contact-banner-contain">
          <div class="contact-banner-img"><img src="{{ asset('/assets/images/layout-1/call-img.png') }}" alt="call-banner"></div>
          <div> <h3>if you have any question please call us</h3></div>
          <div><h2>09-xxxxxxx</h2></div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--contact banner end-->

@include('front.footer')
<!--footer end-->

<script>

  var today_deal_list = @json($today_deal_list);
  var today_deal_times = [];
  var today_deal_timer = [];

  $(document).ready(function(){
    // $("#navbarToggleExternalContent").addClass("show");

    $('#brand_list').owlCarousel({
      margin: 10,
      loop: false,
      dots: false,
      nav : true,
      navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
      responsive: {
        0: 
        {
          items: 4
        },
        600: 
        {
          items: 6
        },
        1000: 
        {
          items: 8
        }
      }
    });

    $(".main_product_list, .special_product_list").owlCarousel({
      loop:false,
      margin:10,
      nav:false,
      dots:false,
      responsive:{
        0:{
          items:2
        },
        600:{
          items:4
        },
        1000:{
          items:6
        }
      }
    });

    for(var a = 0; a < today_deal_list.length; a++)
    {
      let today_deal = today_deal_list[a];
      let today_deal_id = today_deal.id;
      let today_deal_hours = today_deal.hours;
      let today_deal_minutes = today_deal.minutes;
      let today_deal_seconds = today_deal.seconds;

      today_deal_times["timer_"+today_deal_id] = {"hour" : today_deal_hours, "minute" : today_deal_minutes, "second" : today_deal_seconds};

      today_deal_timer["timer_"+today_deal_id] = setInterval(function(){
        var hour = today_deal_times["timer_"+today_deal_id].hour;
        var minute = today_deal_times["timer_"+today_deal_id].minute;
        var second = today_deal_times["timer_"+today_deal_id].second;

        second = second - 1;
        if(second == 0)
        {
          minute = minute - 1;
          second = 60;
          if(minute < 0)
          {
            hour = hour - 1;
            minute = 60;
            if(hour < 0)
            {
              second = 0;
              minute = 0;
              hour = 0;

              clearInterval(today_deal_timer["timer_"+today_deal_id]);
            }
          }
        }

        today_deal_times["timer_"+today_deal_id].second = second;
        today_deal_times["timer_"+today_deal_id].minute = minute;
        today_deal_times["timer_"+today_deal_id].hour = hour;

        $("#timer_"+today_deal_id).find('.hour').html(hour+"<span>hrs</span>");
        $("#timer_"+today_deal_id).find('.minute').html(minute+"<span>Min</span>");
        $("#timer_"+today_deal_id).find('.second').html(second+"<span>Sec</span>");

      }, 1000);
    }

    $(".product_item").click(function(){
      let item_id = $(this).attr("item_id");

      var route_url = "{{ route('getItemDetail', ['id' => '_id']) }}";
      route_url = route_url.replace('_id', item_id);

      window.location.href = route_url;
    });
  });

</script>

@if(session()->has('error'))
  <script>
    $("#loginPromptText").html("This email has been registered in our system. Please login through our system and do not login through Google and Facebook");
    $("#loginPrompt").modal('show'); 
  </script>
@endif

@endsection
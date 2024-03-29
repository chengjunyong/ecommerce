@extends('front.app')

@section('content')

@include('front.index5.header5')

@include('front.loader')

<section class="theme-slider layout-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="slide-1 no-arrow">
                        <div>
                            <div class="slider-banner slide-banner-4">
                                <div class="slider-img">
                                    <ul class="layout5-slide-1">
                                        <li id="img-1"><img src="../assets/images/layout-5/slider/1.1.png" class="img-fluid" alt="slider"></li>
                                    </ul>
                                </div>
                                <div class="slider-banner-contain">
                                    <div>
                                        <h3>bigest sale</h3>
                                        <h1>home appliances</h1>
                                        <h2>50% off on all selected product</h2>
                                        <a class="btn btn-normal">
                                            shop now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="slider-banner slide-banner-4">
                                <div class="slider-img">
                                    <ul class="layout5-slide-2">
                                        <li id="img-2"><img src="../assets/images/layout-5/slider/1.2.png" class="img-fluid" alt="slider"></li>
                                    </ul>
                                </div>
                                <div class="slider-banner-contain">
                                    <div>
                                        <h3>big brand big sale</h3>
                                        <h1>refrigerator</h1>
                                        <h2>30% off on all selected produc</h2>
                                        <a class="btn btn-normal">
                                            shop now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="slider-banner slide-banner-4">
                                <div class="slider-img">
                                    <ul class="layout5-slide-3">
                                        <li id="img-3"><img src="../assets/images/layout-5/slider/1.3.png" class="img-fluid" alt="slider"></li>
                                    </ul>
                                </div>
                                <div class="slider-banner-contain">
                                    <div>
                                        <h3>today's hot offer</h3>
                                        <h1>rlrctronics appliances</h1>
                                        <h2>40% off on all selected produc</h2>
                                        <a class="btn btn-normal">
                                            shop now
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
    <!--slider end-->


    <!--title-start-->
    <div class="title1 section-my-space mt-0">
        <h4>special  products</h4>
    </div>
    <!--title-end-->

    <!--product box start -->
    <section class=" ratio_asos product section-pb-space ">
        <div class="custom-container ">
            <div class="row">
                <div class="col pr-0">
                    <div class="product-slide-6  no-arrow">
                        <div>
                            <div class="product-box">
                                <div class="product-imgbox">
                                    <div class="product-front">
                                        <img src="../assets/images/layout-5/product/3.jpg" class="img-fluid  " alt="product">
                                    </div>
                                    <div class="product-back">
                                        <img src="../assets/images/layout-5/product/a3.jpg" class="img-fluid  " alt="product">
                                    </div>
                                    <div class="product-icon icon-inline">
                                        <button onclick="openCart()">
                                            <i class="ti-bag" ></i>
                                        </button>
                                        <a href="javascript:void(0)" title="Add to Wishlist">
                                            <i class="ti-heart" aria-hidden="true"></i>
                                        </a>
                                        <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                            <i class="ti-search" aria-hidden="true"></i>
                                        </a>
                                        <a href="compare.html" title="Compare">
                                            <i class="fa fa-exchange" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-detail detail-inline">
                                    <div class="detail-title">
                                        <div class="detail-left">
                                            <div class="rating-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="">
                                                <h6 class="price-title">
                                                    reader will be distracted.
                                                </h6>
                                            </a>
                                        </div>
                                        <div class="detail-right">
                                            <div class="check-price">
                                                $ 56.21
                                            </div>
                                            <div class="price">
                                                <div class="price">
                                                    $ 24.05
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="product-box">
                                <div class="product-imgbox">
                                    <div class="product-front">
                                        <img src="../assets/images/layout-5/product/4.jpg" class="img-fluid  " alt="product">
                                    </div>
                                    <div class="product-back">
                                        <img src="../assets/images/layout-5/product/a4.jpg" class="img-fluid  " alt="product">
                                    </div>
                                    <div class="product-icon icon-inline">
                                        <button onclick="openCart()">
                                            <i class="ti-bag" ></i>
                                        </button>
                                        <a href="javascript:void(0)" title="Add to Wishlist">
                                            <i class="ti-heart" aria-hidden="true"></i>
                                        </a>
                                        <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                            <i class="ti-search" aria-hidden="true"></i>
                                        </a>
                                        <a href="compare.html" title="Compare">
                                            <i class="fa fa-exchange" aria-hidden="true"></i>
                                        </a>

                                    </div>
                                    <div class="new-label1">
                                        <div>new</div>
                                    </div>
                                    <div class="on-sale1">
                                        on sale
                                    </div>
                                </div>
                                <div class="product-detail detail-inline">
                                    <div class="detail-title">
                                        <div class="detail-left">
                                            <div class="rating-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="">
                                                <h6 class="price-title">
                                                    reader will be distracted.
                                                </h6>
                                            </a>
                                        </div>
                                        <div class="detail-right">
                                            <div class="check-price">
                                                $ 56.21
                                            </div>
                                            <div class="price">
                                                <div class="price">
                                                    $ 24.05
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="product-box">
                                <div class="product-imgbox">
                                    <div class="product-front">
                                        <img src="../assets/images/layout-5/product/5.jpg" class="img-fluid  " alt="product">
                                    </div>
                                    <div class="product-back">
                                        <img src="../assets/images/layout-5/product/a5.jpg" class="img-fluid  " alt="product">
                                    </div>
                                    <div class="product-icon icon-inline">
                                        <button onclick="openCart()">
                                            <i class="ti-bag" ></i>
                                        </button>
                                        <a href="javascript:void(0)" title="Add to Wishlist">
                                            <i class="ti-heart" aria-hidden="true"></i>
                                        </a>
                                        <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                            <i class="ti-search" aria-hidden="true"></i>
                                        </a>
                                        <a href="compare.html" title="Compare">
                                            <i class="fa fa-exchange" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-detail detail-inline">
                                    <div class="detail-title">
                                        <div class="detail-left">
                                            <div class="rating-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="">
                                                <h6 class="price-title">
                                                    reader will be distracted.
                                                </h6>
                                            </a>
                                        </div>
                                        <div class="detail-right">
                                            <div class="check-price">
                                                $ 56.21
                                            </div>
                                            <div class="price">
                                                <div class="price">
                                                    $ 24.05
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="product-box">
                                <div class="product-imgbox">
                                    <div class="product-front">
                                        <img src="../assets/images/layout-5/product/6.jpg" class="img-fluid  " alt="product">
                                    </div>
                                    <div class="product-back">
                                        <img src="../assets/images/layout-5/product/a6.jpg" class="img-fluid  " alt="product">
                                    </div>
                                    <div class="product-icon icon-inline">
                                        <button onclick="openCart()">
                                            <i class="ti-bag" ></i>
                                        </button>
                                        <a href="javascript:void(0)" title="Add to Wishlist">
                                            <i class="ti-heart" aria-hidden="true"></i>
                                        </a>
                                        <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                            <i class="ti-search" aria-hidden="true"></i>
                                        </a>
                                        <a href="compare.html" title="Compare">
                                            <i class="fa fa-exchange" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-detail detail-inline">
                                    <div class="detail-title">
                                        <div class="detail-left">
                                            <div class="rating-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="">
                                                <h6 class="price-title">
                                                    reader will be distracted.
                                                </h6>
                                            </a>
                                        </div>
                                        <div class="detail-right">
                                            <div class="check-price">
                                                $ 56.21
                                            </div>
                                            <div class="price">
                                                <div class="price">
                                                    $ 24.05
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="product-box">
                                <div class="product-imgbox">
                                    <div class="product-front">
                                        <img src="../assets/images/layout-5/product/7.jpg" class="img-fluid  " alt="product">
                                    </div>
                                    <div class="product-back">
                                        <img src="../assets/images/layout-5/product/4.jpg" class="img-fluid  " alt="product">
                                    </div>
                                    <div class="product-icon icon-inline">
                                        <button onclick="openCart()">
                                            <i class="ti-bag" ></i>
                                        </button>
                                        <a href="javascript:void(0)" title="Add to Wishlist">
                                            <i class="ti-heart" aria-hidden="true"></i>
                                        </a>
                                        <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                            <i class="ti-search" aria-hidden="true"></i>
                                        </a>
                                        <a href="compare.html" title="Compare">
                                            <i class="fa fa-exchange" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-detail detail-inline">
                                    <div class="detail-title">
                                        <div class="detail-left">
                                            <div class="rating-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="">
                                                <h6 class="price-title">
                                                    reader will be distracted.
                                                </h6>
                                            </a>
                                        </div>
                                        <div class="detail-right">
                                            <div class="check-price">
                                                $ 56.21
                                            </div>
                                            <div class="price">
                                                <div class="price">
                                                    $ 24.05
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="product-box">
                                <div class="product-imgbox">
                                    <div class="product-front">
                                        <img src="../assets/images/layout-5/product/1.jpg" class="img-fluid  " alt="product">
                                    </div>
                                    <div class="product-back">
                                        <img src="../assets/images/layout-5/product/a1.jpg" class="img-fluid  " alt="product">
                                    </div>
                                    <div class="product-icon icon-inline">
                                        <button onclick="openCart()">
                                            <i class="ti-bag" ></i>
                                        </button>
                                        <a href="javascript:void(0)" title="Add to Wishlist">
                                            <i class="ti-heart" aria-hidden="true"></i>
                                        </a>
                                        <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                            <i class="ti-search" aria-hidden="true"></i>
                                        </a>
                                        <a href="compare.html" title="Compare">
                                            <i class="fa fa-exchange" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="new-label1">
                                        <div>new</div>
                                    </div>
                                    <div class="on-sale1">
                                        on sale
                                    </div>
                                </div>
                                <div class="product-detail detail-inline ">
                                    <div class="detail-title">
                                        <div class="detail-left">
                                            <div class="rating-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="#">
                                                <h6 class="price-title">
                                                    reader will be distracted.
                                                </h6>
                                            </a>
                                        </div>
                                        <div class="detail-right">
                                            <div class="check-price">
                                                $ 56.21
                                            </div>
                                            <div class="price">
                                                <div class="price">
                                                    $ 24.05
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="product-box">
                                <div class="product-imgbox">
                                    <div class="product-front">
                                        <img src="../assets/images/layout-5/product/2.jpg" class="img-fluid  " alt="product">
                                    </div>
                                    <div class="product-back">
                                        <img src="../assets/images/layout-5/product/a2.jpg" class="img-fluid  " alt="product">
                                    </div>
                                    <div class="product-icon icon-inline">
                                        <button onclick="openCart()">
                                            <i class="ti-bag" ></i>
                                        </button>
                                        <a href="javascript:void(0)" title="Add to Wishlist">
                                            <i class="ti-heart" aria-hidden="true"></i>
                                        </a>
                                        <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                            <i class="ti-search" aria-hidden="true"></i>
                                        </a>
                                        <a href="compare.html" title="Compare">
                                            <i class="fa fa-exchange" aria-hidden="true"></i>
                                        </a>

                                    </div>
                                    <div class="new-label1">
                                        <div>new</div>
                                    </div>
                                </div>
                                <div class="product-detail detail-inline">
                                    <div class="detail-title">
                                        <div class="detail-left">
                                            <div class="rating-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="">
                                                <h6 class="price-title">
                                                    reader will be distracted.
                                                </h6>
                                            </a>
                                        </div>
                                        <div class="detail-right">
                                            <div class="check-price">
                                                $ 56.21
                                            </div>
                                            <div class="price">
                                                <div class="price">
                                                    $ 24.05
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--product box end-->

    <!--collection banner start-->
    <section class="collection-banner section-py-space bg-white">
        <div class="container-fluid">
            <div class="row collection2">
                <div class="col-md-4">
                    <div class="collection-banner-main p-right banner-9">
                        <div class="collection-img">
                            <img src="../assets/images/layout-5/collection-banner/1.jpg" class="img-fluid bg-img  "  alt="banner">
                        </div>
                        <div class="collection-banner-contain">
                            <div>
                                <h3>women</h3>
                                <h4>fashion</h4>
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
                    <div class="collection-banner-main p-right banner-9">
                        <div class="collection-img">
                            <img src="../assets/images/layout-5/collection-banner/2.jpg" class="img-fluid bg-img  " alt="banner">
                        </div>
                        <div class="collection-banner-contain">
                            <div>
                                <h3>camera</h3>
                                <h4>lenses</h4>
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
                    <div class="collection-banner-main p-right banner-9">
                        <div class="collection-img">
                            <img src="../assets/images/layout-5/collection-banner/3.jpg" class="img-fluid bg-img  " alt="banner">
                        </div>
                        <div class="collection-banner-contain">
                            <div>
                                <h3>refrigerator</h3>
                                <h4>LG mini</h4>
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
    </section>
    <!--collection banner end-->

    <!--top brand panel start-->
    <section class="brand-panel ">
        <div class="brand-panel-box bg-silver">
            <div class="brand-panel-contain">
                <ul>
                    <li><a href="#">top brand</a></li>
                    <li><a>:</a></li>
                    <li><a href="#">aerie</a></li>
                    <li><a href="#">baci lingrie</a></li>
                    <li><a href="#">gerbe</a></li>
                    <li><a href="#">jolidon</a></li>
                    <li><a href="#">oysho</a></li>
                    <li><a href="#">ultimo</a></li>
                    <li><a href="#">vassarette</a></li>
                    <li><a href="#">wonderbra</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--top brand panel end-->

    <!--services start-->
    <section class="services services-inverse">
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
                            <h5>EASY RETURN</h5>
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
                            <h5>ONLINE PAYMENT</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--services end-->

    <!-- media banner tab start-->
    <section class=" ratio_square section-big-pt-space">
        <div class="custom-container b-g-white section-pb-space">
            <div class="row">
                <div class="col p-0">
                    <div class="theme-tab product layout-5">
                        <ul class="tabs tab-title media-tab">
                            <li class="current"><a href="tab-7">new product</a></li>
                            <li class=""><a href="tab-8">Feature Products</a></li>
                            <li class=""><a href="tab-9">best Sellers</a></li>
                            <li class=""><a href="tab-10">On Sale</a></li>
                        </ul>
                        <div class="tab-content-cls">
                            <div id="tab-7" class="tab-content active default ">
                                <div class="slide-5 product-m no-arrow">
                                    <div>
                                        <div class="media-banner media-banner-1 border-0">
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <img src="../assets/images/layout-2/media-banner/1.jpg" class="img-fluid " alt="banner">
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="rating">
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                </div>
                                                                <p>
                                                                    Reader distracted.
                                                                </p>
                                                                <h6>$24.05 <span>$56.21</span></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <img src="../assets/images/layout-2/media-banner/2.jpg" class="img-fluid " alt="banner">
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="rating">
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                </div>
                                                                <p>
                                                                    Reader distracted.
                                                                </p>
                                                                <h6>$24.05 <span>$56.21</span></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <img src="../assets/images/layout-2/media-banner/3.jpg" class="img-fluid " alt="banner">
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="rating">
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                </div>
                                                                <p>
                                                                    Reader distracted.
                                                                </p>
                                                                <h6>$24.05 <span>$56.21</span></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   <div>
                                       <div class="media-banner media-banner-1 border-0">
                                           <div class="media-banner-box">
                                               <div class="media">
                                                   <img src="../assets/images/layout-2/media-banner/3.jpg" class="img-fluid " alt="banner">
                                                   <div class="media-body">
                                                       <div class="media-contant">
                                                           <div>
                                                               <div class="rating">
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                               </div>
                                                               <p>
                                                                   Reader distracted.
                                                               </p>
                                                               <h6>$24.05 <span>$56.21</span></h6>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="media-banner-box">
                                               <div class="media">
                                                   <img src="../assets/images/layout-2/media-banner/1.jpg" class="img-fluid " alt="banner">
                                                   <div class="media-body">
                                                       <div class="media-contant">
                                                           <div>
                                                               <div class="rating">
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                               </div>
                                                               <p>
                                                                   Reader distracted.
                                                               </p>
                                                               <h6>$24.05 <span>$56.21</span></h6>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="media-banner-box">
                                               <div class="media">
                                                   <img src="../assets/images/layout-2/media-banner/2.jpg" class="img-fluid " alt="banner">
                                                   <div class="media-body">
                                                       <div class="media-contant">
                                                           <div>
                                                               <div class="rating">
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                               </div>
                                                               <p>
                                                                   Reader distracted.
                                                               </p>
                                                               <h6>$24.05 <span>$56.21</span></h6>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div>
                                       <div class="media-banner media-banner-1 border-0">
                                           <div class="media-banner-box">
                                               <div class="media">
                                                   <img src="../assets/images/layout-2/media-banner/2.jpg" class="img-fluid " alt="banner">
                                                   <div class="media-body">
                                                       <div class="media-contant">
                                                           <div>
                                                               <div class="rating">
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                               </div>
                                                               <p>
                                                                   Reader distracted.
                                                               </p>
                                                               <h6>$24.05 <span>$56.21</span></h6>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="media-banner-box">
                                               <div class="media">
                                                   <img src="../assets/images/layout-2/media-banner/3.jpg" class="img-fluid " alt="banner">
                                                   <div class="media-body">
                                                       <div class="media-contant">
                                                           <div>
                                                               <div class="rating">
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                               </div>
                                                               <p>
                                                                   Reader distracted.
                                                               </p>
                                                               <h6>$24.05 <span>$56.21</span></h6>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="media-banner-box">
                                               <div class="media">
                                                   <img src="../assets/images/layout-2/media-banner/1.jpg" class="img-fluid " alt="banner">
                                                   <div class="media-body">
                                                       <div class="media-contant">
                                                           <div>
                                                               <div class="rating">
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                               </div>
                                                               <p>
                                                                   Reader distracted.
                                                               </p>
                                                               <h6>$24.05 <span>$56.21</span></h6>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div>
                                       <div class="media-banner media-banner-1 border-0">
                                           <div class="media-banner-box">
                                               <div class="media">
                                                   <img src="../assets/images/layout-2/media-banner/1.jpg" class="img-fluid " alt="banner">
                                                   <div class="media-body">
                                                       <div class="media-contant">
                                                           <div>
                                                               <div class="rating">
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                               </div>
                                                               <p>
                                                                   Reader distracted.
                                                               </p>
                                                               <h6>$24.05 <span>$56.21</span></h6>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="media-banner-box">
                                               <div class="media">
                                                   <img src="../assets/images/layout-2/media-banner/2.jpg" class="img-fluid " alt="banner">
                                                   <div class="media-body">
                                                       <div class="media-contant">
                                                           <div>
                                                               <div class="rating">
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                               </div>
                                                               <p>
                                                                   Reader distracted.
                                                               </p>
                                                               <h6>$24.05 <span>$56.21</span></h6>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="media-banner-box">
                                               <div class="media">
                                                   <img src="../assets/images/layout-2/media-banner/3.jpg" class="img-fluid " alt="banner">
                                                   <div class="media-body">
                                                       <div class="media-contant">
                                                           <div>
                                                               <div class="rating">
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                               </div>
                                                               <p>
                                                                   Reader distracted.
                                                               </p>
                                                               <h6>$24.05 <span>$56.21</span></h6>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                  <div>
                                      <div class="media-banner media-banner-1 border-0">
                                          <div class="media-banner-box">
                                              <div class="media">
                                                  <img src="../assets/images/layout-2/media-banner/3.jpg" class="img-fluid " alt="banner">
                                                  <div class="media-body">
                                                      <div class="media-contant">
                                                          <div>
                                                              <div class="rating">
                                                                  <i class="fa fa-star" ></i>
                                                                  <i class="fa fa-star" ></i>
                                                                  <i class="fa fa-star" ></i>
                                                                  <i class="fa fa-star" ></i>
                                                                  <i class="fa fa-star" ></i>
                                                              </div>
                                                              <p>
                                                                  Reader distracted.
                                                              </p>
                                                              <h6>$24.05 <span>$56.21</span></h6>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="media-banner-box">
                                              <div class="media">
                                                  <img src="../assets/images/layout-2/media-banner/1.jpg" class="img-fluid " alt="banner">
                                                  <div class="media-body">
                                                      <div class="media-contant">
                                                          <div>
                                                              <div class="rating">
                                                                  <i class="fa fa-star" ></i>
                                                                  <i class="fa fa-star" ></i>
                                                                  <i class="fa fa-star" ></i>
                                                                  <i class="fa fa-star" ></i>
                                                                  <i class="fa fa-star" ></i>
                                                              </div>
                                                              <p>
                                                                  Reader distracted.
                                                              </p>
                                                              <h6>$24.05 <span>$56.21</span></h6>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="media-banner-box">
                                              <div class="media">
                                                  <img src="../assets/images/layout-2/media-banner/2.jpg" class="img-fluid " alt="banner">
                                                  <div class="media-body">
                                                      <div class="media-contant">
                                                          <div>
                                                              <div class="rating">
                                                                  <i class="fa fa-star" ></i>
                                                                  <i class="fa fa-star" ></i>
                                                                  <i class="fa fa-star" ></i>
                                                                  <i class="fa fa-star" ></i>
                                                                  <i class="fa fa-star" ></i>
                                                              </div>
                                                              <p>
                                                                  Reader distracted.
                                                              </p>
                                                              <h6>$24.05 <span>$56.21</span></h6>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                    <div>
                                        <div class="media-banner media-banner-1 border-0">
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <img src="../assets/images/layout-2/media-banner/2.jpg" class="img-fluid " alt="banner">
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="rating">
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                </div>
                                                                <p>
                                                                    Reader distracted.
                                                                </p>
                                                                <h6>$24.05 <span>$56.21</span></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <img src="../assets/images/layout-2/media-banner/3.jpg" class="img-fluid " alt="banner">
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="rating">
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                </div>
                                                                <p>
                                                                    Reader distracted.
                                                                </p>
                                                                <h6>$24.05 <span>$56.21</span></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <img src="../assets/images/layout-2/media-banner/1.jpg" class="img-fluid " alt="banner">
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="rating">
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                </div>
                                                                <p>
                                                                    Reader distracted.
                                                                </p>
                                                                <h6>$24.05 <span>$56.21</span></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-8" class="tab-content">
                                <div class="slide-5 product-m no-arrow">
                                    <div>
                                        <div class="media-banner media-banner-1 border-0">
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <img src="../assets/images/layout-2/media-banner/2.jpg" class="img-fluid " alt="banner">
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="rating">
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                </div>
                                                                <p>
                                                                    Reader distracted.
                                                                </p>
                                                                <h6>$24.05 <span>$56.21</span></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <img src="../assets/images/layout-2/media-banner/3.jpg" class="img-fluid " alt="banner">
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="rating">
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                </div>
                                                                <p>
                                                                    Reader distracted.
                                                                </p>
                                                                <h6>$24.05 <span>$56.21</span></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <img src="../assets/images/layout-2/media-banner/1.jpg" class="img-fluid " alt="banner">
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="rating">
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                </div>
                                                                <p>
                                                                    Reader distracted.
                                                                </p>
                                                                <h6>$24.05 <span>$56.21</span></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   <div>
                                       <div class="media-banner media-banner-1 border-0">
                                           <div class="media-banner-box">
                                               <div class="media">
                                                   <img src="../assets/images/layout-2/media-banner/1.jpg" class="img-fluid " alt="banner">
                                                   <div class="media-body">
                                                       <div class="media-contant">
                                                           <div>
                                                               <div class="rating">
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                               </div>
                                                               <p>
                                                                   Reader distracted.
                                                               </p>
                                                               <h6>$24.05 <span>$56.21</span></h6>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="media-banner-box">
                                               <div class="media">
                                                   <img src="../assets/images/layout-2/media-banner/2.jpg" class="img-fluid " alt="banner">
                                                   <div class="media-body">
                                                       <div class="media-contant">
                                                           <div>
                                                               <div class="rating">
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                               </div>
                                                               <p>
                                                                   Reader distracted.
                                                               </p>
                                                               <h6>$24.05 <span>$56.21</span></h6>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="media-banner-box">
                                               <div class="media">
                                                   <img src="../assets/images/layout-2/media-banner/3.jpg" class="img-fluid " alt="banner">
                                                   <div class="media-body">
                                                       <div class="media-contant">
                                                           <div>
                                                               <div class="rating">
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                               </div>
                                                               <p>
                                                                   Reader distracted.
                                                               </p>
                                                               <h6>$24.05 <span>$56.21</span></h6>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div>
                                       <div class="media-banner media-banner-1 border-0">
                                           <div class="media-banner-box">
                                               <div class="media">
                                                   <img src="../assets/images/layout-2/media-banner/3.jpg" class="img-fluid " alt="banner">
                                                   <div class="media-body">
                                                       <div class="media-contant">
                                                           <div>
                                                               <div class="rating">
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                               </div>
                                                               <p>
                                                                   Reader distracted.
                                                               </p>
                                                               <h6>$24.05 <span>$56.21</span></h6>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="media-banner-box">
                                               <div class="media">
                                                   <img src="../assets/images/layout-2/media-banner/1.jpg" class="img-fluid " alt="banner">
                                                   <div class="media-body">
                                                       <div class="media-contant">
                                                           <div>
                                                               <div class="rating">
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                               </div>
                                                               <p>
                                                                   Reader distracted.
                                                               </p>
                                                               <h6>$24.05 <span>$56.21</span></h6>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="media-banner-box">
                                               <div class="media">
                                                   <img src="../assets/images/layout-2/media-banner/2.jpg" class="img-fluid " alt="banner">
                                                   <div class="media-body">
                                                       <div class="media-contant">
                                                           <div>
                                                               <div class="rating">
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                               </div>
                                                               <p>
                                                                   Reader distracted.
                                                               </p>
                                                               <h6>$24.05 <span>$56.21</span></h6>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div>
                                       <div class="media-banner media-banner-1 border-0">
                                           <div class="media-banner-box">
                                               <div class="media">
                                                   <img src="../assets/images/layout-2/media-banner/2.jpg" class="img-fluid " alt="banner">
                                                   <div class="media-body">
                                                       <div class="media-contant">
                                                           <div>
                                                               <div class="rating">
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                               </div>
                                                               <p>
                                                                   Reader distracted.
                                                               </p>
                                                               <h6>$24.05 <span>$56.21</span></h6>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="media-banner-box">
                                               <div class="media">
                                                   <img src="../assets/images/layout-2/media-banner/3.jpg" class="img-fluid " alt="banner">
                                                   <div class="media-body">
                                                       <div class="media-contant">
                                                           <div>
                                                               <div class="rating">
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                               </div>
                                                               <p>
                                                                   Reader distracted.
                                                               </p>
                                                               <h6>$24.05 <span>$56.21</span></h6>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="media-banner-box">
                                               <div class="media">
                                                   <img src="../assets/images/layout-2/media-banner/1.jpg" class="img-fluid " alt="banner">
                                                   <div class="media-body">
                                                       <div class="media-contant">
                                                           <div>
                                                               <div class="rating">
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                               </div>
                                                               <p>
                                                                   Reader distracted.
                                                               </p>
                                                               <h6>$24.05 <span>$56.21</span></h6>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div>
                                       <div class="media-banner media-banner-1 border-0">
                                           <div class="media-banner-box">
                                               <div class="media">
                                                   <img src="../assets/images/layout-2/media-banner/1.jpg" class="img-fluid " alt="banner">
                                                   <div class="media-body">
                                                       <div class="media-contant">
                                                           <div>
                                                               <div class="rating">
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                               </div>
                                                               <p>
                                                                   Reader distracted.
                                                               </p>
                                                               <h6>$24.05 <span>$56.21</span></h6>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="media-banner-box">
                                               <div class="media">
                                                   <img src="../assets/images/layout-2/media-banner/2.jpg" class="img-fluid " alt="banner">
                                                   <div class="media-body">
                                                       <div class="media-contant">
                                                           <div>
                                                               <div class="rating">
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                               </div>
                                                               <p>
                                                                   Reader distracted.
                                                               </p>
                                                               <h6>$24.05 <span>$56.21</span></h6>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="media-banner-box">
                                               <div class="media">
                                                   <img src="../assets/images/layout-2/media-banner/3.jpg" class="img-fluid " alt="banner">
                                                   <div class="media-body">
                                                       <div class="media-contant">
                                                           <div>
                                                               <div class="rating">
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                               </div>
                                                               <p>
                                                                   Reader distracted.
                                                               </p>
                                                               <h6>$24.05 <span>$56.21</span></h6>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                    <div>
                                        <div class="media-banner media-banner-1 border-0">
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <img src="../assets/images/layout-2/media-banner/3.jpg" class="img-fluid " alt="banner">
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="rating">
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                </div>
                                                                <p>
                                                                    Reader distracted.
                                                                </p>
                                                                <h6>$24.05 <span>$56.21</span></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <img src="../assets/images/layout-2/media-banner/1.jpg" class="img-fluid " alt="banner">
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="rating">
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                </div>
                                                                <p>
                                                                    Reader distracted.
                                                                </p>
                                                                <h6>$24.05 <span>$56.21</span></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <img src="../assets/images/layout-2/media-banner/2.jpg" class="img-fluid " alt="banner">
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="rating">
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                </div>
                                                                <p>
                                                                    Reader distracted.
                                                                </p>
                                                                <h6>$24.05 <span>$56.21</span></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-9" class="tab-content">
                                <div class="slide-5 product-m no-arrow">
                                   <div>
                                       <div class="media-banner media-banner-1 border-0">
                                           <div class="media-banner-box">
                                               <div class="media">
                                                   <img src="../assets/images/layout-2/media-banner/3.jpg" class="img-fluid " alt="banner">
                                                   <div class="media-body">
                                                       <div class="media-contant">
                                                           <div>
                                                               <div class="rating">
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                               </div>
                                                               <p>
                                                                   Reader distracted.
                                                               </p>
                                                               <h6>$24.05 <span>$56.21</span></h6>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="media-banner-box">
                                               <div class="media">
                                                   <img src="../assets/images/layout-2/media-banner/1.jpg" class="img-fluid " alt="banner">
                                                   <div class="media-body">
                                                       <div class="media-contant">
                                                           <div>
                                                               <div class="rating">
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                               </div>
                                                               <p>
                                                                   Reader distracted.
                                                               </p>
                                                               <h6>$24.05 <span>$56.21</span></h6>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="media-banner-box">
                                               <div class="media">
                                                   <img src="../assets/images/layout-2/media-banner/2.jpg" class="img-fluid " alt="banner">
                                                   <div class="media-body">
                                                       <div class="media-contant">
                                                           <div>
                                                               <div class="rating">
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                               </div>
                                                               <p>
                                                                   Reader distracted.
                                                               </p>
                                                               <h6>$24.05 <span>$56.21</span></h6>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div>
                                       <div class="media-banner media-banner-1 border-0">
                                           <div class="media-banner-box">
                                               <div class="media">
                                                   <img src="../assets/images/layout-2/media-banner/2.jpg" class="img-fluid " alt="banner">
                                                   <div class="media-body">
                                                       <div class="media-contant">
                                                           <div>
                                                               <div class="rating">
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                               </div>
                                                               <p>
                                                                   Reader distracted.
                                                               </p>
                                                               <h6>$24.05 <span>$56.21</span></h6>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="media-banner-box">
                                               <div class="media">
                                                   <img src="../assets/images/layout-2/media-banner/3.jpg" class="img-fluid " alt="banner">
                                                   <div class="media-body">
                                                       <div class="media-contant">
                                                           <div>
                                                               <div class="rating">
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                               </div>
                                                               <p>
                                                                   Reader distracted.
                                                               </p>
                                                               <h6>$24.05 <span>$56.21</span></h6>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="media-banner-box">
                                               <div class="media">
                                                   <img src="../assets/images/layout-2/media-banner/1.jpg" class="img-fluid " alt="banner">
                                                   <div class="media-body">
                                                       <div class="media-contant">
                                                           <div>
                                                               <div class="rating">
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                               </div>
                                                               <p>
                                                                   Reader distracted.
                                                               </p>
                                                               <h6>$24.05 <span>$56.21</span></h6>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div>
                                       <div class="media-banner media-banner-1 border-0">
                                           <div class="media-banner-box">
                                               <div class="media">
                                                   <img src="../assets/images/layout-2/media-banner/1.jpg" class="img-fluid " alt="banner">
                                                   <div class="media-body">
                                                       <div class="media-contant">
                                                           <div>
                                                               <div class="rating">
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                               </div>
                                                               <p>
                                                                   Reader distracted.
                                                               </p>
                                                               <h6>$24.05 <span>$56.21</span></h6>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="media-banner-box">
                                               <div class="media">
                                                   <img src="../assets/images/layout-2/media-banner/2.jpg" class="img-fluid " alt="banner">
                                                   <div class="media-body">
                                                       <div class="media-contant">
                                                           <div>
                                                               <div class="rating">
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                               </div>
                                                               <p>
                                                                   Reader distracted.
                                                               </p>
                                                               <h6>$24.05 <span>$56.21</span></h6>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="media-banner-box">
                                               <div class="media">
                                                   <img src="../assets/images/layout-2/media-banner/3.jpg" class="img-fluid " alt="banner">
                                                   <div class="media-body">
                                                       <div class="media-contant">
                                                           <div>
                                                               <div class="rating">
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                               </div>
                                                               <p>
                                                                   Reader distracted.
                                                               </p>
                                                               <h6>$24.05 <span>$56.21</span></h6>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div>
                                       <div class="media-banner media-banner-1 border-0">
                                           <div class="media-banner-box">
                                               <div class="media">
                                                   <img src="../assets/images/layout-2/media-banner/3.jpg" class="img-fluid " alt="banner">
                                                   <div class="media-body">
                                                       <div class="media-contant">
                                                           <div>
                                                               <div class="rating">
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                               </div>
                                                               <p>
                                                                   Reader distracted.
                                                               </p>
                                                               <h6>$24.05 <span>$56.21</span></h6>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="media-banner-box">
                                               <div class="media">
                                                   <img src="../assets/images/layout-2/media-banner/1.jpg" class="img-fluid " alt="banner">
                                                   <div class="media-body">
                                                       <div class="media-contant">
                                                           <div>
                                                               <div class="rating">
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                               </div>
                                                               <p>
                                                                   Reader distracted.
                                                               </p>
                                                               <h6>$24.05 <span>$56.21</span></h6>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="media-banner-box">
                                               <div class="media">
                                                   <img src="../assets/images/layout-2/media-banner/2.jpg" class="img-fluid " alt="banner">
                                                   <div class="media-body">
                                                       <div class="media-contant">
                                                           <div>
                                                               <div class="rating">
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                               </div>
                                                               <p>
                                                                   Reader distracted.
                                                               </p>
                                                               <h6>$24.05 <span>$56.21</span></h6>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div>
                                       <div class="media-banner media-banner-1 border-0">
                                           <div class="media-banner-box">
                                               <div class="media">
                                                   <img src="../assets/images/layout-2/media-banner/2.jpg" class="img-fluid " alt="banner">
                                                   <div class="media-body">
                                                       <div class="media-contant">
                                                           <div>
                                                               <div class="rating">
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                               </div>
                                                               <p>
                                                                   Reader distracted.
                                                               </p>
                                                               <h6>$24.05 <span>$56.21</span></h6>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="media-banner-box">
                                               <div class="media">
                                                   <img src="../assets/images/layout-2/media-banner/3.jpg" class="img-fluid " alt="banner">
                                                   <div class="media-body">
                                                       <div class="media-contant">
                                                           <div>
                                                               <div class="rating">
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                               </div>
                                                               <p>
                                                                   Reader distracted.
                                                               </p>
                                                               <h6>$24.05 <span>$56.21</span></h6>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="media-banner-box">
                                               <div class="media">
                                                   <img src="../assets/images/layout-2/media-banner/1.jpg" class="img-fluid " alt="banner">
                                                   <div class="media-body">
                                                       <div class="media-contant">
                                                           <div>
                                                               <div class="rating">
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                               </div>
                                                               <p>
                                                                   Reader distracted.
                                                               </p>
                                                               <h6>$24.05 <span>$56.21</span></h6>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div>
                                       <div class="media-banner media-banner-1 border-0">
                                           <div class="media-banner-box">
                                               <div class="media">
                                                   <img src="../assets/images/layout-2/media-banner/1.jpg" class="img-fluid " alt="banner">
                                                   <div class="media-body">
                                                       <div class="media-contant">
                                                           <div>
                                                               <div class="rating">
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                               </div>
                                                               <p>
                                                                   Reader distracted.
                                                               </p>
                                                               <h6>$24.05 <span>$56.21</span></h6>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="media-banner-box">
                                               <div class="media">
                                                   <img src="../assets/images/layout-2/media-banner/2.jpg" class="img-fluid " alt="banner">
                                                   <div class="media-body">
                                                       <div class="media-contant">
                                                           <div>
                                                               <div class="rating">
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                               </div>
                                                               <p>
                                                                   Reader distracted.
                                                               </p>
                                                               <h6>$24.05 <span>$56.21</span></h6>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="media-banner-box">
                                               <div class="media">
                                                   <img src="../assets/images/layout-2/media-banner/3.jpg" class="img-fluid " alt="banner">
                                                   <div class="media-body">
                                                       <div class="media-contant">
                                                           <div>
                                                               <div class="rating">
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                               </div>
                                                               <p>
                                                                   Reader distracted.
                                                               </p>
                                                               <h6>$24.05 <span>$56.21</span></h6>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                </div>
                            </div>
                            <div id="tab-10" class="tab-content">
                                <div class="slide-5 product-m no-arrow">
                                  <div>
                                      <div class="media-banner media-banner-1 border-0">
                                          <div class="media-banner-box">
                                              <div class="media">
                                                  <img src="../assets/images/layout-2/media-banner/1.jpg" class="img-fluid " alt="banner">
                                                  <div class="media-body">
                                                      <div class="media-contant">
                                                          <div>
                                                              <div class="rating">
                                                                  <i class="fa fa-star" ></i>
                                                                  <i class="fa fa-star" ></i>
                                                                  <i class="fa fa-star" ></i>
                                                                  <i class="fa fa-star" ></i>
                                                                  <i class="fa fa-star" ></i>
                                                              </div>
                                                              <p>
                                                                  Reader distracted.
                                                              </p>
                                                              <h6>$24.05 <span>$56.21</span></h6>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="media-banner-box">
                                              <div class="media">
                                                  <img src="../assets/images/layout-2/media-banner/2.jpg" class="img-fluid " alt="banner">
                                                  <div class="media-body">
                                                      <div class="media-contant">
                                                          <div>
                                                              <div class="rating">
                                                                  <i class="fa fa-star" ></i>
                                                                  <i class="fa fa-star" ></i>
                                                                  <i class="fa fa-star" ></i>
                                                                  <i class="fa fa-star" ></i>
                                                                  <i class="fa fa-star" ></i>
                                                              </div>
                                                              <p>
                                                                  Reader distracted.
                                                              </p>
                                                              <h6>$24.05 <span>$56.21</span></h6>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="media-banner-box">
                                              <div class="media">
                                                  <img src="../assets/images/layout-2/media-banner/3.jpg" class="img-fluid " alt="banner">
                                                  <div class="media-body">
                                                      <div class="media-contant">
                                                          <div>
                                                              <div class="rating">
                                                                  <i class="fa fa-star" ></i>
                                                                  <i class="fa fa-star" ></i>
                                                                  <i class="fa fa-star" ></i>
                                                                  <i class="fa fa-star" ></i>
                                                                  <i class="fa fa-star" ></i>
                                                              </div>
                                                              <p>
                                                                  Reader distracted.
                                                              </p>
                                                              <h6>$24.05 <span>$56.21</span></h6>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                 <div>
                                     <div class="media-banner media-banner-1 border-0">
                                         <div class="media-banner-box">
                                             <div class="media">
                                                 <img src="../assets/images/layout-2/media-banner/3.jpg" class="img-fluid " alt="banner">
                                                 <div class="media-body">
                                                     <div class="media-contant">
                                                         <div>
                                                             <div class="rating">
                                                                 <i class="fa fa-star" ></i>
                                                                 <i class="fa fa-star" ></i>
                                                                 <i class="fa fa-star" ></i>
                                                                 <i class="fa fa-star" ></i>
                                                                 <i class="fa fa-star" ></i>
                                                             </div>
                                                             <p>
                                                                 Reader distracted.
                                                             </p>
                                                             <h6>$24.05 <span>$56.21</span></h6>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="media-banner-box">
                                             <div class="media">
                                                 <img src="../assets/images/layout-2/media-banner/1.jpg" class="img-fluid " alt="banner">
                                                 <div class="media-body">
                                                     <div class="media-contant">
                                                         <div>
                                                             <div class="rating">
                                                                 <i class="fa fa-star" ></i>
                                                                 <i class="fa fa-star" ></i>
                                                                 <i class="fa fa-star" ></i>
                                                                 <i class="fa fa-star" ></i>
                                                                 <i class="fa fa-star" ></i>
                                                             </div>
                                                             <p>
                                                                 Reader distracted.
                                                             </p>
                                                             <h6>$24.05 <span>$56.21</span></h6>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="media-banner-box">
                                             <div class="media">
                                                 <img src="../assets/images/layout-2/media-banner/2.jpg" class="img-fluid " alt="banner">
                                                 <div class="media-body">
                                                     <div class="media-contant">
                                                         <div>
                                                             <div class="rating">
                                                                 <i class="fa fa-star" ></i>
                                                                 <i class="fa fa-star" ></i>
                                                                 <i class="fa fa-star" ></i>
                                                                 <i class="fa fa-star" ></i>
                                                                 <i class="fa fa-star" ></i>
                                                             </div>
                                                             <p>
                                                                 Reader distracted.
                                                             </p>
                                                             <h6>$24.05 <span>$56.21</span></h6>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                    <div>
                                        <div class="media-banner media-banner-1 border-0">
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <img src="../assets/images/layout-2/media-banner/2.jpg" class="img-fluid " alt="banner">
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="rating">
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                </div>
                                                                <p>
                                                                    Reader distracted.
                                                                </p>
                                                                <h6>$24.05 <span>$56.21</span></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <img src="../assets/images/layout-2/media-banner/3.jpg" class="img-fluid " alt="banner">
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="rating">
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                </div>
                                                                <p>
                                                                    Reader distracted.
                                                                </p>
                                                                <h6>$24.05 <span>$56.21</span></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <img src="../assets/images/layout-2/media-banner/1.jpg" class="img-fluid " alt="banner">
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="rating">
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                </div>
                                                                <p>
                                                                    Reader distracted.
                                                                </p>
                                                                <h6>$24.05 <span>$56.21</span></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="media-banner media-banner-1 border-0">
                                      <div class="media-banner-box">
                                          <div class="media">
                                              <img src="../assets/images/layout-2/media-banner/1.jpg" class="img-fluid " alt="banner">
                                              <div class="media-body">
                                                  <div class="media-contant">
                                                      <div>
                                                          <div class="rating">
                                                              <i class="fa fa-star" ></i>
                                                              <i class="fa fa-star" ></i>
                                                              <i class="fa fa-star" ></i>
                                                              <i class="fa fa-star" ></i>
                                                              <i class="fa fa-star" ></i>
                                                          </div>
                                                          <p>
                                                              Reader distracted.
                                                          </p>
                                                          <h6>$24.05 <span>$56.21</span></h6>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="media-banner-box">
                                          <div class="media">
                                              <img src="../assets/images/layout-2/media-banner/2.jpg" class="img-fluid " alt="banner">
                                              <div class="media-body">
                                                  <div class="media-contant">
                                                      <div>
                                                          <div class="rating">
                                                              <i class="fa fa-star" ></i>
                                                              <i class="fa fa-star" ></i>
                                                              <i class="fa fa-star" ></i>
                                                              <i class="fa fa-star" ></i>
                                                              <i class="fa fa-star" ></i>
                                                          </div>
                                                          <p>
                                                              Reader distracted.
                                                          </p>
                                                          <h6>$24.05 <span>$56.21</span></h6>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="media-banner-box">
                                          <div class="media">
                                              <img src="../assets/images/layout-2/media-banner/3.jpg" class="img-fluid " alt="banner">
                                              <div class="media-body">
                                                  <div class="media-contant">
                                                      <div>
                                                          <div class="rating">
                                                              <i class="fa fa-star" ></i>
                                                              <i class="fa fa-star" ></i>
                                                              <i class="fa fa-star" ></i>
                                                              <i class="fa fa-star" ></i>
                                                              <i class="fa fa-star" ></i>
                                                          </div>
                                                          <p>
                                                              Reader distracted.
                                                          </p>
                                                          <h6>$24.05 <span>$56.21</span></h6>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                     </div>
                                    <div>
                                        <div class="media-banner media-banner-1 border-0">
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <img src="../assets/images/layout-2/media-banner/3.jpg" class="img-fluid " alt="banner">
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="rating">
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                </div>
                                                                <p>
                                                                    Reader distracted.
                                                                </p>
                                                                <h6>$24.05 <span>$56.21</span></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <img src="../assets/images/layout-2/media-banner/1.jpg" class="img-fluid " alt="banner">
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="rating">
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                </div>
                                                                <p>
                                                                    Reader distracted.
                                                                </p>
                                                                <h6>$24.05 <span>$56.21</span></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <img src="../assets/images/layout-2/media-banner/2.jpg" class="img-fluid " alt="banner">
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="rating">
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                    <i class="fa fa-star" ></i>
                                                                </div>
                                                                <p>
                                                                    Reader distracted.
                                                                </p>
                                                                <h6>$24.05 <span>$56.21</span></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   <div>
                                       <div class="media-banner media-banner-1 border-0">
                                           <div class="media-banner-box">
                                               <div class="media">
                                                   <img src="../assets/images/layout-2/media-banner/2.jpg" class="img-fluid " alt="banner">
                                                   <div class="media-body">
                                                       <div class="media-contant">
                                                           <div>
                                                               <div class="rating">
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                               </div>
                                                               <p>
                                                                   Reader distracted.
                                                               </p>
                                                               <h6>$24.05 <span>$56.21</span></h6>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="media-banner-box">
                                               <div class="media">
                                                   <img src="../assets/images/layout-2/media-banner/3.jpg" class="img-fluid " alt="banner">
                                                   <div class="media-body">
                                                       <div class="media-contant">
                                                           <div>
                                                               <div class="rating">
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                               </div>
                                                               <p>
                                                                   Reader distracted.
                                                               </p>
                                                               <h6>$24.05 <span>$56.21</span></h6>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="media-banner-box">
                                               <div class="media">
                                                   <img src="../assets/images/layout-2/media-banner/1.jpg" class="img-fluid " alt="banner">
                                                   <div class="media-body">
                                                       <div class="media-contant">
                                                           <div>
                                                               <div class="rating">
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                                   <i class="fa fa-star" ></i>
                                                               </div>
                                                               <p>
                                                                   Reader distracted.
                                                               </p>
                                                               <h6>$24.05 <span>$56.21</span></h6>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- media banner tab end -->

    <!--deal banner start-->
    <section class="deal-banner deal-banner-inverse section-big-mt-space">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="deal-banner-containe">
                        <h2>
                            save up to  30% to 40% off
                        </h2>
                        <h1>
                            omg! just look at the great deals!
                        </h1>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 ">
                    <div class="deal-banner-containe">
                        <diV class="deal-btn">
                            <a class="btn-white">
                                View more
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--deal banner end-->

    <!--rounded category start-->
    <section class="rounded-category rounded-category-inverse">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="slide-6 no-arrow">
                        <div>
                            <div class="category-contain">
                               <a href="#">
                                   <div class="img-wrapper">
                                       <img src="../assets/images/layout-1/rounded-cat/1.png" alt="category" class="img-fluid  ">
                                   </div>
                                   <div>
                                       <div class="btn-rounded">
                                           flower
                                       </div>
                                   </div>
                               </a>
                            </div>
                        </div>
                        <div>
                            <div class="category-contain">
                               <a href="#">
                                   <div class="img-wrapper">
                                       <img src="../assets/images/layout-1/rounded-cat/2.png" alt="category" class="img-fluid  ">
                                   </div>
                                   <div>
                                       <div class="btn-rounded">
                                           Furniture
                                       </div>
                                   </div>
                               </a>
                            </div>
                        </div>
                        <div>
                            <div class="category-contain">
                               <a href="#">
                                   <div class="img-wrapper">
                                       <img src="../assets/images/layout-1/rounded-cat/3.png" alt="category" class="img-fluid  ">
                                   </div>
                                   <div>
                                       <div class="btn-rounded">
                                           Bag
                                       </div>
                                   </div>
                               </a>
                            </div>
                        </div>
                        <div>
                            <div class="category-contain">
                               <a href="#">
                                   <div class="img-wrapper">
                                       <img src="../assets/images/layout-1/rounded-cat/4.png" alt="category" class="img-fluid  ">
                                   </div>
                                   <div>
                                       <div class="btn-rounded">
                                           Tools
                                       </div>
                                   </div>
                               </a>
                            </div>
                        </div>
                        <div>
                            <div class="category-contain">
                               <a href="#">
                                   <div class="img-wrapper">
                                       <img src="../assets/images/layout-1/rounded-cat/5.png" alt="category" class="img-fluid  ">
                                   </div>
                                   <div>
                                       <div class="btn-rounded">
                                           Grocery
                                       </div>
                                   </div>
                               </a>
                            </div>
                        </div>
                        <div>
                            <div class="category-contain">
                               <a href="#">
                                   <div class="img-wrapper">
                                       <img src="../assets/images/layout-1/rounded-cat/6.png" alt="category" class="img-fluid  ">
                                   </div>
                                   <div>
                                       <div class="btn-rounded">
                                           camera
                                       </div>
                                   </div>
                               </a>
                            </div>
                        </div>
                        <div>
                            <div class="category-contain">
                               <a href="#">
                                   <div class="img-wrapper">
                                       <img src="../assets/images/layout-1/rounded-cat/7.png" alt="category" class="img-fluid  ">
                                   </div>
                                   <div>
                                       <div class="btn-rounded">
                                           cardigans
                                       </div>
                                   </div>
                               </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--rounded category end-->

    <!--tab product-->
    <section class="section-pt-space" >
        <div class="tab-product-main">
            <div class="tab-prodcut-contain">
                <ul class="tabs tab-title">
                    <li class="current"><a href="tab-1">fashion</a></li>
                    <li class=""><a href="tab-2">electronic</a></li>
                    <li class=""><a href="tab-3">footware</a></li>
                    <li class=""><a href="tab-4">sports</a></li>
                    <li class=""><a href="tab-5">toys</a></li>
                    <li class=""><a href="tab-6">books</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--tab product-->

    <!-- slider tab  -->
    <section class="section-py-space ratio_square product">
        <div class="custom-container">
            <div class="row">
                <div class="col pr-0">
                    <div class="theme-tab product">
                        <div class="tab-content-cls ">
                            <div id="tab-1" class="tab-content active default">
                                <div class="product-slide-6 product-m no-arrow">
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <img src="../assets/images/layout-5/product/1.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-back">
                                                    <img src="../assets/images/layout-5/product/a1.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()">
                                                        <i class="ti-bag" ></i>
                                                    </button>
                                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                                        <i class="ti-heart" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                        <i class="ti-search" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="compare.html" title="Compare">
                                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                                <div class="new-label1">
                                                    <div>new</div>
                                                </div>
                                                <div class="on-sale1">
                                                    on sale
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline ">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="#">
                                                            <h6 class="price-title">
                                                                reader will be distracted.
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 56.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 24.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <img src="../assets/images/layout-5/product/2.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-back">
                                                    <img src="../assets/images/layout-5/product/a2.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()">
                                                        <i class="ti-bag" ></i>
                                                    </button>
                                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                                        <i class="ti-heart" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                        <i class="ti-search" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="compare.html" title="Compare">
                                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                                    </a>

                                                </div>
                                                <div class="new-label1">
                                                    <div>new</div>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="">
                                                            <h6 class="price-title">
                                                                reader will be distracted.
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 56.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 24.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <img src="../assets/images/layout-5/product/3.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-back">
                                                    <img src="../assets/images/layout-5/product/a3.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()">
                                                        <i class="ti-bag" ></i>
                                                    </button>
                                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                                        <i class="ti-heart" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                        <i class="ti-search" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="compare.html" title="Compare">
                                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="">
                                                            <h6 class="price-title">
                                                                reader will be distracted.
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 56.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 24.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <img src="../assets/images/layout-5/product/4.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-back">
                                                    <img src="../assets/images/layout-5/product/a4.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()">
                                                        <i class="ti-bag" ></i>
                                                    </button>
                                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                                        <i class="ti-heart" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                        <i class="ti-search" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="compare.html" title="Compare">
                                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                                    </a>

                                                </div>
                                                <div class="new-label1">
                                                    <div>new</div>
                                                </div>
                                                <div class="on-sale1">
                                                    on sale
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="">
                                                            <h6 class="price-title">
                                                                reader will be distracted.
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 56.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 24.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <img src="../assets/images/layout-5/product/5.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-back">
                                                    <img src="../assets/images/layout-5/product/a5.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()">
                                                        <i class="ti-bag" ></i>
                                                    </button>
                                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                                        <i class="ti-heart" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                        <i class="ti-search" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="compare.html" title="Compare">
                                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="">
                                                            <h6 class="price-title">
                                                                reader will be distracted.
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 56.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 24.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <img src="../assets/images/layout-5/product/6.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-back">
                                                    <img src="../assets/images/layout-5/product/a6.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()">
                                                        <i class="ti-bag" ></i>
                                                    </button>
                                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                                        <i class="ti-heart" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                        <i class="ti-search" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="compare.html" title="Compare">
                                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="">
                                                            <h6 class="price-title">
                                                                reader will be distracted.
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 56.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 24.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <img src="../assets/images/layout-5/product/7.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-back">
                                                    <img src="../assets/images/layout-5/product/4.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()">
                                                        <i class="ti-bag" ></i>
                                                    </button>
                                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                                        <i class="ti-heart" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                        <i class="ti-search" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="compare.html" title="Compare">
                                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="">
                                                            <h6 class="price-title">
                                                                reader will be distracted.
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 56.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 24.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-2" class="tab-content ">
                                <div class="product-slide-6 product-m no-arrow">
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <img src="../assets/images/layout-5/product/7.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-back">
                                                    <img src="../assets/images/layout-5/product/4.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()">
                                                        <i class="ti-bag" ></i>
                                                    </button>
                                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                                        <i class="ti-heart" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                        <i class="ti-search" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="compare.html" title="Compare">
                                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="">
                                                            <h6 class="price-title">
                                                                reader will be distracted.
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 56.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 24.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <img src="../assets/images/layout-5/product/1.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-back">
                                                    <img src="../assets/images/layout-5/product/a1.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()">
                                                        <i class="ti-bag" ></i>
                                                    </button>
                                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                                        <i class="ti-heart" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                        <i class="ti-search" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="compare.html" title="Compare">
                                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                                <div class="new-label1">
                                                    <div>new</div>
                                                </div>
                                                <div class="on-sale1">
                                                    on sale
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline ">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="#">
                                                            <h6 class="price-title">
                                                                reader will be distracted.
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 56.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 24.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <img src="../assets/images/layout-5/product/2.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-back">
                                                    <img src="../assets/images/layout-5/product/a2.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()">
                                                        <i class="ti-bag" ></i>
                                                    </button>
                                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                                        <i class="ti-heart" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                        <i class="ti-search" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="compare.html" title="Compare">
                                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                                    </a>

                                                </div>
                                                <div class="new-label1">
                                                    <div>new</div>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="">
                                                            <h6 class="price-title">
                                                                reader will be distracted.
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 56.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 24.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <img src="../assets/images/layout-5/product/3.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-back">
                                                    <img src="../assets/images/layout-5/product/a3.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()">
                                                        <i class="ti-bag" ></i>
                                                    </button>
                                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                                        <i class="ti-heart" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                        <i class="ti-search" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="compare.html" title="Compare">
                                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="">
                                                            <h6 class="price-title">
                                                                reader will be distracted.
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 56.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 24.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <img src="../assets/images/layout-5/product/4.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-back">
                                                    <img src="../assets/images/layout-5/product/a4.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()">
                                                        <i class="ti-bag" ></i>
                                                    </button>
                                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                                        <i class="ti-heart" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                        <i class="ti-search" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="compare.html" title="Compare">
                                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                                    </a>

                                                </div>
                                                <div class="new-label1">
                                                    <div>new</div>
                                                </div>
                                                <div class="on-sale1">
                                                    on sale
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="">
                                                            <h6 class="price-title">
                                                                reader will be distracted.
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 56.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 24.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <img src="../assets/images/layout-5/product/5.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-back">
                                                    <img src="../assets/images/layout-5/product/a5.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()">
                                                        <i class="ti-bag" ></i>
                                                    </button>
                                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                                        <i class="ti-heart" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                        <i class="ti-search" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="compare.html" title="Compare">
                                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="">
                                                            <h6 class="price-title">
                                                                reader will be distracted.
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 56.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 24.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <img src="../assets/images/layout-5/product/6.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-back">
                                                    <img src="../assets/images/layout-5/product/a6.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()">
                                                        <i class="ti-bag" ></i>
                                                    </button>
                                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                                        <i class="ti-heart" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                        <i class="ti-search" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="compare.html" title="Compare">
                                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="">
                                                            <h6 class="price-title">
                                                                reader will be distracted.
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 56.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 24.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-3" class="tab-content ">
                                <div class="product-slide-6 product-m no-arrow">
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <img src="../assets/images/layout-5/product/6.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-back">
                                                    <img src="../assets/images/layout-5/product/a6.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()">
                                                        <i class="ti-bag" ></i>
                                                    </button>
                                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                                        <i class="ti-heart" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                        <i class="ti-search" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="compare.html" title="Compare">
                                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="">
                                                            <h6 class="price-title">
                                                                reader will be distracted.
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 56.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 24.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <img src="../assets/images/layout-5/product/7.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-back">
                                                    <img src="../assets/images/layout-5/product/4.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()">
                                                        <i class="ti-bag" ></i>
                                                    </button>
                                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                                        <i class="ti-heart" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                        <i class="ti-search" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="compare.html" title="Compare">
                                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="">
                                                            <h6 class="price-title">
                                                                reader will be distracted.
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 56.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 24.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <img src="../assets/images/layout-5/product/1.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-back">
                                                    <img src="../assets/images/layout-5/product/a1.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()">
                                                        <i class="ti-bag" ></i>
                                                    </button>
                                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                                        <i class="ti-heart" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                        <i class="ti-search" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="compare.html" title="Compare">
                                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                                <div class="new-label1">
                                                    <div>new</div>
                                                </div>
                                                <div class="on-sale1">
                                                    on sale
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline ">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="#">
                                                            <h6 class="price-title">
                                                                reader will be distracted.
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 56.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 24.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <img src="../assets/images/layout-5/product/2.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-back">
                                                    <img src="../assets/images/layout-5/product/a2.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()">
                                                        <i class="ti-bag" ></i>
                                                    </button>
                                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                                        <i class="ti-heart" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                        <i class="ti-search" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="compare.html" title="Compare">
                                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                                    </a>

                                                </div>
                                                <div class="new-label1">
                                                    <div>new</div>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="">
                                                            <h6 class="price-title">
                                                                reader will be distracted.
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 56.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 24.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <img src="../assets/images/layout-5/product/3.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-back">
                                                    <img src="../assets/images/layout-5/product/a3.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()">
                                                        <i class="ti-bag" ></i>
                                                    </button>
                                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                                        <i class="ti-heart" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                        <i class="ti-search" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="compare.html" title="Compare">
                                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="">
                                                            <h6 class="price-title">
                                                                reader will be distracted.
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 56.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 24.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <img src="../assets/images/layout-5/product/4.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-back">
                                                    <img src="../assets/images/layout-5/product/a4.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()">
                                                        <i class="ti-bag" ></i>
                                                    </button>
                                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                                        <i class="ti-heart" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                        <i class="ti-search" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="compare.html" title="Compare">
                                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                                    </a>

                                                </div>
                                                <div class="new-label1">
                                                    <div>new</div>
                                                </div>
                                                <div class="on-sale1">
                                                    on sale
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="">
                                                            <h6 class="price-title">
                                                                reader will be distracted.
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 56.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 24.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <img src="../assets/images/layout-5/product/5.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-back">
                                                    <img src="../assets/images/layout-5/product/a5.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()">
                                                        <i class="ti-bag" ></i>
                                                    </button>
                                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                                        <i class="ti-heart" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                        <i class="ti-search" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="compare.html" title="Compare">
                                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="">
                                                            <h6 class="price-title">
                                                                reader will be distracted.
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 56.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 24.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-4" class="tab-content ">
                                <div class="product-slide-6 product-m no-arrow">
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <img src="../assets/images/layout-5/product/5.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-back">
                                                    <img src="../assets/images/layout-5/product/a5.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()">
                                                        <i class="ti-bag" ></i>
                                                    </button>
                                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                                        <i class="ti-heart" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                        <i class="ti-search" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="compare.html" title="Compare">
                                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="">
                                                            <h6 class="price-title">
                                                                reader will be distracted.
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 56.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 24.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <img src="../assets/images/layout-5/product/6.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-back">
                                                    <img src="../assets/images/layout-5/product/a6.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()">
                                                        <i class="ti-bag" ></i>
                                                    </button>
                                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                                        <i class="ti-heart" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                        <i class="ti-search" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="compare.html" title="Compare">
                                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="">
                                                            <h6 class="price-title">
                                                                reader will be distracted.
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 56.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 24.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <img src="../assets/images/layout-5/product/7.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-back">
                                                    <img src="../assets/images/layout-5/product/4.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()">
                                                        <i class="ti-bag" ></i>
                                                    </button>
                                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                                        <i class="ti-heart" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                        <i class="ti-search" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="compare.html" title="Compare">
                                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="">
                                                            <h6 class="price-title">
                                                                reader will be distracted.
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 56.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 24.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <img src="../assets/images/layout-5/product/1.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-back">
                                                    <img src="../assets/images/layout-5/product/a1.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()">
                                                        <i class="ti-bag" ></i>
                                                    </button>
                                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                                        <i class="ti-heart" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                        <i class="ti-search" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="compare.html" title="Compare">
                                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                                <div class="new-label1">
                                                    <div>new</div>
                                                </div>
                                                <div class="on-sale1">
                                                    on sale
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline ">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="#">
                                                            <h6 class="price-title">
                                                                reader will be distracted.
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 56.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 24.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <img src="../assets/images/layout-5/product/2.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-back">
                                                    <img src="../assets/images/layout-5/product/a2.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()">
                                                        <i class="ti-bag" ></i>
                                                    </button>
                                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                                        <i class="ti-heart" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                        <i class="ti-search" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="compare.html" title="Compare">
                                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                                    </a>

                                                </div>
                                                <div class="new-label1">
                                                    <div>new</div>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="">
                                                            <h6 class="price-title">
                                                                reader will be distracted.
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 56.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 24.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <img src="../assets/images/layout-5/product/3.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-back">
                                                    <img src="../assets/images/layout-5/product/a3.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()">
                                                        <i class="ti-bag" ></i>
                                                    </button>
                                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                                        <i class="ti-heart" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                        <i class="ti-search" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="compare.html" title="Compare">
                                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="">
                                                            <h6 class="price-title">
                                                                reader will be distracted.
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 56.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 24.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <img src="../assets/images/layout-5/product/4.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-back">
                                                    <img src="../assets/images/layout-5/product/a4.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()">
                                                        <i class="ti-bag" ></i>
                                                    </button>
                                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                                        <i class="ti-heart" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                        <i class="ti-search" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="compare.html" title="Compare">
                                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                                    </a>

                                                </div>
                                                <div class="new-label1">
                                                    <div>new</div>
                                                </div>
                                                <div class="on-sale1">
                                                    on sale
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="">
                                                            <h6 class="price-title">
                                                                reader will be distracted.
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 56.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 24.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-5" class="tab-content ">
                                <div class="product-slide-6 product-m no-arrow">
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <img src="../assets/images/layout-5/product/4.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-back">
                                                    <img src="../assets/images/layout-5/product/a4.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()">
                                                        <i class="ti-bag" ></i>
                                                    </button>
                                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                                        <i class="ti-heart" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                        <i class="ti-search" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="compare.html" title="Compare">
                                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                                    </a>

                                                </div>
                                                <div class="new-label1">
                                                    <div>new</div>
                                                </div>
                                                <div class="on-sale1">
                                                    on sale
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="">
                                                            <h6 class="price-title">
                                                                reader will be distracted.
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 56.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 24.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <img src="../assets/images/layout-5/product/5.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-back">
                                                    <img src="../assets/images/layout-5/product/a5.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()">
                                                        <i class="ti-bag" ></i>
                                                    </button>
                                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                                        <i class="ti-heart" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                        <i class="ti-search" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="compare.html" title="Compare">
                                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="">
                                                            <h6 class="price-title">
                                                                reader will be distracted.
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 56.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 24.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <img src="../assets/images/layout-5/product/6.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-back">
                                                    <img src="../assets/images/layout-5/product/a6.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()">
                                                        <i class="ti-bag" ></i>
                                                    </button>
                                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                                        <i class="ti-heart" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                        <i class="ti-search" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="compare.html" title="Compare">
                                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="">
                                                            <h6 class="price-title">
                                                                reader will be distracted.
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 56.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 24.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <img src="../assets/images/layout-5/product/7.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-back">
                                                    <img src="../assets/images/layout-5/product/4.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()">
                                                        <i class="ti-bag" ></i>
                                                    </button>
                                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                                        <i class="ti-heart" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                        <i class="ti-search" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="compare.html" title="Compare">
                                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="">
                                                            <h6 class="price-title">
                                                                reader will be distracted.
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 56.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 24.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <img src="../assets/images/layout-5/product/1.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-back">
                                                    <img src="../assets/images/layout-5/product/a1.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()">
                                                        <i class="ti-bag" ></i>
                                                    </button>
                                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                                        <i class="ti-heart" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                        <i class="ti-search" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="compare.html" title="Compare">
                                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                                <div class="new-label1">
                                                    <div>new</div>
                                                </div>
                                                <div class="on-sale1">
                                                    on sale
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline ">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="#">
                                                            <h6 class="price-title">
                                                                reader will be distracted.
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 56.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 24.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <img src="../assets/images/layout-5/product/2.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-back">
                                                    <img src="../assets/images/layout-5/product/a2.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()">
                                                        <i class="ti-bag" ></i>
                                                    </button>
                                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                                        <i class="ti-heart" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                        <i class="ti-search" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="compare.html" title="Compare">
                                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                                    </a>

                                                </div>
                                                <div class="new-label1">
                                                    <div>new</div>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="">
                                                            <h6 class="price-title">
                                                                reader will be distracted.
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 56.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 24.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <img src="../assets/images/layout-5/product/3.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-back">
                                                    <img src="../assets/images/layout-5/product/a3.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()">
                                                        <i class="ti-bag" ></i>
                                                    </button>
                                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                                        <i class="ti-heart" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                        <i class="ti-search" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="compare.html" title="Compare">
                                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="">
                                                            <h6 class="price-title">
                                                                reader will be distracted.
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 56.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 24.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-6" class="tab-content ">
                                <div class="product-slide-6 product-m no-arrow">
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <img src="../assets/images/layout-5/product/3.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-back">
                                                    <img src="../assets/images/layout-5/product/a3.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()">
                                                        <i class="ti-bag" ></i>
                                                    </button>
                                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                                        <i class="ti-heart" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                        <i class="ti-search" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="compare.html" title="Compare">
                                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="">
                                                            <h6 class="price-title">
                                                                reader will be distracted.
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 56.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 24.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <img src="../assets/images/layout-5/product/4.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-back">
                                                    <img src="../assets/images/layout-5/product/a4.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()">
                                                        <i class="ti-bag" ></i>
                                                    </button>
                                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                                        <i class="ti-heart" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                        <i class="ti-search" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="compare.html" title="Compare">
                                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                                    </a>

                                                </div>
                                                <div class="new-label1">
                                                    <div>new</div>
                                                </div>
                                                <div class="on-sale1">
                                                    on sale
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="">
                                                            <h6 class="price-title">
                                                                reader will be distracted.
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 56.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 24.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <img src="../assets/images/layout-5/product/5.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-back">
                                                    <img src="../assets/images/layout-5/product/a5.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()">
                                                        <i class="ti-bag" ></i>
                                                    </button>
                                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                                        <i class="ti-heart" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                        <i class="ti-search" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="compare.html" title="Compare">
                                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="">
                                                            <h6 class="price-title">
                                                                reader will be distracted.
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 56.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 24.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <img src="../assets/images/layout-5/product/6.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-back">
                                                    <img src="../assets/images/layout-5/product/a6.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()">
                                                        <i class="ti-bag" ></i>
                                                    </button>
                                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                                        <i class="ti-heart" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                        <i class="ti-search" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="compare.html" title="Compare">
                                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="">
                                                            <h6 class="price-title">
                                                                reader will be distracted.
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 56.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 24.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <img src="../assets/images/layout-5/product/7.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-back">
                                                    <img src="../assets/images/layout-5/product/4.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()">
                                                        <i class="ti-bag" ></i>
                                                    </button>
                                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                                        <i class="ti-heart" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                        <i class="ti-search" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="compare.html" title="Compare">
                                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="">
                                                            <h6 class="price-title">
                                                                reader will be distracted.
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 56.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 24.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <img src="../assets/images/layout-5/product/1.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-back">
                                                    <img src="../assets/images/layout-5/product/a1.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()">
                                                        <i class="ti-bag" ></i>
                                                    </button>
                                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                                        <i class="ti-heart" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                        <i class="ti-search" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="compare.html" title="Compare">
                                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                                <div class="new-label1">
                                                    <div>new</div>
                                                </div>
                                                <div class="on-sale1">
                                                    on sale
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline ">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="#">
                                                            <h6 class="price-title">
                                                                reader will be distracted.
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 56.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 24.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <img src="../assets/images/layout-5/product/2.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-back">
                                                    <img src="../assets/images/layout-5/product/a2.jpg" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button onclick="openCart()">
                                                        <i class="ti-bag" ></i>
                                                    </button>
                                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                                        <i class="ti-heart" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                        <i class="ti-search" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="compare.html" title="Compare">
                                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                                    </a>

                                                </div>
                                                <div class="new-label1">
                                                    <div>new</div>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="">
                                                            <h6 class="price-title">
                                                                reader will be distracted.
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 56.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 24.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- slider tab end -->

    <!--testimonial start-->
    <section class="testimonial testimonial-inverse section-mb-space">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="slide-1 no-arrow">
                            <div>
                                <div class="testimonial-contain">
                                    <div class="media">
                                        <div class="testimonial-img">
                                            <img src="../assets/images/testimonial/1.jpg" class="img-fluid rounded-circle  " alt="testimonial">
                                        </div>
                                        <div class="media-body">
                                            <h5>mark jecno</h5>
                                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="testimonial-contain">
                                    <div class="media">
                                        <div class="testimonial-img">
                                            <img src="../assets/images/testimonial/2.jpg" class="img-fluid rounded-circle  " alt="testimonial">
                                        </div>
                                        <div class="media-body">
                                            <h5>mark jecno</h5>
                                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="testimonial-contain">
                                    <div class="media">
                                        <div class="testimonial-img">
                                            <img src="../assets/images/testimonial/3.jpg" class="img-fluid rounded-circle  " alt="testimonial">
                                        </div>
                                        <div class="media-body">
                                            <h5>mark jecno</h5>
                                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!--testimonial end-->

    <!--hot deal start-->
    <section class="hot-deal b-g-white section-big-pb-space space-abjust">
        <div class="custom-container">
            <div class="row hot-2">
                <div class="col-12">
                    <!--title start-->
                    <div class="title3 b-g-white text-left">
                        <h4>today's hot deal</h4>
                    </div>
                    <!--titel end-->
                </div>

                <div class="col-lg-9">
                    <div class="slide-1 no-arrow">
                        <div>
                            <div class="hot-deal-contain deal-abjust">
                                <div class="row hot-deal-subcontain">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="hotdeal-right-slick border-0">
                                            <div><img src="../assets/images/layout-2/hot-deal/8.jpg" alt="hot-deal" class="img-fluid  "></div>
                                            <div><img src="../assets/images/layout-2/hot-deal/7.jpg" alt="hot-deal" class="img-fluid  "></div>
                                            <div><img src="../assets/images/layout-2/hot-deal/6.jpg" alt="hot-deal" class="img-fluid  "></div>
                                            <div><img src="../assets/images/layout-2/hot-deal/5.jpg" alt="hot-deal" class="img-fluid  "></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="hot-deal-center">
                                            <div>
                                                <div>
                                                    <h5>Simply dummy text of the printing. </h5>
                                                </div>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div>
                                                    <p>
                                                        It is a long established fact that a reader. It is a long established fact that a reader.It is a long established fact that a reader. It is a long established fact that a reader.
                                                    </p>
                                                    <div class="price">
                                                        <span>$45.00</span>
                                                        <span>$50.30</span>
                                                    </div>
                                                </div>
                                                <div class="timer">
                                                    <p id="demo1">
                                                   <span>
                                                       25
                                                       <span>days</span>
                                                   </span>
                                                        <span>
                                                        46
                                                        <span>hrs</span>
                                                    </span>
                                                        <span>
                                                        12
                                                        <span>min</span>
                                                    </span>
                                                        <span>
                                                        03
                                                        <span>sec</span>
                                                    </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="hotdeal-right-nav">
                                            <div><img src="../assets/images/layout-2/hot-deal/8.jpg" alt="hot-dea" class="img-fluid  " ></div>
                                            <div><img src="../assets/images/layout-2/hot-deal/7.jpg" alt="hot-dea" class="img-fluid  " ></div>
                                            <div><img src="../assets/images/layout-2/hot-deal/6.jpg" alt="hot-dea" class="img-fluid  " ></div>
                                            <div><img src="../assets/images/layout-2/hot-deal/5.jpg" alt="hot-dea" class="img-fluid  " ></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="hot-deal-contain deal-abjust">
                                <div class="row hot-deal-subcontain">
                                    <div class="col-lg-4 col-md-4 ">
                                        <div class="hotdeal-right-slick border-0">
                                            <div><img src="../assets/images/layout-2/hot-deal/8.jpg" alt="hot-deal" class="img-fluid  "></div>
                                            <div><img src="../assets/images/layout-2/hot-deal/7.jpg" alt="hot-deal" class="img-fluid  "></div>
                                            <div><img src="../assets/images/layout-2/hot-deal/6.jpg" alt="hot-deal" class="img-fluid  "></div>
                                            <div><img src="../assets/images/layout-2/hot-deal/5.jpg" alt="hot-deal" class="img-fluid  "></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="hot-deal-center">
                                            <div>
                                                <div>
                                                    <h5>Simply dummy text of the printing. </h5>
                                                </div>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div>
                                                    <p>
                                                        It is a long established fact that a reader. It is a long established fact that a reader.It is a long established fact that a reader. It is a long established fact that a reader.
                                                    </p>
                                                    <div class="price">
                                                        <span>$45.00</span>
                                                        <span>$50.30</span>
                                                    </div>
                                                </div>
                                                <div class="timer">
                                                    <p id="demo">
                                                   <span>
                                                       25
                                                       <span>days</span>
                                                   </span>
                                                        <span>
                                                        46
                                                        <span>hrs</span>
                                                    </span>
                                                        <span>
                                                        12
                                                        <span>min</span>
                                                    </span>
                                                        <span>
                                                        03
                                                        <span>sec</span>
                                                    </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="hotdeal-right-nav">
                                            <div><img src="../assets/images/layout-2/hot-deal/8.jpg" alt="hot-dea" class="img-fluid  " ></div>
                                            <div><img src="../assets/images/layout-2/hot-deal/7.jpg" alt="hot-dea" class="img-fluid  " ></div>
                                            <div><img src="../assets/images/layout-2/hot-deal/6.jpg" alt="hot-dea" class="img-fluid  " ></div>
                                            <div><img src="../assets/images/layout-2/hot-deal/5.jpg" alt="hot-dea" class="img-fluid  " ></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="slide-1-section no-arrow">
                        <div>
                            <div class="media-banner border-0">
                                <div class="media-banner-box">
                                    <div class="media-heading">
                                        <h5>New Products</h5>
                                    </div>
                                </div>
                                <div class="media-banner-box">
                                    <div class="media">
                                        <img src="../assets/images/layout-1/media-banner/1.jpg" class="img-fluid  " alt="banner">
                                        <div class="media-body">
                                            <div class="media-contant">
                                                <div>
                                                    <div class="rating">
                                                        <i class="fa fa-star" ></i>
                                                        <i class="fa fa-star" ></i>
                                                        <i class="fa fa-star" ></i>
                                                        <i class="fa fa-star" ></i>
                                                        <i class="fa fa-star" ></i>
                                                    </div>
                                                    <p>
                                                        Generator
                                                        on Internet.
                                                    </p>
                                                    <h6>$153.00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-banner-box">
                                    <div class="media">
                                        <img src="../assets/images/layout-1/media-banner/2.jpg" class="img-fluid  " alt="banner">
                                        <div class="media-body">
                                            <div class="media-contant">
                                                <div>
                                                    <div class="rating">
                                                        <i class="fa fa-star" ></i>
                                                        <i class="fa fa-star" ></i>
                                                        <i class="fa fa-star" ></i>
                                                        <i class="fa fa-star" ></i>
                                                        <i class="fa fa-star" ></i>
                                                    </div>
                                                    <p>
                                                        Generator
                                                        on Internet.
                                                    </p>
                                                    <h6>$153.00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-banner-box">
                                    <div class="media">
                                        <img src="../assets/images/layout-1/media-banner/2.jpg" class="img-fluid  " alt="banner">
                                        <div class="media-body">
                                            <div class="media-contant">
                                                <div>
                                                    <div class="rating">
                                                        <i class="fa fa-star" ></i>
                                                        <i class="fa fa-star" ></i>
                                                        <i class="fa fa-star" ></i>
                                                        <i class="fa fa-star" ></i>
                                                        <i class="fa fa-star" ></i>
                                                    </div>
                                                    <p>
                                                        Generator
                                                        on Internet.
                                                    </p>
                                                    <h6>$153.00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-banner-box">
                                    <div class="media-view">
                                        <h5>View More</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="media-banner  border-0">
                                <div class="media-banner-box">
                                    <div class="media-heading">
                                        <h5>Feature item</h5>
                                    </div>
                                </div>
                                <div class="media-banner-box">
                                    <div class="media">
                                        <img src="../assets/images/layout-1/media-banner/3.jpg" class="img-fluid  " alt="banner">
                                        <div class="media-body">
                                            <div class="media-contant">
                                                <div>
                                                    <div class="rating">
                                                        <i class="fa fa-star" ></i>
                                                        <i class="fa fa-star" ></i>
                                                        <i class="fa fa-star" ></i>
                                                        <i class="fa fa-star" ></i>
                                                        <i class="fa fa-star" ></i>
                                                    </div>
                                                    <p>
                                                        Generator
                                                        on Internet.
                                                    </p>
                                                    <h6>$153.00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-banner-box">
                                    <div class="media">
                                        <img src="../assets/images/layout-1/media-banner/4.jpg" class="img-fluid  " alt="banner">
                                        <div class="media-body">
                                            <div class="media-contant">
                                                <div>
                                                    <div class="rating">
                                                        <i class="fa fa-star" ></i>
                                                        <i class="fa fa-star" ></i>
                                                        <i class="fa fa-star" ></i>
                                                        <i class="fa fa-star" ></i>
                                                        <i class="fa fa-star" ></i>
                                                    </div>
                                                    <p>
                                                        Generator
                                                        on Internet.
                                                    </p>
                                                    <h6>$153.00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-banner-box">
                                    <div class="media">
                                        <img src="../assets/images/layout-1/media-banner/3.jpg" class="img-fluid  " alt="banner">
                                        <div class="media-body">
                                            <div class="media-contant">
                                                <div>
                                                    <div class="rating">
                                                        <i class="fa fa-star" ></i>
                                                        <i class="fa fa-star" ></i>
                                                        <i class="fa fa-star" ></i>
                                                        <i class="fa fa-star" ></i>
                                                        <i class="fa fa-star" ></i>
                                                    </div>
                                                    <p>
                                                        Generator
                                                        on Internet.
                                                    </p>
                                                    <h6>$153.00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-banner-box">
                                    <div class="media-view">
                                        <h5>View More</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div >
                            <div class="media-banner  border-0">
                                <div class="media-banner-box">
                                    <div class="media-heading">
                                        <h5>Best Sellers</h5>
                                    </div>
                                </div>
                                <div class="media-banner-box">
                                    <div class="media">
                                        <img src="../assets/images/layout-1/media-banner/1.jpg" class="img-fluid  " alt="banner">
                                        <div class="media-body">
                                            <div class="media-contant">
                                                <div>
                                                    <div class="rating">
                                                        <i class="fa fa-star" ></i>
                                                        <i class="fa fa-star" ></i>
                                                        <i class="fa fa-star" ></i>
                                                        <i class="fa fa-star" ></i>
                                                        <i class="fa fa-star" ></i>
                                                    </div>
                                                    <p>
                                                        Generator
                                                        on Internet.
                                                    </p>
                                                    <h6>$153.00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-banner-box">
                                    <div class="media">
                                        <img src="../assets/images/layout-1/media-banner/2.jpg" class="img-fluid  " alt="banner">
                                        <div class="media-body">
                                            <div class="media-contant">
                                                <div>
                                                    <div class="rating">
                                                        <i class="fa fa-star" ></i>
                                                        <i class="fa fa-star" ></i>
                                                        <i class="fa fa-star" ></i>
                                                        <i class="fa fa-star" ></i>
                                                        <i class="fa fa-star" ></i>
                                                    </div>
                                                    <p>
                                                        Generator
                                                        on Internet.
                                                    </p>
                                                    <h6>$153.00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-banner-box">
                                    <div class="media">
                                        <img src="../assets/images/layout-1/media-banner/1.jpg" class="img-fluid  " alt="banner">
                                        <div class="media-body">
                                            <div class="media-contant">
                                                <div>
                                                    <div class="rating">
                                                        <i class="fa fa-star" ></i>
                                                        <i class="fa fa-star" ></i>
                                                        <i class="fa fa-star" ></i>
                                                        <i class="fa fa-star" ></i>
                                                        <i class="fa fa-star" ></i>
                                                    </div>
                                                    <p>
                                                        Generator
                                                        on Internet.
                                                    </p>
                                                    <h6>$153.00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-banner-box">
                                    <div class="media-view">
                                        <h5>View More</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--hot deal start-->

    <!--blog start-->
    <section class="blog ">
        <div class="custom-container">
            <div class="row">
              <div class="col-12">
                  <div class="title3">
                      <h4>recent blog post</h4>
                  </div>
              </div>
                <div class="col-12 pr-0">
                    <div class="blog-slide-4 no-arrow">
                        <div>
                            <div class="blog-contain">
                                <div class="blog-img">
                                    <img src="../assets/images/layout-5/blog/1.jpg" alt="blog" class="img-fluid ">
                                </div>
                                <div class="blog-details">
                                    <h4>Latest News Post</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eleifend a massa rhoncus gravida.</p>
                                    <span><a href="#">read more</a></span>
                                </div>
                                <div class="blog-label">
                                    <p>25 july 2018</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="blog-contain">
                                <div class="blog-img">
                                    <img src="../assets/images/layout-5/blog/2.jpg" alt="blog" class="img-fluid   ">
                                </div>
                                <div class="blog-details">
                                    <h4>Latest News Post</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eleifend a massa rhoncus gravida.</p>
                                    <span><a href="#">read more</a></span>
                                </div>
                                <div class="blog-label">
                                    <p>25 july 2018</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="blog-contain">
                                <div class="blog-img">
                                    <img src="../assets/images/layout-5/blog/3.jpg" alt="blog" class="img-fluid   ">
                                </div>
                                <div class="blog-details">
                                    <h4>Latest News Post</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eleifend a massa rhoncus gravida.</p>
                                    <span><a href="#">read more</a></span>
                                </div>
                                <div class="blog-label">
                                    <p>25 july 2018</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="blog-contain">
                                <div class="blog-img">
                                    <img src="../assets/images/layout-5/blog/4.jpg" alt="blog" class="img-fluid   ">
                                </div>
                                <div class="blog-details">
                                    <h4>Latest News Post</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eleifend a massa rhoncus gravida.</p>
                                    <span><a href="#">read more</a></span>
                                </div>
                                <div class="blog-label">
                                    <p>25 july 2018</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="blog-contain">
                                <div class="blog-img">
                                    <img src="../assets/images/layout-5/blog/5.jpg" alt="blog" class="img-fluid   ">
                                </div>
                                <div class="blog-details">
                                    <h4>Latest News Post</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eleifend a massa rhoncus gravida.</p>
                                    <span><a href="#">read more</a></span>
                                </div>
                                <div class="blog-label">
                                    <p>25 july 2018</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="blog-contain">
                                <div class="blog-img">
                                    <img src="../assets/images/layout-5/blog/2.jpg" alt="blog" class="img-fluid   ">
                                </div>
                                <div class="blog-details">
                                    <h4>Latest News Post</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eleifend a massa rhoncus gravida.</p>
                                    <span><a href="#">read more</a></span>
                                </div>
                                <div class="blog-label">
                                    <p>25 july 2018</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--blog end-->

    <!--instagram start-->
      <section class="instagram section-big-mt-space  section-big-py-space b-g-white">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="insta-contant insta-contant-inverse">
                            <div class="slide-7 no-arrow">
                                <div>
                                    <div class="instagram-box">
                                        <img src="../assets/images/insta/1.jpg" class="img-fluid  " alt="insta">
                                        <div class="insta-cover">
                                            <i class="fa fa-instagram" ></i>
                                        </div>
                                    </div>
                                    <div class="instagram-box">
                                        <img src="../assets/images/insta/2.jpg" class="img-fluid  " alt="insta">
                                        <div class="insta-cover">
                                            <i class="fa fa-instagram" ></i>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="instagram-box">
                                        <img src="../assets/images/insta/3.jpg" class="img-fluid  " alt="insta">
                                        <div class="insta-cover">
                                            <i class="fa fa-instagram" ></i>
                                        </div>
                                    </div>
                                    <div class="instagram-box">
                                        <img src="../assets/images/insta/4.jpg" class="img-fluid  " alt="insta">
                                        <div class="insta-cover">
                                            <i class="fa fa-instagram" ></i>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="instagram-box">
                                        <img src="../assets/images/insta/5.jpg" class="img-fluid  " alt="insta">
                                        <div class="insta-cover">
                                            <i class="fa fa-instagram" ></i>
                                        </div>
                                    </div>
                                    <div class="instagram-box">
                                        <img src="../assets/images/insta/6.jpg" class="img-fluid  " alt="insta">
                                        <div class="insta-cover">
                                            <i class="fa fa-instagram" ></i>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="instagram-box">
                                        <img src="../assets/images/insta/7.jpg" class="img-fluid  " alt="insta">
                                        <div class="insta-cover">
                                            <i class="fa fa-instagram" ></i>
                                        </div>
                                    </div>
                                    <div class="instagram-box">
                                        <img src="../assets/images/insta/8.jpg" class="img-fluid  " alt="insta">
                                        <div class="insta-cover">
                                            <i class="fa fa-instagram" ></i>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="instagram-box">
                                        <img src="../assets/images/insta/9.jpg" class="img-fluid  " alt="insta">
                                        <div class="insta-cover">
                                            <i class="fa fa-instagram" ></i>
                                        </div>
                                    </div>
                                    <div class="instagram-box">
                                        <img src="../assets/images/insta/10.jpg" class="img-fluid  " alt="insta">
                                        <div class="insta-cover">
                                            <i class="fa fa-instagram" ></i>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="instagram-box">
                                        <img src="../assets/images/insta/11.jpg" class="img-fluid  " alt="insta">
                                        <div class="insta-cover">
                                            <i class="fa fa-instagram" ></i>
                                        </div>
                                    </div>
                                    <div class="instagram-box">
                                        <img src="../assets/images/insta/12.jpg" class="img-fluid  " alt="insta">
                                        <div class="insta-cover">
                                            <i class="fa fa-instagram" ></i>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="instagram-box">
                                        <img src="../assets/images/insta/13.jpg" class="img-fluid  " alt="insta">
                                        <div class="insta-cover">
                                            <i class="fa fa-instagram" ></i>
                                        </div>
                                    </div>
                                    <div class="instagram-box">
                                        <img src="../assets/images/insta/14.jpg" class="img-fluid  " alt="insta">
                                        <div class="insta-cover">
                                            <i class="fa fa-instagram" ></i>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="instagram-box">
                                        <img src="../assets/images/insta/2.jpg" class="img-fluid  " alt="insta">
                                        <div class="insta-cover">
                                            <i class="fa fa-instagram" ></i>
                                        </div>
                                    </div>
                                    <div class="instagram-box">
                                        <img src="../assets/images/insta/6.jpg" class="img-fluid  " alt="insta">
                                        <div class="insta-cover">
                                            <i class="fa fa-instagram" ></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="insta-sub-contant">
                               <div class="insta-title">
                                   <h4><span>#</span>INSTAGRAM</h4>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!--instagram end-->

    <!--newsleatter start-->
    <section >
        <div class="newsletter bg-transparent newsletter-inverse">
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
                        <span class="input-group-text"><i class="icon-email"></i></span>
                    </div>
                    <input type="text" placeholder="ENTER YOUR EMAIL...." >
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
                        <div class="contact-banner-img"><img src="../assets/images/layout-1/call-img.png" alt="call-banner"></div>
                        <div> <h3>if you have any question please call us</h3></div>
                        <div><h2>123-456-7890</h2></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--contact banner end-->

    <!--footer start-->
    <footer>
        <div class="app-link-block">
            <div class="container">
                <div class="row">
                    <div class="app-link-bloc-contain">
                        <div class="app-item-group">
                            <div class="app-item">
                                <img src="../assets/images/layout-1/app/1.png" class="img-fluid  " alt="app-banner">
                            </div>
                            <div class="app-item">
                                <img src="../assets/images/layout-1/app/2.png" class="img-fluid  " alt="app-banner">
                            </div>
                        </div>
                        <div class="app-item-group ">
                            <div class="sosiyal-block" >
                                <h6>follow us</h6>
                                <ul class="sosiyal">
                                    <li><a href="#"><i class="fa fa-facebook" ></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" ></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" ></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" ></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss" ></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-1 section-mb-space">
            <div class="container">
                <div class="logo-contain">
                    <div class="row">
                        <div class="col-lg-3 col-md-12 ">
                            <div class="logo-block">
                                <img src="../assets/images/layout-5/logo/logo.png" class="img-fluid  " alt="logo">
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-12 pr-lg-0">
                            <div class="logo-detail">
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                                                    <li><a href="#">contact us</a></li>
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
                                                    <li><a href="#"> orders tracking</a></li>
                                                    <li><a href="#"> size guide</a></li>
                                                    <li><a href="#">FAQ </a></li>
                                                    <li><a href="#">new products</a></li>
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
                                            <li><i class="fa fa-map-marker"></i>big deal store demo store <br> india-<span>3654123</span></li>
                                            <li><i class="fa fa-phone"></i>call us: <span>123-456-7898</span></li>
                                            <li><i class="fa fa-envelope-o"></i>email us: support@bigdeal.com</li>
                                            <li><i class="fa fa-fax"></i>fax <span>123456</span></li>
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
                                <p><span>2018 - 19</span> Copy Right by Themeforest Powered by pixel strap</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-4 col-sm-12">
                            <div class="payment-card-bottom">
                                <ul>
                                    <li><a href="#"><img src="../assets/images/layout-5/pay/1.png" class="img-fluid" alt="pay"></a></li>
                                    <li><a href="#"><img src="../assets/images/layout-5/pay/2.png" class="img-fluid" alt="pay"></a></li>
                                    <li><a href="#"><img src="../assets/images/layout-5/pay/3.png" class="img-fluid" alt="pay"></a></li>
                                    <li><a href="#"><img src="../assets/images/layout-5/pay/4.png" class="img-fluid" alt="pay"></a></li>
                                    <li><a href="#"><img src="../assets/images/layout-5/pay/5.png" class="img-fluid" alt="pay"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer end-->


    <!-- tap to top -->
    <div class="tap-top">
        <div>
            <i class="fa fa-angle-double-up"></i>
        </div>
    </div>
    <!-- tap to top End -->

    <!-- Add to cart modal popup start-->
    <div class="modal fade bd-example-modal-lg theme-modal cart-modal " id="addtocart" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body modal1 ">
                    <div class="container-fluid p-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="modal-bg addtocart">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <div class="media">
                                        <a href="#">
                                            <img src="../assets/images/layout-4/product/3.jpg" alt="cart-image" class="img-fluids">
                                        </a>
                                        <div class="media-body align-self-center text-center">
                                            <a href="#">
                                                <h6>
                                                    <i class="fa fa-check"></i>Item
                                                    <span>men full sleeves</span>
                                                    <span> successfully added to your Cart</span>
                                                </h6>
                                            </a>
                                            <div class="buttons">
                                                <a href="#" class="view-cart btn btn-normal">Your cart</a>
                                                <a href="#" class="checkout btn btn-normal">Check out</a>
                                                <a href="#" class="continue btn btn-normal">Continue shopping</a>
                                            </div>

                                            <div class="upsell_payment">
                                                <img src="../assets/images/paymat.png" class="img-fluid " alt="cart-modal-popup">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-section">
                                        <div class="col-12 product-upsell text-center">
                                            <h4>Customers who bought this item also.</h4>
                                        </div>
                                        <div class="row" id="upsell_product">
                                            <div class="product-box col-sm-3 col-6">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="#">
                                                            <img src="../assets/images/layout-4/product/1.jpg" class="img-fluid blur-up lazyload mb-1" alt="cotton top">
                                                        </a>
                                                    </div>
                                                    <div class="product-detail">
                                                        <h6><a href="#"><span>cotton top</span></a></h6>
                                                        <h4><span>$25</span></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-box col-sm-3 col-6">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="#">
                                                            <img src="../assets/images/layout-4/product/2.jpg" class="img-fluid blur-up lazyload mb-1" alt="cotton top">
                                                        </a>
                                                    </div>
                                                    <div class="product-detail">
                                                        <h6><a href="#"><span>cotton top</span></a></h6>
                                                        <h4><span>$25</span></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-box col-sm-3 col-6">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="#">
                                                            <img src="../assets/images/layout-4/product/a1.jpg" class="img-fluid blur-up lazyload mb-1" alt="cotton top">
                                                        </a>
                                                    </div>
                                                    <div class="product-detail">
                                                        <h6><a href="#"><span>cotton top</span></a></h6>
                                                        <h4><span>$25</span></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-box col-sm-3 col-6">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="#">
                                                            <img src="../assets/images/layout-4/product/a2.jpg" class="img-fluid blur-up lazyload mb-1" alt="cotton top">
                                                        </a>
                                                    </div>
                                                    <div class="product-detail">
                                                        <h6><a href="#"><span>cotton top</span></a></h6>
                                                        <h4><span>$25</span></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Add to cart modal popup end-->

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
                            <div class="quick-view-img"><img src="../assets/images/layout-5/product/3.jpg" alt="quick" class="img-fluid "></div>
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
                                <div class="product-buttons"><a href="#" class="btn btn-normal">add to cart</a> <a href="#" class="btn btn-normal">view detail</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quick-view modal popup end-->

    <!-- Add to cart bar -->
    <div id="cart_side" class=" add_to_cart left">
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
                    <li>
                        <div class="media">
                            <a href="#">
                                <img alt="" class="mr-3" src="../assets/images/layout-3/product/1.jpg">
                            </a>
                            <div class="media-body">
                                <a href="#">
                                    <h4>item name</h4>
                                </a>
                                <h4>
                                    <span>1 x $ 299.00</span>
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
                                <img alt="" class="mr-3" src="../assets/images/layout-3/product/2.jpg">
                            </a>
                            <div class="media-body">
                                <a href="#">
                                    <h4>item name</h4>
                                </a>
                                <h4>
                                    <span>1 x $ 299.00</span>
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
                            <a href="#"><img alt="" class="mr-3" src="../assets/images/layout-3/product/3.jpg"></a>
                            <div class="media-body">
                                <a href="#">
                                    <h4>item name</h4>
                                </a>
                                <h4><span>1 x $ 299.00</span></h4>
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
                            <a href="cart.html" class="btn btn-normal btn-xs view-cart">view cart</a>
                            <a href="#" class="btn btn-normal btn-xs checkout">checkout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Add to cart bar end-->

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
            <form class="theme-form">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <label for="review">Password</label>
                    <input type="password" class="form-control" id="review" placeholder="Enter your password" required="">
                </div>
                <div class="form-group">
                    <a href="#" class="btn btn-rounded btn-block ">Login</a>
                </div>
                <div>
                    <h5 class="forget-class"><a href="forget-pwd.html" class="d-block">forget password?</a></h5>
                    <h6 class="forget-class"><a href="register.html" class="d-block">new to store? Signup now</a></h6>
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
                            <a href="wishlist.html" class="btn btn-normal btn-block  view-cart">view wislist</a>
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
                        <li><a href="#">french</a></li>
                    </ul>
                    <h5>currency</h5>
                    <ul>
                        <li><a href="#">uro</a></li>
                        <li><a href="#">rupees</a></li>
                        <li><a href="#">pound</a></li>
                        <li><a href="#">doller</a></li>
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
        Cras sit amet nibh libero, in gravida nulla.
      </div>
    </div>
  </div>

@endsection
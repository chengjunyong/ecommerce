@extends('admin.layout')

@section('layout')

<div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Product List
                                    <small>Homeu Admin panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item active">Product List</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row products-admin ratio_asos">
                    <div class="col-xl-3 col-sm-6">
                        <div class="card product">
                            <div class="card-body">
                                <div class="product-box p-0">
                                    <div class="product-imgbox">
                                        <div class="product-front">
                                            <img src="../assets/images/layout-2/product/1.jpg" class="img-fluid  " alt="product">
                                        </div>
                                        <div class="product-back">
                                            <img src="../assets/images/layout-2/product/a1.jpg" class="img-fluid  " alt="product">
                                        </div>
                                        <div class="product-icon icon-inline">
                                            <button>
                                                <i class="ti-bag" ></i>
                                            </button>
                                            <a href="javascript:void(0)" title="Add to Wishlist">
                                                <i class="ti-heart" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                <i class="ti-search" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" title="Compare">
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
                                    <div class="product-detail detail-inline p-0">
                                        <div class="detail-title">
                                            
                                            <div class="detail-right">
                                                <div class="check-price">
                                                    Rm 56.21
                                                </div>
                                                <div class="price">
                                                    <div class="price">
                                                        Rm 24.05
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card product">
                            <div class="card-body">
                                <div class="product-box p-0">
                                    <div class="product-imgbox">
                                        <div class="product-front">
                                            <img src="../assets/images/layout-2/product/3.jpg" class="img-fluid  " alt="product">
                                        </div>
                                        <div class="product-back">
                                            <img src="../assets/images/layout-2/product/a3.jpg" class="img-fluid  " alt="product">
                                        </div>
                                        <div class="product-icon icon-inline">
                                            <button>
                                                <i class="ti-bag" ></i>
                                            </button>
                                            <a href="javascript:void(0)" title="Add to Wishlist">
                                                <i class="ti-heart" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                <i class="ti-search" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" title="Compare">
                                                <i class="fa fa-exchange" aria-hidden="true"></i>
                                            </a>

                                        </div>
                                    </div>
                                    <div class="product-detail detail-inline p-0">
                                        <div class="detail-title">
                                            
                                            <div class="detail-right">
                                                <div class="check-price">
                                                    Rm 56.21
                                                </div>
                                                <div class="price">
                                                    <div class="price">
                                                        Rm 24.05
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card product">
                            <div class="card-body">
                                <div class="product-box p-0">
                                    <div class="product-imgbox">
                                        <div class="product-front">
                                            <img src="../assets/images/layout-2/product/8.jpg" class="img-fluid  " alt="product">
                                        </div>
                                        <div class="product-back">
                                            <img src="../assets/images/layout-2/product/a8.jpg" class="img-fluid  " alt="product">
                                        </div>
                                        <div class="product-icon icon-inline">
                                            <button>
                                                <i class="ti-bag" ></i>
                                            </button>
                                            <a href="javascript:void(0)" title="Add to Wishlist">
                                                <i class="ti-heart" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                <i class="ti-search" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" title="Compare">
                                                <i class="fa fa-exchange" aria-hidden="true"></i>
                                            </a>

                                        </div>
                                    </div>
                                    <div class="product-detail detail-inline p-0">
                                        <div class="detail-title">
                                            
                                            <div class="detail-right">
                                                <div class="check-price">
                                                    Rm 56.21
                                                </div>
                                                <div class="price">
                                                    <div class="price">
                                                        Rm 24.05
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card product">
                            <div class="card-body">
                                <div class="product-box p-0">
                                    <div class="product-imgbox">
                                        <div class="product-front">
                                            <img src="../assets/images/layout-2/product/4.jpg" class="img-fluid  " alt="product">
                                        </div>
                                        <div class="product-back">
                                            <img src="../assets/images/layout-2/product/a4.jpg" class="img-fluid  " alt="product">
                                        </div>
                                        <div class="product-icon icon-inline">
                                            <button>
                                                <i class="ti-bag" ></i>
                                            </button>
                                            <a href="javascript:void(0)" title="Add to Wishlist">
                                                <i class="ti-heart" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                <i class="ti-search" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" title="Compare">
                                                <i class="fa fa-exchange" aria-hidden="true"></i>
                                            </a>

                                        </div>
                                    </div>
                                    <div class="product-detail detail-inline p-0">
                                        <div class="detail-title">
                                            
                                            <div class="detail-right">
                                                <div class="check-price">
                                                    Rm 56.21
                                                </div>
                                                <div class="price">
                                                    <div class="price">
                                                        Rm 24.05
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card product">
                            <div class="card-body">
                                <div class="product-box p-0">
                                    <div class="product-imgbox">
                                        <div class="product-front">
                                            <img src="../assets/images/layout-2/product/5.jpg" class="img-fluid  " alt="product">
                                        </div>
                                        <div class="product-back">
                                            <img src="../assets/images/layout-2/product/a5.jpg" class="img-fluid  " alt="product">
                                        </div>
                                        <div class="product-icon icon-inline">
                                            <button>
                                                <i class="ti-bag" ></i>
                                            </button>
                                            <a href="javascript:void(0)" title="Add to Wishlist">
                                                <i class="ti-heart" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                <i class="ti-search" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" title="Compare">
                                                <i class="fa fa-exchange" aria-hidden="true"></i>
                                            </a>

                                        </div>
                                    </div>
                                    <div class="product-detail detail-inline p-0">
                                        <div class="detail-title">
                                            
                                            <div class="detail-right">
                                                <div class="check-price">
                                                    Rm 56.21
                                                </div>
                                                <div class="price">
                                                    <div class="price">
                                                        Rm 24.05
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card product">
                            <div class="card-body">
                                <div class="product-box p-0">
                                    <div class="product-imgbox">
                                        <div class="product-front">
                                            <img src="../assets/images/layout-2/product/6.jpg" class="img-fluid  " alt="product">
                                        </div>
                                        <div class="product-back">
                                            <img src="../assets/images/layout-2/product/a6.jpg" class="img-fluid  " alt="product">
                                        </div>
                                        <div class="product-icon icon-inline">
                                            <button>
                                                <i class="ti-bag" ></i>
                                            </button>
                                            <a href="javascript:void(0)" title="Add to Wishlist">
                                                <i class="ti-heart" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                <i class="ti-search" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" title="Compare">
                                                <i class="fa fa-exchange" aria-hidden="true"></i>
                                            </a>

                                        </div>
                                    </div>
                                    <div class="product-detail detail-inline p-0">
                                        <div class="detail-title">
                                            
                                            <div class="detail-right">
                                                <div class="check-price">
                                                    Rm 56.21
                                                </div>
                                                <div class="price">
                                                    <div class="price">
                                                        Rm 24.05
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card product">
                            <div class="card-body">
                                <div class="product-box p-0">
                                    <div class="product-imgbox">
                                        <div class="product-front">
                                            <img src="../assets/images/layout-2/product/7.jpg" class="img-fluid  " alt="product">
                                        </div>
                                        <div class="product-back">
                                            <img src="../assets/images/layout-2/product/a7.jpg" class="img-fluid  " alt="product">
                                        </div>
                                        <div class="product-icon icon-inline">
                                            <button>
                                                <i class="ti-bag" ></i>
                                            </button>
                                            <a href="javascript:void(0)" title="Add to Wishlist">
                                                <i class="ti-heart" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                <i class="ti-search" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" title="Compare">
                                                <i class="fa fa-exchange" aria-hidden="true"></i>
                                            </a>

                                        </div>
                                    </div>
                                    <div class="product-detail detail-inline p-0">
                                        <div class="detail-title">
                                            
                                            <div class="detail-right">
                                                <div class="check-price">
                                                    Rm 56.21
                                                </div>
                                                <div class="price">
                                                    <div class="price">
                                                        Rm 24.05
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card product">
                            <div class="card-body">
                                <div class="product-box p-0">
                                    <div class="product-imgbox">
                                        <div class="product-front">
                                            <img src="../assets/images/layout-2/product/8.jpg" class="img-fluid  " alt="product">
                                        </div>
                                        <div class="product-back">
                                            <img src="../assets/images/layout-2/product/a8.jpg" class="img-fluid  " alt="product">
                                        </div>
                                        <div class="product-icon icon-inline">
                                            <button>
                                                <i class="ti-bag" ></i>
                                            </button>
                                            <a href="javascript:void(0)" title="Add to Wishlist">
                                                <i class="ti-heart" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                <i class="ti-search" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" title="Compare">
                                                <i class="fa fa-exchange" aria-hidden="true"></i>
                                            </a>

                                        </div>
                                    </div>
                                    <div class="product-detail detail-inline p-0">
                                        <div class="detail-title">
                                            
                                            <div class="detail-right">
                                                <div class="check-price">
                                                    Rm 56.21
                                                </div>
                                                <div class="price">
                                                    <div class="price">
                                                        Rm 24.05
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @foreach($product_list as $product)
                      <div class="col-xl-3 col-sm-6">
                          <div class="card product">
                              <div class="card-body">
                                  <div class="product-box p-0">
                                    <label>{{ $product->name }}</label>
                                      <div class="product-imgbox">
                                          <div class="product-front">
                                              <img src="../assets/images/layout-2/product/8.jpg" class="img-fluid  " alt="product">
                                          </div>
                                          <div class="product-back">
                                              <img src="../assets/images/layout-2/product/a8.jpg" class="img-fluid  " alt="product">
                                          </div>
                                          <div class="product-icon icon-inline">
                                              <button>
                                                  <i class="ti-bag" ></i>
                                              </button>
                                              <a href="javascript:void(0)" title="Add to Wishlist">
                                                  <i class="ti-heart" aria-hidden="true"></i>
                                              </a>
                                              <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                  <i class="ti-search" aria-hidden="true"></i>
                                              </a>
                                              <a href="#" title="Compare">
                                                  <i class="fa fa-exchange" aria-hidden="true"></i>
                                              </a>

                                          </div>
                                      </div>
                                      <div class="product-detail detail-inline p-0">
                                          <div class="detail-title">
                                              
                                              <div class="detail-right">
                                                  <div class="check-price">
                                                      RM {{ number_format($product->price, 2) }}
                                                  </div>
                                                  <div class="price">
                                                      <div class="price">
                                                          RM {{ number_format($product->price, 2) }}
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                    @endforeach


                </div>
            </div>
            <!-- Container-fluid Ends-->

        </div>

@endsection
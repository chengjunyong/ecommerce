@extends('front.layout')

@section('layout')

<style>
  
  .collection-filter-block { max-height: 450px; overflow: auto; }

  .brand_label { display: inline-block; color: #ff6000; font-size: 16px; font-weight: bold; margin-top: 27px; float: left; padding-right: 10px; }
  .brand_box { padding: 10px 20px; position: relative; }
  #brand_list { display: block; width: 100%; padding: 0 40px; }
  #brand_list a { color: transparent; }
  @media (max-width: 991px)
  {
    .brand_label { display: block; text-align: center; border: 0; border-bottom: 2px solid #ff6000; width: -webkit-fit-content; width: -moz-fit-content; width: fit-content; margin: 0 auto; margin-bottom: 10px; font-size: 16px; float: initial; }
  }

  .brand { line-height: 30px; cursor: pointer; text-align: center; }
  .brand:hover, .brand.active { color: #ff6000; }
  .brand img { border-radius: 50%; box-shadow: 0px 0px 1px 3px; width: 50px !important; height: 50px !important; margin: 5px auto; filter: grayscale(1); }
  .brand.active img { filter: grayscale(0); }

  #brand_list .owl-nav { position: absolute; left: 0px; top: 0px; width: 100%; }
  #brand_list .owl-nav .owl-prev { position: absolute; top: 20px; left: 0px; padding: 0 10px; }
  .owl-prev.disabled, .owl-next.disabled { color: #ccc !important; }
  #brand_list .owl-nav .owl-next { position: absolute; top: 20px; right: 0px; padding: 0 10px; }
  .owl-prev:not(.disabled):hover, .owl-next:not(.disabled):hover { color: #ff6000 !important; }

</style>

<!-- breadcrumb start -->
<div class="breadcrumb-main ">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="breadcrumb-contain">
          <div>
            <h2>category</h2>
            <ul>
              <li><a href="#">home</a></li>
              <li><i class="fa fa-angle-double-right"></i></li>
              <li><a href="#">category</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- breadcrumb End -->


<!-- section start -->
<section class="section-big-pt-space ratio_asos bg-light">
  <div class="collection-wrapper">
    <div class="custom-container">
      <div class="row">
        <div class="collection-content col">
          <div class="page-main-content">
            <div class="row">

              <div class="col-sm-3 collection-filter category-side category-page-side">
                <!-- side-bar colleps block stat -->
                <div class="collection-filter-block creative-card creative-inner">
                  <!-- brand filter start -->
                  <div class="collection-mobile-back"><span class="filter-back"><i class="fa fa-angle-left" aria-hidden="true"></i> back</span></div>
                  <div class="collection-collapse-block open">
                    <h3 class="collapse-block-title mt-0" style="margin-bottom: 10px;">Tag</h3>
                    <div class="collection-collapse-block-content">
                      <div class="collection-brand-filter">
                        @foreach($tag_list as $tag)

                        <div class="checkbox icheck_checkbox">
                          <label>
                            <input class="icheck tag_checkbox" type="checkbox" value="{{ $tag->id }}" checked /> {{ $tag->tag_name }}
                          </label>
                        </div>
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>

              </div>

              <div class="col-sm-9 col-xs-12">
                <div class="top-banner-wrapper">
                  <a href="#">
                    <img src="../assets/images/category/1.jpg" class="img-fluid " alt="">
                  </a>

                  <div class="brand-panel-box">
                    <div class="brand_box">
                      <div class="owl-carousel" id="brand_list">
                        @foreach($brand_list as $brand)
                          <div class="item brand active">
                            <img src="{{ Storage::url($brand->path) }}" />

                            <div style="display: none;">
                              <input class="brand_checkbox" type="checkbox" value="{{ $brand->id }}" checked />
                            </div>
                          </div>
                        @endforeach
                      </div>
                    </div>
                  </div>

                  <!-- <div class="top-banner-content small-section">
                    <h4>Sample Category</h4>
                    <h5>Some Description on your category</h5>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                  </div> -->
                </div>
                <div class="collection-product-wrapper">
<!--                   <div class="product-top-filter">
                    <div class="row">
                      <div class="col-xl-12">
                        <div class="filter-main-btn"><span class="filter-btn btn btn-theme"><i class="fa fa-filter" aria-hidden="true"></i> Filter</span></div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="product-filter-content">
                          <div class="collection-view">
                            <ul>
                              <li><i class="fa fa-th grid-layout-view"></i></li>
                              <li><i class="fa fa-list-ul list-layout-view"></i></li>
                            </ul>
                          </div>
                          <div class="collection-grid-view">
                            <ul>
                              <li><img src="../assets/images/category/icon/2.png" alt="" class="product-2-layout-view"></li>
                              <li><img src="../assets/images/category/icon/3.png" alt="" class="product-3-layout-view"></li>
                              <li><img src="../assets/images/category/icon/4.png" alt="" class="product-4-layout-view"></li>
                              <li><img src="../assets/images/category/icon/6.png" alt="" class="product-6-layout-view"></li>
                            </ul>
                          </div>
                          <div class="product-page-per-view">
                            <select>
                              <option value="High to low">24 Products Par Page</option>
                              <option value="Low to High">50 Products Par Page</option>
                              <option value="Low to High">100 Products Par Page</option>
                            </select>
                          </div>
                          <div class="product-page-filter">
                            <select>
                              <option value="High to low">Sorting items</option>
                              <option value="Low to High">50 Products</option>
                              <option value="Low to High">100 Products</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> -->
                  <div class="product-wrapper-grid">
                    <div class="row">
                      @foreach($product_list as $product)
                      <div class="col-xl-3 col-md-4 col-6 col-grid-box" type="product" tag="{{ $product->tag_id }}" brand="{{ $product->brand }}">
                        <div class="product">
                          <div class="product-box">
                            <div class="product-imgbox">
                              <a href="{{ route('getItemDetail', ['id' => $product->id ]) }}">
                                <div class="product-front" style="height: 220px;">
                                  @if(count($product->image) > 0)
                                  <img src="{{ Storage::url($product->image[0]->path) }}" class="img-fluid  " alt="product" style="max-width: none; height: 100%;">
                                  @else
                                  <img src="../assets/images/layout-1/product/1.jpg" class="img-fluid  " alt="product" style="max-width: none; height: 100%;">
                                  @endif
                                </div>
                              </a>
                            </div>
                            <div class="product-detail detail-center ">
                              <div class="detail-title">
                                <div class="detail-left">
                                  <p>{{ $product->description }}</p>
                                  <a href="">
                                    <h6 class="price-title">
                                      {{ $product->name }}
                                    </h6>
                                  </a>
                                </div>
                                <div class="detail-right">
                                  <div class="check-price">
                                    RM {{ $product->price }}
                                  </div>
                                  <div class="price">
                                    <div class="price">
                                      RM {{ $product->price }}
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="icon-detail">
                                <button class="product-buttons" product_id="{{ $product->id }}" type="button">
                                  <i class="ti-bag"></i>
                                </button>
                                <!-- <button class="wishlist-btn" product_id="{{ $product->id }}" type="button">
                                  <i class="ti-heart" aria-hidden="true"></i>
                                </button> -->
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    @endforeach
                    </div>
                  </div>

                  <div class="product-pagination">
                    <div class="theme-paggination-block">
                      <div class="row">
                        <div class="col-xl-6 col-md-6 col-sm-12">
                          <nav aria-label="Page navigation">
                            <ul class="pagination">
                              <li class="page-item {{ ($product_list->currentPage() == 1) ? ' disabled' : '' }}">
                                <a class="page-link" href="{{ $product_list->url(1) }}" aria-label="Previous">
                                  <span aria-hidden="true">
                                    <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                  </span>
                                  <span class="sr-only">Previous</span>
                                </a>
                              </li>

                              @for ($i = 1; $i <= $product_list->lastPage(); $i++)
                                <li class="page-item {{ ($product_list->currentPage() == $i) ? ' active' : '' }}">
                                  <a class="page-link" href="{{ $product_list->url($i) }}">{{ $i }}</a>
                                </li>
                              @endfor

                              <li class="page-item {{ ($product_list->currentPage() == $product_list->lastPage()) ? ' disabled' : '' }}">
                                <a class="page-link" href="{{ $product_list->url($product_list->currentPage()+1) }}" aria-label="Next">
                                  <span aria-hidden="true">
                                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                  </span>
                                  <span class="sr-only">Next</span>
                                </a>
                              </li>

                            </ul>
                          </nav>
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
<!-- section End -->

@include('front.footer')

<script>
  
  var product_list = @json($product_list);

  var logged_user = "{{ $logged_user }}";

  $(document).ready(function(){

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
          items: 10
        }
      }
    });

  });
  
  $(".wishlist-btn, .product-buttons").click(function(){
    if(logged_user == "")
    {
      alert("Please login before add item to wish list");
      return;
    }
    var product_id = $(this).attr("product_id");

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

    $.post(route, { "_token": "{{ csrf_token() }}", "product_id" : product_id, "quantity" : 1 }, function(response){

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
            cart_html += '<span>'+cart_detail.quantity+' x RM '+parseFloat(cart_detail.product_price).toFixed(2)+'</span>';
            cart_html += '</h4>';
            cart_html += '</div>';
            cart_html += '</div>';
            cart_html += '<div class="close-circle">';
            cart_html += '<a href="#" class="removeCart" data-toggle="modal" data-target="#removeCartDetail" cart_id="'+cart_detail.id+'">';
            cart_html += '<i class="ti-trash" aria-hidden="true"></i>';
            cart_html += '</a>';
            cart_html += '</div>';
            cart_html += '</li>';

            sum_cart += cart_detail.quantity * cart_detail.product_price;
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

  $(".show_product_detail").click(function(){
    var product_id = $(this).attr("product_id");

    for(var a = 0; a < product_list.length; a++)
    {
      var product = product_list[a];
      if(product.id == product_id)
      {
        if(product.image.length > 0)
        {
          var product_image = "{{ Storage::url(':product_path') }}";
          product_image = product_image.replace(':product_path', product.image[0].path);
        }
        else
        {
          var product_image = "../assets/images/layout-1/product/1.jpg";
        }
        
        $(".quick-view-modal").find(".quick-view-img").children("img").attr("src", product_image);
        $(".quick-view-modal").find(".product-right").children("h2").html(product.name);
        $(".quick-view-modal").find(".product-right").children("h3").html(product.price);
        $(".quick-view-modal").find(".border-product").children("p").html(product.description);

        var route_url = "{{ route('getItemDetail', ['id' => ':id']) }}";
        route_url = route_url.replace(':id', product.id);

        $("#view_product_detail").attr("href", route_url);
        break;
      }
    }
  });

  $(".item.brand").click(function(){
    var checked = $(this).find("input[type=checkbox]").is(":checked");

    if(checked == false)
    {
      $(this).find("input[type=checkbox]").attr("checked", true);
      $(this).addClass("active");
    }
    else
    {
      $(this).find("input[type=checkbox]").attr("checked", false);
      $(this).removeClass("active");
    }

    showHideProduct();

  });

  $(".tag_checkbox, .brand_checkbox").on("ifChanged", function(){
    showHideProduct();
  });

  function showHideProduct()
  {
    var tag_hide = [];
    var brand_hide = [];
    $(".tag_checkbox").each(function(){
      if($(this).is(":checked") == false)
      {
        tag_hide.push($(this).val());
      }
    });

    $(".brand_checkbox").each(function(){
      if($(this).is(":checked") == false)
      {
        brand_hide.push($(this).val());
      }
    });

    $("div[type=product]").show();

    if(tag_hide.length > 0)
    {
      $("div[type=product]").each(function(){
        if(tag_hide.includes($(this).attr("tag")) == true)
        {
          $(this).hide();
        }
      });
    }

    if(brand_hide.length > 0)
    {
      $("div[type=product]").each(function(){
        if(brand_hide.includes($(this).attr("brand")) == true)
        {
          $(this).hide();
        }
      });
    }
  }

</script>

@endsection


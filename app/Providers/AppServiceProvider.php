<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Auth;
use View;
use App\main_category;
use App\category;
use App\subcategory;
use App\wishlist;
use App\wishlist_detail;
use App\cart;
use App\cart_detail;
use App\product_image;
use App\memo;
use App\product;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      Schema::defaultStringLength(191);

      view()->composer('*', function ($view) 
      {
        $main_category = main_category::where('deactived', null)->get();

        foreach($main_category as $main)
        {
          $main->category = category::where('main_category', $main->id)->get();

          if(count($main->category) >= 1)
          {
            foreach($main->category as $category)
            {
              $category->subcategory = subcategory::where('category_id', $category->category_id)->get();
            }
          }
        }
        
        $logged_user = Auth::user();

        // $main_category = main_category();

        $wishlist = null;
        $wishlist_count = null;
        $cart = null;
        $global_cart_list = [];
        $memo_list = [];
        $completed_memo_count = 0;

        if($logged_user)
        {
          $wishlist = wishlist::where('user_id', $logged_user->id)->first();
          if($wishlist)
          {
            $wishlist_count = wishlist_detail::where('wishlist_id', $wishlist->id)->count();
          }

          $cart = cart::where('user_id', $logged_user->id)->first();
          if($cart)
          {
            $global_cart_list = cart_detail::where('cart_detail.cart_id', $cart->id)->where('cart_detail.completed', null)->join('product', 'cart_detail.product_id', '=', 'product.id')->select('cart_detail.*', 'product.name as product_name', 'product.price as price', 'product.id as product_id', 'product.stock as stock', 'product.active', 'product.on_sales', 'product.on_sales_from', 'product.on_sales_to', 'product.on_sales_type', 'product.on_sales_amount', 'product.today_deal', 'product.today_deal_from', 'product.today_deal_to', 'product.today_deal_type', 'product.today_deal_amount')->get();

            $cart_id_array = array();
            foreach($global_cart_list as $cart_list)
            {
              array_push($cart_id_array, $cart_list->product_id);
            }

            $product_images = product_image::whereIn('product_id', $cart_id_array)->groupBy('product_id')->get();

            if(count($global_cart_list) > 0)
            {
              foreach($global_cart_list as $cart_detail)
              {
                $product_image = null;

                foreach($product_images as $image)
                {
                  if($image->product_id == $cart_detail->product_id)
                  {
                    $product_image = $image;
                    break;
                  }
                }

                $cart_detail->image = $product_image;

                $promo_result = app('App\Http\Controllers\itemController')->getPromoPrice($cart_detail);
                $cart_detail->promo_price = $promo_result->promo_price;
                $cart_detail->promo_amount = $promo_result->promo_amount;
                $cart_detail->promo_type = $promo_result->promo_type;
              }
            }
          }

          $memo_list = memo::where('user_id', $logged_user->id)->orderBy('updated_at', 'desc')->get();
          foreach($memo_list as $memo)
          {
            if($memo->completed == 1)
            {
              $completed_memo_count++;
            }
          }
        }

        $global_random_popup_item = product::where('product.popup_banner', 1)->join('product_image', 'product_image.product_id', '=', 'product.id')->select('product.*', 'product_image.path as path')->groupBy('product.id')->inRandomOrder()->first();

        $view->with(['main_category' => $main_category, "logged_user" => $logged_user, "wishlist" => $wishlist, "wishlist_count" => $wishlist_count, "cart" => $cart, "global_cart_list" => $global_cart_list, "memo_list" => $memo_list, "completed_memo_count" => $completed_memo_count, "global_random_popup_item" => $global_random_popup_item ]); 
      }); 
    }
}

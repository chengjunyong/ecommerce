<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Auth;
use View;
use App\category;
use App\wishlist;
use App\wishlist_detail;
use App\cart;
use App\cart_detail;
use App\product_image;

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
        $category_list = category::get();
        $logged_user = Auth::user();

        $wishlist = null;
        $wishlist_count = null;
        $cart = null;
        $global_cart_list = [];
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
            $global_cart_list = cart_detail::where('cart_detail.cart_id', $cart->id)->where('cart_detail.completed', null)->join('product', 'cart_detail.product_id', '=', 'product.id')->select('cart_detail.*', 'product.name as product_name', 'product.price as product_price', 'product.id as product_id', 'product.stock as stock')->limit(3)->get();
            if(count($global_cart_list) > 0)
            {
              foreach($global_cart_list as $cart_detail)
              {
                $cart_detail->image = product_image::where('product_id', $wishlist->product_id)->first();
              }
            }
          }
        }

        $view->with(['category_list' => $category_list, "logged_user" => $logged_user, "wishlist" => $wishlist, "wishlist_count" => $wishlist_count, "cart" => $cart, "global_cart_list" => $global_cart_list ] ); 
      }); 
    }
}

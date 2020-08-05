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
            $global_cart_list = cart_detail::where('cart_detail.cart_id', $cart->id)->where('cart_detail.completed', null)->join('product', 'cart_detail.product_id', '=', 'product.id')->select('cart_detail.*', 'product.name as product_name', 'product.price as product_price', 'product.id as product_id', 'product.stock as stock')->get();
            if(count($global_cart_list) > 0)
            {
              foreach($global_cart_list as $cart_detail)
              {
                $cart_detail->image = product_image::where('product_id', $cart_detail->product_id)->first();
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

        $view->with(['main_category' => $main_category, "logged_user" => $logged_user, "wishlist" => $wishlist, "wishlist_count" => $wishlist_count, "cart" => $cart, "global_cart_list" => $global_cart_list, "memo_list" => $memo_list, "completed_memo_count" => $completed_memo_count ]); 
      }); 
    }
}

<?php

namespace App\Http\Controllers;

use App\main_category;
use App\category;
use App\subcategory;
use App\product;
use App\product_image;
use App\wishlist;
use App\wishlist_detail;
use App\cart;
use App\cart_detail;
use App\coupon;
use App\transaction;
use App\transaction_detail;
use App\voucher_transaction;
use App\address_book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class itemController extends Controller
{
    public function getItemDetail($id)
    {
      $product_detail = product::where('id', $id)->first();
      $product_detail->image = product_image::where('product_id', $product_detail->id)->get();

      $promo_result = $this->getPromoPrice($product_detail);
      
      $product_detail->promo_price = $promo_result->promo_price;
      $product_detail->promo_amount = $promo_result->promo_amount;
      $product_detail->promo_type = $promo_result->promo_type;

      $address_book = null;
      $user = Auth::user();

      if($user)
      {
        $address_book = address_book::where('user_id', $user->id)->where('default_shipping', 1)->first();
      }

      $breadcrumb = array([
        'name' => "Homepage",
        'route' => route("getFrontIndex"),
      ]);

      $main_category = main_category::where('id', $product_detail->maincategory_id)->first();
      $category = category::where('category_id', $product_detail->category_id)->first();
      $subcategory = subcategory::where('subcategory_id', $product_detail->subcategory_id)->first();

      if($main_category)
      {
        array_push($breadcrumb, [
          'name' => $main_category->name,
          'route' => route("getCategoryPage", ['id' => $main_category->id, 'type' => 1]),
        ]);
      }

      if($category)
      {
        array_push($breadcrumb, [
          'name' => $category->category_name,
          'route' => route("getCategoryPage", ['id' => $category->category_id, 'type' => 2]),
        ]);
      }

      if($subcategory)
      {
        array_push($breadcrumb, [
          'name' => $subcategory->subcategory_name,
          'route' => route("getCategoryPage", ['id' => $subcategory->subcategory_id, 'type' => 3]),
        ]);
      }

      array_push($breadcrumb, [
        'name' => $product_detail->name,
        'route' => route("getItemDetail", ['id' => $product_detail->id]),
      ]);

      $product_detail->active_today_deal = null;

      $date = date('Y-m-d 00:00:00', strtotime(now()));
      if($product_detail->today_deal == 1 && $date >= $product_detail->today_deal_from && $date <= $product_detail->today_deal_to)
      {
        $product_detail->active_today_deal = 1;

        $product_detail->hours = 0;
        $product_detail->minutes = 0;
        $product_detail->seconds = 0;

        if($product_detail->today_deal_to)
        {
          $from = new \DateTime(now());
          $to = new \DateTime($product_detail->today_deal_to);

          $diff = $to->diff($from);
          $product_detail->hours = $diff->h + ($diff->d * 24);
          $product_detail->minutes = $diff->i;
          $product_detail->seconds = $diff->s;
        }
      }

      $related_product_list = product::where('product.active', 1)->leftJoin('product_image', 'product_image.product_id', '=', 'product.id')->groupby('product.id')->select('product.*', 'product_image.path as path')->get();
      foreach($related_product_list as $related_product)
      {
        $promo_result = app('App\Http\Controllers\itemController')->getPromoPrice($related_product);
        $related_product->promo_price = $promo_result->promo_price;
        $related_product->promo_amount = $promo_result->promo_amount;
        $related_product->promo_type = $promo_result->promo_type;
      }

      return view('front.item', compact('product_detail', 'address_book', 'user', 'breadcrumb', 'related_product_list'));
    }

    public function addItemToWishlist(Request $request)
    { 
      $user = Auth::user();

      if(!$user)
      {
        $response = new \stdClass();
        $response->error = 1;
        $response->message = "Please login before you add item to wishlist.";

        return response()->json($response);
      }

      $wishlist = wishlist::where('user_id', $user->id)->first();
      if(!$wishlist)
      {
        $wishlist = wishlist::create([
          'user_id' => $user->id
        ]);
      }

      if($request->product_id)
      {
        $wishlist_check = wishlist_detail::where('wishlist_id', $wishlist->id)->where('product_id', $request->product_id)->first();
        if($wishlist_check)
        {
          wishlist_detail::where('id', $wishlist_check->id)->update([
            'quantity' => $wishlist_check->quantity + $request->quantity
          ]);

          $response = new \stdClass();
          $response->error = 0;
          $response->message = "Item added to wishlist.";

          return response()->json($response);
        }

        wishlist_detail::create([
          'wishlist_id' => $wishlist->id,
          'product_id' => $request->product_id,
          'quantity' => $request->quantity
        ]);

        $wishlist_count = wishlist_detail::where('wishlist_id', $wishlist->id)->count();

        $response = new \stdClass();
        $response->error = 0;
        $response->message = "Item added to wishlist.";
        $response->wishlist_count = $wishlist_count;

        return response()->json($response);
      }
      else
      {
        $response = new \stdClass();
        $response->error = 1;
        $response->message = "Please select item before you add to wishlist.";

        return response()->json($response);
      }
    }

    public function addItemToCart(Request $request)
    {
      $user = Auth::user();

      if(!$user)
      {
        $response = new \stdClass();
        $response->error = 1;
        $response->message = "Please login before you add item to cart.";

        return response()->json($response);
      }

      $cart = cart::where('user_id', $user->id)->first();
      if(!$cart)
      {
        $cart = cart::create([
          'user_id' => $user->id
        ]);
      }

      if($request->product_id)
      {
        $cart_check = cart_detail::where('cart_id', $cart->id)->where('cart_detail.completed', null)->where('product_id', $request->product_id)->first();
        if($cart_check)
        {
          cart_detail::where('id', $cart_check->id)->update([
            'quantity' => $cart_check->quantity + $request->quantity
          ]);

          $cart_count = cart_detail::where('cart_id', $cart->id)->where('cart_detail.completed', null)->count();

          $cart_list = cart::where('cart.user_id', $user->id)->join('cart_detail', 'cart_detail.cart_id', '=', 'cart.id')->where('cart_detail.completed', null)->join('product', 'cart_detail.product_id', '=', 'product.id')->leftJoin('product_image', 'product_image.product_id', '=', 'product.id')->select('cart_detail.*', 'product.name as product_name', 'product.description as description', 'product.price as price', 'product.id as product_id', 'product.stock as stock', 'cart.id as cart_id', 'product_image.path as path', 'product.active', 'product.on_sales', 'product.on_sales_from', 'product.on_sales_to', 'product.on_sales_type', 'product.on_sales_amount', 'product.today_deal', 'product.today_deal_from', 'product.today_deal_to', 'product.today_deal_type', 'product.today_deal_amount')->groupBy('product.id')->get();

          foreach($cart_list as $cart)
          {
            $promo_result = app('App\Http\Controllers\itemController')->getPromoPrice($cart);
            $cart->promo_price = $promo_result->promo_price;
            $cart->promo_amount = $promo_result->promo_amount;
            $cart->promo_type = $promo_result->promo_type;
          }

          $response = new \stdClass();
          $response->error = 0;
          $response->message = "Item added to cart.";
          $response->cart_count = $cart_count;
          $response->cart_list = $cart_list;

          return response()->json($response);
        }

        cart_detail::create([
          'cart_id' => $cart->id,
          'product_id' => $request->product_id,
          'quantity' => $request->quantity
        ]);

        $cart_count = cart_detail::where('cart_id', $cart->id)->where('cart_detail.completed', null)->count();

        $cart_list = cart::where('cart.user_id', $user->id)->join('cart_detail', 'cart_detail.cart_id', '=', 'cart.id')->where('cart_detail.completed', null)->join('product', 'cart_detail.product_id', '=', 'product.id')->leftJoin('product_image', 'product_image.product_id', '=', 'product.id')->select('cart_detail.*', 'product.name as product_name', 'product.description as description', 'product.price as price', 'product.id as product_id', 'product.stock as stock', 'cart.id as cart_id', 'product_image.path as path', 'product.active', 'product.on_sales', 'product.on_sales_from', 'product.on_sales_to', 'product.on_sales_type', 'product.on_sales_amount', 'product.today_deal', 'product.today_deal_from', 'product.today_deal_to', 'product.today_deal_type', 'product.today_deal_amount')->groupBy('product.id')->get();

        foreach($cart_list as $cart)
        {
          $promo_result = app('App\Http\Controllers\itemController')->getPromoPrice($cart);
          $cart->promo_price = $promo_result->promo_price;
          $cart->promo_amount = $promo_result->promo_amount;
          $cart->promo_type = $promo_result->promo_type;
        }

        $response = new \stdClass();
        $response->error = 0;
        $response->message = "Item added to cart.";
        $response->cart_count = $cart_count;
        $response->cart_list = $cart_list;

        return response()->json($response);
      }
      else
      {
        $response = new \stdClass();
        $response->error = 1;
        $response->message = "Please select item before you add to cart.";

        return response()->json($response);
      }
    }

    public function getCartIndex()
    {
      $user = Auth::user();

      $cart_list = [];
      if($user)
      {
        $cart_list = cart::where('cart.user_id', $user->id)->join('cart_detail', 'cart_detail.cart_id', '=', 'cart.id')->where('cart_detail.completed', null)->join('product', 'cart_detail.product_id', '=', 'product.id')->leftJoin('product_image', 'product_image.product_id', '=', 'product.id')->select('cart_detail.*', 'product.name as product_name', 'product.description as description', 'product.price as price', 'product.id as product_id', 'product.stock as stock', 'cart.id as cart_id', 'product_image.path as path', 'product.active', 'product.on_sales', 'product.on_sales_from', 'product.on_sales_to', 'product.on_sales_type', 'product.on_sales_amount', 'product.today_deal', 'product.today_deal_from', 'product.today_deal_to', 'product.today_deal_type', 'product.today_deal_amount')->groupBy('product.id')->get();

        foreach($cart_list as $cart)
        {
          $promo_result = app('App\Http\Controllers\itemController')->getPromoPrice($cart);
          $cart->promo_price = $promo_result->promo_price;
          $cart->promo_amount = $promo_result->promo_amount;
          $cart->promo_type = $promo_result->promo_type;
        }
      }

      $breadcrumb = array([
        'name' => "Homepage",
        'route' => route("getFrontIndex"),
      ],[
        'name' => "My Cart",
        'route' => route("getCartIndex")
      ]);

      return view('front.cart', compact('cart_list', 'breadcrumb')); 
    }

    public function getCheckoutIndex()
    {
      $user = Auth::user();
      $address_book = null;

      $cart_list = [];
      if($user)
      {
        $address_book = address_book::where('user_id', $user->id)->where('default_shipping', 1)->first();

        $cart_list = cart::where('cart.user_id', $user->id)->join('cart_detail', 'cart_detail.cart_id', '=', 'cart.id')->where('cart_detail.completed', null)->join('product', 'cart_detail.product_id', '=', 'product.id')->leftJoin('product_image', 'product_image.product_id', '=', 'product.id')->select('cart_detail.*', 'product.name as product_name', 'product.description as description', 'product.price as price', 'product.id as product_id', 'product.stock as stock', 'cart.id as cart_id', 'product_image.path as path', 'product.active', 'product.on_sales', 'product.on_sales_from', 'product.on_sales_to', 'product.on_sales_type', 'product.on_sales_amount', 'product.today_deal', 'product.today_deal_from', 'product.today_deal_to', 'product.today_deal_type', 'product.today_deal_amount')->groupBy('product.id')->get();

        foreach($cart_list as $cart)
        {
          $promo_result = app('App\Http\Controllers\itemController')->getPromoPrice($cart);
          $cart->promo_price = $promo_result->promo_price;
          $cart->promo_amount = $promo_result->promo_amount;
          $cart->promo_type = $promo_result->promo_type;
        }
      }

      $breadcrumb = array([
        'name' => "Homepage",
        'route' => route("getFrontIndex"),
      ],[
        'name' => "My Cart",
        'route' => route("getCartIndex")
      ],[
        'name' => "Checkout",
        'route' => route("getCheckoutIndex")
      ]);

      $recommend_product_list = product::where('product.active', 1)->leftJoin('product_image', 'product_image.product_id', '=', 'product.id')->groupby('product.id')->select('product.*', 'product_image.path as path')->get();
      foreach($recommend_product_list as $recommend_product)
      {
        $promo_result = app('App\Http\Controllers\itemController')->getPromoPrice($recommend_product);
        $recommend_product->promo_price = $promo_result->promo_price;
        $recommend_product->promo_amount = $promo_result->promo_amount;
        $recommend_product->promo_type = $promo_result->promo_type;
      }

      return view('front.checkout', compact('cart_list', 'address_book', 'breadcrumb', 'recommend_product_list'));
    }

    public function selectedItemCheckout(Request $request)
    {
      $cart_detail_id = [];

      if($request->cart_detail_id)
      {
        $cart_detail_id = $request->cart_detail_id;
      }
      $user = Auth::user();

      $discount_amount = 0;
      $coupon_valid = 0;
      $coupon_message = "";
      $coupon_name = "";

      $cart_list = cart::where('cart.user_id', $user->id)->join('cart_detail', 'cart_detail.cart_id', '=', 'cart.id')->where('cart_detail.completed', null)->whereIn('cart_detail.id', $cart_detail_id)->join('product', 'cart_detail.product_id', '=', 'product.id')->join('category', 'product.category_id', '=', 'category.category_id')->select('cart_detail.*', 'product.name as product_name', 'product.price as price', 'product.id as product_id', 'product.stock as stock', 'cart.id as cart_id', 'category.category_id as category_id', 'product.active', 'product.on_sales', 'product.on_sales_from', 'product.on_sales_to', 'product.on_sales_type', 'product.on_sales_amount', 'product.today_deal', 'product.today_deal_from', 'product.today_deal_to', 'product.today_deal_type', 'product.today_deal_amount')->get();

      foreach($cart_list as $cart)
      {
        $promo_result = app('App\Http\Controllers\itemController')->getPromoPrice($cart);
        $cart->promo_price = $promo_result->promo_price;
        $cart->promo_amount = $promo_result->promo_amount;
        $cart->promo_type = $promo_result->promo_type;
      }

      if($request->coupon_code)
      {
        $coupon_result = $this->couponChecking($request->coupon_code, $request->cart_detail_id);
        if($coupon_result->valid == 1)
        {
          $coupon_valid = 1;
          $discount_amount = $coupon_result->discount_amount;
          $coupon_name = $coupon_result->coupon_name;
        }

        $coupon_message = $coupon_result->message;
      }

      $sub_total = 0;
      foreach($cart_list as $cart)
      {
        if($cart->promo_price === null)
        {
          $sub_total = $sub_total + ($cart->quantity * $cart->price);
        }
        else
        {
          $sub_total = $sub_total + ($cart->quantity * $cart->promo_price);
        }
      }

      $total = $sub_total - $discount_amount;

      $response = new \stdClass();
      $response->error = 0;
      $response->message = "Success";
      $response->sub_total = $sub_total;
      $response->total = $total;
      $response->coupon_code = $request->coupon_code;
      $response->coupon_valid = $coupon_valid;
      $response->coupon_message = $coupon_message;
      $response->coupon_name = $coupon_name;
      $response->discount_amount = $discount_amount;

      return response()->json($response);
    }

    public function submitPayment(Request $request)
    {
      $user = Auth::user();
      $discount_amount = 0;
      $coupon_name = null;
      $coupon_id = null;
      if($request->coupon_code)
      {
        $result = $this->couponChecking($request->coupon_code, $request->cart_detail_id);

        if($result->error == 0 && $result->valid == 1)
        {
          $discount_amount = $result->discount_amount;
          $coupon_name = $result->coupon_name;
          $coupon_id = $result->coupon_id;
        }
      }
      
      $cart_list = cart::where('cart.user_id', $user->id)->join('cart_detail', 'cart_detail.cart_id', '=', 'cart.id')->where('cart_detail.completed', null)->whereIn('cart_detail.id', $request->cart_detail_id)->join('product', 'cart_detail.product_id', '=', 'product.id')->join('category', 'product.category_id', '=', 'category.category_id')->select('cart_detail.*', 'product.name as product_name', 'product.price as price', 'product.id as product_id', 'product.stock as stock', 'cart.id as cart_id', 'category.category_id as category_id', 'product.active', 'product.on_sales', 'product.on_sales_from', 'product.on_sales_to', 'product.on_sales_type', 'product.on_sales_amount', 'product.today_deal', 'product.today_deal_from', 'product.today_deal_to', 'product.today_deal_type', 'product.today_deal_amount')->get();

      foreach($cart_list as $cart)
      {
        $promo_result = app('App\Http\Controllers\itemController')->getPromoPrice($cart);
        $cart->promo_price = $promo_result->promo_price;
        $cart->promo_amount = $promo_result->promo_amount;
        $cart->promo_type = $promo_result->promo_type;
      }

      $sub_total = 0;
      foreach($cart_list as $cart)
      {
        if($cart->promo_price === null)
        {
          $sub_total = $sub_total + ($cart->quantity * $cart->price);
        }
        else
        {
          $sub_total = $sub_total + ($cart->quantity * $cart->promo_price);
        }
      }

      $address_book = address_book::where('user_id', $user->id)->where('default_shipping', 1)->first();

      $full_address = "";
      $billing_address = "";
      $phone_number = "";
      if($address_book)
      { 
        $full_address = $address_book->address." ".$address_book->postal_code."<br>".$address_book->city."<br>".$address_book->state;
        $phone_number = $address_book->phone_number;

        if($address_book->default_billing == 1)
        {
          $billing_address = $full_address;
        }
        else
        {
          $address_billing_book = address_book::where('user_id', $user->id)->where('default_billing', 1)->first();
          if($address_billing_book)
          {
            $billing_address = $address_billing_book->address." ".$address_billing_book->postal_code."<br>".$address_billing_book->city."<br>".$address_billing_book->state;
          }
        }
      }
      
      $total = $sub_total - $discount_amount;
      $transaction = transaction::create([
        'user_id' => $user->id,
        'sub_total' => $sub_total,
        'discount_total' => $discount_amount,
        'total' => $total,
        'status' => 1,
        'delivery_address' => $full_address,
        'mailing_address' => $billing_address,
        'phone_number' => $phone_number
      ]);

      $transaction_detail_items = array();
      foreach($cart_list as $cart)
      {
        $transaction_detail = [
          'transaction_id' => $transaction->id,
          'category_id' => $cart->category_id,
          'sub_category_id' => null,
          'product_id' => $cart->product_id,
          'product_name' => $cart->product_name,
          'quantity' => $cart->quantity,
          'status' => 1
        ];

        if($cart->promo_price === null)
        {
          $transaction_detail['product_price'] = $cart->price;
          $transaction_detail['total'] = $cart->quantity * $cart->price;
        }
        else
        {
          $transaction_detail['product_price'] = $cart->promo_price;
          $transaction_detail['total'] = $cart->quantity * $cart->promo_price;
        }

        $transaction_detail_item = transaction_detail::create($transaction_detail);

        array_push($transaction_detail_items, $transaction_detail_item);
      }

      $cart = cart::where('user_id', $user->id)->first();
      cart_detail::where('cart_id', $cart->id)->whereIn('id', $request->cart_detail_id)->where('completed', null)->update([
        'completed' => 1
      ]);

      if($discount_amount != 0 && $coupon_name && $coupon_id)
      {
        $coupon_detail = coupon::where('id', $coupon_id)->first();
        if($coupon_detail->quantity != "-1")
        {
          $coupon_detail_quantity = $coupon_detail->quantity - 1;
          coupon::where('id', $coupon_id)->update([
            'quantity' => $coupon_detail_quantity
          ]);
        }

        voucher_transaction::create([
          'user_id' => $user->id,
          'transaction_id' => $transaction->id,
          'coupon_code_name' => $coupon_name,
          'discount_total' => $discount_amount,
          'coupon_code_id' => $coupon_id
        ]);
      }

      if($user->email)
      {
        $email_data = new \stdClass();
        $email_data->user = $user;
        $email_data->transaction = $transaction;
        $email_data->transaction_detail = $transaction_detail_items;
        $email_data->email = $user->email;
        $email_data->type = "receipt";
        $email_data->subject = "HomeU Receipt";

        app('App\Http\Controllers\frontController')->sendMail($email_data);
      }

      return redirect(route('getCheckoutSuccessIndex', ['id' => $transaction->id]));
    }

    public function submitCouponCode(Request $request)
    {
      $result = $this->couponChecking($request->coupon_code, $request->cart_detail_id);

      return response()->json($result);
    }

    public function couponChecking($code, $cart_detail_id = [])
    {
      if($cart_detail_id == null)
      {
        $cart_detail_id = [];
      }
      
      if($code)
      {
        $today = date('Y-m-d');
        $coupon_code = coupon::where('code', $code)->where('active', 1)->where(function($query){
          $query->where('quantity', '>', 0)->orWhere('quantity', '-1');
        })->where('date_start', '<=', $today)->where('date_end', '>=', $today)->first();

        if(!$coupon_code)
        {
          $response = new \stdClass();
          $response->error = 0;
          $response->valid = 0;
          $response->message = "Sorry, this coupon code is not valid. Pleas check for any typing errors.";

          return $response;
        }
        elseif($coupon_code)
        {
          $user = Auth::user();

          if($coupon_code->per_customer != "-1")
          {
            $voucher_transaction = voucher_transaction::where('user_id', $user->id)->where('coupon_code_id', $coupon_code->id)->get();
            if(count($voucher_transaction) >= $coupon_code->per_customer)
            {
              $response = new \stdClass();
              $response->error = 0;
              $response->valid = 0;
              $response->message = "Sorry, you have reached the redemption limit of this coupon.";

              return $response;
            }
          }

          // execute time
          // print_r(date("H:i:s") . substr((string)microtime(), 1, 8).'<br>');

          $cart_list = cart::where('cart.user_id', $user->id)->join('cart_detail', 'cart_detail.cart_id', '=', 'cart.id')->where('cart_detail.completed', null)->whereIn('cart_detail.id', $cart_detail_id)->join('product', 'cart_detail.product_id', '=', 'product.id')->join('category', 'product.category_id', '=', 'category.category_id')->select('cart_detail.*', 'product.name as product_name', 'product.price as price', 'product.id as product_id', 'product.stock as stock', 'cart.id as cart_id', 'category.category_id as category_id', 'product.active', 'product.on_sales', 'product.on_sales_from', 'product.on_sales_to', 'product.on_sales_type', 'product.on_sales_amount', 'product.today_deal', 'product.today_deal_from', 'product.today_deal_to', 'product.today_deal_type', 'product.today_deal_amount')->get();

          foreach($cart_list as $cart)
          {
            $promo_result = app('App\Http\Controllers\itemController')->getPromoPrice($cart);
            $cart->promo_price = $promo_result->promo_price;
            $cart->promo_amount = $promo_result->promo_amount;
            $cart->promo_type = $promo_result->promo_type;
          }

          // print_r(date("H:i:s") . substr((string)microtime(), 1, 8).'<br>');

          $total = 0;
          $sub_total = 0;
          foreach($cart_list as $cart)
          {
            if($cart->promo_price === null)
            {
              $total = $total + ( $cart->quantity * $cart->price);
            }
            else
            {
              $total = $total + ( $cart->quantity * $cart->promo_price);
            }
          }

          if($coupon_code->minimum_spend)
          {
            if($total <= $coupon_code->minimum_spend)
            {
              $response = new \stdClass();
              $response->error = 0;
              $response->valid = 0;
              $response->message = "To use this coupon, your need to spent at least RM ".$coupon_code->minimum_spend.".";

              return $response;
            }
          }

          $item_total = 0;
          $apply_category_coupon = 1;
          if($coupon_code->category_id)
          {
            $apply_category_coupon = 0;
            foreach($cart_list as $cart)
            {
              if($cart->category_id == $coupon_code->category_id)
              {
                if($cart->promo_price === null)
                {
                  $item_total = $item_total + ($cart->price * $cart->quantity);
                }
                else
                {
                  $item_total = $item_total + ($cart->promo_price * $cart->quantity);
                }
                $apply_category_coupon = 1;
              }
            }

            $sub_total = $total - $item_total;

            if($apply_category_coupon == 0)
            {
              $category_detail = category::where('category_id', $coupon_code->category_id)->first();
              $response = new \stdClass();
              $response->error = 0;
              $response->valid = 0;
              $response->message = "This coupon only valid for product in category ".$category_detail->category_name.".";

              return $response;
            }
          }
          else
          {
            $item_total = $total;
          }

          $price_after_discount = 0;
          $discount_amount = 0;
          if($apply_category_coupon == 1)
          {
            if($coupon_code->amount)
            {
              $discount_amount = $coupon_code->amount;
            }
            elseif($coupon_code->percent)
            {
              $discount_amount = $item_total * ( $coupon_code->percent / 100 );
              if($coupon_code->maxcap)
              {
                if($discount_amount > $coupon_code->maxcap)
                {
                  $discount_amount = $coupon_code->maxcap;
                }
              }
            }
          }


          $price_after_discount = $item_total - $discount_amount + $sub_total;
          if($price_after_discount < 0)
          {
            $price_after_discount = 0;
            $discount_amount = $item_total;
          }

          $response = new \stdClass();
          $response->error = 0;
          $response->valid = 1;
          $response->message = "Success.";
          $response->price_after_discount = $price_after_discount;
          $response->discount_amount = $discount_amount;
          $response->coupon_name = $coupon_code->name;
          $response->coupon_id = $coupon_code->id;

          return $response;
        }
      }
      else
      {
        $response = new \stdClass();
        $response->error = 1;
        $response->valid = 0;
        $response->message = "Please key in coupon code.";

        return $response;
      }
    }

    public function getCheckoutSuccessIndex($id)
    {
      $user = Auth::user();
      $transaction = transaction::where('id', $id)->where('user_id', $user->id)->first();
      if($transaction)
      {
        $transaction->detail = transaction_detail::where('transaction_id', $transaction->id)->get();
      }

      return view('front.checkout_success', compact('transaction'));
    }

    public function removeCartDetail(Request $request)
    {
      cart_detail::where('id', $request->cart_id)->delete();

      return redirect()->back();
    }

    public function updateCart(Request $request)
    {
      foreach($request->cart_detail_id as $cart_detail_id)
      {
        $quantity_name = "quantity_".$cart_detail_id;
        cart_detail::where('id', $cart_detail_id)->update([
          'quantity' => $request->$quantity_name
        ]);
      }

      return redirect()->back();
    }

    public function removeWishlistDetail(Request $request)
    {
      wishlist_detail::where('id', $request->wishlist_id)->delete();

      return redirect()->back();
    }

    public function updatewishlist(Request $request)
    {
      foreach($request->wishlist_detail_id as $wishlist_detail_id)
      {
        $quantity_name = "quantity_".$wishlist_detail_id;
        wishlist_detail::where('id', $wishlist_detail_id)->update([
          'quantity' => $request->$quantity_name
        ]);
      }

      return redirect()->back();
    }

    public function updateWishlistToCart(Request $request)
    {
      $user = Auth::user();
      $wishlist_detail = wishlist_detail::where('id', $request->wishlist_id)->first();
      $cart = cart::where('user_id', $user->id)->first();

      if(!$cart)
      {
        $cart = cart::create([
          'user_id' => $user->id
        ]);
      }

      cart_detail::create([
        'cart_id' => $cart->id,
        'product_id' => $wishlist_detail->product_id,
        'quantity' => $wishlist_detail->quantity
      ]);

      wishlist_detail::where('id', $wishlist_detail->id)->delete();

      return redirect(route('getCartIndex'));
    }

    public function getPromoPrice($product_detail)
    {
      $date = date('Y-m-d 00:00:00', strtotime(now()));

      $promo_price = null;
      $promo_amount = null;
      $promo_type = null;

      if($product_detail->on_sales == 1 && $date >= $product_detail->on_sales_from && $date <= $product_detail->on_sales_to && $product_detail->on_sales_amount > 0)
      {
        if($product_detail->on_sales_type == "percentage" && $product_detail->on_sales_amount != 0 && $product_detail->on_sales_amount != null)
        {
          $promo_price = $product_detail->price * (100 - $product_detail->on_sales_amount) / 100;
        }
        elseif($product_detail->on_sales_type == "fixed")
        {
          $promo_price = $product_detail->price - $product_detail->on_sales_amount;
        }

        $promo_amount = $product_detail->on_sales_amount;
        $promo_type = $product_detail->on_sales_type;
      }
      elseif($product_detail->today_deal == 1 && $date >= $product_detail->today_deal_from && $date <= $product_detail->today_deal_to && $product_detail->today_deal_amount > 0)
      {
        if($product_detail->today_deal_type == "percentage" && $product_detail->today_deal_amount != 0 && $product_detail->today_deal_amount != null)
        {
          $promo_price = $product_detail->price * (100 - $product_detail->today_deal_amount) / 100;
        }
        elseif($product_detail->today_deal_type == "fixed")
        {
          $promo_price = $product_detail->price - $product_detail->today_deal_amount;
        }

        $promo_amount = $product_detail->today_deal_amount;
        $promo_type = $product_detail->today_deal_type;
      } 

      if($promo_price <= 0 && $promo_price !== null)
      {
        $promo_price = 0;
        $promo_amount = $product_detail->price;
      }

      $promo_result = new \stdClass();
      $promo_result->promo_price = $promo_price;
      $promo_result->promo_amount = $promo_amount;
      $promo_result->promo_type = $promo_type;

      return $promo_result;
    }
}

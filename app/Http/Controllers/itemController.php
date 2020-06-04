<?php

namespace App\Http\Controllers;

use App\category;
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

      $address_book = null;
      $user = Auth::user();

      if($user)
      {
        $address_book = address_book::where('user_id', $user->id)->where('default_shipping', 1)->first();
      }

      return view('front.item', compact('product_detail', 'address_book', 'user'));
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

          $cart_list = cart::where('cart.user_id', $user->id)->join('cart_detail', 'cart_detail.cart_id', '=', 'cart.id')->where('cart_detail.completed', null)->join('product', 'cart_detail.product_id', '=', 'product.id')->leftJoin('product_image', 'product_image.product_id', '=', 'product.id')->select('cart_detail.*', 'product.name as product_name', 'product.description as description', 'product.price as product_price', 'product.id as product_id', 'product.stock as stock', 'cart.id as cart_id', 'product_image.path as path')->groupBy('product.id')->get();

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

        $cart_list = cart::where('cart.user_id', $user->id)->join('cart_detail', 'cart_detail.cart_id', '=', 'cart.id')->where('cart_detail.completed', null)->join('product', 'cart_detail.product_id', '=', 'product.id')->leftJoin('product_image', 'product_image.product_id', '=', 'product.id')->select('cart_detail.*', 'product.name as product_name', 'product.description as description', 'product.price as product_price', 'product.id as product_id', 'product.stock as stock', 'cart.id as cart_id', 'product_image.path as path')->groupBy('product.id')->get();

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
        $cart_list = cart::where('cart.user_id', $user->id)->join('cart_detail', 'cart_detail.cart_id', '=', 'cart.id')->where('cart_detail.completed', null)->join('product', 'cart_detail.product_id', '=', 'product.id')->leftJoin('product_image', 'product_image.product_id', '=', 'product.id')->select('cart_detail.*', 'product.name as product_name', 'product.description as description', 'product.price as product_price', 'product.id as product_id', 'product.stock as stock', 'cart.id as cart_id', 'product_image.path as path')->groupBy('product.id')->get();
      }

      return view('front.cart', compact('cart_list')); 
    }

    public function getCheckoutIndex()
    {
      $user = Auth::user();
      $address_book = null;

      $cart_list = [];
      if($user)
      {
        $address_book = address_book::where('user_id', $user->id)->where('default_shipping', 1)->first();

        $cart_list = cart::where('cart.user_id', $user->id)->join('cart_detail', 'cart_detail.cart_id', '=', 'cart.id')->where('cart_detail.completed', null)->join('product', 'cart_detail.product_id', '=', 'product.id')->leftJoin('product_image', 'product_image.product_id', '=', 'product.id')->select('cart_detail.*', 'product.name as product_name', 'product.description as description', 'product.price as product_price', 'product.id as product_id', 'product.stock as stock', 'cart.id as cart_id', 'product_image.path as path')->groupBy('product.id')->get();
      }

      return view('front.checkout', compact('cart_list', 'address_book'));
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

      $cart_list = cart::where('cart.user_id', $user->id)->join('cart_detail', 'cart_detail.cart_id', '=', 'cart.id')->where('cart_detail.completed', null)->whereIn('cart_detail.id', $cart_detail_id)->join('product', 'cart_detail.product_id', '=', 'product.id')->join('category', 'product.category_id', '=', 'category.category_id')->select('cart_detail.*', 'product.name as product_name', 'product.price as product_price', 'product.id as product_id', 'product.stock as stock', 'cart.id as cart_id', 'category.category_id as category_id')->get();

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
        $sub_total = $sub_total + ($cart->quantity * $cart->product_price);
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
      
      $cart_list = cart::where('cart.user_id', $user->id)->join('cart_detail', 'cart_detail.cart_id', '=', 'cart.id')->where('cart_detail.completed', null)->whereIn('cart_detail.id', $request->cart_detail_id)->join('product', 'cart_detail.product_id', '=', 'product.id')->join('category', 'product.category_id', '=', 'category.category_id')->select('cart_detail.*', 'product.name as product_name', 'product.price as product_price', 'product.id as product_id', 'product.stock as stock', 'cart.id as cart_id', 'category.category_id as category_id')->get();

      $sub_total = 0;
      foreach($cart_list as $cart)
      {
        $sub_total = $sub_total + ($cart->quantity * $cart->product_price);
      }

      $address_book = address_book::where('user_id', $user->id)->where('default_shipping', 1)->first();

      $full_address = "";
      $phone_number = "";
      if($address_book)
      { 
        $full_address = $address_book->address." ".$address_book->postal_code." ".$address_book->city." ".$address_book->state;
        $phone_number = $address_book->phone_number;
      }
      
      $total = $sub_total - $discount_amount;
      $transaction = transaction::create([
        'user_id' => $user->id,
        'sub_total' => $sub_total,
        'discount_total' => $discount_amount,
        'total' => $total,
        'status' => 1,
        'delivery_address' => $full_address,
        'phone_number' => $phone_number
      ]);

      foreach($cart_list as $cart)
      {
        transaction_detail::create([
          'transaction_id' => $transaction->id,
          'category_id' => $cart->category_id,
          'sub_category_id' => null,
          'product_id' => $cart->product_id,
          'product_name' => $cart->product_name,
          'product_price' => $cart->product_price,
          'quantity' => $cart->quantity,
          'total' => $cart->quantity * $cart->product_price,
          'status' => 1
        ]);
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

          $cart_list = cart::where('cart.user_id', $user->id)->join('cart_detail', 'cart_detail.cart_id', '=', 'cart.id')->where('cart_detail.completed', null)->whereIn('cart_detail.id', $cart_detail_id)->join('product', 'cart_detail.product_id', '=', 'product.id')->join('category', 'product.category_id', '=', 'category.category_id')->select('cart_detail.*', 'product.name as product_name', 'product.price as product_price', 'product.id as product_id', 'product.stock as stock', 'cart.id as cart_id', 'category.category_id as category_id')->get();

          // print_r(date("H:i:s") . substr((string)microtime(), 1, 8).'<br>');

          $total = 0;
          $sub_total = 0;
          foreach($cart_list as $cart)
          {
            $total = $total + ( $cart->quantity * $cart->product_price);
          }

          if($coupon_code->minimum_spent)
          {
            if($total >= $coupon_code->minimum_spent)
            {
              $response = new \stdClass();
              $response->error = 0;
              $response->valid = 0;
              $response->message = "To use this coupon, your need to spent at least RM ".$coupon_code->minimum_spent.".";

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
                $item_total = $item_total + ($cart->product_price * $cart->quantity);
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
}

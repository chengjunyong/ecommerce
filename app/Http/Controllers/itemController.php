<?php

namespace App\Http\Controllers;

use App\product;
use App\product_image;
use Illuminate\Http\Request;

class itemController extends Controller
{
    public function getItemDetail($id)
    {
      $product_detail = product::where('id', $id)->first();
      $product_detail->image = product_image::where('product_id', $product_detail->id)->get();

      return view('front.item', compact('product_detail'));
    }

    public function getCartIndex()
    {
      return view('front.cart'); 
    }

    public function getCheckoutIndex()
    {
      return view('front.checkout');
    }

    public function getCheckoutSuccessIndex()
    {
      return view('front.checkout_success');
    }
}

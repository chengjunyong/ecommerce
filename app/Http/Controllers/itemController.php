<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class itemController extends Controller
{
    public function getItemDetail($id)
    {
      return view('front.item');
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

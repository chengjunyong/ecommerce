<?php

namespace App\Http\Controllers;

use App\category;
use App\product;
use App\product_image;
use App\wishlist;
use App\wishlist_detail;
use App\cart;
use App\cart_detail;
use App\address_book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class frontController extends Controller
{
	public function getFrontIndex()
	{
    dd(testing());
    $banner = array(
      [
        "class" => "layout2-slide-1",
        "img" => "/assets/images/layout-1/slider/1.1.png",
        'header1' => "the best",
        'header2' => "loffer shoes",
        'header3' => "minimum 30% off",
      ],
      [
        "class" => "layout2-slide-2",
        "img" => "/assets/images/layout-1/slider/1.2.png",
        "header1" => "cinema festival",
        "header2" => "reflex camera",
        "header3" => "minimum 40% off",
      ],
      [
        "class" => "layout2-slide-3",
        "img" => "/assets/images/layout-1/slider/1.3.png",
        "header1" => "march special",
        "header2" => "leather bag",
        "header3" => "minimum 60% off",
      ]
    );

		return view('front.index', compact("banner"));
	}

  public function getFrontIndex2()
  {
    return view('front.index2.index2');
  }

  public function getFrontIndex3()
  {
    return view('front.index3.index3');
  }

  public function getFrontIndex4()
  {
    return view('front.index4.index4');
  }

  public function getFrontIndex5()
  {
    return view('front.index5.index5');
  }

  public function getFrontIndex6()
  {
    return view('front.index6.index6');
  }

  public function getCategoryPage($id)
  {
    $product_list = product::where('category_id', $id)->get();

    $product_id_array = array();
    foreach($product_list as $product)
    {
      array_push($product_id_array, $product->id);
    }

    $product_image_list = product_image::whereIn('product_id', $product_id_array)->get();

    foreach($product_list as $product)
    {
      $product_image = array();
      foreach($product_image_list as $image)
      {
        if($image->product_id == $product->id)
        {
          array_push($product_image, $image);
        }
      }
      $product->image = $product_image;
    }

    return view('front.category', compact('product_list'));
  }

  public function getRegisterPage()
  {
    return view('front.register');
  }

  public function getUserProfile()
  {
    $tab = null;
    if(isset($_GET['tab']))
    {
      $tab = $_GET['tab'];
    }

    $user = Auth::user();
    $address_book_list = address_book::where('user_id', $user->id)->get();
    
    return view('front.dashboard', compact('user', 'tab', 'address_book_list'));
  }

  public function getEditInfo()
  {
    $user = Auth::user();

    return view('front.edit_info', compact('user'));
  }

  public function getEditAddress()
  {
    return view('front.edit_address');
  }

  public function getContactUsPage()
  {
    return view('front.contact_us');
  }

  public function getOrderTracking()
  {
    return view('front.order_tracking');
  }

  public function getOrderTrackingDetail()
  {
    $tracking_no = $_GET['tracking_no'];
    return view('front.order_tracking_detail');
  }

  public function getOrderReceipt()
  {
    return view('front.order_receipt');
  }

  public function getFAQ()
  {
    return view('front.faq');
  }

  public function getForgotPassword()
  {
    return view('front.forgot_password');
  }

  public function getOrderHistory()
  {
    return view('front.order_history');
  }

  public function getWishList()
  {
    $user = Auth::user();

    $wishlist_list = [];
    if($user)
    {
      $wishlist_list = wishlist::where('wishlist.user_id', $user->id)->join('wishlist_detail', 'wishlist_detail.wishlist_id', '=', 'wishlist.id')->join('product', 'wishlist_detail.product_id', '=', 'product.id')->select('wishlist_detail.*', 'product.name as product_name', 'product.price as product_price', 'product.id as product_id', 'product.stock as stock', 'wishlist.id as wishlist_id')->get();

      if(count($wishlist_list) > 0)
      {
        foreach($wishlist_list as $wishlist)
        {
          $wishlist->image = product_image::where('product_id', $wishlist->product_id)->first();
        }
      }
    }

    return view('front.wishlist', compact('wishlist_list'));
  }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class frontController extends Controller
{
	public function getFrontIndex()
	{
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

  public function getCategoryPage()
  {
    return view('front.category');
  }

  public function getRegisterPage()
  {
    return view('front.register');
  }

  public function getUserProfile()
  {
    $user = Auth::user();

    return view('front.dashboard', compact('user'));
  }

  public function getEditInfo()
  {
    $user = Auth::user();

    return view('front.edit_info', compact('user'));
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
    return view('front.wishlist');
  }
}

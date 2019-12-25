<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\payment;

class frontController extends Controller
{
	public function getFrontIndex()
	{
		return view('front.index');
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

	public function getNewPage()
	{
		$payment_list = payment::get();

		return view('front.newpage', compact('payment_list'));
	}
}

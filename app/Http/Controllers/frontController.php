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

	public function getNewPage()
	{
		$payment_list = payment::get();

		return view('front.newpage', compact('payment_list'));
	}
}

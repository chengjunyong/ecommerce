<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function getIndex()
    {
      return view('admin.index');
    }

    public function getCategory()
    {
    	return view('admin.category');
    }

    public function getProductList()
    {
    	return view('admin.productlist');
    }

    public function getProductDetail()
    {
    	return view('admin.productdetail');
    }

    public function getAddProduct()
    {
    	return view('admin.addproduct');
    }

    public function getOrders()
    {
    	return view('admin.orders');
    }
}

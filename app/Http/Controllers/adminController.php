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

    public function getTransaction()
    {
        return view('admin.transaction');
    }

    public function getCouponList()
    {
        return view('admin.couponlist');
    }

    public function getCouponCreate()
    {
        return view('admin.couponcreate');
    }

    public function getUserList()
    {
        return view('admin.userlist');
    }

    public function getCreateUser()
    {
        return view('admin.createuser');
    }

    public function getReport()
    {
        return view('admin.report');
    }

    public function getProfile()
    {
        return view('admin.profile');
    }

    public function getInvoice()
    {
        return view('admin.invoice');
    }

    public function getLogin()
    {
        return view('admin.login');
    }

    public function getHome()
    {
        return view('front.index');
    }


}

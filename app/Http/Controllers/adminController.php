<?php

// migration
// 1) run migration
// php artisan migrate
// 2) make migration
// php artisan make:migration [naming]
// 3) reverse migration
// php artisan migrate:rollback

// model
// 1) make model
// php artisan make:model [naming]

// clear cache
// php artisan config:cache

// composer dump-autoload

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\category;

class adminController extends Controller
{
    public function getIndex()
    {
      return view('admin.index');
    }

    public function getCategory()
    {
        $category = category::get();

    	return view('admin.category',compact('category'));
    }

    public function getProductList()
    {
      $product_list = product::where('active', 1)->get();

    	return view('admin.productlist')->with(['product_list' => $product_list]);
    }

    public function getProductDetail()
    {
    	return view('admin.productdetail');
    }

    public function getAddProduct()
    {
    	return view('admin.addproduct', compact('response'));
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

    public function postAddProduct(Request $request)
    {
        product::create([
            'name' => $request->name,
            'price' => $request->price,
            'sku' => $request->sku
        ]);

      return redirect()->route('getAddProduct');
    }

    public function addCategory(Request $request)
    {
        category::create([
            'category_name' => $request->category_name
        ]);

        return redirect()->route('getCategory');
    }

    public function updateCategory(Request $request)
    {
        if(category::where('category_id',$request->id)->update(['category_name' => $request->input])){
            return "true";
        }else{
            return "false";
        }
    }

    public function deleteCategory(Request $request)
    {
        if(category::where('category_id',$request->id)->delete()){
            return "true";
        }else{
            return "false";
        }
    }

}

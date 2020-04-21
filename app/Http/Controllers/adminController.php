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
use App\product_image;
use App\category;
use Illuminate\Support\Facades\Storage;

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
      $product_list = product::join('category', 'category.category_id', '=', 'product.category_id')->select('product.*', 'category.category_name as category_name')->paginate(15);

      // $product_list = product::get();

      // foreach($product_list as $product)
      // {
      //   $product->category_name = "";
      //   $category_detail = category::where('category_id', $product->category_id)->first();
      //   if($category_detail)
      //   {
      //     $product->category_name = $category_detail->category_name;
      //   }
      // }

      // dd($product_list);

      // dd($product_list->getUrlRange(0, 15))

      dd($product_list->total());

    	return view('admin.productlist',compact('product_list'));
    }

    public function getProductDetail()
    {
    	return view('admin.productdetail');
    }

    public function getAddProduct()
    {
      $category_list = category::get();

    	return view('admin.addproduct', compact('category_list'));
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
      if($request->stock == null){
        $stock = -1;
      }else{
        $stock = $request->stock;
      }

      $product = product::create([
        'name'=> $request->product_name,
        'description' => $request->description,
        'sku'=> $request->sku,
        'category_id'=> $request->category_id,
        'stock' => $stock,
        'price' => $request->price,
        'active' => $request->active
      ]);

      if(isset($request->image)){
        $i = 1;
        foreach ($request->image as $image) {
          $filename = $product->id."_".$i.".".$image->getClientOriginalExtension();
          product_image::create([
            'product_id' => $product->id,
            'path' => $filename
          ]);
          $image->move(public_path('storage'), $filename);
          $i++;
        }
      }

      return back()->with("success","Product Add Successful");



      //Sample Below {
      // $product_detail = product::create([
      //   'name' => $request->name,
      //   'price' => $request->price,
      //   'sku' => $request->sku,
      //   'category_id' => $request->category_id,
      //   'description' => $request->description
      // ]);

      // foreach($request->my_file as $file)
      // {
      //   $ext = $file->getClientOriginalExtension();
      //   $path = $file->store('temp');

      //   product_image::create([
      //     'product_id' => $product_detail->id,
      //     'image_type' => null,
      //     'path' => $path
      //   ]);
      // }

      // return redirect()->route('getAddProduct');
      //}End Here


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

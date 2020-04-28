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
use App\coupon;
use App\subcoupon;
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
        $coupon_list = coupon::paginate(15);;

        return view('admin.couponlist',compact('coupon_list'));
    }

    public function getCouponCreate()
    { 
        $category_list = category::get();

        return view('admin.couponcreate',compact('category_list'));
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
      if($request->image){
        foreach($request->image as $image)
        {
          $product_image_detail = product_image::create([
            'product_id' => $product->id,
          ]);

          $path = $image->storeAs('/image', $product->id."_".$product_image_detail->id.".".$image->getClientOriginalExtension());
          product_image::where('id', $product_image_detail->id)->update([
            'path' => $path
          ]);
        }
      }
      
      return back()->with("success","Product Add Successful");
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

    public function bulkDelete(Request $request)
    {
      if(isset($request->product_id)){
        if(product::whereIn('id',$request->product_id)->delete()){
          return "true";
        }else{
          return "false";
        }
      }else{
        return "false";
      }
    }

    public function deleteSingleProduct(Request $request)
    {
      if($request->product_id == null){
        return $this->getProductList();
      }else{
        if(product::where('id','=',$request->product_id)->delete()){
          return "true";
        }else{
          return "false";
        }
      }
    }

    public function searchProduct(Request $request)
    {
      if(isset($request->product_name)){
        $result = product::join('category', 'category.category_id', '=', 'product.category_id')
                        ->select('product.*', 'category.category_name as category_name')
                        ->where('product.name','like','%'.$request->product_name.'%')
                        ->orWhere('product.sku','like','%'.$request->product_name.'%')
                        ->paginate(15);

        return view('admin.productlist')->with('product_list',$result);
      }

        return redirect(route('getProductList'));
    }

    public function editProduct(Request $request)
    {   
        $product_detail = product::where('id','=',$request->product_id)->get();
        $category_list = category::get();
        $images = product_image::where('product_id','=',$request->product_id)->get();
        return view('admin.editproduct',compact('category_list','product_detail','images'));
    }

    public function editPostProduct(Request $request)
    {
      if($request->removeImage){ 
        product_image::whereIn('id', $request->removeImage)->delete();
      }

      if($request->image){
        foreach($request->image as $image){  
          $product_detail = product_image::create([
            'product_id' => $request->product_id
          ]);

          $path = $image->storeAs('/image', $product_detail->product_id."_".$product_detail->id.".".$image->getClientOriginalExtension());
          product_image::where('id', $product_detail->id)->update(['path' => $path]);           
        }
      }

      if($request->stock == null){
        $stock = -1;
      }else{
        $stock = $request->stock;
      }
      product::where('id','=',$request->product_id)
                ->update([
                  'name' => $request->product_name,
                  'description' => $request->description,
                  'price' => $request->price,
                  'stock' => $stock,
                  'sku' => $request->product_sku,
                  'category_id' => $request->category
                ]);

      return redirect(route('getProductList'));
        
    }

    public function createCoupon(Request $request)
    {
        if($request->coupon_quantity == ""){
          $coupon_quantity = -1;
        }else{
          $coupon_quantity = $request->coupon_quantity;
        }

        if($request->discount_type == 1){
          $amount = null;
          $percent = $request->discount_value; 
        }else{
          $percent = null;
          $amount = $request->discount_value;
        }

        if($request->coupon_status == "on"){
          $active = 1;
        }else{
          $active = 0;
        }

        if($request->exist_customer == "on"){
          $user_exist = 1;
        }else{
          $user_exist = 0;
        }

        if($request->per_customer == ""){
          $per_customer = -1;
        }else{
          $per_customer = $request->per_customer;
        }
        
        coupon::create([
          'name' => $request->coupon_name,
          'code' => $request->coupon_code,
          'quantity' => $coupon_quantity,
          'amount' => $amount,
          'percent' => $percent,
          'active' => $active,
          'category_id' => $request->category,
          'minimum_spend' => $request->min_spend,
          'user_exist' => $user_exist,
          'per_customer' => $per_customer,
          'date_start' => $request->date_start,
          'date_end' => $request->date_end,
          'maxcap' => $request->max_cap
        ]);

        return back()->with("success","Coupon create successful");
    }

    public function changeStatus(Request $request)
    {
      coupon::where('id',$request->id)
            ->update([
              'active' => $request->status
            ]);
    }

    public function deleteCoupon(Request $request)
    {
      coupon::where('id',$request->id)->delete();
      return "true";
    }

    public function searchCoupon(Request $request)
    {
      if($request->result != null){
        $coupon_list = coupon::where('name','like','%'.$request->result.'%')
                              ->orWhere('code','like','%'.$request->result.'%')
                              ->paginate(15);
        return view('admin.couponlist',compact('coupon_list'));
      }else{
        return redirect(route('getCouponList'));
      }
    }

}

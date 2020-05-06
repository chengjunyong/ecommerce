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
use App\transaction;
use App\transaction_detail;
use App\users;
use App\subcategory;
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
        $main_category = main_category();

    	return view('admin.category',compact('category','main_category'));
    }

    public function getSubCategory()
    {
        $category = category::get();
        $subcategory = subcategory::join("category","category.category_id","=","subcategory.category_id")->select("subcategory.*","category.category_id","category.category_name")->get();

      return view('admin.subcategory',compact('category','subcategory'));
    }

    public function getProductList()
    {
      $product_list = product::join("subcategory","subcategory.subcategory_id","=","product.subcategory_id")
                              ->join("category","category.category_id","=","subcategory.category_id")
                              ->select("product.*","subcategory.subcategory_name","category.category_name")
                              ->paginate(15);
    	return view('admin.productlist',compact('product_list'));
    }

    public function getProductDetail()
    {
    	return view('admin.productdetail');
    }

    public function getAddProduct()
    {
      $subcategory_list = subcategory::join("category","category.category_id","=","subcategory.category_id")->select("subcategory.*","category.category_id")->get();

    	return view('admin.addproduct', compact('subcategory_list'));
    }

    public function getOrders()
    {
      $transaction = transaction::orderBy('created_at','desc')->paginate(15);

    	return view('admin.orders',compact('transaction'));
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

      $target = explode(",",$request->subcategory_id);

      $product = product::create([
        'name'=> $request->product_name,
        'description' => $request->description,
        'sku'=> $request->sku,
        'category_id'=>$target[1],
        'subcategory_id'=>$target[0],
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
            'category_name' => $request->category_name,
            'main_category' => $request->main_category
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
        $subcategory_list = subcategory::join('category','category.category_id','=','subcategory.category_id')->select('subcategory.*','category.category_id')->get();
        $images = product_image::where('product_id','=',$request->product_id)->get();
        return view('admin.editproduct',compact('subcategory_list','product_detail','images'));
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

      $target = explode(',',$request->subcategory);
      product::where('id','=',$request->product_id)
                ->update([
                  'name' => $request->product_name,
                  'description' => $request->description,
                  'price' => $request->price,
                  'stock' => $stock,
                  'sku' => $request->product_sku,
                  'category_id' => $target[1],
                  'subcategory_id' => $target[0]
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

    public function editCoupon(Request $request)
    {
      $coupon_detail = coupon::where('id',$request->coupon_id)->get();
      $category_list = category::get();

      return view('admin.couponedit',compact('coupon_detail','category_list'));

    }

    public function alterCoupon(Request $request)
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

        coupon::where('id',$request->coupon_id)->update([
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

        return redirect()->route('getCouponList')->with('success','Coupon update successful');
    }

    public function changeOrderStatus(Request $request)
    {
      transaction::where('id',$request->id)->update([
                    'status' => $request->status
                  ]);
    }

    public function searchOrder(Request $request)
    {
      // dd($request->order_id);
      if(!$request->order_id){
        return redirect(route('getOrders'));
      }else{
        $transaction = transaction::where('id',$request->order_id)->paginate(15);
        return view('admin.orders',compact('transaction'));
       
      }

    }

    public function bulkChangeStatus(Request $request)
    {
      if($request->order_id){
        transaction::whereIn('id',$request->order_id)->update(['status'=>$request->status]);
      }
    }

    public function orderDetail(Request $request)
    { 
        $orderdetail = transaction::join("transaction_detail","transaction.id","=","transaction_detail.transaction_id")
                                    ->join("users","transaction.user_id","=","users.id")
                                    ->join("product","transaction_detail.product_id","=","product.id")
                                    ->join("product_image","transaction_detail.product_id","=","product_image.product_id")
                                    ->select("transaction.id as id","transaction.status","transaction.sub_total","transaction.phone_number","transaction.discount_total","transaction.total","transaction.payment_type","transaction.delivery_address","transaction.created_at","transaction_detail.id as sub_id","transaction_detail.product_id","transaction_detail.product_name","transaction_detail.quantity","users.fname","users.lname","users.email","users.contact","product_image.path","product.sku")       
                                    ->where("transaction.id",$request->order_id)
                                    ->groupBy("product_id")
                                    ->get();

      return view("admin.orderdetail",compact("orderdetail"));
    }

    public function alterOrderStatus(Request $request)
    {
      transaction::where('id',$request->id)->update(['status'=>$request->status]);
    }

    public function addSubCategory(Request $request)
    {
      subcategory::create(['subcategory_name'=>$request->subcategory_name,'category_id'=>$request->category_id]);

      return redirect(route('getSubCategory'));
    }

    public function updateSubCategory(Request $request)
    {
      if(subcategory::where('subcategory_id',$request->id)->update(['subcategory_name' => $request->input])){
            return "true";
        }else{
            return "false";
        }
    }

    public function deleteSubCategory(Request $request)
    {
      if(subcategory::where('subcategory_id',$request->id)->delete()){
            return "true";
        }else{
            return "false";
        }
    }

}

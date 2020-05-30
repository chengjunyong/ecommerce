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
use App\main_category;
use App\tag;
use App\voucher_transaction;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\subscription_list;
use App\template;
use App\brand;

use App\Mail\bulkmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class adminController extends Controller
{
    public function getIndex()
    {
      return view('admin.index');
    }

    public function createStaff(Request $request)
    {
      $validatedData = $request->validate([
        'fname' => ['required', 'string', 'max:255'],
        'lname' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
        'user_type' => ['required', 'string', 'max:255'],
      ]);

      User::create([
        'user_type' => $request->user_type,
        'fname' => $request->fname,
        'lname' => $request->lname,
        'email' => $request->email,
        'password' => Hash::make($request->password),
      ]);

      return back();
    }

    public function getBrandList()
    {
      $brand = brand::get();

      return view('admin.brandlist',compact('brand'));
    }

    public function getCategory()
    {
        $category = category::join("main_category","category.main_category","=","main_category.id")
                              ->select("category.*","main_category.name")
                              ->get();
        $main_category = main_category::get(); 

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
                               ->leftjoin("brand","brand.id","=","product.brand")
                               ->select("product.*","subcategory.subcategory_name","category.category_name","brand.brand as brand_name")
                               ->paginate(15);

    	return view('admin.productlist',compact('product_list'));

    }

    public function getProductDetail()
    {
    	return view('admin.productdetail');
    }

    public function getAddProduct()
    {
      $tag = tag::join("subcategory","subcategory.subcategory_id","=","tag.subcategory_id")
                  ->join("category","category.category_id","=","subcategory.category_id")
                  ->join("main_category","main_category.id","=","category.main_category")
                  ->select("tag.*","subcategory.subcategory_id","category.category_id","main_category.id as maincategory_id")
                  ->get();

      $brand = brand::get();

    	return view('admin.addproduct', compact('tag','brand'));
    }

    public function getOrders(Request $request)
    {

      if($request->filter == null){
        $target = $request->filter;
        $transaction = transaction::orderBy('created_at','desc')->paginate(15);
        return view('admin.orders',compact('transaction','target'));
      }else if($request->filter == 1){
        $target = $request->filter;
        $transaction = transaction::where('status',1)->orderBy('created_at','desc')->paginate(15);
        return view('admin.orders',compact('transaction','target'));
      }else if($request->filter == 2){
        $target = $request->filter;
        $transaction = transaction::where('status',2)->orderBy('created_at','desc')->paginate(15);
        return view('admin.orders',compact('transaction','target'));
      }else if($request->filter == 3){
        $target = $request->filter;
        $transaction = transaction::where('status',3)->orderBy('created_at','desc')->paginate(15);
        return view('admin.orders',compact('transaction','target'));
      }else if($request->filter == 4){
        $target = $request->filter;
        $transaction = transaction::where('status',4)->orderBy('created_at','desc')->paginate(15);
        return view('admin.orders',compact('transaction','target'));
      }else if($request->filter == -1){
        $target = $request->filter;
        $transaction = transaction::where('status',-1)->orderBy('created_at','desc')->paginate(15);
        return view('admin.orders',compact('transaction','target'));
      }else{
        $target = $request->filter;
        $transaction = transaction::orderBy('created_at','desc')->paginate(15);
        return view('admin.orders',compact('transaction','target'));
      }

    	
    }

    public function getTransaction()
    {
        $transaction = transaction::join('users','users.id','=','transaction.user_id')
                                    ->where('status',4)
                                    ->orWhere('status',-1)
                                    ->select('transaction.*','users.fname','users.lname')
                                    ->orderBy('transaction.updated_at','desc')
                                    ->paginate(15);

        return view('admin.transaction',compact('transaction'));
    }

    public function getCouponList()
    {
        $coupon_list = coupon::paginate(15);

        return view('admin.couponlist',compact('coupon_list'));
    }

    public function getCouponCreate()
    { 
        $category_list = category::get();

        return view('admin.couponcreate',compact('category_list'));
    }

    public function getCouponTransaction()
    {
      $voucher_transaction = voucher_transaction::join('users','users.id','=','voucher_transaction.user_id')
                                                ->select('voucher_transaction.*','users.fname','users.lname')
                                                ->paginate(15);

      return view('admin.coupontransaction',compact('voucher_transaction'));
    }

    public function getEmailMarketing()
    {
      $template = template::get();
      $selected = template::where('selected','1')->first();

      return view('admin.email_marketing',compact('template','selected'));
    }

    public function getUserList()
    {
      $user_list = User::whereIn('user_type', [2,3,4,5])->get();
      foreach($user_list as $user)
      {
        if($user->user_type == "2")
        {
          $user->position = "Manager";
        }
        elseif($user->user_type == "3")
        {
          $user->position = "Staff";
        }
        if($user->user_type == "4")
        {
          $user->position = "Staff ( Packing )";
        }
        if($user->user_type == "5")
        {
          $user->position = "Staff ( Driver )";
        }
      }

        return view('admin.userlist', compact('user_list'));
    }

    public function getCreateUser()
    {
        return view('admin.createuser');
    }

    public function getBrand()
    {
        return view('admin.brand');
    }

    public function getSubscriptionList()
    {
        $subscription = subscription_list::paginate(15);

        return view('admin.subscriptionlist',compact('subscription'));
    }

    public function getTemplateUpload()
    {

        return view('admin.template_upload');
    }

    public function listTemplate()
    {
      $template = template::paginate(15);

      return view('admin.list_template',compact('template'));
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

    public function getAdminRegister()
    {
      return view('admin.register');
    }

    public function getHome()
    {
        return view('front.index');
    }

    public function getMainCategory()
    {
        $maincategory = main_category::get();   

        return view('admin.maincategory',compact('maincategory'));
    }

    public function getTag()
    {
        $subcategory = subcategory::get();
        $tag = tag::join("subcategory","subcategory.subcategory_id","=","tag.subcategory_id")
                  ->select("tag.*","subcategory.subcategory_name")
                  ->get();

        return view('admin.tag',compact('tag','subcategory'));
    }

    public function postAddProduct(Request $request)
    {
      if($request->stock == null){
        $stock = -1;
      }else{
        $stock = $request->stock;
      }

      $target = explode(",",$request->tag);
      $product = product::create([
        'name'=> $request->product_name,
        'description' => $request->description,
        'sku'=> $request->sku,
        'brand'=> $request->brand,
        'maincategory_id'=>$target[3],
        'category_id'=>$target[2],
        'subcategory_id'=>$target[1],
        'tag_id'=>$target[0],
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

    public function updateBrand(Request $request)
    {
        if(brand::where('id',$request->id)->update(['brand' => $request->input])){
            return "true";
        }else{
            return "false";
        }
    }

    public function deleteBrand(Request $request)
    {
        if(brand::where('id',$request->id)->delete()){
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

        $tag = tag::join("subcategory","subcategory.subcategory_id","=","tag.subcategory_id")
                  ->join("category","category.category_id","=","subcategory.category_id")
                  ->join("main_category","main_category.id","=","category.main_category")
                  ->select("tag.*","subcategory.subcategory_id","category.category_id","main_category.id as maincategory_id")
                  ->get();

        $brand = brand::get();

        $images = product_image::where('product_id','=',$request->product_id)->get();

        return view('admin.editproduct',compact('tag','product_detail','images','brand'));
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

      $target = explode(',',$request->tag);
      product::where('id','=',$request->product_id)
                ->update([
                  'name' => $request->product_name,
                  'description' => $request->description,
                  'price' => $request->price,
                  'stock' => $stock,
                  'sku' => $request->product_sku,
                  'brand' => $request->brand,
                  'maincategory_id' => $target[3],
                  'category_id' => $target[2],
                  'subcategory_id' => $target[1],
                  'tag_id' => $target[0]
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
      if(!$request->order_id){
        return redirect(route('getOrders'));
      }else{
        $target = null;
        $transaction = transaction::where('id',$request->order_id)->paginate(15);
        return view('admin.orders',compact('transaction','target'));
       
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

    public function postMainCategory(Request $request)
    {
      main_category::create([
          'name' => $request->maincategory_name
      ]);

      return redirect(route('getMainCategory'));
    }

    public function updateMainCategory(Request $request)
    {
      main_category::where('id',$request->id)->update(['name'=>$request->input]);

      return "true";
    }

    public function deleteMainCategory(Request $request)
    {
      main_category::where('id',$request->id)->delete();

      return "true";
    }

    public function postTag(Request $request)
    {
      tag::create([
          'tag_name' => $request->tag_name,
          'subcategory_id' => $request->subcategory_id
      ]);

      return redirect(route('getTag'));
    }

    public function updateTag(Request $request)
    {
      tag::where('id',$request->id)->update(['tag_name'=>$request->input]);

      return "true";
    }

    public function deleteTag(Request $request)
    {
      tag::where('id',$request->id)->delete();

      return "true";
    }

    public function awb()
    {
      $transaction = transaction::join('users','users.id','=','transaction.user_id')
                                  ->where('transaction.status','3')
                                  ->select('transaction.*','users.fname','users.lname')
                                  ->get();
      return view('admin.awb',compact('transaction'));
    }

    public function searchVoucherTransaction(Request $request)
    {
      if($request->coupon_name != null){
        $voucher_transaction = voucher_transaction::join('users','users.id','=','voucher_transaction.user_id')
                                                   ->where('voucher_transaction.coupon_code_name','like','%'.$request->coupon_name.'%')
                                                   ->select('voucher_transaction.*','users.fname','users.lname')
                                                   ->paginate(15);
        return view('admin.coupontransaction',compact('voucher_transaction'));
      }else{
        return redirect(route('getCouponTransaction'));
      }

    }

    public function searchTransaction(Request $request)
    {
      if($request->transaction_id != null){
        $transaction = transaction::join('users','users.id','=','transaction.user_id')
                                    ->whereRaw('transaction.id = ? AND (status = 4 OR status = -1)',$request->transaction_id)
                                    ->select('transaction.*','users.fname','users.lname')
                                    ->orderBy('transaction.updated_at','desc')
                                    ->paginate(15);                           
        return view('admin.transaction',compact('transaction'));

      }else{

        return redirect(route('getTransaction'));
      }

    }

    public function getChecklist()
    {
      $confirmed_list = transaction::where('status', 2)->get();

      return view('admin.checklist', compact('confirmed_list'));
    }

    public function getChecklistItem()
    {
      $transaction_list = transaction::where('status', 2)->get();

      foreach($transaction_list as $transaction)
      {
        $transaction->item = transaction_detail::where('transaction_detail.transaction_id', $transaction->id)->leftJoin('product', 'transaction_detail.product_id', '=', 'product.id')->leftJoin('product_image', 'product.id', '=', 'product_image.product_id')->select('transaction_detail.*', 'product.description as description', 'product.sku as sku', 'product_image.path as path')->groupBy('transaction_detail.id')->get();
      }

      return view('admin.checklist_item', compact('transaction_list'));
    }

    public function updateChecklistStatus(Request $request)
    {
      if($request->transaction_id)
      {
        if(count($request->transaction_id) > 0)
        {
          transaction::whereIn('id', $request->transaction_id)->update([
            'status' => 3
          ]);

          $response = new \stdClass();
          $response->error = 0;
          $response->message = "Success";

          return response()->json($response);
        }
        else
        {
          $response = new \stdClass();
          $response->error = 1;
          $response->message = "No transaction ID found";

          return response()->json($response);
        }
      }
      else
      {
        $response = new \stdClass();
        $response->error = 1;
        $response->message = "No transaction ID found";

        return response()->json($response);
      }
    }

    // not used
    public function getChecklistDetail($id)
    {
      $transaction_id = $id;
      $next_transaction = null;
      $transaction_list = transaction::where('status', 2)->where('id', '<>', $id)->get();
      if(count($transaction_list) >= 1)
      {
        $next_transaction = $transaction_list[0]->id;
      }

      $transaction_detail = transaction_detail::where('transaction_detail.transaction_id', $id)->leftJoin('product', 'transaction_detail.product_id', '=', 'product.id')->leftJoin('product_image', 'product.id', '=', 'product_image.product_id')->select('transaction_detail.*', 'product.description as description', 'product_image.path as path', 'product.sku as sku')->groupBy('transaction_detail.id')->get();

      return view('admin.checklist_detail', compact('transaction_detail', 'next_transaction', 'transaction_id'));
    }
    // not used

    // not used
    public function updateChecklist(Request $request)
    {
      $checked = 0;
      if($request->checked == "true")
      {
        $checked = 1;
      }

      transaction_detail::where('id', $request->transaction_id)->update([
        'checked' => $checked
      ]);
    }
    // not used

    // not used
    public function updateTransaction(Request $request)
    {
      transaction::where('id', $request->transaction_id)->update([
        'status' => 3
      ]);

      $response = new \stdClass();
      $response->error = 0;
      $response->message = "Completed";

      return response()->json($response);
    }
    // not used

    public function templateUpload(Request $request)
    {
      $image_path = "/".$request->title."/images";
      $path = "/".$request->title;
      Storage::makeDirectory($request->title."/images");

      foreach($request->file as $result){
        if($result->getClientOriginalExtension() == "html"){
          $full = $result->storeAs($path,$request->title.".".$result->getClientOriginalExtension());
        }else{
          $result->storeAs($image_path,$result->getClientOriginalName());
        }
      }

      $content = Storage::get($request->title."/".$request->title.".html");
      foreach($request->file as $result){
        if($result->getClientOriginalExtension() != "html"){
          $content = str_replace("images/".$result->getClientOriginalName(),url('storage/'.$request->title.'/images/'.$result->getClientOriginalName()),$content);
          Storage::put($request->title."/".$request->title.".html",$content);
        }
      }

      template::create([
        "title"=>$request->title,
        "folder"=>$request->title,
        "fullpath"=>$full
      ]);

      return back()->with("success","Upload Successful");

    }

    public function deleteTemplate(Request $request)
    {
      template::where('id',$request->id)->delete();
      Storage::deleteDirectory($request->folder);
      return "completed";
    }

    public function viewTemplate(Request $request)
    {
      $path = template::where('id',$request->tid)->first();
      $path = Storage::url($path->fullpath);
      return redirect($path);
    }

    public function mail()
    {
      $success = array();
      $subscription = subscription_list::get();
      $path = template::where('selected',1)->first();
      foreach($subscription as $result){
        Mail::to($result->email)->send(new bulkmail($path));
        array_push($success,$result->id);
      }

      subscription_list::whereIn('id',$success)->update(['sended' => 1]);

      return "completed";
    }

    public function activateTemplate(Request $request)
    {
      template::where('selected',1)->update(['selected' => null]);
      template::where('id',$request->template)->update(['selected' => 1]);
      return back()->with('result','Success');   
    }

    public function addBrand(Request $request)
    {
      if(brand::firstWhere('brand',$request->brand) == null){
        $brand = brand::create([
            'brand' => $request->brand,
        ]);

        $path = $request->image->storeAs('/brand_image', $brand->id.".".$request->image->getClientOriginalExtension());
        brand::where('id',$brand->id)->update(['path'=>$path]);
        return back()->with('success','Brand Add Successful');

      }else{
        return back()->with('same','Brand Name Exist, Please Use Another Name');
      }

    }

    public function getBrandEdit(Request $request)
    {
      $brand = brand::where('id',$request->id)->first();

      return view('admin.brandedit',compact('brand'));

    }

    public function postBrandEdit(Request $request)
    {
      brand::where('id',$request->id)->update(['brand' => $request->brand,'path' => 'brand_image/'.$request->id.'.'.$request->image->getClientOriginalExtension()]);
      $brand = brand::where('id',$request->id)->first();
      Storage::delete($brand->path);
      $request->image->storeAs('/brand_image', $brand->id.".".$request->image->getClientOriginalExtension());

      return back()->with('success','Update Successful');
    }

    public function stopEmail(Request $request)
    {
      template::where('selected','1')->update(['selected' => null]);
      subscription_list::where('sended',1)->update(['sended' => 0]);

      return "1";
    }


}

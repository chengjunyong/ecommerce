<?php

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
use App\banner;
use App\special_product;
use App\special_product_list;
use App\Mail\bulkmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

// phpspreadsheet
use PhpOffice\PhpSpreadsheet\Writer\Xlsx; 

class adminController extends Controller
{
    public function __construct(){

    }

    public function getIndex()
    {
      $user = Auth::user();

      if($user->user_type == 1 || $user->user_type == 2){
        $monthly_sales = transaction::where('created_at','>',date("Y-m",strtotime(now())))
                                      ->get();
        $weekly_sales = transaction::where('created_at','>',date('Y-m-d',strtotime(now().'- 7 days')))
                                    ->where('created_at','<=',date('Y-m-d',strtotime(now().'+ 1 days')))
                                    ->get();
        $new_user = User::where('created_at','>',date('Y-m',strtotime(now())))
                          ->get();
        $a = transaction::selectRaw('month(created_at) as month, count(*) as total_sales, sum(total) as total')
                                      ->groupBy(DB::raw('month(created_at)'))
                                      ->get();
        $monthly_quantity = array(0,0,0,0,0,0,0,0,0,0,0,0);
        $monthly_income = array(0,0,0,0,0,0,0,0,0,0,0,0);
        foreach($a as $result){
          $monthly_quantity[$result->month-1] = $result->total_sales;
          $monthly_income[$result->month-1] = $result->total;
        }
        $monthly_quantity = json_encode($monthly_quantity);
        $monthly_income = json_encode($monthly_income);
        $category_sales = array();
        $a = transaction_detail::join('category','category.category_id','=','transaction_detail.category_id')
                                ->selectRaw('category.category_name,count(transaction_detail.id) as sales_qty')
                                ->where('transaction_detail.created_at','>',date("Y-m",strtotime(now())))
                                ->groupBy('transaction_detail.category_id')
                                ->get()
                                ->toArray();
        $category_sales = json_encode(array_column($a,'sales_qty'));
        $category = json_encode(array_column($a,'category_name'));
        $order_activity = transaction::join('users','users.id','=','transaction.user_id')
                                      ->limit(5)
                                      ->orderBy('transaction.created_at','desc')
                                      ->get();

        $order_status = transaction::where('status',4)->limit(5)->get();
        $different_type_status = array(0,0,0,0);
        $a = transaction::groupBy('status')
                        ->where('status','!=',-1)
                        ->selectRaw('count(id) as qty, status')
                        ->orderBy('status','asc')
                        ->get();
        foreach($a as $result){
          if($result->status == 1)
            $different_type_status[0] = $result->qty;
          else if($result->status == 2)
            $different_type_status[1] = $result->qty;
          else if($result->status == 3)
            $different_type_status[2] = $result->qty;
          else if($result->status == 4)
            $different_type_status[3] = $result->qty;
        }
        $different_type_status = json_encode($different_type_status);
        $top_5 = transaction_detail::join('product','product.id','=','transaction_detail.product_id')
                                ->selectRaw('count(transaction_detail.id) as d_qty,product.sku,sum(transaction_detail.quantity) as total_qty, sum(transaction_detail.total) as total,transaction_detail.product_name')
                                ->limit(5)
                                ->groupBy('transaction_detail.product_id')
                                ->orderBy('d_qty','desc')
                                ->get();
        return view('admin.index',compact(
          'monthly_sales',
          'weekly_sales',
          'new_user',
          'monthly_quantity',
          'monthly_income',
          'category_sales',
          'category',
          'order_activity',
          'order_status',
          'different_type_status',
          'top_5',
          'user',
        ));

      }else if($user->user_type == 3){

        $transaction = transaction::where('created_at','>',date("Y-m-d",strtotime(now().'-1 days')))
                                    ->where('status',1)
                                    ->limit(100)
                                    ->get();

        $different_type_status = array(0,0,0,0);
        $a = transaction::groupBy('status')
                        ->where('status','!=',-1)
                        ->selectRaw('count(id) as qty, status')
                        ->orderBy('status','asc')
                        ->get();
        foreach($a as $result){
          if($result->status == 1)
            $different_type_status[0] = $result->qty;
          else if($result->status == 2)
            $different_type_status[1] = $result->qty;
          else if($result->status == 3)
            $different_type_status[2] = $result->qty;
          else if($result->status == 4)
            $different_type_status[3] = $result->qty;
        }
        $status = json_encode($different_type_status);

        $order_activity = transaction::join('users','users.id','=','transaction.user_id')
                                      ->where('transaction.created_at','>',date("Y-m-d"))
                                      ->where('transaction.status',2)
                                      ->orderBy('transaction.created_at','desc')
                                      ->limit(100)
                                      ->get();

        return view('admin.index2',compact('transaction','status','order_activity'));

      }else if($user->user_type == 4){

        $transaction = transaction::where('status',2)->get();

        $status = array(0,0);
        $a = transaction::groupBy('status')
                        ->where('status',2)
                        ->orWhere('status',3)
                        ->selectRaw('count(id) as qty, status')
                        ->orderBy('status','asc')
                        ->get();

        foreach($a as $result){
          if($result->status == 2)
            $status[0] = $result->qty;
          else if($result->status == 3)
            $status[1] = $result->qty;
        }

        $status = json_encode($status);
        
        return view('admin.index3',compact('transaction','status'));

      }else if($user->user_type == 5){

        $transaction = transaction::where('status',3)->get();

        $status = array(0,0,0);
        $a = transaction::groupBy('status')
                        ->selectRaw('count(id) as qty, status')
                        ->orderBy('status','asc')
                        ->get();

        foreach($a as $result){
          if($result->status == 2)
            $status[0] = $result->qty;
          else if($result->status == 3)
            $status[1] = $result->qty;
          else if($result->status == 4)
            $status[2] = $result->qty;
        }

        $status = json_encode($status);

        $order_activity = transaction::join('users','users.id','=','transaction.user_id')
                                      ->where('transaction.created_at','>',date("Y-m-d",strtotime(now().'-1 days')))
                                      ->where('transaction.status',3)
                                      ->orWhere('transaction.status',4)
                                      ->orderBy('transaction.created_at','desc')
                                      ->limit(100)
                                      ->get();

        return view('admin.index4',compact('transaction','status','order_activity'));

      }else{

        return "No Access";
      }

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

    public function getCustomerList(){

        $user = User::leftJoin('transaction','transaction.user_id','=','users.id')
                  ->selectRaw('users.*,SUM(transaction.total) as total_amount,COUNT(transaction.id) as quantity')
                  ->where('users.user_type',null)
                  ->groupBy('users.id')
                  ->get();

        return view('admin.customer_list',compact('user'));
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

    public function getSpecifyDateReport()
    {

       return view('admin.report');
    }

    public function getProductReport()
    {

       return view('admin.product_report');
    }

    public function getProfile()
    { 
        $user = Auth::user();

        return view('admin.profile', compact('user'));
    }

    public function changeUserProfile(Request $request)
    {
      $user = Auth::user();

      $query = [
        'fname' => $request->fname,
        'lname' => $request->lname,
        'contact' => $request->contact,
      ];

      if($request->password && $request->password_confirmation)
      {
        $query['password'] = Hash::make($request->password);
      }

      User::where('id', $user->id)->update($query);

      return back();
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
        // start admin access control
        $response = $this->accessControl();
        if($response->error == true)
          return redirect(route($response->return_route));
        // end

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

    public function getOnSales()
    {
      $search = null;
      if(isset($_GET['search']))
      {
        $search = $_GET['search'];
      }

      $product_list = product::where('active', 1)->where(function($query) use ($search){
        if($search)
        {
          $query->where('name', 'LIKE', '%'.$search.'%')->orWhere('sku', 'LIKE', '%'.$search.'%');
        }
      })->paginate(10);

      return view('admin.on_sales', compact('product_list', 'search'));
    }

    public function getTodayDeal()
    {
      $search = null;
      if(isset($_GET['search']))
      {
        $search = $_GET['search'];
      }

      $product_list = product::where('active', 1)->where(function($query) use ($search){
        if($search)
        {
          $query->where('name', 'LIKE', '%'.$search.'%')->orWhere('sku', 'LIKE', '%'.$search.'%');
        }
      })->paginate(10);

      return view('admin.today_deal', compact('product_list', 'search'));
    }

    public function getSpecialProduct()
    {
      $search = null;
      if(isset($_GET['search']))
      {
        $search = $_GET['search'];
      }

      $special_product_list = special_product::where(function($query) use ($search){
        if($search)
        {
          $query->where('name', 'LIKE', '%'.$search.'%');
        }
      })->groupBy('name')->paginate(10);

      return view('admin.special_product', compact('special_product_list', 'search'));
    }

    public function getSpecialProductDetail($id)
    {
      $special_product = special_product::where('id', $id)->first();

      $search = null;
      if(isset($_GET['search']))
      {
        $search = $_GET['search'];
      }

      $product_list = product::where('active', 1)->where(function($query) use ($search){
        if($search)
        {
          $query->where('name', 'LIKE', '%'.$search.'%')->orWhere('sku', 'LIKE', '%'.$search.'%');
        }
      })->paginate(10);

      $special_product_list = special_product_list::where('special_product_id', $id)->get();
      
      foreach($product_list as $product_detail)
      {
        $product_detail->special_product = null;
        foreach($special_product_list as $special_product_detail)
        {
          if($special_product_detail->product_id == $product_detail->id)
          {
            $product_detail->special_product = 1;
            break;
          }
        }
      }

      return view('admin.special_product_detail', compact('product_list', 'search', 'special_product'));
    }

    public function updateOnsales(Request $request)
    {
      foreach($request->product_id as $product_id)
      {
        $active_name = "active_".$product_id;
        $discount_type_name = "discount_type_".$product_id;
        $discount_amount_name = "discount_amount_".$product_id;
        $discount_date_range_name = "daterange_".$product_id;

        if($request->$active_name == 1)
        {
          $date_range = explode(" - ", $request->$discount_date_range_name);
          $date_range_from = null;
          $date_range_to = null;

          if(count($date_range) > 1)
          {
            $date_range_from = date('Y-m-d', strtotime($date_range[0]));
            $date_range_to = date('Y-m-d', strtotime($date_range[1]));
          }

          product::where('id', $product_id)->update([
            'on_sales' => 1,
            'on_sales_from' => $date_range_from,
            'on_sales_to' => $date_range_to,
            'on_sales_type' => $request->$discount_type_name,
            'on_sales_amount' => $request->$discount_amount_name
          ]);
        }
        else
        {
          product::where('id', $product_id)->update([
            'on_sales' => null
          ]);
        }
      }

      return redirect(route('getOnSales'));
    }

    public function updateTodayDeal(Request $request)
    {
      foreach($request->product_id as $product_id)
      {
        $active_name = "active_".$product_id;
        $discount_type_name = "discount_type_".$product_id;
        $discount_amount_name = "discount_amount_".$product_id;
        $discount_date_range_name = "daterange_".$product_id;

        if($request->$active_name == 1)
        {
          $date_range = explode(" - ", $request->$discount_date_range_name);
          $date_range_from = null;
          $date_range_to = null;

          if(count($date_range) > 1)
          {
            $date_range_from = date('Y-m-d', strtotime($date_range[0]))." 00:00:00";
            $date_range_to = date('Y-m-d', strtotime($date_range[1]))." 23:59:59";
          }

          product::where('id', $product_id)->update([
            'today_deal' => 1,
            'today_deal_from' => $date_range_from,
            'today_deal_to' => $date_range_to,
            'today_deal_type' => $request->$discount_type_name,
            'today_deal_amount' => $request->$discount_amount_name
          ]);
        }
        else
        {
          product::where('id', $product_id)->update([
            'today_deal' => null
          ]);
        }
      }

      return redirect(route('getTodayDeal'));
    }

    public function updateSpecialProduct(Request $request)
    {
      $new_special_product_type = $request->new_special_product_type;
      if($new_special_product_type)
      {
        if(count($new_special_product_type) > 0)
        {
          foreach($new_special_product_type as $new_type)
          {
            special_product::create([
              'name' => $new_type,
              'active' => 1,
            ]);
          }
        }
      }

      if($request->special_product)
      {
        foreach($request->special_product as $special_product)
        {
          $active_name = "active_".$special_product;
          $special_product_name = "name_".$special_product;
          special_product::where('id', $special_product)->update([
            'name' => $request->$special_product_name,
            'active' => $request->$active_name
          ]);
        }
      }

      return redirect(route('getSpecialProduct'));
    }

    public function deleteSpecialProduct(Request $request)
    {
      special_product::where('id', $request->special_product_id)->delete();
      special_product_list::where('special_product_id', $request->special_product_id)->delete();

      return redirect(route('getSpecialProduct'));
    }

    public function updateSpecialProductList(Request $request)
    {
      $special_product_list = special_product_list::where('special_product_id', $request->special_product_id)->get();
      foreach($request->product_id as $product_id)
      {
        $active_name = "active_".$product_id;
        $product_found = 0;
        $special_product_id = null;
        foreach($special_product_list as $special_product_detail)
        {
          if($special_product_detail->product_id == $product_id)
          {
            $product_found = 1;
            $special_product_id = $special_product_detail->id;
            break;
          }
        }

        if($product_found == 0 && $request->$active_name == 1)
        {
          special_product_list::create([
            'special_product_id' => $request->special_product_id,
            'product_id' => $product_id
          ]);
        }
        elseif($product_found == 1 && $request->$active_name == 0)
        {
          special_product_list::where('id', $special_product_id)->delete();
        }
      }

      return redirect(route('getSpecialProductDetail', ['id' => $request->special_product_id]));
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

    public function postReportDate(Request $request)
    { 
      if($request->month != null){
        $date_start = $request->month."-01";
        $date_end = Date('Y-m-d',strtotime($request->month.'+1 month'));
      }else{
        $date_start = $request->d_start;
        $date_end = Date('Y-m-d',strtotime($request->d_end.'+1 day'));
      }
      
      $output = "";
      $total_sum = transaction::whereBetween('transaction.created_at',[$date_start,$date_end])
                          ->where('transaction.status',1)
                          ->selectRaw('sum(discount_total) as total_discount, sum(total) as total_amount')
                          ->first();
                
      $data = transaction::join('transaction_detail','transaction.id','=','transaction_detail.transaction_id')
                          ->whereBetween('transaction.created_at',[$date_start,$date_end])
                          ->where('transaction.status',1)
                          ->select('transaction.*','transaction_detail.product_name','transaction_detail.product_price','transaction_detail.quantity','transaction_detail.total')
                          ->get();  

      $guard = "";
      $index = 0;
      $quantity = 0;

      $total_discount = number_format($total_sum->total_discount, 2, '.', ',');
      $total_amount = number_format($total_sum->total_amount, 2, '.', ',');

      foreach($data as $key => $result){
        $total = number_format($result->total, 2, '.', ',');
        $quantity += $result->quantity;
        if($result->discount_total != 0){
          $discount = number_format($result->discount_total, 2, '.', ',');
        }

        if($guard != $result->id){  
          $output .= "<tr>";
          $output .= "<td>".++$index."</td>";
          $output .= "<td>".$result->id."</td>";
          $output .= "<td>".($result->discount_total == 0 ? 'No Discount' : "Rm ".$discount)."</td>";
          $output .= "<td>".$result->product_name."</td>";
          $output .= "<td>".$result->quantity."</td>";
          $output .= "<td>Rm ".$total."</td>";
          $output .= "</tr>";
          $guard = $result->id;  
        }else{
          $output .= "<tr>";
          $output .= "<td></td>";
          $output .= "<td></td>";
          $output .= "<td></td>";
          $output .= "<td>".$result->product_name."</td>";
          $output .= "<td>".$result->quantity."</td>";
          $output .= "<td>Rm ".$total."</td>";
          $output .= "</tr>";
          $guard = $result->id;
        }
      }

      $output .= "<tr>";
      $output .= "<td style='border-top: 2px solid;'></td>";
      $output .= "<td style='border-top: 2px solid;'></td>";
      $output .= "<td style='border-top: 2px solid;'>Total Discount:<br/><b>Rm ".$total_discount."</b></td>";
      $output .= "<td style='border-top: 2px solid;'></td>";
      $output .= "<td style='border-top: 2px solid;'>Total Quantity:<br/><b>".$quantity."</b></td>";
      $output .= "<td style='border-top: 2px solid;'>Total Sales:<br/><b>Rm ".$total_amount."</b></td>";
      $output .= "</tr>";               

      return view('admin.report.specify_date_report',compact('output','date_start','date_end'));
    }


    public function postProductReport(Request $request)
    {
      $product_name = $request['product'];
      $date_start = $request['d_start'];
      $date_end = $request['d_end'];
      $date_end = Date('Y-m-d',strtotime($date_end.'+1 day'));

      $product = transaction_detail::join('category','transaction_detail.category_id','=','category.category_id')
                                ->whereBetween('transaction_detail.created_at',[$date_start,$date_end])
                                ->where('transaction_detail.product_name','LIKE',$product_name)
                                ->get();

      $output = "";
      $index = 0;
      $total_quantity = 0;
      $total_amount = 0;

      foreach($product as $result){
        $output .= "<tr>";
        $output .= "<td>".++$index."</td>";
        $output .= "<td>".$result->transaction_id."</td>";
        $output .= "<td>".$result->created_at."</td>";
        $output .= "<td>".$result->product_price."</td>";
        $output .= "<td>".$result->quantity."</td>";
        $output .= "<td>Rm ".$result->total."</td>";
        $output .= "</tr>";

        $total_quantity += $result->quantity;
        $total_amount += $result->total;
      }

      $output .= "<tr>";
      $output .= "<td style='border-top: 2px solid;'></td>";
      $output .= "<td style='border-top: 2px solid;'></td>";
      $output .= "<td style='border-top: 2px solid;'></td>";
      $output .= "<td style='border-top: 2px solid;'></td>";
      $output .= "<td style='border-top: 2px solid;'>Total Quantity:<br/><b>".$total_quantity."</b></td>";
      $output .= "<td style='border-top: 2px solid;'>Total Sales:<br/><b>Rm ".$total_amount."</b></td>";
      $output .= "</tr>";  

      return view('admin.report.product_report',compact('date_start','date_end','product_name','output'));
    }

    public function getAjaxProductList(Request $request)
    {
      return product::where('name','LIKE','%'.$request->product_name.'%')->get();
    }

    public function readExcel()
    { 
      // read excel file
      $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();

      $reader->setLoadSheetsOnly(["Sheet1", "Sheet4"]);

      $spreadsheet = $reader->load("storage/test.xlsx");

      // either 1
      // $sheet = $spreadsheet->getActiveSheet();
      // $sheet = $spreadsheet->getSheetByName('sheet2');

      $sheet_1 = null;
      $sheet_4 = null;

      foreach ($spreadsheet->getWorksheetIterator() as $sheet)
      {
        if($sheet->getTitle() == "Sheet1")
        {
          $sheet_1 = $sheet;
        }
        elseif($sheet->getTitle() == "Sheet4")
        {
          $sheet_4 = $sheet;
        }
      }

      $item_name = $sheet_1->getCell('B3')->getValue();
      $sheet_title = $sheet_4->getCell('A4')->getValue();

      // dd($item_name, $sheet_title);

      // edit
      $sheet_1->setCellValue('A8', "This is A8 new value");

      $writer = new Xlsx($spreadsheet);
      $writer->save('storage/edit.xlsx');

      return response()->download('storage/edit.xlsx');
      // end edit

      // end read

      $mysheet = ["My sheet 1", "My sheet 2"];

      $spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
      // $spreadsheet->createSheet();
      $sheet = $spreadsheet->setActiveSheetIndex(0);
      $sheet->setTitle("This is my sheet");

      foreach($mysheet as $key => $new_sheet)
      {
        $spreadsheet->createSheet();
        $sheet = $spreadsheet->setActiveSheetIndex(($key + 1));
        $sheet->setTitle($new_sheet);

        $sheet->setCellValue('A1', "This is sheet ".($key + 1));
      }

      $spreadsheet->removeSheetByIndex(0);

      $writer = new Xlsx($spreadsheet);
      $writer->save('storage/write.xlsx');

      // return response()->download('storage/write.xlsx');
    }

    public function accessControl()
    {
      $user = Auth::user();
      $route = $this->accessControlDetail();

      $current_route = Route::currentRouteName();

      foreach($route as $key => $value)
      {
        if($key == $current_route)
        {
          foreach($value as $permission)
          {
            if($permission == $user->user_type)
            {
              $response = new \stdClass();
              $response->error = false;
              return $response;
            }
          }

          $response = new \stdClass();
          $response->error = true;
          $response->return_route = "getIndex";

          return $response;
          break;
        }
      }
    }

    public function accessControlDetail()
    {
      $route = [
        'getMainCategory' => [1,2],
        'getCategory' => [1,2],
        'getSubCategory' => [1,2],
        'getTag' => [1,2],
        'getBrandList' => [1,2],
        'getProductList' => [1,2],
        'getAddProduct' => [1,2],
        'getOrders' => [1,2,3,5],
        'getTransaction' => [1,2,3,5],
        'getChecklist' => [1,2,3,4],
        'getCouponList' => [1,2],
        'getCouponCreate' => [1,2],
        'getCouponTransaction' => [1,2],
        'getUserList' => [1,2],
        'getCreateUser' => [1,2],
        'getSubscriptionList' => [1],
        'getEmailMarketing' => [1],
        'listTemplate' => [1],
        'getTemplateUpload' => [1],
        'getSpecifyDateReport' => [1,2],
        'getProfile' => [1,2],
      ];

      return $route;
    }

    public function getBannerSlider()
    {
      $banner = banner::where('type','LIKE','front_slider')->get();

      return view('admin.banner_slider',compact('banner'));
    }

    public function getAddBanner()
    {

      return view('admin.add_banner');
    }

    public function postBannerSlider(Request $request)
    {

      $name = hash('sha256',$request->banner_image->getPathName());

      $path = $request->banner_image->storeAs('/banner_image',$name.".".$request->banner_image->getClientOriginalExtension());

      banner::create([
        'type'=>'front_slider',
        'target_url'=>$request->target_url,
        'img_path'=>$path,
        'title1'=>$request->title1,
        'title2'=>$request->title2,
        'description'=>$request->description,
        'status'=>1
      ]);

      return redirect(route('getBannerSlider'));
    }

    public function getEditBanner(Request $request)
    {
      $banner = banner::where('id',$request->id)->first();

      return view('admin.edit_banner',compact('banner'));
    }

    public function editBannerSlider(Request $request)
    {

      $path = $request->img_path;
      if($request->banner_image != null){
        Storage::delete($request->img_path);
        $name = hash('sha256',$request->banner_image->getPathName());
        $path = $request->banner_image->storeAs('/banner_image',$name.".".$request->banner_image->getClientOriginalExtension());
      }

      banner::where('id',$request->banner_id)
              ->update([
                'target_url'=>$request->target_url,
                'img_path'=>$path,
                'title1'=>$request->title1,
                'title2'=>$request->title2,
                'description'=>$request->description,
              ]);

      return redirect(route('getBannerSlider'));

    }

    public function deleteBanner(Request $request)
    {
      $path = banner::where('id',$request->id)->first();
      Storage::delete($path->img_path);
      banner::where('id',$request->id)->delete();

      return true;
    }

    public function getPopupBanner()
    {
      $product = product::paginate(15);

      return view('admin.popup_banner',compact('product'));
    }

    public function getProductPopup(Request $request)
    {
      $product = product::where('name','LIKE','%'.$request->target.'%')
                          ->orWhere('sku','LIKE','%'.$request->target.'%')
                          ->paginate(15);

      return view('admin.popup_banner',compact('product'));
    }

    public function postPopupBanner(Request $request)
    {
      $deactive = array();

      if($request->active != null){
        foreach($request->product_id as $result)
        {
          if(!in_array($result,$request->active)){
            array_push($deactive,$result);
          }
        }
        product::whereIn('id',$request->active)->update(['popup_banner' => 1]);
        product::whereIn('id',$deactive)->update(['popup_banner' => null]);
      }else{
        product::whereIn('id',$request->product_id)->update(['popup_banner' => null]);
      }

      return redirect(route('getPopupBanner'));
    }

    public function bulkUserDelete(Request $request)
    {
      if(User::whereIn('id',$request->user_list)->delete()){
        return 'true';
      }else{
        return 'false';
      }
    }

    public function getCustomerPurchaseList(Request $request)
    {
      $transaction = transaction::where('user_id',$request->id)->get();

      return view('admin.customer_purchase_list',compact('transaction'));
    }

    public function getTransactionDetail(Request $request)
    {
      $transaction = transaction::where('id',$request->id)->first();
      $transaction_detail = transaction_detail::where('transaction_id',$request->id)->get();

      return view('admin.transaction_detail',compact('transaction','transaction_detail'));
    }

}


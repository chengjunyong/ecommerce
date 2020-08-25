<?php

namespace App\Http\Controllers;

use App\main_category;
use App\category;
use App\subcategory;
use App\product;
use App\product_image;
use App\wishlist;
use App\wishlist_detail;
use App\cart;
use App\cart_detail;
use App\address_book;
use App\tag;
use App\postcode;
use App\brand;
use App\transaction;
use App\transaction_detail;
use App\User;
use App\memo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Mail;
use App\Mail\frontMail;
use Illuminate\Support\Facades\Crypt;

class frontController extends Controller
{
	public function getFrontIndex()
	{
    $banner = array(
      [
        "class" => "layout2-slide-1",
        "img" => "/assets/images/layout-1/slider/1.1.png",
        'header1' => "the best",
        'header2' => "loffer shoes",
        'header3' => "minimum 30% off",
      ],
      [
        "class" => "layout2-slide-2",
        "img" => "/assets/images/layout-1/slider/1.2.png",
        "header1" => "cinema festival",
        "header2" => "reflex camera",
        "header3" => "minimum 40% off",
      ],
      [
        "class" => "layout2-slide-3",
        "img" => "/assets/images/layout-1/slider/1.3.png",
        "header1" => "march special",
        "header2" => "leather bag",
        "header3" => "minimum 60% off",
      ]
    );

    $brand_list = brand::get();

    $on_sales_list = product::where('product.active', 1)->where('product.on_sales', 1)->leftJoin('product_image', 'product_image.product_id', '=', 'product.id')->where('product.on_sales_to', '>=', date('Y-m-d', strtotime(now())))->select('product.*', 'product_image.path as path')->groupby('product.id')->get();
    $today_deal_list = product::where('product.active', 1)->where('product.today_deal', 1)->leftJoin('product_image', 'product_image.product_id', '=', 'product.id')->where('product.today_deal_to', '>=', date('Y-m-d H:i:s', strtotime(now())))->select('product.*', 'product_image.path as path')->groupby('product.id')->get();

    foreach($on_sales_list as $on_sales)
    {
      $on_sales->on_sales_price = $on_sales->price;
      if($on_sales->on_sales_type == "percentage" && $on_sales->on_sales_amount != 0 && $on_sales->on_sales_amount != null)
      {
        $on_sales->on_sales_price = $on_sales->price * (100 - $on_sales->on_sales_amount) / 100;
      }
      elseif($on_sales->on_sales_type == "fixed")
      {
        $on_sales->on_sales_price = $on_sales->price - $on_sales->on_sales_amount;
      }

      if($on_sales->on_sales_price <= 0)
      {
        $on_sales->on_sales_price = 0;
        $on_sales->on_sales_amount = $on_sales->price;
      }
    }

    foreach($today_deal_list as $today_deal)
    {
      $today_deal->today_deal_price = $today_deal->price;
      if($today_deal->today_deal_type == "percentage" && $today_deal->today_deal_amount != 0 && $today_deal->today_deal_amount != null)
      {
        $today_deal->today_deal_price = $today_deal->price * (100 - $today_deal->today_deal_amount) / 100;
      }
      elseif($today_deal->today_deal_type == "fixed")
      {
        $today_deal->today_deal_price = $today_deal->price - $today_deal->today_deal_amount;
      }

      if($today_deal->today_deal_price <= 0)
      {
        $today_deal->today_deal_price = 0;
        $today_deal->today_deal_amount = $today_deal->price;
      }

      $today_deal->hours = 0;
      $today_deal->minutes = 0;
      $today_deal->seconds = 0;

      if($today_deal->today_deal_to)
      {
        $from = new \DateTime(now());
        $to = new \DateTime($today_deal->today_deal_to);

        $diff = $to->diff($from);
        $today_deal->hours = $diff->h + ($diff->d * 24);
        $today_deal->minutes = $diff->i;
        $today_deal->seconds = $diff->s;
      }
    }

		return view('front.index', compact("banner", "brand_list", "on_sales_list", "today_deal_list"));
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

  public function getItemSearch()
  {
    $keyword = "";

    if(isset($_GET['keyword']))
    {
      $keyword = $_GET['keyword'];
      $product_list = product::where('name', 'LIKE', '%'.$keyword.'%')->orWhere('description', 'LIKE', '%'.$keyword.'%')->paginate(10);

      $subcategory = array();
      $product_id_array = array();

      foreach($product_list as $product)
      {
        if(!in_array($product->subcategory_id, $subcategory))
        {
          array_push($subcategory, $product->subcategory_id);
        }

        array_push($product_id_array, $product->id);
      }

      $product_image_list = product_image::whereIn('product_id', $product_id_array)->get();

      foreach($product_list as $product)
      {
        $product_image = array();
        foreach($product_image_list as $image)
        {
          if($image->product_id == $product->id)
          {
            array_push($product_image, $image);
          }
        }
        $product->image = $product_image;
      }

      $tag_list = tag::whereIn('subcategory_id', $subcategory)->get();
      $brand_list = brand::get();

      return view('front.category', compact('product_list', 'tag_list', 'brand_list', 'keyword'));
    }

    return redirect()->back();
    
  }

  public function getSearchedItems(Request $request)
  {
    $product_list = product::where('name', 'LIKE', $request->search."%")->limit(10)->get();

    $response = new \stdClass();
    $response->message = "Success";
    $response->error = 0;
    $response->items = $product_list;

    return response()->json($response);
  }

  public function getCategoryPage($id)
  {
    $type = $_GET['type'];

    $main_category = null;
    $category = null;
    $subcategory = null;
    
    if($type == 1)
    {
      $main_category = main_category::where('id', $id)->first();

      $product_list = product::where('maincategory_id', $id)->paginate(10);
    }
    elseif($type == 2)
    {
      $category = category::where('category_id', $id)->first();
      if($category)
      {
        $main_category = main_category::where('id', $category->main_category)->first();
      }
      
      $product_list = product::where('category_id', $id)->paginate(10);
    }
    elseif($type == 3)
    {
      $subcategory = subcategory::where('subcategory_id', $id)->first();

      if($subcategory)
      {
        $category = category::where('category_id', $subcategory->category_id)->first();
        if($category)
        {
          $main_category = main_category::where('id', $category->main_category)->first();
        }
      }

      $product_list = product::where('subcategory_id', $id)->paginate(10);
    }

    $sub_category_id_array = array();
    $product_id_array = array();
    $brand_id_array = array();
    foreach($product_list as $product)
    {
      if(!in_array($product->subcategory_id, $sub_category_id_array))
      {
        array_push($sub_category_id_array, $product->subcategory_id);
      }

      if(!in_array($product->brand, $brand_id_array))
      {
        array_push($brand_id_array, $product->brand);
      }

      array_push($product_id_array, $product->id);
    }

    $brand_list = brand::whereIn('id', $brand_id_array)->get();

    $tag_list = tag::whereIn('subcategory_id', $sub_category_id_array)->get();

    $product_image_list = product_image::whereIn('product_id', $product_id_array)->get();

    foreach($product_list as $product)
    {
      $product_image = array();
      foreach($product_image_list as $image)
      {
        if($image->product_id == $product->id)
        {
          array_push($product_image, $image);
        }
      }
      $product->image = $product_image;
    }

    $breadcrumb = array([
      'name' => "Homepage",
      'route' => route("getFrontIndex"),
    ]);

    if($main_category)
    {
      array_push($breadcrumb, [
        'name' => $main_category->name,
        'route' => route("getCategoryPage", ['id' => $main_category->id, 'type' => 1]),
      ]);
    }

    if($category)
    {
      array_push($breadcrumb, [
        'name' => $category->category_name,
        'route' => route("getCategoryPage", ['id' => $category->category_id, 'type' => 2]),
      ]);
    }

    if($subcategory)
    {
      array_push($breadcrumb, [
        'name' => $subcategory->subcategory_name,
        'route' => route("getCategoryPage", ['id' => $subcategory->subcategory_id, 'type' => 3]),
      ]);
    }

    return view('front.category', compact('product_list', 'tag_list', 'brand_list', 'breadcrumb'));
  }

  public function getRegisterPage()
  {
    return view('front.register');
  }

  public function getUserProfile()
  {
    $tab = null;
    if(isset($_GET['tab']))
    {
      $tab = $_GET['tab'];
    }

    $user = Auth::user();
    $address_book_list = address_book::where('user_id', $user->id)->get();

    $breadcrumb = array([
      'name' => "Homepage",
      'route' => route("getFrontIndex"),
    ],[
      'name' => "Dashboard",
      'route' => route("getUserProfile")
    ]);
    
    return view('front.dashboard', compact('user', 'tab', 'address_book_list', 'breadcrumb'));
  }

  public function getEditInfo()
  {
    $user = Auth::user();

    return view('front.edit_info', compact('user'));
  }

  public function getEditAddress()
  {
    return view('front.edit_address');
  }

  public function getContactUsPage()
  {
    return view('front.contact_us');
  }

  public function getOrderTracking()
  {
    return view('front.order_tracking');
  }

  public function getOrderTrackingDetail()
  {
    $tracking_no = $_GET['tracking_no'];
    return view('front.order_tracking_detail');
  }

  public function getOrderReceipt()
  {
    return view('front.order_receipt');
  }

  public function getFAQ()
  {
    return view('front.faq');
  }

  public function getForgotPassword()
  {
    return view('front.forgot_password');
  }

  public function getOrderHistory()
  {
    $user = Auth::user();

    $transaction_list = transaction::where('user_id', $user->id)->orderBy('created_at', 'desc')->get();

    $transaction_id_array = array();
    foreach($transaction_list as $transaction)
    {
      $transaction->status_text = $this->transactionStatus($transaction->status);
      array_push($transaction_id_array, $transaction->id);
    }

    $transaction_detail = transaction_detail::whereIn('transaction_id', $transaction_id_array)->get();

    $product_id_array = array();
    foreach($transaction_detail as $detail)
    {
      if(!in_array($detail->product_id, $product_id_array))
      {
        array_push($product_id_array, $detail->product_id);
      }
    }

    $product_list = product::whereIn('product.id', $product_id_array)->join('product_image', 'product_image.product_id', '=', 'product.id')->select('product.*', 'product_image.path as path')->groupby('product.id')->get();

    foreach($transaction_detail as $detail)
    {
      $detail->path = null;
      foreach($product_list as $product_detail)
      {
        if($detail->product_id == $product_detail->id)
        {
          $detail->path = $product_detail->path;
          break;
        }
      }
    }

    foreach($transaction_list as $transaction)
    {
      $transaction_item = array();
      foreach($transaction_detail as $item)
      {
        if($item->transaction_id == $transaction->id)
        {
          array_push($transaction_item, $item);
        }
      }

      $transaction->item = $transaction_item;
    }

    $breadcrumb = array([
      'name' => "Homepage",
      'route' => route("getFrontIndex"),
    ],[
      'name' => "Dashboard",
      'route' => route("getUserProfile")
    ],[
      'name' => "Order History",
      'route' => route("getOrderHistory")
    ]);

    return view('front.order_history', compact('transaction_list', 'breadcrumb'));
  }

  public function getWishList()
  {
    $user = Auth::user();

    $wishlist_list = [];
    if($user)
    {
      $wishlist_list = wishlist::where('wishlist.user_id', $user->id)->join('wishlist_detail', 'wishlist_detail.wishlist_id', '=', 'wishlist.id')->join('product', 'wishlist_detail.product_id', '=', 'product.id')->select('wishlist_detail.*', 'product.name as product_name', 'product.price as product_price', 'product.id as product_id', 'product.stock as stock', 'wishlist.id as wishlist_id')->get();

      if(count($wishlist_list) > 0)
      {
        foreach($wishlist_list as $wishlist)
        {
          $wishlist->image = product_image::where('product_id', $wishlist->product_id)->first();
        }
      }
    }

    return view('front.wishlist', compact('wishlist_list'));
  }

  public function getPostcodeResult(Request $request)
  {
      $result = postcode::where("postcode",$request->postcode)->count();
      if($result == 0){
        return "Sorry, Your Area Is Not Available";
      }else{
        return "Congratulation, We Able Delivery To Your Area";
      }
  }

  public function transactionStatus($status)
  {
    if($status == 1)
    {
      return "Pending";
    }
    elseif($status == 2)
    {
      return "Confirmed";
    }
    elseif($status == 3)
    {
      return "Shipped";
    }
    elseif($status == 4)
    {
      return "Delivered";
    }
    elseif($status == 5)
    {
      return "Cancelled";
    }
    else
    {
      return "";
    }
  }

  public function getBrandList($id)
  {
    $brand_list = brand::where('id', $id)->get();

    $product_list = product::where('brand', $id)->paginate(10);

    $product_id_array = array();
    $sub_category_id_array = array();
    foreach($product_list as $product)
    {
      array_push($product_id_array, $product->id);
      if(!in_array($product->subcategory_id, $sub_category_id_array))
      {
        array_push($sub_category_id_array, $product->subcategory_id);
      }
    }

    $tag_list = tag::whereIn('subcategory_id', $sub_category_id_array)->get();

    $product_image_list = product_image::whereIn('product_id', $product_id_array)->get();

    foreach($product_list as $product)
    {
      $product_image = array();
      foreach($product_image_list as $image)
      {
        if($image->product_id == $product->id)
        {
          array_push($product_image, $image);
        }
      }
      $product->image = $product_image;
    }

    return view('front.category', compact('product_list', 'tag_list', 'brand_list'));
  }

  public function sendMail($email_data)
  {
    Mail::to($email_data->email)->send(new frontMail($email_data));
  }

  public function verify_email()
  {
    $verify_code = $_GET['verify_code'];
    $email = Crypt::decryptString($verify_code);

    User::where('email', $email)->update([
      'verified' => 1
    ]);

    return view('front.email_verified');
  }

  public function saveMemo(Request $request)
  {
    $memo_id = null;

    $completed = null;
    if($request->completed == "true")
    { 
      $completed = 1;
    }

    if($request->id == 0)
    {
      $memo = memo::create([
        'user_id' => Auth::id(),
        'memo' => $request->memo,
        'completed' => $completed
      ]);

      $memo_id = $memo->id;
    }
    else
    {
      memo::where('id', $request->id)->update([
        'memo' => $request->memo,
        'completed' => $completed
      ]);

      $memo_id = $request->id;
    }

    $response = new \stdClass();
    $response->message = "Success";
    $response->error = 0;
    $response->memo_id = $memo_id;
    $response->completed = $completed;

    return response()->json($response);
  }

  public function removeMemo(Request $request)
  {
    memo::where('id', $request->id)->delete();

    $completed_count = memo::where('user_id', Auth::id())->where('completed', 1)->count();

    $response = new \stdClass();
    $response->message = "Success";
    $response->error = 0;
    $response->count = $completed_count;

    return response()->json($response);
  }

  public function updateMemo(Request $request)
  {
    $completed = null;
    if($request->completed == "true")
    { 
      $completed = 1;
    }
    
    memo::where('id', $request->id)->update([
      'completed' => $completed
    ]);

    $completed_count = memo::where('user_id', Auth::id())->where('completed', 1)->count();

    $response = new \stdClass();
    $response->message = "Success";
    $response->error = 0;
    $response->count = $completed_count;

    return response()->json($response);
  }

  public function testing()
  {
    $encrypted = Crypt::encryptString('Hello world.');

    dd(Crypt::decryptString($encrypted), $encrypted);
  }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\address_book;
use App\User;

use Illuminate\Support\Facades\Mail;
use App\Mail\frontMail;
use Illuminate\Support\Facades\Crypt;

class clientController extends Controller
{
  public function addressBook(Request $request)
  {
    $user = Auth::user();
    $page = $request->page;

    if($request->default_shipping == 1)
    {
      address_book::where('user_id', $user->id)->where('default_shipping', 1)->update([
        'default_shipping' => null
      ]);
    }

    if($request->default_billing == 1)
    {
      address_book::where('user_id', $user->id)->where('default_billing', 1)->update([
        'default_billing' => null
      ]);
    }

    if($request->type == 1)
    {
      address_book::create([
        'user_id' => $user->id,
        'name' => $request->name,
        'phone_number' => $request->phone_number,
        'address' => $request->address,
        'state' => $request->state,
        'city' => $request->city,
        'postal_code' => $request->postal_code,
        'default_shipping' => $request->default_shipping,
        'default_billing' => $request->default_billing
      ]);
    }
    elseif($request->type == 2)
    {
      address_book::where('id', $request->address_id)->update([
        'name' => $request->name,
        'phone_number' => $request->phone_number,
        'address' => $request->address,
        'state' => $request->state,
        'city' => $request->city,
        'postal_code' => $request->postal_code,
        'default_shipping' => $request->default_shipping,
        'default_billing' => $request->default_billing
      ]);
    }
    
    if($page == 2)
    {
      return back();
    }
    else
    {
      return redirect(route('getUserProfile', ['tab' => 'address']));
    }
  }

  public function changeDefaultAddress(Request $request)
  {
    $user = Auth::user();

    address_book::where('user_id', $user->id)->update([
      'default_billing' => null,
      'default_shipping' => null
    ]);

    address_book::where('id', $request->default_billing)->update([
      'default_billing' => 1
    ]);

    address_book::where('id', $request->default_shipping)->update([
      'default_shipping' => 1
    ]);

    return back();
  }

  public function verify_now()
  {
    $user = Auth::user();

    $verify_code = Crypt::encryptString($user->email);
    $verify_link = route('verify_email', ['verify_code' => $verify_code]);
    $message = "Click below link to verify your account.";
    $message .= "<a href='".$verify_link."'>".$verify_link."</a>";

    $email_data = new \stdClass();
    $email_data->name = $user->fname." ".$user->lname;
    $email_data->email = $user->email;
    $email_data->type = "register";
    $email_data->subject = "HomeU Registration Verification";
    $email_data->message = $message;

    app('App\Http\Controllers\frontController')->sendMail($email_data);  

    $response = new \stdClass();
    $response->error = 0;
    $response->message = "Success";

    return response()->json($response);
  }

  public function editUserInfo(Request $request)
  {
    $user = Auth::user();

    $date_of_birth = null;
    if($request->date_of_birth)
    {
      $date_of_birth = date('Y-m-d', strtotime($request->date_of_birth));
    }
    
    User::where('id', $user->id)->update([
      'fname' => $request->fname,
      'lname' => $request->lname,
      'email' => $request->email,
      'contact' => $request->contact,
      'date_of_birth' => $date_of_birth
    ]);

    return redirect()->back();
  }
}

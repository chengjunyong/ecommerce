<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\address_book;

class clientController extends Controller
{
  public function addressBook(Request $request)
  {
    $user = Auth::user();

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
    
    return redirect(route('getUserProfile', ['tab' => 'address']));
  }
}

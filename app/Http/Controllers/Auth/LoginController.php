<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Socialite;
use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }

    public function login(Request $request)
    {
      $credentials = $request->only('email', 'password');
      $credentials["type"] = null;

      if (Auth::attempt($credentials)) {
          // Authentication passed...
          $response = new \stdClass;
          $response->message = "Login successful";
          $response->error = 0;

          return response()->json($response);
      }
      else
      {
        $response = new \stdClass;
        $response->message = "Email or password incorrect, please try again.";
        $response->error = 1;

        return response()->json($response);
      }
    }

    public function adminLogin(Request $request)
    {
      $credentials = $request->only('email', 'password');
      $credentials["type"] = 1;

      if (Auth::guard('admin')->attempt($credentials)) {
          // Authentication passed...
          $response = new \stdClass;
          $response->message = "Login successful";
          $response->error = 0;

          return redirect(route('getIndex'));
      }
      else
      {
        return back()->withErrors(['email' => "Email or password incorrect, please try again."]);
      }
    }

    public function adminLogout()
    {
      Auth::guard('admin')->logout();

      return redirect(route('getAdminLogin'));
    }

    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback()
    {
      $google = Socialite::driver('google')->user();

      $user = User::where("client_id",$google->id)->first();

      if($user)
      {
        Auth::login($user);
        return redirect('/');

      }else{

        $email_exist = User::where("email",$google->email)->first();
        if(!$email_exist){
          $result = User::create([
            'lname' => $google->user['family_name'],
            'fname' => $google->user['given_name'],
            'email' => $google->email,
            'verified' => 1,
            'email_verified_at' => now(),
            'password' => $google->token,
            'client_id' => $google->id
          ]);

          Auth::login($result);
          return redirect('/');

        }else{
          return redirect()->route('getFrontIndex')->with('error',100);
        }
      }
    }

    public function facebookLogin()
    {
       return Socialite::driver('facebook')->redirect();
    } 

    public function facebookCallback()
    {
        $facebook = Socialite::driver('facebook')->user();
        $user = User::where("client_id",$facebook->id)->first();
        
        if($user){
          Auth::login($user);
          return redirect('/');

        }else{
          $email_exist = User::where("email",$facebook->email)->first();
          if(!$email_exist){
            $result = User::create([
              'lname' => $facebook->user['name'],
              'email' => $facebook->email,
              'verified' => 1,
              'email_verified_at' => now(),
              'password' => $facebook->token,
              'client_id' => $facebook->id
            ]);
            Auth::login($result);
            return redirect('/');

          }else{
            return redirect()->route('getFrontIndex')->with('error',100);
          }
        }
    }

}

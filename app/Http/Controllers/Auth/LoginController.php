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

    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from Google.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $google = Socialite::driver('google')->user();
        // dd($google);
        $user = User::where("client_id",$google->id)->first();

        if($user)
        {
          // dd(1);
          Auth::login($user);
          return redirect('/');
        }else{
          // dd(2);
          $result = User::create([
                    'lname' => $google->user['family_name'],
                    'fname' => $google->user['given_name'],
                    'email' => $google->email,
                    'email_verified_at' => now(),
                    'password' => $google->token,
                    'client_id' => $google->id
                  ]);
          Auth::login($result);
          return redirect('/');
        }

    }

    public function facebookLogin()
    {
       return Socialite::driver('facebook')->redirect();
    } 

    public function facebookCallback()
    {

    }

}

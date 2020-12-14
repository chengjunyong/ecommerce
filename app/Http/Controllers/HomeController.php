<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return redirect(route('getFrontIndex'));
    }

    public function testing()
    {
      $now = now();
      $now_hours = intval(date('H', strtotime($now)));

      if($now_hours < 9 || $now_hours > 18)
      {
        $time = date('Y-m-d 12:00:00',strtotime('+1 day',strtotime($now)));
      }
      else
      {
        $time = date('Y-m-d H:i:s',strtotime('+3 hours',strtotime($now)));
      }
      
      dd($time);

    }
}

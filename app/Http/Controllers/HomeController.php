<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        return view('user.home');
    }

    public function order(Request $request) {
        $data = Order::where('user_id',\Auth::user()->id)->orderBy('id','desc')->paginate();
        return view('user.order',compact('data'));
    }

    public function addressBook(Request $request) {
        return view('user.address-book');
    }

    public function orderView(Request $request,$id) {
        $data = Order::find($id);
        return view('user.order_view',compact('data'));
    }
}

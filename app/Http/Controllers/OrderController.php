<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
      public function Orders($type='')
    {
      if($type =='pending'){
          $orders=Order::where('retrieved','0')->get();
      }elseif ($type == 'retrieved'){
          $orders=Order::where('retrieved','1')->get();
      }else{
          $orders=Order::all();
      }
      return view('admin.orders',compact('orders'));
    }

    public function toggleRetrieved(Request $request,$orderId)
    {
          $order=Order::find($orderId);
          if($request->has('retrieved')){
              $order->retrieved=$request->retrieved;
          }else{
              $order->retrieved="0";
          }
          $order->save();
          return back();
      }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Address;
use App\Order;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
   public function shipping()
   {
     return view('frontend.borrowerinfo');
   }

   public function receipt()
   {
   //Create the order
       Order::createOrder();
        //redirect user to some page
        // $user=Auth::user();
        $orders = Order::orderBy('id', 'desc')->take(1)->get();
        return view ('frontend.receipt',compact('orders'));
   }


 }

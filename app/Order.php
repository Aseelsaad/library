<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Book;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\User;

class Order extends Model
{
    protected $fillable = ['retrieved'];

    public function orderItems()
    {
      return $this->belongsToMany(Book::class)->withPivot('qty');
    }

    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public static function createOrder()
    {
      $user=Auth::user();
        $order=$user->orders()->create([
            'retrieved'=>0
        ]);
        $cartItems=Cart::content();
        foreach ($cartItems as $cartItem){
            $order->orderItems()->attach($cartItem->id,[
                'qty'=>$cartItem->qty,
            ]);
        }
    }
}

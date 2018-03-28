<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Order;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isAdmin()
    {
      //return the admin users, it will look for admin column in users table
      return $this->admin;
    }

    //define the relationship between address and user
    public function address()
    {
      return $this->hasMany(Address::class);
    }

    //a user may have many orders
    public function orders()
    {
      return $this->hasMany(Order::class);
    }
}

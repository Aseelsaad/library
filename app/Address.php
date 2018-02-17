<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
  protected $fillable = [
      'fname', 'lname', 'phone','address','idnumber'
  ];

}

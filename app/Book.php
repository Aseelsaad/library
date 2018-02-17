<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['name','description','category_id','image','type'];
  public function category()
  {
    return $this->belongsTo('App\Category');
  }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
  protected $fillable = ['name','fname','gname','image','idCard','birth','collegeName','deptName',
'graduationYear','address'];

}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
     protected $table='catagories';
      protected $fillable=['title'];

      public function courses(){
      return $this->hasMany(Course::class,'catagory_id','id');
    }

}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class like extends Model
{
     protected $fillable = [ 'user_id', 'lesson_id' ];
     public function user(){


                      return $this->belongsTo(User::class);
     }


     public function Lession(){
                      return $this->belongsTo(Lession::class);
     }
}

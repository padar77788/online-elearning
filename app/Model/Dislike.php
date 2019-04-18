<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Dislike extends Model
{

    public function user(){
              return $this->belongsTo(User::class);
    }

    public function lesson(){
                return $this->belongsTo(Lession::class);
    }
}

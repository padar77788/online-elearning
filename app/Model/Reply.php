<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{

  protected $table='replys';

  public function comment(){
              return $this->belongsTo(Comment::class);
  }
  public function user(){
              return $this->belongsTo(User::class);
  }
  public function lession(){
              return $this->belongsTo(Lession::class);
  }
}

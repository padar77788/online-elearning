<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

      protected $fillable = [ 'lession_id', 'user_id', 'description' ];

       public function user(){

           return $this->belongsTo(User::class);
       }


       public function lession(){
           return $this->belongsTo(Lession::class);
       }

       public function replies(){
           return $this->hasMany(Reply::class);
       }
}

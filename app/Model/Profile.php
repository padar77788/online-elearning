<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

      protected $fillable = ['user_id','dob', 'mobile','address','univercity','subject'];

      public function user(){
                 return $this->belongsTo(User::class);

      }
}

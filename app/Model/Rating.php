<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
  protected $fillable = [ 'user_id', 'course_id', 'rate', 'message' ];

        public function user(){
            return $this->belongsTo(User::class);
        }

        public function course(){
            return $this->belongsTo(Course::class);
        }
}

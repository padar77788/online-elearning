<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Lession extends Model
{
   protected $fillable = [ 'course_id', 'user_id', 'section_id', 'title', 'discription', 'video_url', 'sourcecode_url', 'view_count', 'like_count' ];


    public function section(){
        return $this->belongsTo(Section::class);
    }

    public function course(){
        return $this->belongsTo(Course::class);
    }
    public function user(){

        return $this->belongsTo(User::class);
    }


    public function like(){
         return $this->hasOne(like::class);
    }
    public function dislike(){
         return $this->hasOne(Dislike::class);
    }

    public function comment(){
         return $this->hasMany(Comment::class);
    }

    public function replys(){
                 return $this->hasMany(Reply::class);
    }
}

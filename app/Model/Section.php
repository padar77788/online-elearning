<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
  protected $fillable = [ 'course_id', 'title' ];

  public function course(){
            return $this->belongsTo(Course::class);
  }


    public function lessions(){
           return $this->hasMany(Lession::class);
    }

}

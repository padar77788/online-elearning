<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
  protected $fillable = [ 'category_id', 'user_id', 'title', 'description', 'image', 'view_count' ];

  public function user()
      {
          return $this->belongsTo(User::class);
      }

      public function catagory(){
                       return $this->belongsTo(Catagory::class);
      }


      public function sections(){

                return $this->hasMany(Section::class);
      }

      public function lessions()
          {
              return $this->hasMany(Lession::class);
          }
      public function ratins(){

          return $this->hasMany(Rating::class);
      }
}

<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable=['first_name','last_name','email','password','role'];
      public function profile(){
                 return $this->hasOne(Profile::class);
      }


      public function courses()
          {
              return $this->hasMany(Course::class);
          }

      public function lessions(){
            return $this->hasMany(Lession::class);
      }



      public function likes(){
               return $this->hasMany(like::class);
      }

      public function dislikes(){
               return $this->hasMany(Dislike::class);
      }
      public function comments(){
            return $this->hasMany(Comment::class,'user_id','id');
      }
      public function rating(){
          return $this->hasOne(Rating::class,'user_id','id');
      }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

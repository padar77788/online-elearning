<?php

namespace App\Http\Controllers\website;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Model\like;
use App\Model\Dislike;
use App\Model\Comment;
use DB;
class LikeController extends Controller
{


      public function like($id){
                         if(Auth::check()){
                           $login_user=Auth::id();
                           $like=new like();
                           $like_user=like::where(['user_id'=>$login_user,'lession_id'=>$id])->first();

                           if(!empty($like_user->user_id)){
                            DB::table('likes')->where('user_id',Auth::id())->delete();
                            toastr()->success('Unliked');
                            return redirect()->back();
                           }
                           else{
                            $like->user_id=$login_user;
                            $like->lession_id=$id;
                            $like->save();
                            toastr()->success('Liked Added');
                            return redirect()->back();
                           }
                         }



      }
      public function dislike($id){
                    if(Auth::check()){
                      $login_user=Auth::id();
                      $dislike_user=Dislike::where(['user_id'=>$login_user,'lession_id'=>$id])->first();
                      if(empty($dislike_user->user_id)){
                          $like=new Dislike();
                          $like->user_id=$login_user;
                          $like->lession_id=$id;
                          $like->save();
                          return redirect()->back();
                       }
                       else{
                        return redirect()->back();
                       }

}}

}

<?php

namespace App\Http\Controllers\website;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Model\Reply;
class ReplyController extends Controller
{


      public function replystore(Request $request){

                                $this->vaidation($request);
                                if(Auth::check()){
                                  $user=Auth::id();
                                  $reply=new Reply();
                                  $reply->user_id=$user;
                                  $reply->text=$request->text;
                                  $reply->lesson_id=$request->lesson_id;
                                  $reply->comment_id=$request->comment_id;
                                  $reply->save();

                                  toastr()->success('Reply Added successfully');
                                  return redirect()->back();
                                }
                                  else{
                                    toastr()->success('Please login then comment !!! ');
                                    return redirect()->back();
                                  }


      }
                public function vaidation($request){
                                    $request->validate([
                                        'text'=>'required'
                                    ]);
                }



}

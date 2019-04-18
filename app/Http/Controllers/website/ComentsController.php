<?php

namespace App\Http\Controllers\website;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Model\Comment;
class ComentsController extends Controller
{


      public function commentstore(Request $request){

                           if(Auth::check()){
                             $user=Auth::id();
                             $comment=new Comment();
                             $comment->user_id=$user;
                             $comment->text=$request->comment;
                             $comment->lession_id=$request->lesson_id;
                             $comment->save();
                             return redirect()->back();
                           }
                           {
                              return redirect()->back()->with('message','please login then comment');
                           }


      }

      public function commentshow(){

      }
}

<?php

namespace App\Http\Controllers\website;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

use App\Model\Comment;
use Brian2694\Toastr\Toastr;
class ComentsController extends Controller
{


      public function commentstore(Request $request){
                            $this->vaidation($request);
                            if(Auth::check()){
                             $user=Auth::id();
                             $comment=new Comment();
                             $comment->user_id=$user;
                             $comment->text=$request->comment;
                             $comment->lession_id=$request->lesson_id;
                             $comment->save();
                             toastr()->success('Comment Added successfully');
                             return redirect()->back();
                           }
                           {
                             toastr()->warning('Please login then comment !!!');
                              return redirect()->back();
                           }


      }

      public function vaidation($request){
        $request->validate([
            'comment'=>'required'
        ]);
      }
}

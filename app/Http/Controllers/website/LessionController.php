<?php

namespace App\Http\Controllers\website;

use Illuminate\Http\Request;
use Illuminate\Contracts\Session\Session;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Model\Lession;
use App\Model\Section;
use App\Model\Course;
use App\Model\Comment;
use App\Model\Reply;
use App\Model\like;
use App\Model\Dislike;
use App\Model\Subscribe;
use App\Model\User;
class LessionController extends Controller
{
      public function index(){
          return view('website.pages.lession');
      }

      public function lession($id){


                          $singleLession=Lession::find($id);
                          $replies=Reply::all();
                          $allLession=Lession::all();
                          $likes=like::where('lession_id',$id);
                          $dislikes=Dislike::where('lession_id',$id);
                          $subscribers=Subscribe::all();
                          $lessonkey='lessionkey'.$singleLession->id;
                          $previous=Lession::where('id','<',$singleLession->id)->max('id');
                          $next=Lession::where('id','>',$singleLession->id)->min('id');
                          $user=User::find(Auth::user());
                          if (!session()->has($lessonkey)) {
                               $singleLession->increment('view_count');
                               session()->put($lessonkey,1);
                          }
                          return view('website.pages.lession',
                          [
                            'singleLession'=>$singleLession,
                            'allLession'=>$allLession,
                            'course'=>$singleLession->course,
                            'sections'=>$singleLession->course->sections,
                            'comments'=>$singleLession->comment,
                            'replies'=>$replies,
                            'likes'=>$likes,
                            'dislikes'=>$dislikes,
                            'subscribers'=>$subscribers,
                            'previous'=>$previous,
                            'next'=>$next
                       ]);

              }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

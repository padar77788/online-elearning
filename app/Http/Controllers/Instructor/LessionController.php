<?php

namespace App\Http\Controllers\Instructor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LessonRequest;
use App\Notifications\LessonNotification;
use Illuminate\Support\Facades\Notification;
use App\Model\User;
use App\Model\Course;
use App\Model\Section;
use App\Model\Lession;
use App\Model\Subscribe;

class LessionController extends Controller
{

    public function index()
    {

      $lessions=Auth::user()->lessions;
      return view('instructor.pages.lession.managelession',[
                       'lessions'=>$lessions,

      ]);
    }


    public function create()
    {

        $courses=Course::all();
        $sections=Section::all();

        return view('instructor.pages.lession.addlession',[
                         'courses'=>$courses,
                         'sections'=>$sections,

        ]);
    }


    public function store(LessonRequest $request)
    {
                    $subscriber=subscribe::all();
                    $lesson=new Lession();
                    $inputData=$request->all();
                    $lesson->title=$request->title;
                    $lesson->course_id=$request->course_id;
                    $lesson->section_id=$request->section_id;
                    $lesson->discription=$request->discription;
                    $lesson->video_url=$request->video_url;
                    $lesson->sourcecode_url=$request->sourcecode_url;
                    $lesson->user_id=Auth::id();
                    $lesson->save();
                  foreach($subscriber as $subscribe){
                    Notification::route('mail',$subscribe->email)
                    ->notify(new LessonNotification($lesson));
                  }
                    session()->flash('message','New lession Added Successfully ');
                    return redirect()->back();

    }


    public function show($id)
    {



    }

    public function edit($id)
    {

                  $courses=Course::all();
                  $sections=Section::all();
                  $lession=Auth::user()->lessions->find($id);
                 return view('instructor.pages.lession.updatelession',
                 [
                   'lession'=>$lession,
                   'courses'=>$courses,
                   'sections'=>$sections
                 ]
               );
    }


    public function update(LessonRequest $request)
    {
                      $id=$request->id;
                      $lession=Auth::user()->lessions->find($id);
                      $inputData=$request->only('title','course_id','section_id','discription','video_url','sourcecode_url');
                      $inputData['user_id']=Auth::id();
                      $lession->update($inputData);
                      session()->flash('message','New lession Updated Successfully ');
                      return redirect()->back();
    }



    public function destroy($id)
    {
                       Auth::user()->lessionsfind($id)->delete();
                       session()->flash('message','Lession Delete Successfully ');
                       return redirect()->route('manage-lession');
    }


}

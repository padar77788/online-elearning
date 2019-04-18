<?php

namespace App\Http\Controllers\Instructor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LessonRequest;
use App\Model\User;
use App\Model\Course;
use App\Model\Section;
use App\Model\Lession;

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

                    $inputData=$request->only('title','course_id','section_id','discription','video_url','sourcecode_url');
                    $inputData['user_id']=Auth::id();
                    Lession::create($inputData);
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

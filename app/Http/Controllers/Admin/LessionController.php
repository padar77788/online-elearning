<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use APP\Htpp\LessonRequest;
use App\Model\User;
use App\Model\Course;
use App\Model\Section;
use App\Model\Lession;

class LessionController extends Controller
{

    public function index()
    {

      $lessions=Lession::orderBy('id','desc')->get();
      return view('admin.pages.lession.managelession',[
                       'lessions'=>$lessions,

      ]);
    }


    public function create()
    {

        $courses=Course::all();
        $sections=Section::all();
        $instructors=User::all();

        return view('admin.pages.lession.addlession',[
                         'courses'=>$courses,
                         'sections'=>$sections,
                         'instructors'=>$instructors
        ]);
    }


    public function store(LessonRequest $request)
    {
                    $this->validation($request);
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
                  $instructors=User::all();
                  $lession=Lession::find($id);
                 return view('admin.pages.lession.updatelession',
                 [
                   'lession'=>$lession,
                   'courses'=>$courses,
                   'instructors'=>$instructors,
                   'sections'=>$sections
                 ]
               );
    }


    public function update(LessonRequest $request)
    {
                      $id=$request->id;
                      $lession=Lession::find($id);
                      $inputData=$request->only('title','course_id','section_id','discription','video_url','sourcecode_url');
                      $inputData['user_id']=Auth::id();
                      $lession->update($inputData);
                      session()->flash('message','New lession Updated Successfully ');
                      return redirect()->back();
    }



    public function destroy($id)
    {
                       Lession::find($id)->delete();
                       session()->flash('message','Lession Delete Successfully ');
                       return redirect()->route('manage-lession');
    }


}

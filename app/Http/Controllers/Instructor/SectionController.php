<?php

namespace App\Http\Controllers\Instructor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\SectionRequest;
use App\Model\Course;
use App\Model\Section;
class SectionController extends Controller
{

    public function index()
    {
          if(Auth::user()->courses){

           $sections=Section::all();
          return view ('instructor.pages.section.managesection',['sections'=>$sections]);

        }else {
            echo "You have no section please add section ";
        }
    }


    public function create()
    {
           $courses=Course::all();
           return view ('instructor.pages.section.addsection',['courses'=>$courses]);
    }


    public function store(SectionRequest $request)
    {

                   Section::create($request->all());
                   return  redirect()->back()->with('message','Section Added Successfully');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        if(Auth::user()->courses){
                 $course=Course::all();
                 $section=Section::find($id);
                 return view ('instructor.pages.section.updatesection',
                           [
                             'course'=>$course,
                             'section'=>$section
                         ]);

    }}


    public function update(SectionRequest $request)
    {
        if(Auth::user()->courses){
          $id=$request->id;
          $section=Section::find($id);
          $section->update($request->all());
          return redirect()->route('manage-section')->with('message','Section Update Successfully');
      }}


    public function destroy($id)
    {
       if(Auth::user()->courses){
                  $section=Section::find($id);
                  $section->delete();
                  session()->flash('message','Section Delete Successfully');
                  return redirect()->route('manage-section');
    }}



}

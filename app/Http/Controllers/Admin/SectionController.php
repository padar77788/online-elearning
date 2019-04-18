<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Course;
use App\Model\Section;
class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $sections=Section::all();
          return view ('admin.pages.section.managesection',['sections'=>$sections]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
           $courses=Course::all();
           return view ('admin.pages.section.addsection',['courses'=>$courses]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                   $this->validation($request);
                   Section::create($request->all());
                   return \redirect()->back()->with('message','Section Added Successfully');
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
                 $course=Course::all();
                 $section=Section::find($id);
                 return view ('admin.pages.section.updatesection',
                           [
                             'course'=>$course,
                             'section'=>$section
                         ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
          $id=$request->id;
          $section=Section::find($id);
          $section->update($request->all());
          return redirect()->route('manage-section')->with('message','Section Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      
                  $section=Section::find($id);
                  $section->delete();
                  session()->flash('message','Section Delete Successfully');
                  return redirect()->route('manage-section');
    }

    public function validation($request){
                      $this->attributes();
                     $request->validate([
                           'title'=>'required',
                           'course_id'=>'required'
                     ]);
    }

    public function attributes()
              {
                  return [
                      'course_id' => 'course',
                  ];
              }
}

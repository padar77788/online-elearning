<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CourseRequest;
use App\Model\Catagory;
use App\Model\User;
use App\Model\Course;
use Image;
use File;

class CourseController extends Controller
{


    public function index()
    {
         $catagories=Catagory::all();
         $instructors=User::all();
         $courses=Course::orderBy('id','desc')->get();
         return view('admin.pages.course.managecourse',['courses'=>$courses]);

    }


    public function create()
    {
        $catagories=Catagory::all();
        $instructors=User::all();
        return view('admin.pages.course.addcourse',
                      ['catagories'=>$catagories]

                    );
    }



    public function store(CourseRequest $request)
    {


                 $url=$this->uploadimage($request);
                 $course=new Course();
                 $course->title=$request->title;
                 $course->discription=$request->discription;
                 $course->catagory_id=$request->catagory_id;
                 $course->user_id=Auth::id();
                 $course->image=$url;
                 $course->save();

                 return redirect()->back()->with('message','Course Added Successfully ');



    }


    public function show($id)
    {

    }

    public function edit($id)
    {
              $course=Course::find($id);
              $catagories=Catagory::all();
              $instructors=User::all();
              return view('admin.pages.course.updatecourse',
                               [
                                 'course'=>$course,
                                 'catagories'=>$catagories,
                                 'instructors'=>$instructors
                               ]);
    }


    public function update(Request $request)
    {
           $this->validation($request);

           $url=$this->uploadimage($request);
           $id=$request->id;
           $course=Course::find($id);
           $course->title=$request->title;
           $course->discription=$request->discription;
           $course->user_id=$request->instructor;
           $course->catagory_id=$request->catagory;
           if(File::exists('userimage/',$course->image)){
                File::delete('userimage/',$course->image);
           }
           if(isset($request->image)){
             $url=$this->uploadimage($request);
         }
           else{
               $url=$profile->image;
           }
           $course->image=$url;
           $course->update();
           return \redirect()->route('manage-course')->with('message','Course Updated Successfully');




    }

  
    public function destroy($id)
    {
                 Course::find($id)->delete();
                 return redirect()->route('manage-course')->with('message','Course Delete Successfully');

    }



    public function uploadimage($request){
                        $image=$request->file('image');
                        $image_name=time().'.'.$image->getClientOriginalExtension();
                        $destinationPath='userimage/';
                        $url=$destinationPath.$image_name;
                        $img = Image::make($image->getRealPath());
                        $img->save($destinationPath.'/'.$image_name);
                        return  $url;
    }
}

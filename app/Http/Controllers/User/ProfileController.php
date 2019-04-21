<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Model\User;
use App\Model\Profile;
use Image;
use File;
use Brian2694\Toastr\Toastr;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                       $user_id=Auth::id();
                       $user_data=User::find($user_id);
                       $profile_data=User::find($user_id)->profile;
                       return view ('website.pages.profile',
                       ['profile_data'=>$profile_data],
                       ['user_data'=>$user_data]
                     );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
                      $user_id=Auth::id();
                      $user_data=User::find($user_id);
                      $profile_data=User::find($user_id)->profile;
                      return view ('website.pages.updateprofile',
                      ['profile_data'=>$profile_data],
                      ['user_data'=>$user_data]
    );
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

              $this->validation($request);

              $user_id=Auth::id();
              $user_data=User::find($user_id);
              $user_data->update($request->all());
              $profile=Profile::find( $user_data->id );

              if(File::exists('userimage/',$profile->image)){
                   File::delete('userimage/',$profile->image);
              }
              if(isset($request->image)){
                $image_name=$this->uploadimage($request);
            }
              else{
                  $image_name=$profile->image;
              }
              $profile->dob=$request->dob;
              $profile->image=$image_name;
              $profile->mobile=$request->mobile;
              $profile->address=$request->address;
              $profile->univercity=$request->univercity;
              $profile->subject=$request->subject;

              $profile->save();

           \toastr()->success('Your profile update successfully','success');
                return redirect()->route('profile');
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

    public function uploadimage($request){
                          if($request->hasFile('image')){
                            $image=$request->file('image');
                            $image_name=time().'.'.$image->getClientOriginalExtension();
                            $destinationPath='userimage/';
                            $url=$destinationPath.$image_name;
                            $img = Image::make($image->getRealPath());
                            $img->resize(100, 100);
                            $img->save($destinationPath.'/'.$image_name);
                            return $url;
                          }


}

 public function validation($request){

                            $request->validate([
                                     'first_name'=>'required|min:3',
                                     'last_name'=>'required|min:3',
                                     'univercity'=>'required',

                           ]);


}
}

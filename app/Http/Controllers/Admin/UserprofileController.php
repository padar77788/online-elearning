<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Catagory;
use App\Model\User;
class UserprofileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                      $users=User::all();
                      return view ('admin.pages.users.manageusers',
                      ['users'=>$users]
    );
    }


    public function userapproved($id){
                      $userapproved=User::find($id);
                      $userapproved->is_approved=1;
                      $userapproved->save();
                      session()->flash('message','User Approved Successfully');
                      return redirect()->back();

    }

    public function userunapproved($id){
                      $userunapproved=User::find($id);
                      $userunapproved->is_approved=0;
                      $userunapproved->save();
                      session()->flash('message','User Unapproved Successfully');
                      return redirect()->back();


    }

    public function userdestroy($id)
    {
                     User::find($id)->delete();
                     session()->flash('message','User Delete Successfully');
                     return  redirect()->back();

    }
}

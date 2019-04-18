<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PasswordRequest;

use App\Model\User;
class PasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

          return view('website.pages.passwordchange');
    }
    public function update(PasswordRequest $request)
    {
            
            $old_password=$request->old_password;
            $new_password=$request->new_password;
            $hashted_password=Auth::user()->password;
            if(Hash::check($old_password,$hashted_password)){
                 if(!Hash::check($new_password,$hashted_password)){
                        $user=User::find(Auth::id());
                        $user->password=Hash::make($new_password);
                        $user->save();
                        session()->flash('Passord Change Successfully ');
                        Auth::logout();
                        return redirect()->back();

                 }
                 else{
                       session()->flash('message','Old password and New password Dont same');
                       return redirect()->back();
                 }
           }
           else{
                      session()->flash('message','Old password and New password Dont Match ');
                      return redirect()->back();
           }


    }




}

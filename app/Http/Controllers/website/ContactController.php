<?php

namespace App\Http\Controllers\website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Model\Contact;
class ContactController extends Controller
{
        public function index(){
              return view('website.pages.contact');
        }


        public function store(Request $request ){
          $request->validate([
            'name'=>'required|min:3',
            'phone'=>'required|min:11',
            'email'=>'requried|email',
            'subject'=>'required',
          ]);
                   $contact=new Contact();
                   $contact->create($request->all());
                   session()->flash('message','Your Message Sent Successfully');
                   return redirect()->back();
        }


        public function validationrule($request){

        }
}

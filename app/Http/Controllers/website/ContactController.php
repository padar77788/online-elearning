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


        public function store(ContactRequest $request ){

                   $contact=new Contact();
                   $contact->create($request->all());
                   toastr()->success('Your message sent successfully');
                   return redirect()->back();
        }


}

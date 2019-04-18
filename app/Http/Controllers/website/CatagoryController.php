<?php

namespace App\Http\Controllers\website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Catagory;

class CatagoryController extends Controller
{


    public function index($id)
    {
           $category=Catagory::find($id);
           $courses=$category->courses;
           return view('website.pages.categoris',['courses'=>$courses]);

    }

}
